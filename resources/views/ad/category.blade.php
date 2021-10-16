@extends('layouts.navfooter')

@section('content')
@push('styles')
<link href="{{ url('/css/ad/category.css') }}" type="text/css" rel="stylesheet">
<link href="{{ url('/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

@endpush

@if(session()->has('vehicle'))
@php
Session::forget('vehicle');
@endphp
@endif
@if(session()->has('property'))
@php
Session::forget('property');
@endphp
@endif
<section class="service-categories text-xs-center">
    <div class="container">

        <div class="row justify-content-center">
            <h2 style="text-align: center">Select category</h2> <br>

            <div class="col-md-4">
                <a href="/advertisement/vehicle">
                    <div class="card service-card card-inverse ">
                        <div class="card-block" style="text-align: center">
                            <span class="fa fa-car fa-3x"></span>
                            <h3 class="card-title" style="text-align: center;">Vehicle</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/advertisement/property">
                    <div class="card service-card card-inverse ">
                        <div class="card-block" style="text-align: center">
                            <span class="fa fa-car fa-3x"></span>
                            <h3 class="card-title" style="text-align: center;">Property</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/advertisement/vehicle">
                    <div class="card service-card card-inverse ">
                        <div class="card-block" style="text-align: center">
                            <span class="fa fa-car fa-3x"></span>
                            <h3 class="card-title" style="text-align: center;">Market place</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/advertisement/vehicle">
                    <div class="card service-card card-inverse ">
                        <div class="card-block" style="text-align: center">
                            <span class="fa fa-car fa-3x"></span>
                            <h3 class="card-title" style="text-align: center;">Jobs</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/advertisement/vehicle">
                    <div class="card service-card card-inverse ">
                        <div class="card-block" style="text-align: center">
                            <span class="fa fa-car fa-3x"></span>
                            <h3 class="card-title" style="text-align: center;">Other</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/advertisement/vehicle">
                    <div class="card service-card card-inverse ">
                        <div class="card-block" style="text-align: center">
                            <span class="fa fa-car fa-3x"></span>
                            <h3 class="card-title" style="text-align: center;">Vehicle</h3>
                        </div>
                    </div>
                </a>
            </div>
            {{-- <div class="col-md-4">
                    <a href="#">
                        <div class="card service-card card-inverse">
                            <div class="card-block">
                                <span class="fa fa-question-circle fa-3x"></span>
                                <h4 class="card-title">Education</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="card service-card card-inverse">
                            <div class="card-block">
                                <span class="fa fa-question-circle fa-3x"></span>
                                <h4 class="card-title">Community Development</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="card service-card card-inverse">
                            <div class="card-block">
                                <span class="fa fa-question-circle fa-3x"></span>
                                <h4 class="card-title">All Services</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="card service-card card-inverse">
                            <div class="card-block">
                                <span class="fa fa-question-circle fa-3x"></span>
                                <h4 class="card-title">Community Development</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="card service-card card-inverse">
                            <div class="card-block">
                                <span class="fa fa-question-circle fa-3x"></span>
                                <h4 class="card-title">All Services</h4>
                            </div>
                        </div>
                    </a>
                </div> --}}

        </div>
        <!--End Row-->

    </div>
</section>

@endsection