@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Leaves @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Member Name</th>
                                <th>Post</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Total Day</th>
                                <th>Reason</th>
                                <th>Permission</th>
                                <th class="text-end">Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Donald Gardner</a></td>
                                <td>Doctor</td>
                                <td>8/7/2019</td>
                                <td>9/7/2019</td>
                                <td>2</td>
                                <td>Going to Family Function</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Keith Jacobson</a></td>
                                <td>Security</td>
                                <td>1/7/2019</td>
                                <td>3/7/2019</td>
                                <td>3</td>
                                <td>Going to Family Function</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-9.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Greg Crosby</a></td>
                                <td>Pharmacist</td>
                                <td>24/6/2019</td>
                                <td>24/6/2019</td>
                                <td>1</td>
                                <td>Going to Family Function</td>
                                <td><span class="badge badge-soft-success">Approved</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Fred Godina</a></td>
                                <td>Accountant</td>
                                <td>11/6/2019</td>
                                <td>14/6/2019</td>
                                <td>4</td>
                                <td>Going to Family Function</td>
                                <td><span class="badge badge-soft-danger">Declined</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Peggy Doe</a></td>
                                <td>Nurse</td>
                                <td>10/7/2019</td>
                                <td>12/7/2019</td>
                                <td>3</td>
                                <td>Going to Family Function</td>
                                <td><span class="badge badge-soft-warning">New</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href="hospital-member-profile"><img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Jennifer Doss</a></td>
                                <td>Doctor</td>
                                <td>8/7/2019</td>
                                <td>9/7/2019</td>
                                <td>2</td>
                                <td>Going to Family Function</td>
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
                        <button class="btn btn-de-secondary btn-sm px-4 ">+ Add New Leaves</button>
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
