@extends('layouts.master')
@section('title')Metrica @endsection
@section('css')
<link href="{{URL::asset('assets/plugins/fullcalendar/main.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Hospital @endslot
@slot('title') Appointments @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body mb-n3">
                <button type="button" class="btn btn-de-primary btn-sm px-4 mt-0 mb-3" data-bs-toggle="modal" data-animation="bounce" data-bs-target=".bs-example-modal-lg">Add New Appointment</button>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Patient Name</th>
                                <th>Age</th>
                                <th>Department</th>
                                <th>Doctor Name</th>
                                <th>Appo. Date</th>
                                <th>Appo. Time</th>
                                <th>Mobile No</th>
                                <th>Action</th>
                            </tr>
                            <!--end tr-->
                        </thead>

                        <tbody>
                            <tr>
                                <td>Donald Gardner</td>
                                <td>36</td>
                                <td>Orthopedic</td>
                                <td><img src="{{URL::asset('assets/images/users/user-1.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Dr.Thomas Fant</td>
                                <td>18/07/2019</td>
                                <td>10:15 am</td>
                                <td>+123456789</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>Keith Jacobson</td>
                                <td>48</td>
                                <td>Neurology</td>
                                <td><img src="{{URL::asset('assets/images/users/user-4.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Dr.Helen White</td>
                                <td>18/07/2019</td>
                                <td>11:30 am</td>
                                <td>+123456789</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>Greg Crosby</td>
                                <td>27</td>
                                <td>Cardiology</td>
                                <td><img src="{{URL::asset('assets/images/users/user-6.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Dr.Aretha Garland</td>
                                <td>19/07/2019</td>
                                <td>12:30 pm</td>
                                <td>+123456789</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>Fred Godina</td>
                                <td>22</td>
                                <td>Fizioterapie</td>
                                <td><img src="{{URL::asset('assets/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Dr.Justin Williams</td>
                                <td>19/07/2019</td>
                                <td>02:15 pm</td>
                                <td>+123456789</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>Peggy Doe</td>
                                <td>51</td>
                                <td>Psychology</td>
                                <td><img src="{{URL::asset('assets/images/users/user-8.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Dr.William Gonzalez</td>
                                <td>20/07/2019</td>
                                <td>10:45 am</td>
                                <td>+123456789</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
                                </td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>Jennifer Doss</td>
                                <td>18</td>
                                <td>Gynaecology</td>
                                <td><img src="{{URL::asset('assets/images/users/user-10.jpg')}}" alt="" class="thumb-sm rounded-circle me-2">Dr.Lea Sanchez</td>
                                <td>20/07/2019</td>
                                <td>03:30 pm</td>
                                <td>+123456789</td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary font-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-18"></i></a>
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

<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title mt-0" id="myLargeModalLabel">Add New Appointment</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="PatientName">Patient Name</label>
                                <input type="text" class="form-control" id="PatientName" required="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="DoctorName_select" class="form-label">Doctor Name</label>
                                <select class="form-select" id="DoctorName_select">
                                    <option selected="">-- Select --</option>
                                    <option value="1">Dr.Thomas Fant</option>
                                    <option value="2">Dr.Justin Williams</option>
                                    <option value="3">Dr.Aretha Garland</option>
                                    <option value="4">Dr.Lea Sanchez</option>
                                    <option value="5">Dr.Helen White</option>
                                    <option value="6">Dr.William Gonzalez</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="Department_select" class="form-label">Department</label>
                                <select class="form-select" id="Department_select">
                                    <option selected="">-- Select --</option>
                                    <option value="1">Orthopedic</option>
                                    <option value="2">Fizioterapie</option>
                                    <option value="3">Cardiology</option>
                                    <option value="4">Gynaecology</option>
                                    <option value="5">Neurology</option>
                                    <option value="6">Psychology</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label my-2" for="Age">Age</label>
                                <input type="text" class="form-control" id="Age" required="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label my-2" for="AppoDate">Date</label>
                                <input type="text" class="form-control" id="AppoDate" required="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label my-2" for="AppoTime">Time</label>
                                <input type="text" class="form-control" id="AppoTime" required="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-label my-2" for="PhoneNo">Phone No</label>
                                <input type="text" class="form-control" id="PhoneNo" required="">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-de-primary">Save</button>
                    <button type="button" class="btn btn-sm btn-de-danger">Delete</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
