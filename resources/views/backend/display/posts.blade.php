@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Todos Posts</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Todos Posts</li>
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
    <div class="col-sm-12">
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th>SN</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Status</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $key=>$post)
          <tr>
            <td>{{++$key}}</td>
            <td>{{$post->titulo}}</td>
            <td>{{$post->descricao}}</td>
            <td>{{$post->categoria}}</td>
            <td>{{$post->status}}</td>
            <td><a href="{{url('editPost')}}/{{$post->contid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
              <a href="{{url('deletarPost')}}/{{$post->contid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>
@stop