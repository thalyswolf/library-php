@extends('template.app')

@section('content')
  <div class="col-md-3">
    @foreach($pessoas as $pessoa)
    <div class="panel panel-info">
      <div class="panel-heading">{{ $pessoa->nome }}</div>
      @foreach($pessoa->telefones as $telefone)
      <div class="panel-body"><p><strong>Telefone: {{ $telefone->ddd }} {{ $telefone->telefone }}</strong></p></div>
      @endforeach
    </div>
    @endforeach
  </div>
@endsection
