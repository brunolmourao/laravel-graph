@extends('layouts.app')
@section('content')
    <div class="container">
      <form method="post" action="{{url('aresta')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-md-4"></div>
          <label for="Verticie1Drop">Vérticie 1:</label>  
          <select id="category" name="verticie1" class="selectpicker">
          <option value="">Selecione a primeira extremidade da aresta:</option>
          @foreach($verticies as $key => $value)
            <option value="{{$value->nome}}">{{$value->nome}}</option>
          @endforeach
          </select>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
          <label for="Verticie2Drop">Vérticie 2:</label>  
          <select id="category" name="verticie2" class="selectpicker">
          <option value="">Selecione a segunda extremidade da aresta:</option>
          @foreach($verticies as $key => $value)
            <option value="{{$value->nome}}">{{$value->nome}}</option>
          @endforeach
          </select>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Nome">Nome</label>
              <input type="text" class="form-control" name="name">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Tensao">Tensao:</label>
              <input type="text" class="form-control" name="tensao">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="ExibeNome">ExibeNome:</label>
              <input type="text" class="form-control" name="exibenome">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{action('ArestaController@index')}}" class="btn btn-default">Voltar</a>
          </div>
        </div>
      </form>
    </div>
@endsection