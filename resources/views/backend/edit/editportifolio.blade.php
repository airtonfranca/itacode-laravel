@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Editar Post</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Editar Post</li>
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
    <div class="col-sm-12">
      <form method="post" action="{{url('updatePortifolio')}}/{{$data->pid}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('portifolios')}}">
        <input type="hidden" name='pid' value="{{$data->pid}}">
        <div class="form-group">
          <label>Título</label>
          <input type="text" name="titulo" class="form-control" value="{{$data->titulo}}">
        </div>
        <div class="form-group">
          <label>Descrição</label>
          <textarea name="descricao" class="form-control" rows="4" value="{{$data->descricao}}"></textarea>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select name="status" class="form-control">
            <option>{{$data->status}}</option>
            @if($data->status == 'Off')
            <option>On</option>
            @else
            <option>Off</option>
            @endif
          </select>
        </div>
        <input type="submit" value="Atualizar Post" class="btn btn-success">
      </form>
      </>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop