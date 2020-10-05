@extends('frontend.layout.frontapp')


<!--Nav Section-->
@include('frontend.sections.nav')

@section('page-content')

    <!--Header Section-->
    @include('frontend.sections.header')

    <!--About Section-->
    @include('frontend.sections.about')

    <!--Services Section-->
    @include('frontend.sections.services')

    <!--Stats Section-->
    @include('frontend.sections.stats')

    <!-- Portfolio Section-->
    @include('frontend.sections.portfolio')

@endsection
