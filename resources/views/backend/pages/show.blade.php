@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Stránka <small>statická stránka bez komentářů</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Domů</a></li>
      <li><a href="{{ route('admin.pages.index') }}">Stránky</a></li>
      <li class="active">Náhled</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-8">
        <!-- Default box -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Náhled</h3>
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

            <h3>{{ $page->title }} <small>vytvořeno/editováno: v {{ $page->created_at }}- ID: {{ $page->id }}</small></h3>

            <p>
              {!! html_entity_decode($page->content) !!}
            </p>


            <a href="#"></a>

          </div><!-- /.box-body -->
          <div class="box-footer">
            {!! Form::open(array('route' => array('news.destroy', $page->id), 'method' => 'delete', 'id' => 'delform')) !!}

            {{-- <button type="submit" id="delete">
              <i class="fa fa-trash-o"></i>
              Delete
            </button>--}}
            {!! Form::close() !!}

            <a href="{{ route('admin.pages.edit', $page->id ) }}" class="btn btn-primary"><i class="fa fa-pencil"></i> Editovat</a>
            <a href="{{ route('admin.pages.index' )}}" class="btn btn-default">Zpět</a>

            <button id="deleteitem" class="btn btn-danger pull-right">
              <i class="fa fa-trash"></i>
              Smazat
            </button>



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
            poslední změna 22.10.2015
          </div><!-- /.box-footer-->
        </div><!-- /.box -->
      </div><!-- /.col-md-4 -->
    </div> <!-- /. row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->


@endsection
