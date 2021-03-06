@extends('backend.master')

@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Painel de Controle</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{asset('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h4>Configurações de Categorias</h4>
          <br>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="categorias" class="small-box-footer">Adicionar Categorias<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h4>Configurações do Site</h4>
        </div>
        <br>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="setups" class="small-box-footer">Adicionar Informações<i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h4>Serviços</h4>
          <br>
          <a style="color:ivory;" href="{{url('all-posts')}}"><i class="fa fa-circle-o"></i> Atualizar</a>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="{{url('novo-post')}}" class="small-box-footer"> Adicionar Novo Conteúdo <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h4>Portifolio</h4>
          <br>
          <a style="color:ivory;" href="{{url('all-portifolio')}}"><i class="fa fa-circle-o"></i> Atualizar</a>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="{{url('novo-portifolio')}}" class="small-box-footer">Adicionar Novo Conteúdo <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
</section>
@stop