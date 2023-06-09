@extends('layouts.master-without-nav')
@section('title')Metrica @endsection
@section('content')
@section('body')
<body id="body" class="auth-page card-bg">
    @endsection

    <!-- Log In page -->
    <div class="container-fluid">
        <div class="row vh-100">
            <div class="col-12">
                <div class="card-body p-0">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-5 col-xl-3 col-lg-4">
                            <div class="card mb-0 border-0 position-relative">
                                <div class="card-body p-0">
                                    <div class="text-center p-3">
                                        <a href="index" class="logo logo-admin">
                                            <img src="{{URL::asset('assets/images/logo-sm.png')}}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold font-18">Oops! Sorry page does not found</h4>
                                        <p class="text-muted  mb-0">Back to dashboard of Metrica.</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="ex-page-content text-center">
                                        <img src="{{URL::asset('assets/images/error.svg')}}" alt="0" class="" height="170">
                                        <h1 class="mt-5 mb-4">500!</h1>
                                        <h5 class="font-16 text-muted mb-5">Somthing went wrong</h5>
                                    </div>
                                    <a class="btn btn-primary w-100" href="index">Back to Dashboard <i class="fas fa-redo ml-1"></i></a>
                                </div>
                                <!--end card-body-->
                                <div class="card-body bg-light-alt text-center position-fixed bottom-0 start-0 end-0">
                                    &copy; <script>
                                        document.write(new Date().getFullYear())

                                    </script> Metrica
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-md-7 col-xl-9 col-lg-8  p-0 vh-100 d-flex justify-content-center auth-bg">
                            <div class="accountbg d-flex align-items-center">
                                <div class="account-title text-center text-white">
                                    <img src="{{URL::asset('assets/images/logo-sm.png')}}" alt="" class="thumb-sm">
                                    <h4 class="mt-3 text-white">Welcome To <span class="text-warning">Metrica</span> </h4>
                                    <h1 class="text-white">Let's Get Started</h1>
                                    <p class="font-18 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod.</p>
                                    <div class="border w-25 mx-auto border-warning"></div>
                                </div>
                            </div>
                            <!--end /div-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    @endsection
