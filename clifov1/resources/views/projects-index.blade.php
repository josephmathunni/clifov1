@extends('layouts.master')
@section('title')Metrica @endsection
@section('css')
<link href="{{URL::asset('assets/plugins/lightpicker/litepicker.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Projects @endslot
@slot('title') Dashboard @endslot
@endcomponent

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-3">
        <div class="card report-card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <p class="text-dark mb-1 fw-semibold">Projects</p>
                        <h4 class="my-1">77</h4>
                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-checkbox-marked-circle-outline me-1"></i></span>26 Project Complete</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                            <i data-feather="layers" class="align-self-center text-muted icon-sm"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-3">
        <div class="card report-card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <p class="text-dark mb-1 fw-semibold">Tasks</p>
                        <h4 class="my-1">41</h4>
                        <p class="mb-0 text-truncate text-muted"><span class="badge badge-soft-success">Active</span> Weekly Avg.Sessions</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                            <i data-feather="check-square" class="align-self-center text-muted icon-sm"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-3">
        <div class="card report-card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <p class="text-dark mb-1 fw-semibold">Total Hours</p>
                        <h4 class="my-1">801:30</h4>
                        <p class="mb-0 text-truncate text-muted"><span class="text-muted">01:33</span> /
                            <span class="text-muted">9:30</span> Duration</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                            <i data-feather="clock" class="align-self-center text-muted icon-sm"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-3">
        <div class="card report-card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <p class="text-dark mb-1 fw-semibold">Budget</p>
                        <h4 class="my-1">$24100</h4>
                        <p class="mb-0 text-truncate text-muted"><span class="text-dark">$14k</span> Total used budgets</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                            <i data-feather="dollar-sign" class="align-self-center text-muted icon-sm"></i>
                        </div>
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

<div class="row">

    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Overview</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal text-muted"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Purchases</a>
                                <a class="dropdown-item" href="#">Emails</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="text-center">
                    <div id="overview" class="apex-charts"></div>
                    <h6 class="text-primary bg-soft-primary p-3 mb-0">
                        <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                        01 January 2021 to 01 January 2021
                    </h6>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Calendar</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="dash-datepick">
                    <input type="hidden" id="light_datepicker" />
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Tasks Performance</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal text-muted"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Purchases</a>
                                <a class="dropdown-item" href="#">Emails</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="text-center">
                    <div id="task_status" class="apex-charts"></div>
                    <h6 class="text-primary bg-soft-primary p-3 mb-0">
                        <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                        01 January 2021 to 31 June 2021
                    </h6>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#Project1_Tab" role="tab">Project1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold pt-0" data-bs-toggle="tab" href="#Project2_Tab" role="tab">Project2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#Project3_Tab" role="tab">Project3</a>
                    </li>
                </ul>
            </div>
            <!--end card-body-->
            <div class="card-body pt-0">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane" id="Project1_Tab" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media mb-3">
                                    <img src="{{URL::asset('assets/images/small/project-3.jpg')}}" alt="" class="thumb-md rounded-circle">
                                    <div class="media-body align-self-center text-truncate ms-3">
                                        <h4 class="m-0 fw-semibold text-dark font-16">Payment App</h4>
                                        <p class="text-muted mb-0 font-13"><span class="text-dark">Client : </span>Kevin J. Heal</p>
                                    </div>
                                    <!--end media-body-->
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6 text-lg-end  mb-2 mb-lg-0">
                                <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 02 June 2021</span></h6>
                                <h6 class="fw-semibold  mb-0 mt-2">Deadline : <span class="text-muted fw-normal"> 31 Oct 2021</span></h6>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="holder">
                            <ul class="steppedprogress pt-1">
                                <li class="complete"><span>Planing</span></li>
                                <li class="complete"><span>Design</span></li>
                                <li class="complete continuous"><span>Development</span></li>
                                <li class=""><span>Testing</span></li>
                            </ul>
                        </div>
                        <div class="task-box">
                            <div class="task-priority-icon"><i class="fas fa-circle text-success"></i></div>
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-semibold m-0 align-self-center">All Hours : <span class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal"> 2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                            </div>
                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.
                            </p>
                            <p class="text-muted text-end mb-1">34% Complete</p>
                            <div class="progress mb-3" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="img-group">
                                    <a class="user-avatar" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a class="user-avatar ms-n3" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a class="user-avatar ms-n3" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a class="user-avatar ms-n3" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-6.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a href="" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm">
                                        <i class="las la-plus"></i>6
                                    </a>
                                </div>
                                <!--end img-group-->
                                <ul class="list-inline mb-0 align-self-center">
                                    <li class="list-item d-inline-block me-2">
                                        <a class="" href="#">
                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                            <span class="text-muted fw-bold">34/100</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                            <span class="text-muted fw-bold">3</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="ms-2" href="#">
                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end task-box-->
                        <hr class="hr-dashed">
                        <div class="row mt-3">
                            <div class="col-md">
                                <div class="d-flex  mb-2 mb-lg-0">
                                    <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                    <div class="d-block align-self-center ms-2">
                                        <h6 class="m-0">Last Meeting</h6>
                                        <p class="mb-0 text-muted">28 Oct 2021 / 10:30AM - 12:30PM</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-auto">
                                <div class="d-flex">
                                    <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                    <div class="d-block align-self-center ms-2">
                                        <h6 class="m-0">Next Meeting</h6>
                                        <p class="mb-0 text-muted">06 Nov 2021 / 10:30AM - 12:30PM</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end tab-pane-->

                    <div class="tab-pane active" id="Project2_Tab" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media mb-3">
                                    <img src="{{URL::asset('assets/images/small/project-2.jpg')}}" alt="" class="thumb-md rounded-circle">
                                    <div class="media-body align-self-center text-truncate ms-3">

                                        <h4 class="m-0 fw-semibold text-dark font-16">Banking</h4>
                                        <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Hyman M. Cross</p>
                                    </div>
                                    <!--end media-body-->
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6 text-lg-end mb-2 mb-lg-0">
                                <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 15 Nov 2021</span></h6>
                                <h6 class="fw-semibold mb-0 mt-2">Deadline : <span class="text-muted fw-normal"> 28 Fab 2021</span></h6>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="holder">
                            <ul class="steppedprogress pt-1">
                                <li class="complete"><span>Planing</span></li>
                                <li class="complete continuous"><span>Design</span></li>
                                <li class=""><span>Development</span></li>
                                <li class=""><span>Testing</span></li>
                            </ul>
                        </div>
                        <div class="task-box">
                            <div class="task-priority-icon"><i class="fas fa-circle text-success"></i></div>
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-semibold m-0 align-self-center">All Hours : <span class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal"> 2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                            </div>
                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.
                            </p>
                            <p class="text-muted text-end mb-1">15% Complete</p>
                            <div class="progress mb-3" style="height: 4px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="img-group">
                                    <a class="user-avatar" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a class="user-avatar ms-n3" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a class="user-avatar ms-n3" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a class="user-avatar ms-n3" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-6.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a href="" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm">
                                        <i class="las la-plus"></i>4
                                    </a>
                                </div>
                                <!--end img-group-->
                                <ul class="list-inline mb-0 align-self-center">
                                    <li class="list-item d-inline-block me-2">
                                        <a class="" href="#">
                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                            <span class="text-muted fw-bold">15/100</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                            <span class="text-muted fw-bold">3</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="ms-2" href="#">
                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end task-box-->
                        <hr class="hr-dashed">
                        <div class="row mt-3">
                            <div class="col-md">
                                <div class="d-flex mb-2 mb-lg-0">
                                    <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                    <div class="d-block align-self-center ms-2">
                                        <h6 class="m-0">Last Meeting</h6>
                                        <p class="mb-0 text-muted">28 Oct 2021 / 10:30AM - 12:30PM</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-auto">
                                <div class="d-flex">
                                    <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                    <div class="d-block align-self-center ms-2">
                                        <h6 class="m-0">Next Meeting</h6>
                                        <p class="mb-0 text-muted">06 Nov 2021 / 10:30AM - 12:30PM</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end tab-pane-->

                    <div class="tab-pane" id="Project3_Tab" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media mb-3">
                                    <img src="{{URL::asset('assets/images/small/project-1.jpg')}}" alt="" class="thumb-md rounded-circle">
                                    <div class="media-body align-self-center text-truncate ms-3">

                                        <h4 class="m-0 fw-semibold text-dark font-16">Transfer Money</h4>
                                        <p class="text-muted  mb-0 font-13"><span class="text-dark">Client : </span>Kevin J. Heal</p>
                                    </div>
                                    <!--end media-body-->
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-6 text-lg-end  mb-2 mb-lg-0">
                                <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 01 Jan 2021</span></h6>
                                <h6 class="fw-semibold mb-0 mt-2">Deadline : <span class="text-muted fw-normal"> 15 Mar 2021</span></h6>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="holder">
                            <ul class="steppedprogress pt-1">
                                <li class="complete"><span>Planing</span></li>
                                <li class="complete"><span>Design</span></li>
                                <li class="complete"><span>Development</span></li>
                                <li class="complete finish"><span>Testing</span></li>
                            </ul>
                        </div>
                        <div class="task-box">
                            <div class="task-priority-icon"><i class="fas fa-check text-danger"></i></div>
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-semibold m-0 align-self-center">All Hours : <span class="text-muted fw-normal"> 530 / 481:30</span></h6>
                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal"> 2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i class="far fa-fw fa-clock"></i> 2 days left</span></h6>
                            </div>
                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form.
                            </p>
                            <p class="text-muted text-end mb-1">100% Complete</p>
                            <div class="progress mb-3" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="img-group">
                                    <a class="user-avatar" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a class="user-avatar ms-n3" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a class="user-avatar ms-n3" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a class="user-avatar ms-n3" href="#">
                                        <img src="{{URL::asset('assets/images/users/user-6.jpg')}}" alt="user" class="thumb-xs rounded-circle">
                                    </a>
                                    <a href="" class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm">
                                        <i class="las la-plus"></i>2
                                    </a>
                                </div>
                                <!--end img-group-->
                                <ul class="list-inline mb-0 align-self-center">
                                    <li class="list-item d-inline-block me-2">
                                        <a class="" href="#">
                                            <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                            <span class="text-muted fw-bold">100/100</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                            <span class="text-muted fw-bold">3</span>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="ms-2" href="#">
                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                    <li class="list-item d-inline-block">
                                        <a class="" href="#">
                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end task-box-->
                        <hr class="hr-dashed">
                        <div class="row mt-3">
                            <div class="col-md">
                                <div class="d-flex  mb-2 mb-lg-0">
                                    <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                    <div class="d-block align-self-center ms-2">
                                        <h6 class="m-0">Last Meeting</h6>
                                        <p class="mb-0 text-muted">28 Oct 2021 / 10:30AM - 12:30PM</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-auto">
                                <div class="d-flex">
                                    <i data-feather="headphones" class="align-self-center text-secondary icon-sm"></i>
                                    <div class="d-block align-self-center ms-2">
                                        <h6 class="m-0">Next Meeting</h6>
                                        <p class="mb-0 text-muted">06 Nov 2021 / 10:30AM - 12:30PM</p>
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end tab-pane-->
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

</div>
<!--end row-->

<div class="row">

    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">All Projects</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <a href="#" class="text-primary">View All</a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Project Name</th>
                                <th>Client Name</th>
                                <th>Start Date</th>
                                <th>Deadline</th>
                                <th>Status</th>
                                <th>Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Product Devlopment</td>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/user-2.jpg')}}" alt="" class="thumb-sm rounded me-2">
                                    Kevin J. Heal
                                </td>
                                <td>20/3/2021</td>
                                <td>5/5/2021</td>
                                <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                <td>
                                    <small class="float-end ms-2 pt-1 font-10">92%</small>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>New Office Building</td>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/user-3.jpg')}}" alt="" class="thumb-sm rounded me-2">
                                    Frank M. Lyons
                                </td>
                                <td>11/6/2021</td>
                                <td>15/7/2021</td>
                                <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span></td>
                                <td>
                                    <small class="float-end ms-2 pt-1 font-10">0%</small>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar  bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Website &amp; Blog</td>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded me-2">
                                    Hyman M. Cross
                                </td>
                                <td>21/6/2021</td>
                                <td>3/7/2021</td>
                                <td><span class="badge badge-md badge-boxed  badge-soft-warning">Panding</span></td>
                                <td>
                                    <small class="float-end ms-2 pt-1 font-10">0%</small>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar  bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Market Research</td>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="thumb-sm rounded me-2">
                                    Angelo E. Butler
                                </td>
                                <td>30/4/2021</td>
                                <td>1/6/2021</td>
                                <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                <td>
                                    <small class="float-end ms-2 pt-1 font-10">78%</small>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar  bg-success" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Export Marketing</td>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/user-6.jpg')}}" alt="" class="thumb-sm rounded me-2">
                                    Robert C. Golding
                                </td>
                                <td>20/3/2021</td>
                                <td>5/5/2021</td>
                                <td><span class="badge badge-md badge-boxed  badge-soft-success">Active</span></td>
                                <td>
                                    <small class="float-end ms-2 pt-1 font-10">45%</small>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar  bg-success" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Website &amp; Blog</td>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded me-2">
                                    Phillip T. Morse
                                </td>
                                <td>8/4/2021</td>
                                <td>2/6/2021</td>
                                <td><span class="badge badge-md badge-boxed  badge-soft-danger">Complete</span></td>
                                <td>
                                    <small class="float-end ms-2 pt-1 font-10">100%</small>
                                    <div class="progress mt-2" style="height:3px;">
                                        <div class="progress-bar  bg-pink" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <!--end table-responsive-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Activity</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All<i class="las la-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Purchases</a>
                                <a class="dropdown-item" href="#">Emails</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body p-0">
                <div class="p-3" style="height: 420px;" data-simplebar>
                    <div class="activity">
                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <i class="las la-user-clock bg-soft-primary"></i>
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                        updated the status of <a href="">Refund #1234</a> to awaiting customer response
                                    </p>
                                    <small class="text-muted">10 Min ago</small>
                                </div>
                            </div>
                        </div>

                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <i class="mdi mdi-timer-off bg-soft-primary"></i>
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                        was added to the group, group name is <a href="">Overtake</a>
                                    </p>
                                    <small class="text-muted">50 Min ago</small>
                                </div>
                            </div>
                        </div>

                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <img src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="rounded-circle thumb-sm">
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                        opened new showcase <a href="">Mannat #112233</a> with theme market
                                    </p>
                                    <small class="text-muted">10 hours ago</small>
                                </div>
                            </div>
                        </div>

                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                        updated the status of <a href="">Refund #1234</a> to awaiting customer response
                                    </p>
                                    <small class="text-muted">Yesterday</small>
                                </div>
                            </div>
                        </div>
                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <i class="mdi mdi-alert-outline bg-soft-primary"></i>
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                        was added to the group, group name is <a href="">Overtake</a>
                                    </p>
                                    <small class="text-muted">14 Nov 2021</small>
                                </div>
                            </div>
                        </div>
                        <div class="activity-info">
                            <div class="icon-info-activity">
                                <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="rounded-circle thumb-sm">
                            </div>
                            <div class="activity-info-text">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                        opened new showcase <a href="">Mannat #112233</a> with theme market
                                    </p>
                                    <small class="text-muted">15 Nov 2021</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end activity-->
                </div>
                <!--end analytics-dash-activity-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

@endsection
@section('script')
<script src="{{URL::asset('assets/plugins/lightpicker/litepicker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{URL::asset('assets/pages/projects-index.init.js')}}"></script>
@endsection
