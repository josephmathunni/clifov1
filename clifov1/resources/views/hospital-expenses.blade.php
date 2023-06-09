@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Expenses @endslot
@endcomponent

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-3">
        <div class="card report-card">
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                    <div class="col">
                        <p class="text-dark mb-1 fw-semibold">Today Expenses</p>
                        <h4 class="my-1">$500 <small class="font-11">Total</small></h4>
                        <p class="mb-0 text-truncate text-muted">Yesterday Expenses <span class="text-success">$800</span></p>
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
                        <p class="text-dark mb-1 fw-semibold">This Week Expenses</p>
                        <h4 class="my-1">$8800 <small class="font-11">Total</small></h4>
                        <p class="mb-0 text-truncate text-muted">Last Week Expenses <span class="text-success">$7200</span></p>
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
                        <p class="text-dark mb-1 fw-semibold">This Month Expenses</p>
                        <h4 class="my-1">$35000 <small class="font-11">Total</small></h4>
                        <p class="mb-0 text-truncate text-muted">Last Month Expenses <span class="text-success">$3300</span></p>
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
                        <p class="text-dark mb-1 fw-semibold">This Year Expenses</p>
                        <h4 class="my-1">$4,50,000 <small class="font-11">Total</small></h4>
                        <p class="mb-0 text-truncate text-muted">Last Year Expenses <span class="text-success">$3,80,500</span></p>
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
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Item</th>
                                <th>Purchase Date</th>
                                <th>Purchase From</th>
                                <th>Amount</th>
                                <th>Paied By</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td>Bunsen Burner</td>
                                <td>20/07/2019</td>
                                <td>RoyalPro</td>
                                <td>$99</td>
                                <td>Card</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>Vortex mixer</td>
                                <td>22/07/2019</td>
                                <td>Frozentree</td>
                                <td>$899</td>
                                <td>Online</td>
                                <td><span class="badge badge-soft-warning">Panding</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>Laboratory Centrifuge</td>
                                <td>28/07/2019</td>
                                <td>RoyalPro</td>
                                <td>$1999</td>
                                <td>Cash</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
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
                        <button class="btn btn-de-secondary btn-sm px-4 ">+ Add New Expense</button>
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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Month</th>
                                <th>All Staff lunch</th>
                                <th>Cleaner Staff Salary</th>
                                <th>Light Bill</th>
                                <th>Total This Month</th>
                                <th>Paied By</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td>01/06/2019 to 31/06/2019</td>
                                <td>$1000</td>
                                <td>$5000</td>
                                <td>$2500</td>
                                <td>$8500</td>
                                <td>Online</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>01/07/2019 to 31/07/2019</td>
                                <td>$900</td>
                                <td>$5000</td>
                                <td>$2800</td>
                                <td>$8700</td>
                                <td>Online</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>01/08/2019 to 31/08/2019</td>
                                <td>$1100</td>
                                <td>$5000</td>
                                <td>$3000</td>
                                <td>$9100</td>
                                <td>Online</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
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
                        <button class="btn btn-de-secondary btn-sm px-4 ">+ Add New Expense</button>
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
