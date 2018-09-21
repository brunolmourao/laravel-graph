@extends('layouts.app')
@section('content')
<form method="post" action="{{action('VerticieController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4}">
              <label for="Nome">Nome :</label>
              <input type="text" class="form-control" name="nome" value = "{{$verticie->nome}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4}">
              <label for="Icone">Icone :</label>
              <input type="text" class="form-control" name="icone" value = "{{$verticie->icone}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4}">
              <label for="Estado">Estado :</label>
              <input type="text" class="form-control" name="estado" value = "{{$verticie->estado}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4}">
              <label for="Tensao">Tensao :</label>
              <input type="text" class="form-control" name="tensao" value = "{{$verticie->tensao}}">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4}">
              <label for="ExibeNome">ExibeNome :</label>
              <input type="text" class="form-control" name="exibenome" value = "{{$verticie->exibenome}}">
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
  </body>
</html>
@endsection