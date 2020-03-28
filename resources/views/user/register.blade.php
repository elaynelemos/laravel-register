@extends('layout.base')

@section('title', 'User Register')
    
@section('content')
  <form action="{{ route('save') }}" method="post">
    {{ csrf_field() }}

    <div class="field">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name"/>
      @if ($errors->has('name'))
        @foreach ($errors->get('name') as $err)
          <strong class="error">{{ $err }}</strong>
        @endforeach
      @endif
    </div>

    <div class="field">
      <label for="email">E-mail:</label>
      <input type="email" name="email" id="email"/>
      @if ($errors->has('email'))
        @foreach ($errors->get('email') as $err)
          <strong class="error">{{ $err }}</strong>
        @endforeach
      @endif
    </div>

    <div class="field">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password"/>
      @if ($errors->has('password'))
        @foreach ($errors->get('password') as $err)
          <strong class="error">{{ $err }}</strong>
        @endforeach
      @endif
    </div>

    <div class="btn">
      <button type="submit">Save</button>
    </div>
  </form>
@endsection