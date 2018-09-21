@extends('layouts.app')
@section('content')
    <div class="container">
    <br />
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Tpo Verticie</th>
        <th>Manobravel</th>
        <th>IconeComTensao</th>
        <th>IconeSemTensao</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($tipoverticies as $tipoverticie)
      <tr>
        <td>{{$tipoverticie['tipoverticie']}}</td>
        <td>{{$tipoverticie['manobravel']}}</td>
        <td>{{$tipoverticie['iconeComTensao']}}</td>
        <td>{{$tipoverticie['iconeSemTensao']}}</td>
  
        <td><a href="{{action('TipoVerticieController@edit', $tipoverticie['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('TipoVerticieController@destroy', $tipoverticie['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Deletar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
    <div>
        <td><a href="\tipoverticie\create" class="btn btn-warning">Criar</a></td>
        <td><a href="\" class="btn btn-primary">Voltar</a></td>
      </div>
  </div>
  @endsection