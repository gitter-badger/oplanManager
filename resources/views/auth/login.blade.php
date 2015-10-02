<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "Přihlášení" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("twitter/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("adminlte/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("adminlte/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

</head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>ABM</b> OplanManager</a>
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

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ("jquery/jquery-2.1.4.min.js") }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ("twitter/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset ("adminlte/js/app.min.js") }}" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
