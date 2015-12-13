@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      PŘIDAT NOVÝ KLUB
      <small> umožní přidat nový klub do systému</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Domů</a></li>
      <li><a href="{{ route('clubs.index') }}">Kluby</a></li>
      <li class="active">Přidat nový klub</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-8">
        <!-- Default box -->
        <div class="box box-danger">
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

            <div class="form-group">
              {!! Form::label('abbr', 'Zkratka', array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-10">
              {!! Form::text('abbr', null,
                       array('required',
                             'class'=>'form-control',
                             'placeholder'=>'např. ABM, TBM ...')) !!}
              </div>
            </div>

            <div class="form-group">
              {!! Form::label('officialname', 'Oficiální název', array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-10">
              {!! Form::text('officialname', null,
                       array('required',
                             'class'=>'form-control',
                             'placeholder'=>'Nezkrácený název oddílu')) !!}
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label></label>
                    {!! Form::checkbox('default', 1, null) !!} Založit tento oddíl jako výchozí?.
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              {!! Form::label('regionname', 'Region', array('class' => 'col-sm-2 control-label')) !!}
              <div class="col-sm-10">
                {!! Form::select('regionname', [
                  'VY' => 'vysocina',
                  'JI' => 'Jihomoracksy'
                ], null, ['class' => 'form-control']) !!}
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

            <h4>ÚČEL:</h4>
            <p>
              Slouží k vytvoření výchozího klubu, bude použit pro vytváření profilů. Administrátor může vytvořit i jiný klub, který nebude výchozí a následně k němu přiřadit profil závodníka. Vhodné u hostovaných závodníků a pod.
            </p>
            <h4>IDENTIFIKÁTORY:</h4>
            <p>
              Slouží k nezaměnitelné identifikaci klubu v rámci ČR. Možné měnit údaje v ORISu dle identifikátoru.
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
