@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') CRM @endslot
@slot('title') Leads @endslot
@endcomponent

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="user" class="rounded-circle thumb-md">
                    <div class="media-body ms-2 align-self-center">
                        <h5 class="m-0">Merri Diamond</h5>
                        <p class="mb-0 text-muted">Lead Manager</p>
                    </div>
                    <div class="action-btn">
                        <a href="#" class="me-1"><i class="las la-pen font-16 text-secondary"></i></a>
                        <a href="#" class=""><i class="lar la-trash-alt font-16 text-secondary"></i></a>
                    </div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div><!-- end col-->
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <i data-feather="users" class="align-self-center text-secondary icon-sm"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center text-end">
                                <p class="text-muted mb-1 fw-semibold font-13">Total Leads</p>
                                <h4 class="m-0">1935</h4>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <i data-feather="book-open" class="align-self-center text-secondary icon-sm"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center text-end">
                                <p class="text-muted mb-1 fw-semibold font-13">Open</p>
                                <h4 class="m-0 d-inline-block">1240</h4>
                                <span class="badge bg-soft-success mt-1">Active</span>
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                    <i data-feather="book" class="align-self-center text-secondary icon-sm"></i>
                                </div>
                            </div>
                            <div class="col-8 align-self-center text-end">
                                <p class="text-muted mb-1 fw-semibold font-13">Close</p>
                                <h4 class="m-0">240</h4>
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
                        <h4 class="card-title">All Leads</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
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
                                <td><img src="{{URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Donald Gardner<small class="badge bg-soft-pink ms-1">New</small></td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Starbucks coffee</td>
                                <td>
                                    <span class="badge bg-soft-primary">New Lead</span>
                                </td>
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
                                <td>
                                    <span class="badge bg-soft-primary">Follow Up</span>
                                </td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Michael Hill<small class="badge bg-soft-blue ms-1">New</small></td>
                                <td>xyx@gmail.com</td>
                                <td>+123456789</td>
                                <td>Life Good</td>
                                <td>
                                    <span class="badge bg-soft-success">Converted</span>
                                </td>
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
                                <td>
                                    <span class="badge bg-soft-primary">New Lead</span>
                                </td>
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
                                <td>
                                    <span class="badge bg-soft-danger">Lost</span>
                                </td>
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
                                <td>
                                    <span class="badge bg-soft-primary">New Lead</span>
                                </td>
                                <td>
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
                        <button class="btn btn-outline-light btn-sm px-4 " data-bs-toggle="modal" data-animation="bounce" data-bs-target=".bs-example-modal-lg">+ Add New</button>
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

<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title mt-0" id="myLargeModalLabel">Add New Lead</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label" for="LeadName">Name</label>
                            <input type="text" class="form-control" id="LeadName" required="">
                        </div>
                        <!--end col-->
                        <div class="col-md-6">
                            <label class="form-label mt-2 mt-md-0" for="LeadEmail">Email</label>
                            <input type="email" class="form-control" id="LeadEmail" required="">
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label mt-2" for="PhoneNo">Phone No</label>
                            <input type="text" class="form-control" id="PhoneNo" required="">
                        </div>
                        <!--end col-->

                        <div class="col-md-6">
                            <label for="status-select" class="form-label mt-2">Country</label>
                            <select class="form-select" id="status-select">
                                <option selected="">Select</option>
                                <option value="1">India</option>
                                <option value="2">USA</option>
                                <option value="3">Japan</option>
                                <option value="4">China</option>
                                <option value="5">Germany</option>
                            </select>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <button type="button" class="btn btn-sm btn-primary mt-2">Save</button>
                    <button type="button" class="btn btn-sm btn-danger mt-2">Delete</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection