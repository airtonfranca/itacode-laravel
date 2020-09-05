<div class="col-sm-12">

  @isset($data)
  <form method="post" action="{{url('updatePost')}}/{{$data->contid}}" enctype="multipart/form-data">
    <input type="hidden" name='contid' value="{{$data->contid}}">
    @else
    <form method="post" action="{{url('addPost')}}" enctype="multipart/form-data">
      @endif
      {{ csrf_field() }}
      <input type="hidden" name="tbl" value="{{encrypt('contents')}}">
      <div class="form-group">
        <label>Título</label>
        <input type="text" name="titulo" @isset($data)value="{{$data->titulo}}" @endisset class="form-control">
      </div>
      <div class="form-group">
        <label>Descrição</label>
        <input name="descricao" class="form-control" @isset($data)value="{{$data->descricao}}" @endisset rows="4">
      </div>
      <div class="form-group">
        <label>Categoria</label>
        <select name="categoria" class="form-control">
          @isset($data)
          <option>{{$data->categoria}}</option>
          @foreach($cats as $cat)
          @if ($cat->titulo != $data->categoria)
          <option>{{$cat->titulo}}</option>
          @endif
          @endforeach
          @else
          @foreach($cats as $cat)
          <option>{{$cat->titulo}}</option>
          @endforeach
          @endisset
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