@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Dr.Profile @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 align-self-center">
                        <div class="media align-items-center">
                            <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-xl">
                            <div class="media-body ms-3 align-self-center">
                                <h5 class="m-0 font-22 fw-bold">Dr.Rosa Dodson</h5>
                                <p class="mb-0 fw-semibold">MBBS, MD Medicine, DNB Cardiology</p>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4 ms-auto">
                        <ul class="list-unstyled personal-detail">
                            <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> : +91 23456 78910</li>
                            <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                        </ul>
                        <div class="button-list btn-social-icon">
                            <button type="button" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-soft-info btn-icon-circle btn-icon-circle-sm">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-soft-pink btn-icon-circle btn-icon-circle-sm ">
                                <i class="fab fa-dribbble"></i>
                            </button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="header-title dual-border mb-0 position-relative">Expertise</h5>
                        <p class="mt-3 mb-0">Coronary intervention, Cardiac Imaging, Cardiac critical care</p>
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <h5 class="header-title dual-border mb-0 position-relative">Language Known</h5>
                        <p class="mt-3 mb-0">English, French, German </p>
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <h5 class="header-title dual-border mb-0 position-relative">Cluster</h5>
                        <p class="mt-3 mb-0">1st Floor E</p>
                    </div>
                    <!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <h5 class="header-title dual-border mb-0 position-relative">OPD Timing</h5>
                        <p class="mt-3 mb-0">
                            <span class="fw-semibold">Morning Timing :</span> 10:00 AM - 01:00 PM
                        </p>
                        <p class="mb-0">
                            <span class="fw-semibold">Evening Timing :</span> 04:00 PM - 07:00 PM
                        </p>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Experience</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <p class="mb-0">
                    It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters, as opposed to
                    using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors.
                </p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Professional Highlights</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <p class="mb-0">
                    It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters, as opposed to
                    using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors.
                </p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body border-bottom">
                <div class="media align-items-center">
                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                        <i class="las la-award align-self-center text-secondary font-24"></i>
                    </div>
                    <div class="media-body ms-3 align-self-center">
                        <h5 class="m-0 font-15">Top National Doctor</h5>
                        <p class="mb-0 text-muted">Since 2010 - New York</p>
                    </div>
                </div>
            </div>
            <!--end card-body-->
            <div class="card-body border-bottom">
                <div class="media align-items-center">
                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                        <i class="las la-trophy align-self-center text-secondary font-24"></i>
                    </div>
                    <div class="media-body ms-3 align-self-center">
                        <h5 class="m-0 font-15">Best Cardiologist in Surat</h5>
                        <p class="mb-0 text-muted">Since 2012 - India</p>
                    </div>
                </div>
            </div>
            <!--end card-body-->
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                        <i class="las la-medal align-self-center text-secondary font-24"></i>
                    </div>
                    <div class="media-body ms-3 align-self-center">
                        <h5 class="m-0 font-15">99.99% Result in Heart ailment</h5>
                        <p class="mb-0 text-muted">Since 2018 - London</p>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->  

@endsection
