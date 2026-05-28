@extends('layout.master')
@section('content')

@include('components.home.hero')
@include('components.home.categroies')
@include('components.home.stats')
@include('components.home.about-us')
@include('components.home.employement')
{{-- @include('components.home.courses') --}}
@include('components.home.cta')
@include('components.home.partners')
@include('components.home.testimonials')
@include('components.home.team')
@include('components.home.blogs')
@include('components.home.cta2')

@endsection