@extends('layouts.app')

@section('contentheader_title')
  @if( auth()->user()->can('View blade create survey') )
    {{ trans('message.create_survey') }}
  @else
    {{ trans('message.bienvenido') }}
  @endif
@endsection

@section('breadcrumb_ubication')
  @if( auth()->user()->can('View blade create survey') )
    {{ trans('message.create_survey') }}
  @else
    {{ trans('message.bienvenido') }}
  @endif
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default block4">
          <div class="panel-heading"> Información
              <div class="pull-right">
                <button class="btn btn-block btn-outline btn-success">Nueva encuesta</button>
              </div>
          </div>
          <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
              </div>
          </div>
      </div>
    </div>
</div>

@endsection

@push('scripts')
  @if( auth()->user()->can('View blade create survey') )
    <!-- <script src="js/dashboard/survey.js"></script> -->
  @else
    <!--NO VER-->
  @endif
@endpush
