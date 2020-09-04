@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Adicionar Novo Post</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Adicionar Novo Post</li>
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
      <form method="post" action="{{url('addPost')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('contents')}}">
        <div class="form-group">
          <label>Título</label>
          <input type="text" name="titulo" class="form-control">
        </div>
        <div class="form-group">
          <label>Descrição</label>
          <textarea name="descricao" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
          <label>Categoria</label>
          <select name="categoria" class="form-control">
            @foreach($cats as $cat)
            <option>{{$cat->titulo}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select name="status" class="form-control">
            <option>On</option>
            <option>Off</option>
          </select>
        </div>


        <input type="submit" value="Adicionar Post" class="btn btn-success">
      </form>
      </>
    </div>

</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop