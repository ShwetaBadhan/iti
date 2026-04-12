@extends('layout.master')
@section('content')

@include('components.about-us.breadcrumb')
   @include('components.home.about-us')
   @include('components.home.stats')
   @include('components.about-us.why-choose-us')

@endsection