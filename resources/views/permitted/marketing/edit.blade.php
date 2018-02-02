@extends('layouts.app')

@section('contentheader_title')
  @if( auth()->user()->can('View blade edit survey') )
    {{ trans('message.edit_survey') }}
  @else
    {{ trans('message.bienvenido') }}
  @endif
@endsection

@section('breadcrumb_ubication')
  @if( auth()->user()->can('View blade edit survey') )
    {{ trans('message.edit_survey') }}
  @else
    {{ trans('message.bienvenido') }}
  @endif
@endsection
