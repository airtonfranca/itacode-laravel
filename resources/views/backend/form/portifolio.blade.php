<div class="col-sm-12">
  @isset($data)
  <form method="post" action="{{url('updatePortifolio')}}/{{$data->pid}}" enctype="multipart/form-data">
    <input type="hidden" name='pid' value="{{$data->pid}}">
    @else
    <form method="post" action="{{url('addPortifolio')}}">
      @endif
      {{ csrf_field() }}
      <input type="hidden" name="tbl" value="{{encrypt('portifolios')}}">
      <div class="form-group">
        <label>Título</label>
        <input type="text" name="titulo" @isset($data)value="{{$data->titulo}}" @endisset class="form-control">
      </div>
      <div class="form-group">
        <label>Descrição</label>
        <input name="descricao" @isset($data)value="{{$data->descricao}}" @endisset class="form-control" rows="4">
      </div>
      <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">

          <option>On</option>
          <option>Off</option>
        </select>
      </div>
      <input type="submit" value="Adicionar Portifolio" class="btn btn-success">
    </form>