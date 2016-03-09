@extends('layouts.frontend')

@section('content')


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
