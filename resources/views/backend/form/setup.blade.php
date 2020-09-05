<div class="col-sm-6">
  <form method="post" action="{{url('addConfg')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="tbl" value="{{encrypt('setups')}}">
    <div class="form-group">
      <label>Título do Site</label>
      <input type="text" name="meta_titulo" @isset($data)value="{{$data->meta_titulo}}" @endif class="form-control">
    </div>
    <div class="form-group">
      <label>Cidade/Estado</label>
      <input type="text" name="endereco" @isset($data)value="{{$data->endereco}}" @endif class="form-control">
    </div>
    <div class="form-group">
      <label>Telefone</label>
      <input type="text" name="contato" @isset($data)value="{{$data->contato}}" @endif class="form-control">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" @isset($data)value="{{$data->email}}" @endif class="form-control">
    </div>
    <input type="submit" value="Salvar" class="btn btn-success">
  </form>
  </>
</div>