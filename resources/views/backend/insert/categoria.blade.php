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
      <div class="alert alert-info">
        {{ session::get('message') }}
        <a class="close" data-dismiss="alert">x</a>
      </div>
    </div>
    @endif

    @include('backend.form.categoria')

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