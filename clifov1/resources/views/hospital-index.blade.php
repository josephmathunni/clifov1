@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Dashboard @endslot
@endcomponent

<div class="row">
    <div class="col-12 col-md-4 col-lg-2">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <span class="h4 fw-bold">42</span>
                        <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Appointments</h6>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <i class="lab la-accessible-icon display-3 text-secondary position-absolute o-1 translate-middle"></i>
                    </div>
                    <!--end col-->
                </div> <!-- end row -->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-12 col-md-4 col-lg-2">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <span class="h4 fw-bold">18</span>
                        <h6 class="text-uppercase text-muted mt-2 m-0 font-11">All Patients </h6>
                    </div>
                    <!--end col-->
                    <div class="col-auto position-reletive">
                        <i class="las la-bed display-3 text-secondary position-absolute o-1 translate-middle"></i>
                    </div>
                    <!--end col-->
                </div> <!-- end row -->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-12 col-md-4 col-lg-2">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <span class="h4 fw-bold">12</span>
                        <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Operations</h6>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <i class="las la-cut  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                    </div>
                    <!--end col-->
                </div> <!-- end row -->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-12 col-md-4 col-lg-2">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <span class="h4 fw-bold">14</span>
                        <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Doctors</h6>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <i class="las la-stethoscope  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                    </div>
                    <!--end col-->
                </div> <!-- end row -->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-12 col-md-4 col-lg-2">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <span class="h4 fw-bold">32</span>
                        <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Nurses</h6>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <i class="las la-user-nurse  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                    </div>
                    <!--end col-->
                </div> <!-- end row -->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-12 col-md-4 col-lg-2">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <span class="h4 fw-bold">$41,520</span>
                        <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Earnings</h6>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <i class="las la-hand-holding-usd  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                    </div>
                    <!--end col-->
                </div> <!-- end row -->
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
                        <h4 class="card-title">Hospital Survey</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                This Month<i class="las la-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">This Year</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row position-absolute">
                    <div class="col-12">
                        <div class="media my-2">
                            <i data-feather="phone" class="align-self-center icon-md text-secondary"></i>
                            <div class="media-body align-self-center ms-2">
                                <h6 class="mt-0 mb-1 font-16">76% Deals Successfull <i class="fas fa-check text-success"></i></h6>
                                <p class="text-muted mb-0">This is a simple hero unit, a simple jumbotron-style component.</p>
                            </div>
                            <!--end media body-->
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div>
                    <div id="patients-survey" class="apex-charts mt-3"></div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Covid-19 Patients
                        </h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="apexchart-wrapper">
                    <div id="covid_status" class="apex-charts"></div>
                </div>
                <span class="h4 fw-bold">1,41,520</span>
                <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Total Covid-19 Reports</h6>
                <div class="progress mt-3 rounded">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <ul class="list-unstyled mb-0">
                    <li class="list-item mt-3 fw-semibold d-flex justify-content-between align-items-center">
                        <span>
                            <i class="fas fa-circle font-10 text-primary me-2"></i>Positive
                        </span>
                        <p class="align-self-center mb-0 fw-semibold">24,212</p>
                    </li>
                    <li class="list-item mt-2 fw-semibold d-flex justify-content-between align-items-center">
                        <span>
                            <i class="fas fa-circle font-10 text-info me-2"></i>Negative
                        </span>
                        <p class="align-self-center mb-0 fw-semibold">81,564</p>
                    </li>
                </ul>
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
                        <h4 class="card-title">Today available Doctors</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body dash-info-carousel">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12 align-self-center">
                                    <h6 class="mt-0 text-start">Apollo Hospital</h6>
                                    <div class="media mt-3">
                                        <img src="{{URL::asset('assets/images/users/dr-1.jpg')}}" alt="" height="70" class="rounded-circle">
                                        <div class="media-body align-self-center ms-3">
                                            <h5 class="mt-0 mb-1 font-15">Dr.Helen White</h5>
                                            <p class="text-muted mb-0"><span class="me-2 text-secondary">MS Cardiology</span> 11:00am to 03:00pm</p>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><small class="text-muted">4.91/5 (1021 reviews)</small></li>
                                            </ul>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                    <hr class="hr-dashed">
                                    <div class="p-2 bg-light">
                                        <div class="media">
                                            <h3>68</h3>
                                            <div class="media-body align-self-center ms-3">
                                                <p class="mb-0 font-weight-semibold text-uppercase text-dark-alt">Appointments</p>
                                                <p class="mb-0 text-muted">Last Saturday 52 Appointments</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end carousel-item-->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 align-self-center">
                                    <h6 class="mt-0 text-start">Kaiser Foundation Hospital</h6>
                                    <div class="media mt-3">
                                        <img src="{{URL::asset('assets/images/users/dr-3.jpg')}}" alt="" height="70" class="rounded-circle">
                                        <div class="media-body align-self-center ms-3">
                                            <h5 class="mt-0 mb-1 font-15">Dr.Wendy Keen</h5>
                                            <p class="text-muted mb-0"><span class="me-2 text-secondary">MD Neurology</span> 01:00pm to 04:00pm</p>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><small class="text-muted">4.91/5 (1021 reviews)</small></li>
                                            </ul>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                    <hr class="hr-dashed">
                                    <div class="p-2 bg-light">
                                        <div class="media">
                                            <h3>42</h3>
                                            <div class="media-body align-self-center ms-3">
                                                <p class="mb-0 font-weight-semibold text-uppercase text-dark-alt">Appointments</p>
                                                <p class="mb-0 text-muted">Last Saturday 52 Appointments</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end carousel-item-->
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12 align-self-center">

                                    <h6 class="mt-0 text-start">Florida Hospital</h6>
                                    <div class="media mt-3">
                                        <img src="{{URL::asset('assets/images/users/dr-2.jpg')}}" alt="" height="70" class="rounded-circle">
                                        <div class="media-body align-self-center ms-3">
                                            <h5 class="mt-0 mb-1 font-15">Dr.Lisa King</h5>
                                            <p class="text-muted mb-0"><span class="me-2 text-secondary">MD Orthopedic</span> 09:00am to 11:30am</p>
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><i class="mdi mdi-star-half text-warning font-16"></i></li>
                                                <li class="list-inline-item m-0"><small class="text-muted">4.91/5 (1021 reviews)</small></li>
                                            </ul>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                    <hr class="hr-dashed">
                                    <div class="p-2 bg-light">
                                        <div class="media">
                                            <h3>35</h3>
                                            <div class="media-body align-self-center ms-3">
                                                <p class="mb-0 font-weight-semibold text-uppercase text-dark-alt">Appointments</p>
                                                <p class="mb-0 text-muted">Last Saturday 52 Appointments</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div><!-- end col-->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Patients Reports</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 align-self-center">
                        <div class="text-center">
                            <div class="d-flex justify-content-center align-items-center thumb-lg bg-soft-primary rounded-circle mx-auto mb-2">
                                <i class="las la-procedures align-self-center"></i>
                            </div>
                            <h4 class="mt-0 fw-bold">1200</h4>
                            <h6 class="text-uppercase m-0 mb-2">Admit</h6>
                            <p class="text-muted font-11"><span class="text-success"><i class="mdi mdi-arrow-up"></i>14.5%</span> Up From Last Week</p>
                            <div class="d-grid">
                                <button type="button" class="btn btn-soft-primary btn-sm">More Details</button>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-md-6 align-self-center">
                        <div class="apexchart-wrapper">
                            <div id="patient_dash_report" class="chart-gutters mb-n4"></div>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-md-3 align-self-center">
                        <div class="text-center">
                            <div class="d-flex justify-content-center align-items-center thumb-lg bg-soft-primary rounded-circle mx-auto mb-2">
                                <i class="las la-wheelchair align-self-center"></i>
                            </div>
                            <h4 class="mt-0 fw-bold">351</h4>
                            <h6 class="text-uppercase m-0 mb-2">Discharge</h6>
                            <p class="text-muted font-11"><span class="text-success"><i class="mdi mdi-arrow-up"></i>14.5%</span> Up From Last Week</p>
                            <div class="d-grid">
                                <button type="button" class="btn btn-soft-primary btn-sm">More Details</button>
                            </div>
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
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">New Patients</h4>
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
                    <table id="datatable" class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Patient Name</th>
                                <th>Age</th>
                                <th>ID</th>
                                <th>Address</th>
                                <th>Mobile No</th>
                                <th>Last Visit</th>
                                <th>Diseases</th>
                                <th class="text-right">Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td><a href="hospital-patient-profile"><img src="{{URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Donald Gardner</a></td>
                                <td>36</td>
                                <td>#1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2021</td>
                                <td><span class="badge badge-soft-danger">Cancer</span></td>
                                <td class="text-right">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-patient-profile"><img src="{{URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Keith Jacobson</a></td>
                                <td>48</td>
                                <td>#1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2021</td>
                                <td><span class="badge badge-soft-success">Ulcers</span></td>
                                <td class="text-right">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-patient-profile"><img src="{{URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Greg Crosby</a></td>
                                <td>27</td>
                                <td>#1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2021</td>
                                <td><span class="badge badge-soft-danger">HIV</span></td>
                                <td class="text-right">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-patient-profile"><img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Fred Godina</a></td>
                                <td>22</td>
                                <td>#1236</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>18/07/2021</td>
                                <td><span class="badge badge-soft-success">Virus Fever</span></td>
                                <td class="text-right">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-patient-profile"><img src="{{URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Peggy Doe</a></td>
                                <td>51</td>
                                <td>#7851</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>20/07/2021</td>
                                <td><span class="badge badge-soft-success">heart attack</span></td>
                                <td class="text-right">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-patient-profile"><img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Jennifer Doss</a></td>
                                <td>18</td>
                                <td>#3654</td>
                                <td>B28 University Street US</td>
                                <td>+123456789</td>
                                <td>19/07/2021</td>
                                <td><span class="badge badge-soft-danger">Ebola</span></td>
                                <td class="text-right">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                        </tbody>
                    </table>
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
            <div class="card-body" style="height: 395px;" data-simplebar>
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
                                <small class="text-muted">14 Nov 2019</small>
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
                                <small class="text-muted">15 Nov 2019</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end activity-->
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
<script src="{{URL::asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{URL::asset('assets/pages/hospital-index.init.js')}}"></script>
@endsection
