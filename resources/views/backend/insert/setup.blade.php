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

    @include('backend.form.setup')

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