@extends('website.layouts.app')
@section('content')
    @include('website.widgets.home.slider')
    @foreach($widgets as $k => $widget)
    @include($widget->fileBlade, ['data' => $widget])
    @endforeach
@stop
@section('scripts')

@stop
