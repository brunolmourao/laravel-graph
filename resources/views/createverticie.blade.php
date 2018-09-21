@extends('layouts.app')
@section('content')
    <div class="container">
      <form method="post" action="{{url('verticie')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-md-4"></div>
          <label for="TipoVerticieDrop"> Tipo Vérticie:</label>  
          <select id="category" name="tipoVerticie" class="selectpicker">
          <option value="">Selecione o tipo do vérticie:</option>
          @foreach($tipoverticies as $key => $value)
            <option value="{{$value->tipoverticie}}">{{$value->tipoverticie}}</option>
          @endforeach
          </select>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Estado">Estado:</label>
              <input type="text" class="form-control" name="estado">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Icone">Icone:</label>
              <input type="text" class="form-control" name="icone">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Nome">Nome</label>
              <input type="text" class="form-control" name="nome">
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
            <a href="{{action('VerticieController@index')}}" class="btn btn-default">Voltar</a>
          </div>
        </div>
      </form>
    </div>
    @endsection