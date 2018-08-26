@extends('layouts.master')

@section('title')
  Welcome
@endsection

@section('content')
  @if(count($errors) > 0)
  <div class="row">
    <div class="col-md-6">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
  @endif
  <div class="row">
    <div class="col-md-6">
      <h3>Sign Up</h3>
      <form class="" action="{{ route('signup') }}" method="post">
        <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
          <label for="email">Your e-mail</label>
          <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
        </div>
        <div class="form-group">
          <label for="first_name">First name</label>
          <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
        </div>
        <div class="form-group">
          <label for="password">Your password</label>
          <input class="form-control" type="text" name="password" id="password" value="{{ Request::old('password') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>
    <div class="col-md-6">
      <h3>Sign in</h3>
      <form class="" action="{{ route('signin') }}" method="post">
        <div class="form-group">
          <label for="email">Your e-mail</label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="password">Your password</label>
          <input class="form-control" type="text" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>
  </div>
@endsection
