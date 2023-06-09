@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Helpdesk @endslot
@slot('title') Teckets @endslot
@endcomponent

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <p class="text-dark mb-0 text-uppercase fw-semibold">Tickets Worked</p>
                        <h4 class="my-1">380</h4>
                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> up from Yesterday</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                            <i class="ti ti-tag font-24 align-self-center text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <p class="text-dark mb-0 text-uppercase fw-semibold">Tickets Completed</p>
                        <h4 class="my-1">92</h4>
                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> up from Yesterday</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                            <i class="ti ti-checkbox font-24 align-self-center text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <p class="text-dark mb-0 text-uppercase fw-semibold">Hours Worked</p>
                        <h4 class="my-1">420:30<span class="ms-1 font-12">min</span></h4>
                        <p class="mb-0 text-truncate text-muted"><span class="text-success">00:01:05</span> min time from Yesterday</p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                            <i class="ti ti-clock font-24 align-self-center text-muted"></i>
                        </div>
                    </div>
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
                        <h4 class="card-title">Tickets By Status</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div id="Tickets_Data" class="apex-charts"></div>
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
                        <h4 class="card-title">Tickets By Request Type</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div id="apex_bar1" class="apex-charts"></div>
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
                        <h4 class="card-title">All Tickets</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <button class="btn btn-sm btn-de-primary">Create Ticket</button>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th style="max-width: 95px;">
                                    <input class="form-check-input" type="checkbox" id="checkbox1" value="" aria-label="...">
                                </th>
                                <th>ID</th>
                                <th>Customers</th>
                                <th>Subject</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Respose Time</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" id="checkbox2" value="" aria-label="...">
                                </td>
                                <td>#1236</td>
                                <td><img src="assets/images/users/user-10.jpg" alt="" class="thumb-sm rounded-circle me-2">
                                    Donald Gardner</td>
                                <td>Bug-report simply dummy text of the printing and typesetting</td>
                                <td>Medium</td>
                                <td><span class="badge badge-soft-warning p-2">New</span></td>
                                <td>14 min</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" id="checkbox3" value="" aria-label="...">
                                </td>
                                <td>#3569</td>
                                <td><img src="assets/images/users/user-9.jpg" alt="" class="thumb-sm rounded-circle me-2">
                                    Kevin J. Heal</td>
                                <td>The application continuous is a long established fact that a reader.</td>
                                <td class="text-danger">Critical</td>
                                <td><span class="badge badge-soft-success p-2">Solved</span></td>
                                <td>45 min</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" id="checkbox4" value="" aria-label="...">
                                </td>
                                <td>#9874</td>
                                <td><img src="assets/images/users/user-8.jpg" alt="" class="thumb-sm rounded-circle me-2">
                                    Frank M. Lyons</td>
                                <td>See how it work start are many variations of passages of Lorem Ipsum available.</td>
                                <td>Low</td>
                                <td><span class="badge badge-soft-primary p-2">Open</span></td>
                                <td>1 houur</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" id="checkbox5" value="" aria-label="...">
                                </td>
                                <td>#5412</td>
                                <td><img src="assets/images/users/user-7.jpg" alt="" class="thumb-sm rounded-circle me-2">
                                    Robert C. Golding</td>
                                <td>I can't upload file first line of Ipsum lorem ipsum dolor sit amet.</td>
                                <td>Medium</td>
                                <td><span class="badge badge-soft-warning p-2">New</span></td>
                                <td>2 houur</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" id="checkbox6" value="" aria-label="...">
                                </td>
                                <td>#3258</td>
                                <td><img src="assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle me-2">
                                    Hyman M. Cross</td>
                                <td>How do i upgrade my profile?</td>
                                <td>Low</td>
                                <td><span class="badge badge-soft-success p-2">Solved</span></td>
                                <td>4 houur</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" id="checkbox7" value="" aria-label="...">
                                </td>
                                <td>#6636</td>
                                <td><img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle me-2">
                                    Phillip T. Morse</td>
                                <td>Can i help you in this project?</td>
                                <td class="text-danger">Critical</td>
                                <td><span class="badge badge-soft-primary p-2">Opan</span></td>
                                <td>4 houur</td>
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
<script src="{{URL::asset('assets/pages/helpdesk-tickets.init.js')}}"></script>
@endsection
