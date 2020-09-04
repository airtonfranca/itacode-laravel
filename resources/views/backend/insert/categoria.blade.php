@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Configurações do Site</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Categorias</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    @if(Session::has('message'))
    <div class="col-sm-12">
      <div class="alert alert-success">
        {{ session::get('message') }}
        <a class="close" data-dismiss="alert">X</a>
      </div>
    </div>
    @endif
    <div class="col-sm-6">
      <form method="post" action="{{url('addCategoria')}}">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('categorias')}}">
        <div class="form-group">
          <label>Título</label>
          <input type="text" name="titulo" class="form-control">
        </div>
        <div class="form-group">
          <label>Status</label>
          <select name="status" class="form-control">
            <option>On</option>
            <option>Off</option>
          </select>
        </div>
        <input type="submit" value="Adicionar Categoria" class="btn btn-success">
      </form>
    </div>
    <div class="col-sm-6">
      <p><strong>Ver todas categorias</strong></p>
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <td>SN</td>
            <td>Título</td>
            <td>Status</td>
            <td>Ação</td>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $key=>$categoria)
          <tr>
            <td>{{++$key}}</td>
            <td>{{$categoria->titulo}}</td>
            <td>{{$categoria->status}}</td>
            <td><a href="{{url('editarCategoria')}}/{{$categoria->cid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
              <a href="{{url('deletarCategoria')}}/{{$categoria->cid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>
@stop