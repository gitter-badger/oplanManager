@extends('layouts.frontend')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12"><!-- News block -->

         <h3><i class="medium material-icons">explore</i> STRANKA</h3>
            <h5>{{ $page->title}} <small class="text-muted"><span class="small material-icons">account_circle</span> admin | <span class="small material-icons">date_range</span>  {{ $page->created_at}}</small></h5>
            <p>
              {!! html_entity_decode($page->content) !!}
            </p>

    </div>
  </div>
</div>

@endsection
