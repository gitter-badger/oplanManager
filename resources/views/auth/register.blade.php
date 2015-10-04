@extends('layouts.auth')

@section('content')

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="../../index2.html"><b>ABM</b>OplanManager</a>
    </div>
    <div class="register-box-body">
      <p class="login-box-msg">Registrova nového uživatele</p>

      {!! Form::open(array('url' => '/auth/register', 'class' => 'form')) !!}
        @if (count($errors) > 0)
          <div class="alert alert-danger">
            Vyskytel se nějaký problém při registraci:
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="form-group">
          {!! Form::label('name', 'Uživatelské jméno') !!}
          {!! Form::text('name', null, array('class'=>'form-control', 'placeholder'=>'Jméno/řezdívka ...')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Vaše e-mailová adresa') !!}
          {!! Form::text('email', null,
              array(
              'class'=>'form-control',
              'placeholder'=>'E-mail')
              ) !!}
        </div>

        <div class="form-group">
          {!! Form::label('Vaše heslo') !!}
          {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'Heslo')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('Potvrdit heslo') !!}
        {!! Form::password('password_confirmation',array('class'=>'form-control', 'placeholder'=>'heslo znovu')) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Vytvořit účet!',array('class'=>'btn btn-primary')) !!}
        </div>

    {!! Form::close() !!}

      <a href="login.html" class="text-center">Již jsem registrován</a>
    </div><!-- /.form-box -->

@endsection
