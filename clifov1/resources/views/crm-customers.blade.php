@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') CRM @endslot
@slot('title') Customers @endslot
@endcomponent

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/users/user-4.jpg')}}" class="me-3 thumb-lg align-self-center rounded-circle" alt="...">
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-0 font-16">Dorothy Key
                            <span class="badge badge-soft-warning font-12">
                                4.8 <i class="mdi mdi-star text-warning ms-1"></i>
                            </span>
                        </h4>
                        <p class="text-muted mb-0 font-12">New York USA</p>
                    </div>
                    <!--end media body-->
                </div>
                <!--end media-->
                <ul class="list-unstyled mb-2">
                    <li class=""><i data-feather="calendar" class="align-self-center icon-xs icon-dual me-1"></i> <b>Date</b> : 20 june 2020</li>
                    <li class="mt-2"><i data-feather="phone" class="align-self-center icon-xs icon-dual me-1"></i> <b> phone </b> : +91 23456 78910</li>
                    <li class="mt-2"><i data-feather="mail" class="align-self-center icon-xs icon-dual me-1"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                </ul>
                <p class="text-muted  mt-3">
                    <span class="text-dark font-weight-semibold">Last Message :</span> popular belief,
                    Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature.
                </p>
                <div>
                    <button type="button" class="btn btn-sm btn-de-primary">Send SMS</button>
                    <button type="button" class="btn btn-sm btn-de-primary">Send Email</button>
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
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/users/user-1.jpg')}}" class="me-3 thumb-lg align-self-center rounded-circle" alt="...">
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-0 font-16">Donald Gardner
                            <span class="badge badge-soft-warning font-12">
                                4.8 <i class="mdi mdi-star text-warning ms-1"></i>
                            </span>
                        </h4>
                        <p class="text-muted mb-0 font-12">Dealer, Washington</p>
                    </div>
                    <!--end media body-->
                </div>
                <!--end media-->
                <ul class="list-unstyled mb-2">
                    <li class=""><i data-feather="calendar" class="align-self-center icon-xs icon-dual me-1"></i> <b>Date</b> : 20 june 2020</li>
                    <li class="mt-2"><i data-feather="phone" class="align-self-center icon-xs icon-dual me-1"></i> <b> phone </b> : +91 23456 78910</li>
                    <li class="mt-2"><i data-feather="mail" class="align-self-center icon-xs icon-dual me-1"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                </ul>
                <p class="text-muted  mt-3">
                    <span class="text-dark font-weight-semibold">Last Message :</span> popular belief,
                    Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature.
                </p>
                <div>
                    <button type="button" class="btn btn-sm btn-de-primary">Send SMS</button>
                    <button type="button" class="btn btn-sm btn-de-primary">Send Email</button>
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
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/users/user-5.jpg')}}" class="me-3 thumb-lg align-self-center rounded-circle" alt="...">
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-0 font-16">Joseph Cross
                            <span class="badge badge-soft-warning font-12">
                                4.8 <i class="mdi mdi-star text-warning ms-1"></i>
                            </span>
                        </h4>
                        <p class="text-muted mb-0 font-12">Tokyo Japan</p>
                    </div>
                    <!--end media body-->
                </div>
                <!--end media-->
                <ul class="list-unstyled mb-2">
                    <li class=""><i data-feather="calendar" class="align-self-center icon-xs icon-dual me-1"></i> <b>Date</b> : 20 june 2020</li>
                    <li class="mt-2"><i data-feather="phone" class="align-self-center icon-xs icon-dual me-1"></i> <b> phone </b> : +91 23456 78910</li>
                    <li class="mt-2"><i data-feather="mail" class="align-self-center icon-xs icon-dual me-1"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                </ul>
                <p class="text-muted  mt-3">
                    <span class="text-dark font-weight-semibold">Last Message :</span> popular belief,
                    Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature.
                </p>
                <div>
                    <button type="button" class="btn btn-sm btn-de-primary">Send SMS</button>
                    <button type="button" class="btn btn-sm btn-de-primary">Send Email</button>
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
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/users/user-6.jpg')}}" class="me-3 thumb-lg align-self-center rounded-circle" alt="...">
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-0 font-16">Nancy Flanary
                            <span class="badge badge-soft-warning font-12">
                                4.8 <i class="mdi mdi-star text-warning ms-1"></i>
                            </span>
                        </h4>
                        <p class="text-muted mb-0 font-12">Sydeny Australia</p>
                    </div>
                    <!--end media body-->
                </div>
                <!--end media-->
                <ul class="list-unstyled mb-2">
                    <li class=""><i data-feather="calendar" class="align-self-center icon-xs icon-dual me-1"></i> <b>Date</b> : 20 june 2020</li>
                    <li class="mt-2"><i data-feather="phone" class="align-self-center icon-xs icon-dual me-1"></i> <b> phone </b> : +91 23456 78910</li>
                    <li class="mt-2"><i data-feather="mail" class="align-self-center icon-xs icon-dual me-1"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                </ul>
                <p class="text-muted  mt-3">
                    <span class="text-dark font-weight-semibold">Last Message :</span> popular belief,
                    Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature.
                </p>
                <div>
                    <button type="button" class="btn btn-sm btn-de-primary">Send SMS</button>
                    <button type="button" class="btn btn-sm btn-de-primary">Send Email</button>
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
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/users/user-7.jpg')}}" class="me-3 thumb-lg align-self-center rounded-circle" alt="...">
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-0 font-16">Sherron Nelson
                            <span class="badge badge-soft-warning font-12">
                                4.8 <i class="mdi mdi-star text-warning ms-1"></i>
                            </span>
                        </h4>
                        <p class="text-muted mb-0 font-12">Berlin, Germany</p>
                    </div>
                    <!--end media body-->
                </div>
                <!--end media-->
                <ul class="list-unstyled mb-2">
                    <li class=""><i data-feather="calendar" class="align-self-center icon-xs icon-dual me-1"></i> <b>Date</b> : 20 june 2020</li>
                    <li class="mt-2"><i data-feather="phone" class="align-self-center icon-xs icon-dual me-1"></i> <b> phone </b> : +91 23456 78910</li>
                    <li class="mt-2"><i data-feather="mail" class="align-self-center icon-xs icon-dual me-1"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                </ul>
                <p class="text-muted  mt-3">
                    <span class="text-dark font-weight-semibold">Last Message :</span> popular belief,
                    Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature.
                </p>
                <div>
                    <button type="button" class="btn btn-sm btn-de-primary">Send SMS</button>
                    <button type="button" class="btn btn-sm btn-de-primary">Send Email</button>
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
                <div class="media mb-3">
                    <img src="{{URL::asset('assets/images/users/user-8.jpg')}}" class="me-3 thumb-lg align-self-center rounded-circle" alt="...">
                    <div class="media-body align-self-center">
                        <h4 class="mt-0 mb-0 font-16">Richard Curtis
                            <span class="badge badge-soft-warning font-12">
                                4.8 <i class="mdi mdi-star text-warning ms-1"></i>
                            </span>
                        </h4>
                        <p class="text-muted mb-0 font-12">Dealer, Washington</p>
                    </div>
                    <!--end media body-->
                </div>
                <!--end media-->
                <ul class="list-unstyled mb-2">
                    <li class=""><i data-feather="calendar" class="align-self-center icon-xs icon-dual me-1"></i> <b>Date</b> : 20 june 2020</li>
                    <li class="mt-2"><i data-feather="phone" class="align-self-center icon-xs icon-dual me-1"></i> <b> phone </b> : +91 23456 78910</li>
                    <li class="mt-2"><i data-feather="mail" class="align-self-center icon-xs icon-dual me-1"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                </ul>
                <p class="text-muted  mt-3">
                    <span class="text-dark font-weight-semibold">Last Message :</span> popular belief,
                    Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature.
                </p>
                <div>
                    <button type="button" class="btn btn-sm btn-de-primary">Send SMS</button>
                    <button type="button" class="btn btn-sm btn-de-primary">Send Email</button>
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
