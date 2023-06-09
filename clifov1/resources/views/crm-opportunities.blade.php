@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') CRM @endslot
@slot('title') Opportunities @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">All Opportunities by Owner</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-auto">
                                <div id="apex_radialbar4" class="apex-charts"></div>
                            </div>
                            <!--end col-->
                            <div class="col-md align-self-center">
                                <h4 class="mt-0 mb-2 font-16">Leads Won by Owner</h4>
                                <p class="text-muted mb-md-0">There are many variations of passages
                                    of Lorem Ipsum available, but the majority have suffered
                                    alteration in some form.
                                </p>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div><!-- end col-->
                    <div class="col-lg-4 align-self-center">
                        <form class="row row-cols-lg-auto g-2 align-items-center">
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" id="Search_data" placeholder="search">
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-12">
                                <select class="form-select form-select-sm" id="inlineFormSelectPref">
                                    <option selected="">All</option>
                                    <option value="1">Hot</option>
                                    <option value="2">Cold</option>
                                    <option value="3">In Progress</option>
                                    <option value="4">Lost</option>
                                    <option value="5">Won</option>
                                </select>
                            </div>
                            <!--end col-->
                            <div class="col-12">
                                <button type="button" class="btn btn-de-info btn-sm me-1"><i class="mdi mdi-filter-variant"></i></button>
                                <button type="button" class="btn btn-de-primary btn-sm" data-bs-toggle="modal" data-animation="bounce" data-bs-target=".bs-example-modal-lg">+ Add New</button>
                            </div>
                            <!--end col-->
                        </form>
                        <!--  Modal content for the above example -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title mt-0" id="myLargeModalLabel">Add New Opportunities</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label" for="Location">Location</label>
                                                    <input type="text" class="form-control form-control-sm" id="Location" required="">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label mt-2 mt-md-0" for="PhoneNo">Phone No</label>
                                                        <input type="text" class="form-control form-control-sm" id="PhoneNo" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="form-label mt-2" for="NewOppEmail">Email</label>
                                                        <input type="email" class="form-control form-control-sm" id="NewOppEmail" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="modal-status-select" class="form-label  mt-2">Category</label>
                                                    <select class="form-select  form-select-sm" id="modal-status-select">
                                                        <option selected="">Select</option>
                                                        <option value="1">Hot</option>
                                                        <option value="2">Cold</option>
                                                        <option value="3">In Progress</option>
                                                        <option value="4">Lost</option>
                                                        <option value="5">Won</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-de-primary btn-sm mt-2">Save</button>
                                            <button type="button" class="btn btn-sm btn-de-danger btn-sm mt-2">Delete</button>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <ul class="list-unstyled mb-0 mt-3">
                            <li><i class="mdi mdi-circle me-2 text-success"></i>Won</li>
                            <li><i class="mdi mdi-circle me-2 text-warning"></i>In Progress</li>
                            <li><i class="mdi mdi-circle me-2 text-purple"></i>Hot</li>
                            <li><i class="mdi mdi-circle me-2 text-secondary"></i>Cold</li>
                            <li><i class="mdi mdi-circle me-2 text-danger"></i>Lost</li>
                        </ul>
                    </div><!-- end col-->
                </div><!-- end row -->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="media">
                            <img class="d-flex align-self-center me-3 rounded-circle" src="{{URL::asset('assets/images/small/opp-1.png')}}" alt="" height="50">
                            <div class="media-body align-self-center">
                                <h4 class="mt-0 mb-1 font-15">Starbucks coffee</h4>
                                <ul class="list-inline mb-0 text-muted">
                                    <li class="list-inline-item me-2"><span><i class="far fa-envelope me-1 text-secondary font-14"></i></span>Ernest@Webster.com</li>
                                    <li class="list-inline-item"><span><i class="fas fa-mobile-alt me-1 text-secondary font-14"></i></span>+1 234 567 890</li>
                                </ul>
                            </div>
                            <!--end media-body-->
                        </div>
                        <!--end media-->
                    </div>
                    <!--end col-->
                    <div class="col-sm-2 align-self-center">
                        <div class="text-end">
                            <span><i class="mdi mdi-circle text-success me-1  font-10"></i></span>
                            <a href="#" class=""><i class="las la-pen text-secondary font-16"></i></a>
                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="media">
                            <img class="d-flex align-self-center me-3 rounded-circle" src="{{URL::asset('assets/images/small/opp-2.png')}}" alt="" height="50">
                            <div class="media-body align-self-center">
                                <h4 class="mt-0 mb-1 font-15">Mac Donald</h4>
                                <ul class="list-inline mb-0 text-muted">
                                    <li class="list-inline-item me-2"><span><i class="far fa-envelope me-1 text-secondary font-14"></i></span>Ernest@Webster.com</li>
                                    <li class="list-inline-item"><span><i class="fas fa-mobile-alt me-1 text-secondary font-14"></i></span>+1 234 567 890</li>
                                </ul>
                            </div>
                            <!--end media-body-->
                        </div>
                        <!--end media-->
                    </div>
                    <!--end col-->
                    <div class="col-sm-2 align-self-center">
                        <div class="text-end">
                            <span><i class="mdi mdi-circle text-secondary me-1 font-10"></i></span>
                            <a href="#" class=""><i class="las la-pen text-secondary font-16"></i></a>
                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="media">
                            <img class="d-flex align-self-center me-3 rounded-circle" src="{{URL::asset('assets/images/small/opp-3.png')}}" alt="" height="50">
                            <div class="media-body align-self-center">
                                <h4 class="mt-0 mb-1 font-15">Life Good</h4>
                                <ul class="list-inline mb-0 text-muted">
                                    <li class="list-inline-item me-2"><span><i class="far fa-envelope me-1 text-secondary font-14"></i></span>Ernest@Webster.com</li>
                                    <li class="list-inline-item"><span><i class="fas fa-mobile-alt me-1 text-secondary font-14"></i></span>+1 234 567 890</li>
                                </ul>
                            </div>
                            <!--end media-body-->
                        </div>
                        <!--end media-->
                    </div>
                    <!--end col-->
                    <div class="col-sm-2 align-self-center">
                        <div class="text-end">
                            <span><i class="mdi mdi-circle text-purple me-1 font-10"></i></span>
                            <a href="#" class=""><i class="las la-pen text-secondary font-16"></i></a>
                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
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

    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="media">
                            <img class="d-flex align-self-center me-3 rounded-circle" src="{{URL::asset('assets/images/small/opp-1.png')}}" alt="" height="50">
                            <div class="media-body align-self-center">
                                <h4 class="mt-0 mb-1 font-15">Starbucks coffee</h4>
                                <ul class="list-inline mb-0 text-muted">
                                    <li class="list-inline-item me-2"><span><i class="far fa-envelope me-1 text-secondary font-14"></i></span>Ernest@Webster.com</li>
                                    <li class="list-inline-item"><span><i class="fas fa-mobile-alt me-1 text-secondary font-14"></i></span>+1 234 567 890</li>
                                </ul>
                            </div>
                            <!--end media-body-->
                        </div>
                        <!--end media-->
                    </div>
                    <!--end col-->
                    <div class="col-sm-2 align-self-center">
                        <div class="text-end">
                            <span><i class="mdi mdi-circle text-success me-1 font-10"></i></span>
                            <a href="#" class=""><i class="las la-pen text-secondary font-16"></i></a>
                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="media">
                            <img class="d-flex align-self-center me-3 rounded-circle" src="{{URL::asset('assets/images/small/opp-2.png')}}" alt="" height="50">
                            <div class="media-body align-self-center">
                                <h4 class="mt-0 mb-1 font-15">Mac Donald</h4>
                                <ul class="list-inline mb-0 text-muted">
                                    <li class="list-inline-item me-2"><span><i class="far fa-envelope me-1 text-secondary font-14"></i></span>Ernest@Webster.com</li>
                                    <li class="list-inline-item"><span><i class="fas fa-mobile-alt me-1 text-secondary font-14"></i></span>+1 234 567 890</li>
                                </ul>
                            </div>
                            <!--end media-body-->
                        </div>
                        <!--end media-->
                    </div>
                    <!--end col-->
                    <div class="col-sm-2 align-self-center">
                        <div class="text-end">
                            <span><i class="mdi mdi-circle text-secondary me-1 font-10"></i></span>
                            <a href="#" class=""><i class="las la-pen text-secondary font-16"></i></a>
                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="media">
                            <img class="d-flex align-self-center me-3 rounded-circle" src="{{URL::asset('assets/images/small/opp-3.png')}}" alt="" height="50">
                            <div class="media-body align-self-center">
                                <h4 class="mt-0 mb-1 font-15">Life Good</h4>
                                <ul class="list-inline mb-0 text-muted">
                                    <li class="list-inline-item me-2"><span><i class="far fa-envelope me-1 text-secondary font-14"></i></span>Ernest@Webster.com</li>
                                    <li class="list-inline-item"><span><i class="fas fa-mobile-alt me-1 text-secondary font-14"></i></span>+1 234 567 890</li>
                                </ul>
                            </div>
                            <!--end media-body-->
                        </div>
                        <!--end media-->
                    </div>
                    <!--end col-->
                    <div class="col-sm-2 align-self-center">
                        <div class="text-end">
                            <span><i class="mdi mdi-circle text-purple me-1 font-10"></i></span>
                            <a href="#" class=""><i class="las la-pen text-secondary font-16"></i></a>
                            <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
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
</div>
<!--end row-->

@endsection
@section('script')
<script src="{{URL::asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
<script>
    var options = {
        chart: {
            height: 170
            , type: 'radialBar'
            , toolbar: {
                show: false
            }
        }
        , plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0
                    , size: "70%"
                    , background: 'transparent'
                , },

                dataLabels: {
                    name: {
                        offsetY: -5
                        , fontSize: "13px"
                    , }
                    , value: {
                        offsetY: 5
                        , fontSize: "18px"
                        , show: true
                    }
                }
            }
        }
        , colors: ['#2c74de']
        , series: [75]
        , stroke: {
            lineCap: 'round'
        }
        , labels: ['Leads Won'],

    }

    var chart = new ApexCharts(
        document.querySelector("#apex_radialbar4")
        , options
    );

    chart.render();

</script>
@endsection
