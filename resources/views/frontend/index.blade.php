@extends('layouts.frontend')

@section('content')
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">ABM</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
        <li><a href="{{ url('login')}}">Přihlásit</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
        <li><a href="{{ url('login')}}">Přihlásit</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">ABM</h1>
      <div class="row center">
        <h5 class="header col s12 light">Klub orientačního běhu Moira Brno o.s.</h5>
      </div>

    </div>
  </div>


  <div class="container">

    <div class="section">
      <div class="row">
        <div class="col sm12 m8"><!-- News block -->

             <h4><i class="medium material-icons">snooze</i> NOVINKY</h4>
            @foreach($news as $new)
                <h5>{{ $new->title}} <small class="grey-text">autor: Bobik, vytvořeno:  {{ $new->created_at}}</small></h5>
                <p>
                  {!! html_entity_decode($new->content) !!}
                  <div class="divider"></div>
                </p>
            @endforeach


        </div>
      </div>
    </div>


    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <footer class="page-footer blue darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h6 class="white-text">ABM</h6>
          <p class="grey-text text-lighten-4">Klub orientačního běhu Moira Brno o.s.</p>


        </div>
        <div class="col l3 s12">
          <h6 class="white-text">Odkazy</h6>
          <ul>
            <li><a class="white-text" href="#!">Oblast</a></li>
            <li><a class="white-text" href="#!">ORIS</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h6 class="white-text">Kontakt</h6>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Powered by Laravel, by OplanManager, media using<a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
@endsection
