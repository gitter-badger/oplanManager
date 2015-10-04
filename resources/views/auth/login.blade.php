@extends('layouts.auth')

@section('content')

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>ABM</b>OplanManager</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Přihlášení do administrace</p>

        <div class="panel-body">

          {!! Form::open(array('url' => '/auth/login', 'class' => 'form')) !!}
            @if (count($errors) > 0)
              <div class="alert alert-danger">
                Nějaký problém s přihlášením:
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <div class="form-group">
              {!! Form::label('email', 'e-mailová adresa') !!}
              {!! Form::text('email', null,
                array('class'=>'form-control', 'placeholder'=>'priklad@domena.tld')) !!}
            </div>

            <div class="form-group">
              {!! Form::label('heslo') !!}
              {!! Form::password('password',
              array('class'=>'form-control', 'placeholder'=>'heslo')) !!}
            </div>

            <div class="form-group">
              <label>
                {!! Form::checkbox('remember', 'remember') !!} Pamatuj si mě
              </label>
            </div>

            <div class="form-group">
              {!! Form::submit('Login', array('class'=>'btn btn-primary')) !!}
            </div>

            <a href="/password/email">Zapomenuté heslo!</a><br>
            <a href="register.html" class="text-center">Registrovat nového uživatele.</a>

        {!! Form::close() !!}

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

@endsection
