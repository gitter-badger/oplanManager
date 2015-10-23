@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      PŘIDAT NOVÝ KLUB
      <small> umožní pdidat nový klub do systému</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Domů</a></li>
      <li><a href="{{ route('clubs.index') }}">Kluby</a></li>
      <li class="active">Přidat nový klub</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">NOVÝ KLUB</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        {!! Form::open(array('route' => 'clubs.create', 'class' => 'form-horizontal')) !!}

        <p class="lead">ZÁKLADNÍ ÚDAJE</p>
        <div class="form-group">
          {!! Form::label('name', 'Název', array('class' => 'col-sm-2 control-label')) !!}
          <div class="col-sm-10">
          {!! Form::text('name', null,
                   array('required',
                         'class'=>'form-control',
                         'placeholder'=>'Nazev klubu')) !!}
          </div>
        </div>

         <hr>
         <p class="lead">IDENTIFIKÁTORY</p>

        <div class="form-group">
          {!! Form::label('number', 'ORIS ID', array('class' => 'col-sm-2 control-label')) !!}
          <div class="col-sm-10">
          {!! Form::text('number', null,
                   array('required',
                         'class'=>'form-control',
                         'placeholder'=>'platné číslo ORIS ID')) !!}
          </div>
        </div>

        <div class="form-group">
          {!! Form::label('csosmember', 'ČSOS ID', array('class' => 'col-sm-2 control-label')) !!}
          <div class="col-sm-10">
          {!! Form::text('csosmember', null,
                   array('required',
                         'class'=>'form-control',
                         'placeholder'=>'platné číslo ČSOS')) !!}
          </div>
        </div>

        {!! Form::close() !!}



      </div><!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div><!-- /.box-footer-->
    </div><!-- /.box -->

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->


@endsection
