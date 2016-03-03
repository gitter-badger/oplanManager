@extends('layouts.frontend')

@section('content')



<div class="container-fluid">
  <nav class="navbar navbar-fixed-top navbar-dark bg-primary">

    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
      &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
      <a class="navbar-brand" href="#">ABM</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Úvod <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://members.eob.cz/abm/" target="_blank">Člesnká sekce</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          O klubu
          </a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Základní informace</a>
          <a class="dropdown-item" href="#">Naše mapy</a>
          <a class="dropdown-item" href="#">Starší závody</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Akce
          </a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Závody</a>
          <a class="dropdown-item" href="#">Oddílový přebor</a>
          <a class="dropdown-item" href="#">Soustředění</a>
          <a class="dropdown-item" href="#">Tábor</a>
          </div>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{ url('login')}}">Přihlásit se</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8"><!-- News block -->

         <h3><i class="medium material-icons">explore</i> NOVINKY</h3>
        @foreach($news as $new)
            <h5>{{ $new->title}} <small class="text-muted"><span class="small material-icons">account_circle</span> admin | <span class="small material-icons">date_range</span>  {{ $new->created_at}}</small></h5>
            <p>
              {!! html_entity_decode($new->content) !!}
            </p>
        @endforeach

    </div>
    <div class="col-md-4">

      <div class="card">
        <img class="card-img-top img-fluid" src="{{ asset("media/2016/03/jml2016.jpg") }}"  alt="Oreinteering">
        <div class="card-block">
          <h4 class="card-title">JML 14</h4>
          <p class="card-text">14. jihomoravská liga v orientačním běhu<br>
11. závod oblastního žebříčku Valašské</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> 14.09.2046 | Dambořice</li>
          <li class="list-group-item"> Stránky  | ORIS | ...</li>
        </ul>
      </div>


    </div>
  </div>
</div>

@endsection
