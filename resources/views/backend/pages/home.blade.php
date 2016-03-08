@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      STRÁNKA
      <small> - přehled statických stánek</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> DOMU</a></li>
      <li><a href="{{ route('admin.pages.index') }}">STRÁNKA</a></li>
      <li class="active">PŘEHLED</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-8">
        <!-- Default box -->
        <div class="box box-danger">
          <div class="box-header with-border">

            <a href="{{ route('admin.pages.create')}}" class="btn btn-sm btn-primary">PŘIDEJ STRÁNKU</a>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">

            {{-- Flash Session message after store data --}}
            @if(Session::has('flash_message'))
              <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4> <i class="icon fa fa-check"></i> OK!</h4>
                {!! html_entity_decode(Session::get('flash_message')) !!}

              </div>
            @endif


            <table class="table table-condensed table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>TITULEK</th>
                  <th>STAV</th>
                  <th>AUTOR</th>
                  <th>DATUM</th>
                  <th>URL</th>
                  <th style="width: 200px">Akce</th>
                </tr>
              </thead>

              @foreach ($pages as $page)
              <tr class ="comment_div">
                <td>{{ $page->id }}</td>
                <td><a href="{{url('admin/pages')}}/{{$page->id}}/edit">{{ $page->title }}</a></td>
                <td>

                </td>
                <td>
                  {{ Auth::user()->name }}

                </td>
                <td class="text-muted">
                  {{ $page->updated_at->format('d.m.Y | H:i:s') }}
                </td>
                <td>
                /{{ $page->slug }}
                </td>
                <td class ="comment_div">

                  <a href="{{ route('admin.pages.show', $page->id ) }}">Zobraz</a>
                  <a href="{{ route('admin.pages.edit', $page->id ) }}" class="comment_actions"> | Upravit</a>
                </td>
              </tr>

            @endforeach

          </table>

          </div><!-- /.box-body -->
          <div class="box-footer">


<p>
  ddd
</p>

          </div><!-- /.box-footer-->
        </div><!-- /.box -->
      </div><!-- /.col-md-8 -->

      <div class="col-md-4">
        <!-- Default box -->
        <div class="box box-solid box-default">
          <div class="box-header with-border">
            <h3 class="box-title">NÁPOVĚDA</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">

            <h4>K ČEMU SLOUŽÍ:</h4>
            <p>
              Na této stránce vidíš jak se bude novinka zobrazovat. Lze upravovat konkrétní údaje i celý obsah novinky.
            </p>

          </div><!-- /.box-body -->
          <div class="box-footer">
            poslední změna
          </div><!-- /.box-footer-->
        </div><!-- /.box -->
      </div><!-- /.col-md-4 -->
    </div> <!-- /. row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->


@endsection
