@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Configurações do Site</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Configurações do Site</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    @if(Session::has('message'))
    <div class="col-sm-12">
      <div class="alert alert-success">
        {{ session::get('message') }}
        <a class="close" data-dismiss="alert">&time</a>
      </div>
    </div>
    @endif

    @if($data == '')
    <div class="col-sm-6">
      <form method="post" action="{{url('addConfg')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('setups')}}">
        <div class="form-group">
          <label>Título do Site</label>
          <input type="text" name="meta_titulo" class="form-control">
        </div>
        <div class="form-group">
          <label>Cidade/Estado</label>
          <input type="text" name="endereco" class="form-control">
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="text" name="contato" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control">
        </div>
        <input type="submit" value="Salvar" class="btn btn-success">
      </form>
      </>
    </div>
    @else<div class="col-sm-6">
      <form method="post" action="{{url('addConfg')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('setups')}}">
        <div class="form-group">
          <label>Título do Site</label>
          <input type="text" name="meta_titulo" value="{{$data->meta_titulo}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Cidade/Estado</label>
          <input type="text" name="endereco" value="{{$data->endereco}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="text" name="contato" value="{{$data->contato}}" class="form-control">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" value="{{$data->email}}" class="form-control">
        </div>
        <input type="submit" value="Atualizar" class="btn btn-success">
      </form>
      </>
    </div>
    @endif
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
  var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
<style>
  .socialField {
    position: relative;
  }

  .addField {
    position: absolute;
    top: 0;
    right: 0;
  }

  .alert {
    display: none;
  }
</style>
@stop