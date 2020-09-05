<div class="col-sm-6">

  @isset($maindata)
  <form method="post" action="{{url('updateCategoria')}}/{{$maindata->cid}}">
    <input type="hidden" name="cid" value="{{$maindata->cid}}">
    @else
    <form method="post" action="{{url('addCategoria')}}">
      @endif
      {{ csrf_field() }}
      <input type="hidden" name="tbl" value="{{encrypt('categorias')}}">
      <div class="form-group">
        <label>Título</label>
        <input type="text" name="titulo" @isset($maindata)value="{{$maindata->titulo}}" @endisset class="form-control">
      </div>
      <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
          <option>On</option>
          <option>Off</option>
        </select>
      </div>
      <input type="submit" @isset($maindata)value="Atualizar" @else value="Cadastrar" @endisset class="btn btn-success">
    </form>
</div>