@extends('layouts.master')
@section('title')Metrica @endsection
@section('css')
<link href="{{URL::asset('assets/plugins/fullcalendar/main.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Helpdesk @endslot
@slot('title') Dashboard @endslot
@endcomponent

<div class="row justify-content-center">
    <div class="col-12">
        <div class="card overflow-hidden">
            <div class="row g-0">
                <div class="col-md-6 col-lg-3 border-b border-e border-bo">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <div class="media">
                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                        <i data-feather="tag" class="align-self-center text-muted icon-sm"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2">
                                        <p class="text-dark mb-1 fw-semibold">New Tickets</p>
                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                                <!--end media-->
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <h4 class="my-1">155</h4>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
                <div class="col-md-6 col-lg-3 border-b border-e border-bo">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <div class="media">
                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                        <i data-feather="package" class="align-self-center text-muted icon-sm"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2">
                                        <p class="text-dark mb-1 fw-semibold">Open Tickets</p>
                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                                <!--end media-->
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <h4 class="my-1">102</h4>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
                <div class="col-md-6 col-lg-3 border-b border-e">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <div class="media">
                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                        <i data-feather="zap" class="align-self-center text-muted icon-sm"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2">
                                        <p class="text-dark mb-1 fw-semibold">On Hold</p>
                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                                <!--end media-->
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <h4 class="my-1">14</h4>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end col-->
                <div class="col-md-6 col-lg-3 ps-lg-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <div class="media">
                                    <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                        <i data-feather="lock" class="align-self-center text-muted icon-sm"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2">
                                        <p class="text-dark mb-1 fw-semibold">Unassigned</p>
                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                    </div>
                                    <!--end media body-->
                                </div>
                                <!--end media-->
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <h4 class="my-1">75</h4>
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
                        <h4 class="card-title">Tickets Status</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="">
                    <div id="Tickets_Status" class="apex-charts"></div>
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
                        <h4 class="card-title">Customer Satisfaction</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="position-absolute bottom-50 start-50 translate-middle mb-n2">
                    <h3 class="mb-0">94.5%</h3>
                    <p class="mb-0 text-uppercase fw-semibold text-muted">Happiness</p>
                </div>
                <div id="ana_device" class="apex-charts mb-2"></div>
                <ul class="list-inline mb-0 text-center">
                    <li class="list-inline-item mb-2 mb-lg-0 fw-semibold">
                        <i class="far fa-grin-stars text-primary font-16 align-middle me-1"></i>Excellent
                    </li>
                    <li class="list-inline-item mb-2 mb-lg-0 fw-semibold">
                        <i class="far fa-smile me-1 mb-lg-0 font-16 align-middle" style="color: #fdb5c8;"></i>Very Good
                    </li>
                    <li class="list-inline-item mb-2 fw-semibold">
                        <i class="far fa-meh text-info me-1 font-16 align-middle"></i>Good
                    </li>
                    <li class="list-inline-item fw-semibold">
                        <i class="far fa-frown  me-1 font-16 align-middle" style="color: #c693ff;"></i>Fair
                    </li>
                </ul>
                <hr class="hr-dashed">
                <div class="media">
                    <span class="thumb-sm justify-content-center d-flex align-items-center bg-soft-warning rounded-circle me-2">MT</span>
                    <div class="media-body align-self-center">
                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available...
                            <a href="#" class="text-primary">Read more</a>
                        </p>
                    </div>
                    <!--end media-body-->
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
            <div class="card-body">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle mb-2">
                            <i data-feather="phone" class="align-self-center text-dark icon-sm"></i>
                        </div>
                        <h4 class="mt-0 text-dark">0m:27s</h4>
                        <h4 class="mt-0 text-truncate font-14 mb-0">Avg.Speed of answer</h4>
                        <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
                    </div>
                    <!--end col-->
                    <div class="col-5 align-self-center">
                        <div class="apexchart-wrapper">
                            <div id="dash_spark_1" class="chart-gutters"></div>
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
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle mb-2">
                            <i data-feather="clock" class="align-self-center text-dark icon-sm"></i>
                        </div>
                        <h4 class="mt-0 text-dark">4m:30s</h4>
                        <h4 class="mt-0 text-truncate font-14 mb-0">Time to Resolved Complaint</h4>
                        <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
                    </div>
                    <!--end col-->
                    <div class="col-5 align-self-center">
                        <div class="apexchart-wrapper">
                            <div id="dash_spark_2" class="chart-gutters"></div>
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
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Support Status</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="align-self-center">
                        <h4 class="mt-0 mb-1 text-dark">1530</h4>
                        <h4 class="mt-0 text-truncate font-14 mb-0">Tickets</h4>
                    </div>
                    <div>
                        <ul class="list-unstyled mb-2">
                            <li class="mb-2">
                                <i class="fas fa-minus text-pink"></i>
                                <span>Open Tickets</span>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-minus text-primary"></i>
                                <span>Resolved Tickets</span>
                            </li>
                            <li>
                                <i class="fas fa-minus text-success"></i>
                                <span>Unresolved Tickets</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    <div class="progress-bar bg-pink" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">5%</div>
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
                <div class="p-3" style="height:375px;" data-simplebar>
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
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Agent Performance</h4>
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
                <div class="table-responsive browser_users">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-top-0">Agent</th>
                                <th class="border-top-0">Total Calls</th>
                                <th class="border-top-0">Calls Answered</th>
                                <th class="border-top-0">Avg.Speed of answer</th>
                                <th class="border-top-0">Adherence %</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media">
                                        <img src="{{URL::asset('assets/images/users/user-1.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">
                                        <div class="media-body align-self-center text-truncate">
                                            <h6 class="mt-0 mb-1 text-dark">Donald Gardner</h6>
                                            <p class="text-muted mb-0">Dummy text of the printing.</p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                </td>
                                <td>38</td>
                                <td>32</td>
                                <td>3:12s</td>
                                <td>80%</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex align-items-center">
                                            <span class="thumb-sm justify-content-center d-flex align-items-center bg-soft-warning rounded-circle me-2">MT</span>
                                        </div>
                                        <div class="media-body align-self-center text-truncate">
                                            <h6 class="mt-0 mb-1 text-dark">Nicholas Smith</h6>
                                            <p class="text-muted mb-0">Dummy text of the printing.</p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                </td>
                                <td>50</td>
                                <td>45</td>
                                <td>2:45s</td>
                                <td>84%</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <div class="media">
                                        <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">
                                        <div class="media-body align-self-center text-truncate">
                                            <h6 class="mt-0 mb-1 text-dark">Paula Anderson</h6>
                                            <p class="text-muted mb-0">Dummy text of the printing.</p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                </td>
                                <td>32</td>
                                <td>24</td>
                                <td>4:15s</td>
                                <td>73%</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->

                            <tr>
                                <td>
                                    <div class="media">
                                        <img src="{{URL::asset('assets/images/users/user-3.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">
                                        <div class="media-body align-self-center text-truncate">
                                            <h6 class="mt-0 mb-1 text-dark">Lucy Peterson</h6>
                                            <p class="text-muted mb-0">Dummy text of the printing.</p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                </td>
                                <td>25</td>
                                <td>21</td>
                                <td>5:42s</td>
                                <td>93%</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex align-items-center">
                                            <span class="thumb-sm justify-content-center d-flex align-items-center bg-soft-primary rounded-circle me-2">MT</span>
                                        </div>
                                        <div class="media-body align-self-center text-truncate">
                                            <h6 class="mt-0 mb-1 text-dark">Joseph Rust</h6>
                                            <p class="text-muted mb-0">Dummy text of the printing.</p>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                </td>
                                <td>50</td>
                                <td>45</td>
                                <td>2:45s</td>
                                <td>84%</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                        </tbody>
                    </table>
                    <!--end table-->
                </div>
                <!--end /div-->
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
<script src="{{URL::asset('assets/pages/helpdesk-index.init.js')}}"></script>
@endsection
