@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Přidat STRÁNKU
      <small> přidává statickou stránku do veřejné části</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Domů</a></li>
      <li><a href="{{ route('admin.pages.index') }}">Stránky</a></li>
      <li class="active">Přidat stránku</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-8">
        <!-- Default box -->
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">ZÁKLADNÍ ÚDAJE</h3>
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
                {{ Session::get('flash_message') }}

              </div>
            @endif

            {{-- @include ('partials.alerts.errors') --}}

            {!! Form::open(array('route' => 'admin.pages.store', 'class' => 'form-horizontal')) !!}

            <div class="form-group">
              {!! Form::label('title', 'Nadpis stránky', array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-10">
              {!! Form::text('title', null,
                            [//'required',
                             'class'=>'form-control',
                             'placeholder'=>'nadpis stránky']) !!}
              </div>
            </div>

            <div class="form-group">
              {!! Form::label('content', 'Obsah stránky', array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-10">
              {!! Form::textarea('content', null,
                            ['required',
                             'class'=>'form-control',
                             'id'=>'CKEditor',
                             //'name'=>'CKEditor',
                             'placeholder'=>'obsah stránky ...']) !!}
              </div>
            </div>

            <hr>
            <p>
              Nepovinné údaje:
            </p>

            <div class="form-group">
              {!! Form::label('category', 'Kategorie', array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-10">
                  {!! Form::select('category', ['1' => 'Pokyny', '2' => 'Oddílový přebor'], null, ['class' => 'form-control']); !!}
              </div>
            </div>
            <div class="form-group">
              {!! Form::label('menu_id', 'Zobraz menu', array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-10">
                  {!! Form::select('menu_id', ['1' => 'Pokyny', '2' => 'neco neco'], null, ['class' => 'form-control']); !!}
              </div>
            </div>




            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                {!! Form::submit('Ulož stránku', ['class' => 'btn btn-primary']) !!}
                <a href="{{route ('admin.pages.index')}}" class="btn btn-default">Zpět</a>
              </div>
            </div>


          {!! Form::close() !!}



          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col-md-8 -->

      <div class="col-md-4">
        <!-- Default box -->
        <div class="box box-solid box-default">
          <div class="box-header with-border">
            <h3 class="box-title">NÁPOVĚDA - Stránka</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <p>
              Stránka je většinou delší útvar na stránce, používej pro statické informace s dlouhodobou platností, jako jsou pokyny, základní informace o klubu , informace o závodech a pod.
            </p>
            <p>
              Vlastnosti stránek:
              <ul>
                <li>na stránku je možné odkazovat v menu</li>
                <li>stránka může být zařazena v kategorii zobrazuje podobný obsah s ostatními stránkami</li>
                <li>u konkrétních stránek se může zobrazovat vlastní dopolňkové menu</li>
              </ul>
            </p>
            <p>
              Pokud do těla stránky kopírujete text z Worldu <strong>použij vždy</strong> ikonu kopírovat z Worldu jinak bude stránka s rozházeným formátováním.
            </p>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col-md-4 -->

    </div> <!-- /. row -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->


@endsection
