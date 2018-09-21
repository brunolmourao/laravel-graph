@extends('layouts.app')
@section('content')
    <div class="container">
    <br />
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Verticie</th>
        <th>Nome</th>
        <th>IdtipoVerticie</th>
        <th>Icone</th>
        <th>Estado</th>
        <th>Tensao</th>
        <th>Exibe nome</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($verticies as $verticie)
      <tr>
        <td>{{$verticie['id']}}</td>
        <td>{{$verticie['nome']}}</td>
        <td>{{$verticie['tipoVerticie_id']}}</td>
        <td>{{$verticie['icone']}}</td>
        <td>{{$verticie['estado']}}</td>
        <td>{{$verticie['tensao']}}</td>
        <td>{{$verticie['exibenome']}}</td>
        
        <td><a href="{{action('VerticieController@edit', $verticie['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('VerticieController@destroy', $verticie['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Deletar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
    <td><a href="\verticie\create" class="btn btn-warning">Criar</a></td>
    <td><a href="\" class="btn btn-primary">Voltar</a></td>
  </div>
  @endsection