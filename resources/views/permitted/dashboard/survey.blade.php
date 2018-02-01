@extends('layouts.app')

@section('contentheader_title')
  @if( auth()->user()->can('View dashboard pral') )
    {{ trans('message.dashboard_survey') }}
  @else
    {{ trans('message.bienvenido') }}
  @endif
@endsection

@section('breadcrumb_ubication')
  @if( auth()->user()->can('View dashboard pral') )
    {{ trans('message.dashboard_survey') }}
  @else
    {{ trans('message.bienvenido') }}
  @endif
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="row row-in">
                <div class="col-lg-3 col-sm-6 row-in-br">
                    <ul class="col-in">
                        <li>
                            <span class="circle circle-md bg-success"><i class="fa fa-android"></i></span>
                        </li>
                        <li class="col-last">
                            <h3 class="counter text-right m-t-15">23</h3>
                        </li>
                        <li class="col-middle">
                            <h4>Device Android</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">100% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                    <ul class="col-in">
                        <li>
                            <span class="circle circle-md bg-silver"><i class="fa fa-apple"></i></span>
                        </li>
                        <li class="col-last">
                            <h3 class="counter text-right m-t-15">76</h3>
                        </li>
                        <li class="col-middle">
                            <h4>Device Apple</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 row-in-br">
                    <ul class="col-in">
                        <li>
                            <span class="circle circle-md bg-inverse"><i class="fa fa-tablet"></i></span>
                        </li>
                        <li class="col-last">
                            <h3 class="counter text-right m-t-15">93</h3>
                        </li>
                        <li class="col-middle">
                            <h4>Device Tablet</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6  b-0">
                    <ul class="col-in">
                        <li>
                            <span class="circle circle-md bg-info"><i class="fa fa-desktop"></i></span>
                        </li>
                        <li class="col-last">
                            <h3 class="counter text-right m-t-15">83</h3>
                        </li>
                        <li class="col-middle">
                            <h4>Device PC o Portatil</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Puntuación Excelente</h3>
            <ul class="list-inline two-part">
                <li><i class="fa fa-smile-o text-success"></i></li>
                <li class="text-right"><span class="counter">350</span></li>
                <li><span class="">100.00%</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Puntuación Bueno</h3>
            <ul class="list-inline two-part">
                <li><i class="fa fa-meh-o text-warning"></i></li>
                <li class="text-right"><span class="counter">350</span></li>
                <li><span class="">99.00%</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Puntuación Malo</h3>
            <ul class="list-inline two-part">
                <li><i class="fa fa-frown-o text-danger"></i></li>
                <li class="text-right"><span class="">350</span></li>
                <li><span class="">99.00%</span></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Puntuación media</h3>
            <ul class="list-inline two-part">
                <li><i class="fa fa-percent text-success"></i></li><h2 style="display: inline-block;">Excelente</h2>
                <li ><span class="">100.00%</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-lg-12 col-sm-12 col-xs-12">
    <div class="white-box">
      <h3 class="box-title"><small class="pull-right m-t-10 text-warning"><i class="fa fa-file"></i> <p style="display: inline-block;">12</p> Encuestas respondidas</small>Historial de puntaciones</h3>
      <div class="stats-row">
          <div class="stat-item">
              <h6>Excelente</h6> <b>80.40%</b></div>
          <div class="stat-item">
              <h6>Bueno</h6> <b>15.40%</b></div>
          <div class="stat-item">
              <h6>Malo</h6> <b>5.50%</b></div>
      </div>
      <div id="historical_ratings" style="width: 100%; min-height: 200px;"></div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
  @if( auth()->user()->can('View dashboard pral') )
  <!--Echart 3-->
  <script src="{{ asset('plugins/bower_components/echarts3/js/echarts-all-3.js')}}"></script>
  <script src="{{ asset('plugins/bower_components/echarts3/js/theme/vintage.js')}}"></script>
  <script src="{{ asset('plugins/bower_components/echarts3/js/theme/dark.js')}}"></script>
    <script src="js/dashboard/survey.js"></script>
  @else
    <!--NO VER-->
  @endif
@endpush
