@extends('layouts.app')
@section('content')
    <div class="container">
    <br />
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Aresta</th>
        <th>Nome</th>
        <th>Verticie1</th>
        <th>Verticie2</th>
        <th>Tensao</th> 
        <th>Exibe nome</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($arestas as $aresta)
      <?php
         $verticie1 = App\Verticie::where('id',$aresta->verticie1_id)->first();
         $verticie2 = App\Verticie::where('id',$aresta->verticie2_id)->first();
      ?>
      <tr>
        <td>{{$aresta['id']}}</td>
        <td>{{$aresta['name']}}</td>
        <td>{{$verticie1['nome']}}</td>
        <td>{{$verticie2['nome']}}</td>
        <td>{{$aresta['tensao']}}</td>  
        <td>{{$aresta['exibenome']}}</td>
        
        <td><a href="{{action('ArestaController@edit', $aresta['id'])}}" class="btn btn-warning">Editar</a></td>
        <td>
          <form action="{{action('ArestaController@destroy', $aresta['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Deletar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
    <td><a href="\aresta\create" class="btn btn-warning">Criar</a></td>
    <td><a href="\" class="btn btn-primary">Voltar</a></td>
  </div>
  @endsection