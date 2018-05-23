@extends('layouts.app')

@section('contentheader_title')
  @if( auth()->user()->can('View blade dashboard pral') )
    {{ trans('message.dashboard') }}
  @else
    {{ trans('message.bienvenido') }}
  @endif
@endsection

@section('breadcrumb_ubication')
  @if( auth()->user()->can('View blade dashboard pral') )
    {{ trans('message.dashboard') }}
  @else
    {{ trans('message.bienvenido') }}
  @endif
@endsection


@section('content')
<div class="row">
    <div id="app" class="col-lg-12 col-sm-12 col-xs-12">
      <info-hotels></info-hotels>        
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Usuarios </br> <small>Registrados</small></h3>
            <ul class="list-inline two-part">
                <li><i class="icon-people text-info"></i></li>
                <li class="text-right"><span class="counter">0</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Usuarios</br> <small>Que vieron las encuestas</small></h3>
            <ul class="list-inline two-part">
                <li><i class="fa fa-eye text-success"></i></li>
                <li class="text-right"><span class="counter">0</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Usuarios </br> <small>Que omitieron las encuestas</small></h3>
            <ul class="list-inline two-part">
                <li><i class="fa fa-eye-slash text-danger"></i></li>
                <li class="text-right"><span class="">0</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">No. Preguntas </br> <small>Si contestadas</small></h3>
            <ul class="list-inline two-part">
                <li><i class="ti-thumb-up text-purple"></i></li>
                <li class="text-right"><span class="counter">0</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">No. Preguntas </br> <small>No contestadas</small></h3>
            <ul class="list-inline two-part">
                <li><i class="ti-thumb-down text-danger"></i></li>
                <li class="text-right"><span class="">0</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-4 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">No. SSID</br> <small>Usadas</small></h3>
            <ul class="list-inline two-part">
                <li><i class="ti-rss-alt text-warning"></i></li>
                <li class="text-center"><span class="">0</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% Encuestas por día</small> Historial</h3>
            <div class="stats-row">
                <div class="stat-item">
                    <h6>Dia Pico</h6> <b>2</b>
                </div>
                <div class="stat-item">
                    <h6>Hora Pico</h6> <b>12:00</b>
                </div>
            </div>
            <div id="historical_daily" style="width: 100%; min-height: 200px;"></div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
  @if( auth()->user()->can('View blade dashboard pral') )
    <!--Echart 3-->
    <script src="{{ asset('plugins/bower_components/echarts3/js/echarts-all-3.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/echarts3/js/theme/vintage.js')}}"></script>
    <script src="{{ asset('plugins/bower_components/echarts3/js/theme/dark.js')}}"></script>

    <script src="js/dashboard/principal.js"></script>
  @else
    <!--NO VER-->
  @endif
@endpush
