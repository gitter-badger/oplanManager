@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Upravit NOVINKU
      <small> uprav stávající novinku</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Domů</a></li>
      <li><a href="{{ route('clubs.index') }}">Novinky</a></li>
      <li class="active">Upravit novinku</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-8">
        <!-- Default box -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Upravit novinku</h3>
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

            @include ('partials.alerts.errors')

            {!! Form::model($new, array('method' => 'put', 'route' => ['news.update', $new->id], 'class' => 'form-horizontal', 'id' => 'myform')) !!}

            <p class="lead">ZÁKLADNÍ ÚDAJE</p>
            <div class="form-group">
              {!! Form::label('title', 'Nadpis', array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-10">
              {!! Form::text('title', null,
                       array(//'required',
                             'class'=>'form-control',
                             'placeholder'=>'nadpis novinky')) !!}
              </div>
            </div>

            <div class="form-group">
              {!! Form::label('content', 'Obsah', array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-10">
              {!! Form::textarea('content', null,
                       array('required',
                             'class'=>'form-control',
                             'id'=>'CKEditor',
                             //'name'=>'CKEditor',
                             'placeholder'=>'obsah novinky ...')) !!}
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    {!! Form::checkbox('private', 1, null) !!} Interní novinka?
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
              {!! Form::submit('Uprav novinku', ['class' => 'btn btn-primary']) !!}

                <a href="{{route ('news.index')}}" class="btn btn-default">Zpět</a>
              </div>
            </div>

          {!! Form::close() !!}




          </div><!-- /.box-body -->
          <div class="box-footer">

            <a class="btn btn-info btn-sm pull-right" href="{{ url('clubs') }}" role="button">ZPĚT</a>
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
              Novinka je krátká zpráva, která má konkrétní časovou platnou, bude odsouvána novými novinkami. Pro noviky je vytvořena RSS/ATOM feed pro snadné odebírání novinek.
            </p>
            <h4>POUŽITÍ:</h4>
            <p>
              Průběžné infomrace na hlavní stránce klubu. Interní noviky pro čelny kluby, které se zobrazí ihned po přihlášení do interní části systému.
            </p>

            <button id="test-1">Basic</button>
    <button id="test-2">Success</button>
    <button id="test-3">Fancy</button>
    <button id="test-4">Error</button>

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
