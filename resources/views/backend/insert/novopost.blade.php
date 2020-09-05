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
        <a class="close" data-dismiss="alert">x</a>
      </div>
    </div>
    @endif

    @include('backend.form.post')

</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop