@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      PŘIDAT NOVÝ KLUB
      <small> přehled klubů zanesených v systému</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Domů</a></li>
      <li><a href="{{ route('kluby.index') }}">Kluby</a></li>
      <li class="active">Přehled klubů</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">SEZNAM</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        Start creating your amazing application!
      </div><!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div><!-- /.box-footer-->
    </div><!-- /.box -->

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->


@endsection
