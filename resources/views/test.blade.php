@extends('layouts.master')

@section('content')
    @include(('includes.slider'))
    @include('includes.search')
    @include('includes.latestProperty')
    @include('includes.agents')
@endsection