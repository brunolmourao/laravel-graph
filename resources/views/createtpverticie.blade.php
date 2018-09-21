@extends('layouts.app')
@section('content')
    <div class="container">
      <form method="post" action="{{url('tpverticie')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="TipoVerticie">Tipo Verticie:</label>
            <input type="text" class="form-control" name="tipoVerticie">
        </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Manobravel">Manobravel:</label>
              <input type="text" class="form-control" name="manobravel">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="IconeComTensao">Ícone com tensão:</label>
              <input type="text" class="form-control" name="iconeComTensao">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="IconeSemTensao">iconeSemTensao</label>
              <input type="text" class="form-control" name="iconeSemTensao">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{action('TipoVerticieController@index')}}" class="btn btn-default">Voltar</a>
          </div>
        </div>
        </form>
      </div>
@endsection