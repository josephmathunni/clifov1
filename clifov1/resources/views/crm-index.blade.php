@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') CRM @endslot
@slot('title') Dashboard @endslot
@endcomponent

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Leads And Vendors</h4>
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
                <div class="row mb-3">
                    <div class="col col-md">
                        <div class="media">
                            <i data-feather="phone" class="align-self-center icon-lg text-secondary"></i>
                            <div class="media-body align-self-center ms-2">
                                <h6 class="mt-0 mb-1 font-16">76% Deals Successfull <i class="fas fa-check text-success"></i></h6>
                                <p class="text-muted mb-0">This is a simple hero unit, a simple jumbotron-style component.</p>
                            </div>
                            <!--end media body-->
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-md-auto">
                        <button type="button" class="btn btn-sm btn-de-secondary px-3 mt-2">More details</button>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div>
                    <div id="crm-dash" class="apex-charts"></div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <span class="h4">60k</span>
                                <h6 class="text-uppercase text-muted mt-2 m-0">Happy Customers</h6>
                            </div>
                            <!--end col-->
                        </div> <!-- end row -->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-body-->
            </div>
            <!--end col-->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <span class="h4">10k</span>
                                <h6 class="text-uppercase text-muted mt-2 m-0">New Customers</h6>
                            </div>
                            <!--end col-->
                        </div> <!-- end row -->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-body-->
            </div>
            <!--end col-->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <span class="h4">720</span>
                                <h6 class="text-uppercase text-muted mt-2 m-0">New Deals</h6>
                            </div>
                            <!--end col-->
                        </div> <!-- end row -->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-body-->
            </div>
            <!--end col-->
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <span class="h4">964</span>
                                <h6 class="text-uppercase text-muted mt-2 m-0">New Register</h6>
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
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Monthly Trends</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-xxl-6">
                        <div id="email_report" class="apex-charts"></div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-6 align-self-center">
                        <ul class="list-unstyled">
                            <li class="list-item mb-2">
                                <i class="fas fa-play text-primary me-2"></i>Sent
                            </li>
                            <li class="list-item mb-2">
                                <i class="fas fa-play text-info me-2"></i>Opened
                            </li>
                            <li class="list-item">
                                <i class="fas fa-play me-2" style="color: #fdb5c8;"></i>Not Opened
                            </li>
                        </ul>
                        <button type="button" class="btn btn-sm btn-de-primary">View Details <i class="mdi mdi-arrow-right"></i></button>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="text-center mt-4">
                    <h6 class="bg-light-alt py-3 px-2 mb-0">
                        <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                        01 January 2021 to 31 December 2021
                    </h6>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end  card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Social Report</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col border-end">
                        <div class="d-flex justify-content-center align-items-center thumb-lg bg-soft-primary rounded-circle mx-auto">
                            <i data-feather="facebook" class="align-self-center"></i>
                        </div>
                        <div class="text-center">
                            <h3 class="text-dark">184k</h3>
                            <h6 class="font-14 text-dark">Followers</h6>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col">
                        <div class="d-flex justify-content-center align-items-center thumb-lg bg-soft-info rounded-circle mx-auto">
                            <i data-feather="twitter" class="align-self-center"></i>
                        </div>
                        <div class="text-center">
                            <h3 class="text-dark">101k</h3>
                            <h6 class="font-14 text-dark">Followers</h6>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-body-->
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
                <div class="p-3" style="height: 425px;" data-simplebar>
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
                <!--end analytics-dash-activity-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Leads Report</h4>
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
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Lead</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Company</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td><img src="{{URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Donald Gardner</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Starbucks coffee</td>
                                <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><img src="{{URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Matt Rosales</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Mac Donald</td>
                                <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Michael Hill</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Life Good</td>
                                <td> <span class="badge badge-md badge-soft-danger">Lost</span></td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><img src="{{URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Nancy Flanary</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Flipcart</td>
                                <td> <span class="badge badge-md badge-soft-purple">New Lead</span></td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><img src="{{URL::asset('assets/images/users/user-6.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Dorothy Key</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Adidas</td>
                                <td> <span class="badge badge-md badge-soft-primary">Follow Up</span></td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><img src="{{URL::asset('assets/images/users/user-5.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Joseph Cross</td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Reebok</td>
                                <td> <span class="badge badge-md badge-soft-success">Converted</span></td>
                                <td>
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
</div>
<!--end row-->

@endsection
@section('script')
<script src="{{URL::asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{URL::asset('assets/pages/crm-index.init.js')}}"></script>
@endsection
