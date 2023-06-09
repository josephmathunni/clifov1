@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Allotments List @endslot
@endcomponent

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-3">
        <div class="card report-card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <p class="text-dark mb-1 fw-semibold">General Ward</p>
                        <h4 class="my-1">122/150 <small class="font-11">Total Beds</small></h4>
                        <p class="mb-0 text-truncate text-muted"><i class="las la-money-check-alt font-15"></i> Room Charge 24 hours / <span class="text-success">$80</span></p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                            <i class="las la-bed align-self-center text-muted font-24"></i>
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
                        <p class="text-dark mb-1 fw-semibold">Semi-Special Rooms</p>
                        <h4 class="my-1">12/20 <small class="font-11">Total</small></h4>
                        <p class="mb-0 text-truncate text-muted"><i class="las la-money-check-alt font-15"></i> Room Charge 24 hours / <span class="text-success">$200</span></p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                            <i class="las la-tv  align-self-center text-muted font-24"></i>
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
                        <p class="text-dark mb-1 fw-semibold">Special Rooms</p>
                        <h4 class="my-1">8/15 <small class="font-11">Total</small></h4>
                        <p class="mb-0 text-truncate text-muted"><i class="las la-money-check-alt font-15"></i> Room Charge 24 hours / <span class="text-success">$300</span></p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                            <i class="las la-wheelchair align-self-center text-muted font-24"></i>
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
                        <p class="text-dark mb-1 fw-semibold">ICU Rooms</p>
                        <h4 class="my-1">9/12 <small class="font-11">Total</small></h4>
                        <p class="mb-0 text-truncate text-muted"><i class="las la-money-check-alt font-15"></i> Room Charge 24 hours / <span class="text-success">$500</span></p>
                    </div>
                    <div class="col-auto align-self-center">
                        <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                            <i class="las la-procedures align-self-center text-muted font-24"></i>
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
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Room No</th>
                                <th>Room Type</th>
                                <th>ID</th>
                                <th>Patiant Name</th>
                                <th>Allotment Date</th>
                                <th>Discharge date</th>
                                <th class="text-end">Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td>10</td>
                                <td>Special</td>
                                <td>#3251</td>
                                <td>Donald Gardner</td>
                                <td>18/07/2019</td>
                                <td>24/07/2019</td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>02</td>
                                <td>Semi-Special</td>
                                <td>#6632</td>
                                <td>Keith Jacobson</td>
                                <td>17/07/2019</td>
                                <td>29/07/2019</td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>08</td>
                                <td>General</td>
                                <td>#3214</td>
                                <td>Peggy Doe</td>
                                <td>01/07/2019</td>
                                <td>08/07/2019</td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>13</td>
                                <td>General</td>
                                <td>#1021</td>
                                <td>Jennifer Doss</td>
                                <td>11/07/2019</td>
                                <td>14/07/2019</td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>09</td>
                                <td>ICU</td>
                                <td>#3254</td>
                                <td>Greg Crosby</td>
                                <td>04/07/2019</td>
                                <td>08/07/2019</td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>14</td>
                                <td>Special</td>
                                <td>#2213</td>
                                <td>Fred Godina</td>
                                <td>18/07/2019</td>
                                <td>24/07/2019</td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-de-secondary btn-sm px-4 ">+ New Room Allotment</button>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <nav aria-label="...">
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                            <!--end pagination-->
                        </nav>
                        <!--end nav-->
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

@endsection
