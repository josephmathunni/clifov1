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
@slot('title') Reports @endslot
@endcomponent

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
                <div id="reports_tickets" class="apex-charts"></div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="p-2 bg-light text-center align-item-center">
                    <h1 class="fw-bold my-0">4.8</h1>
                    <h4 class="header-title mb-0">Overall Rating</h4>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                        <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                        <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                        <li class="list-inline-item me-0"><i class="mdi mdi-star text-warning font-18"></i></li>
                        <li class="list-inline-item"><i class="mdi mdi-star-half text-warning font-18"></i></li>
                        <li class="list-inline-item"><small class="text-muted">Total Review (700)</small></li>
                    </ul>
                </div>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2">
                        <span class="text-dark">5 Star</span>
                        <small class="float-end text-muted ms-3 font-14">593</small>
                        <div class="progress mt-2" style="height:5px;">
                            <div class="progress-bar" role="progressbar" style="width: 80%; border-radius:5px;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <span class="text-dark">4 Star</span>
                        <small class="float-end text-muted ms-3 font-14">99</small>
                        <div class="progress mt-2" style="height:5px;">
                            <div class="progress-bar" role="progressbar" style="width: 18%; border-radius:5px;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <span class="text-dark">3 Star</span>
                        <small class="float-end text-muted ms-3 font-14">6</small>
                        <div class="progress mt-2" style="height:5px;">
                            <div class="progress-bar" role="progressbar" style="width: 10%; border-radius:5px;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li class="mb-2">
                        <span class="text-dark">2 Star</span>
                        <small class="float-end text-muted ms-3 font-14">2</small>
                        <div class="progress mt-2" style="height:5px;">
                            <div class="progress-bar" role="progressbar" style="width: 1%; border-radius:5px;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li>
                        <span class="text-dark">1 Star</span>
                        <small class="float-end text-muted ms-3 font-14">0</small>
                        <div class="progress mt-2" style="height:5px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%; border-radius:5px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                </ul>
                <div class="">
                    <h3 class="d-inline-block m-0 font-18">98.5%</h3>
                    <h4 class="header-title d-inline-block me-2 mb-1 mb-lg-0 font-13">Satisfied Customer</h4>
                    <span class="text-end ms-auto d-inline-block"><i class="far fa-smile font-24 text-warning"></i></span>
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
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Agent Performance</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <p class="badge badge-soft-pink font-11 p-1 mb-0">Last updated 15 minutes ago</p>
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
<script src="{{URL::asset('assets/pages/helpdesk-reports.init.js')}}"></script>
@endsection
