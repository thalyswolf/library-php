@extends('template.app')
@section('content')
  <div class="col-md-12">
    <h2>Novo contato</h2>
  </div>
  <div class="col-md-6 well">
    <form class="" action="{{ url('/pessoas/store') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="nome" class="control-label">Nome:
          <input type="text" name="nome" class="form-control">
        </label>
      </div>
      <div class="form-group">
        <label for="ddd" class="control-label">DDD
          <input type="text" name="ddd" class="form-control">
        </label>
      </div>
      <div class="form-group">
        <label for="telefone" class="control-label">Fone
          <input type="text" name="telefone" class="form-control">
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
  </div>
@endsection
