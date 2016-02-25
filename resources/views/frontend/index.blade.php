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
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
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

         <h3><i class="medium material-icons">snooze</i> NOVINKY</h3>
        @foreach($news as $new)
            <h4>{{ $new->title}} <small class="text-muted">autor: Bobik, vytvořeno:  {{ $new->created_at}}</small></h4>
            <p>
              {!! html_entity_decode($new->content) !!}
            </p>
        @endforeach

    </div>
    <div class="col-md-4">

      <div class="card">
        <img class="card-img-top" data-src="..." alt="Card image cap">
        <div class="card-block">
          <h4 class="card-title">JML 14</h4>
          <p class="card-text">Závody Jihomorakvské ligy a Valašské oblasti ....</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Datum: 14.09.2046</li>
          <li class="list-group-item">Místo: Dambořice | link</li>
        </ul>
      </div>


    </div>
  </div>
</div>

@endsection
