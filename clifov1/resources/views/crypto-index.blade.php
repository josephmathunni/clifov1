@extends('layouts.master')
@section('title')Metrica @endsection
@section('content')
<!-- this is breadcrumbs -->
@component('components.breadcrumb')
@slot('li_1') Metrica @endslot
@slot('li_2') Crypto @endslot
@slot('title') Dashboard @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex justify-content-between mb-3">
            <div class="align-self-center">
                <button type="button" class="btn btn-de-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalSend"><i data-feather="navigation" class="align-self-center icon-xs me-2"></i>Send</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalSend" tabindex="-1" aria-labelledby="exampleModalSendLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title m-0" id="exampleModalDefaultSend">Send Coin</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-2">
                                    <label for="cryptocurrency">Crypto Currency</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- Currency --</option>
                                        <option value="BTC">BTC</option>
                                        <option value="ETH">ETH</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="cryptocurrency">Currency From</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- My wallet --</option>
                                        <option value="BTC">BTC</option>
                                        <option value="ETH">ETH</option>
                                    </select>
                                </div>
                                <div class=" mb-2">
                                    <label for="toaddress">To</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="QUcode"><i class="fas fa-qrcode"></i></span>
                                        <input type="text" class="form-control" placeholder="Can you scan" aria-label="Scancode">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label for="toaddress">USD</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="US-dollor"><i class="fas fa-dollar-sign"></i></span>
                                                <input type="text" class="form-control" placeholder="USD" aria-label="US-dollor">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label for="BTC">BTC</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="BTC-coin"><i class="fab fa-btc"></i></span>
                                                <input type="text" class="form-control" placeholder="BTC" aria-label="BTC-coin">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="mb-2">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control" rows="3" aria-label="With textarea"></textarea>
                                </div>
                                <div class="mt-2 mb-1">
                                    <label for="NetworkFree">Network Free</label>
                                </div>
                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Regular" value="option1">
                                    <label class="form-check-label" for="Regular">Regular</label>
                                </div>
                                <div class="form-check form-check-inline mb-0">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Priority" value="option2">
                                    <label class="form-check-label" for="Priority">Priority</label>
                                </div>
                            </div>
                            <!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-de-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-de-primary btn-sm" type="button">Continue</button>
                            </div>
                            <!--end modal-footer-->
                        </div>
                        <!--end modal-content-->
                    </div>
                    <!--end modal-dialog-->
                </div>
                <!--end modal-->

                <button type="button" class="btn btn-de-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModalRequest"><i data-feather="download" class="align-self-center icon-xs me-2"></i>Request</button>
                <div class="modal fade" id="exampleModalRequest" tabindex="-1" aria-labelledby="exampleModalRequestLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title m-0" id="exampleModalRequestLabel">Request Coin</h6>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-2">
                                    <label for="cryptocurrency">Crypto Currency</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- Currency --</option>
                                        <option value="BTC">BTC</option>
                                        <option value="ETH">ETH</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="cryptocurrency">Receive To</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>-- My wallet --</option>
                                        <option value="BTC">BTC</option>
                                        <option value="ETH">ETH</option>
                                    </select>
                                </div>
                                <div class=" mb-2">
                                    <label for="toaddress">Address</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="W-Address" value="c12b001a15f9bd46ef1c6551386c">
                                        <button class="btn btn-outline-light" type="button" id="Copy_link"><i class="fas fa-copy"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!--end modal-body-->
                            <div class="modal-footer">
                                <button class="btn btn-de-success btn-sm" type="button">Done</button>
                            </div>
                            <!--end modal-footer-->
                        </div>
                        <!--end modal-content-->
                    </div>
                    <!--end modal-dialog-->
                </div>
                <!--end modal-->
            </div>
            <!--end /div-->
            <div class="media">
                <img src="{{URL::asset('assets/images/logos/btc.png')}}" class="me-2 thumb-sm align-self-center rounded-circle" alt="...">
                <div class="media-body align-self-center">
                    <p class="mb-1 text-muted">Total Balance</p>
                    <h5 class="mt-0 text-dark mb-1">122.00125503 BTC</h5>
                </div>
                <!--end media-body-->
            </div>
            <!--end media-->
        </div>
        <!--end /div-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="crypto-report-history d-flex justify-content-end">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#Hour" href="#">Hour</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#Day" href="#">Day</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#Week" href="#">Week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#Month" href="#">Month</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#Order_Book" href="#">Order Book</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="media">
                            <img src="{{URL::asset('assets/images/logos/btc.png')}}" class="me-2 thumb-sm align-self-center rounded-circle" alt="...">
                            <div class="media-body align-self-center">
                                <div class="coin-bal">
                                    <h4 class="m-0">$50,289.45</h4>
                                    <p class="text-muted mb-0">Bitcoin
                                        <span class="text-muted font-12">(BTC)</span>
                                        <span class="text-success">2.5% <i class="mdi mdi-arrow-up"></i></span>
                                    </p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end col-->
                    <div class="col-md-3">
                        <p class="mb-0 p-2 bg-soft-dark rounded"><b>Last: </b>0.25436584</p>
                    </div>
                    <!--end col-->
                    <div class="col-md-3">
                        <p class="mb-0 p-2 bg-soft-success rounded"><b>24High: </b>0.25436584</p>
                    </div>
                    <!--end col-->
                    <div class="col-md-3">
                        <p class="mb-0 p-2 bg-soft-danger rounded"><b>24Low: </b>0.25436584</p>
                    </div>
                    <!--end col-->
                </div><!-- end row -->
                <div id="crypto_dash_main" class="apex-charts"></div>
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
                        <h4 class="card-title">Total Balance</h4>
                        <span class="text-muted font-12">30 june 2021</span>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-md mb-2 mb-lg-0">
                        <h4 class="m-0">$85692.00</h4>
                        <p class="text-success mb-0"> + $455.00 <span class="font-12 text-muted">(6.2% <i class="mdi mdi-trending-up text-success"></i>)</span></p>
                    </div>
                    <!--end col-->
                    <div class="col-12 col-md align-self-center">
                        <div class="text-end  mb-2 mb-lg-0">
                            <button class="btn btn-de-success btn-sm px-3">Receive</button>
                            <button class="btn btn-de-danger btn-sm px-3">Send</button>
                            <button class="btn btn-de-primary btn-sm px-3">+ Invest</button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
            <div class="card-body pt-0">
                <ul class="list-group">
                    <li class="list-group-item align-items-center d-flex justify-content-between">
                        <div class="media">
                            <img src="{{URL::asset('assets/images/logos/btc.png')}}" class="me-3 thumb-xs align-self-center rounded-circle" alt="...">
                            <div class="media-body align-self-center">
                                <div class="coin-bal">
                                    <h5 class="m-0 font-14">6.18424000</h5>
                                    <p class="text-muted mb-0">$ 33277.3660</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="badge bg-soft-secondary">Bitcoin</span>
                    </li>
                    <li class="list-group-item align-items-center d-flex justify-content-between">
                        <div class="media">
                            <img src="{{URL::asset('assets/images/logos/mon.png')}}" class="me-3 thumb-xs align-self-center rounded-circle" alt="...">
                            <div class="media-body align-self-center">
                                <div class="coin-bal">
                                    <h5 class="m-0 font-14">60.1842</h5>
                                    <p class="text-muted mb-0">$ 18564.3660</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="badge bg-soft-secondary">Monero</span>
                    </li>
                    <li class="list-group-item align-items-center d-flex justify-content-between">
                        <div class="media">
                            <img src="{{URL::asset('assets/images/logos/eth.png')}}" class="me-3 thumb-xs align-self-center rounded-circle" alt="...">
                            <div class="media-body align-self-center">
                                <div class="coin-bal">
                                    <h5 class="m-0 font-14">32.65849212</h5>
                                    <p class="text-muted mb-0">$5562.3660</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="badge bg-soft-secondary">Ethereum</span>
                    </li>
                    <li class="list-group-item align-items-center d-flex justify-content-between">
                        <div class="media">
                            <img src="{{URL::asset('assets/images/logos/lite.png')}}" class="me-3 thumb-xs align-self-center rounded-circle" alt="...">
                            <div class="media-body align-self-center">
                                <div class="coin-bal">
                                    <h5 class="m-0 font-14">10.65849212</h5>
                                    <p class="text-muted mb-0">$7854.3660</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="badge bg-soft-secondary">Light</span>
                    </li>
                    <li class="list-group-item align-items-center d-flex justify-content-between">
                        <div class="media">
                            <img src="{{URL::asset('assets/images/logos/dash.png')}}" class="me-3 thumb-xs align-self-center rounded-circle" alt="...">
                            <div class="media-body align-self-center">
                                <div class="coin-bal">
                                    <h5 class="m-0 font-14">62.65849212</h5>
                                    <p class="text-muted mb-0">$7289.3660</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="badge bg-soft-secondary">Dashcoin</span>
                    </li>
                    <li class="list-group-item align-items-center d-flex justify-content-between">
                        <div class="media">
                            <img src="{{URL::asset('assets/images/logos/mon.png')}}" class="me-3 thumb-xs align-self-center rounded-circle" alt="...">
                            <div class="media-body align-self-center">
                                <div class="coin-bal">
                                    <h5 class="m-0 font-14">60.1842</h5>
                                    <p class="text-muted mb-0">$ 18564.3660</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="badge bg-soft-secondary">Monero</span>
                    </li>
                </ul>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div> <!-- end row -->

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Currency Calculator</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 align-self-center">
                        <div class="card-body">
                            <img src="{{URL::asset('assets/images/small/btc.png')}}" alt="" class="img-fluid d-block mx-auto">
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                        <div class="card-body">
                            <button type="button" class="btn btn-soft-secondary btn-icon-circle float-end">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <span class="badge font-12 fw-bold bg-soft-secondary p-2 ">Balance</span>
                            <h4 class="mb-0 font-20">122.5692.00 <small class="font-14">BTC</small></h4>
                            <p class="mb-1 text-muted">
                                <span class="text-success"><i class="mdi mdi-arrow-up"></i>11.1%</span> Up from yesterday
                            </p>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="calculator-block mt-4">
                    <div class="calculator-body">
                        <script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
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
                        <h4 class="card-title">Transaction History</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <a href="" class="text-primary">View All</a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <ul class="list-unsyled m-0 ps-0 transaction-history">
                    <li class="align-items-center d-flex justify-content-between">
                        <div class="media">
                            <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                <i class="mdi mdi-arrow-top-right-thick font-20"></i>
                            </div>
                            <div class="media-body align-self-center ms-3">
                                <div class="transaction-data">
                                    <h5 class="m-0 font-14">Send BTC</h5>
                                    <p class="text-muted mb-0">6 June 2019 10:25 AM</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="text-danger">0.000245684 BTC</span>
                    </li>
                    <li class="align-items-center d-flex justify-content-between">
                        <div class="media">
                            <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                <i class="mdi mdi-arrow-down-thick font-20"></i>
                            </div>
                            <div class="media-body align-self-center ms-3">
                                <div class="transaction-data">
                                    <h5 class="m-0 font-14">Receive BTC</h5>
                                    <p class="text-muted mb-0">4 June 2019 7:05 PM</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="text-success">0.012458632 BTC</span>
                    </li>
                    <li class="align-items-center d-flex justify-content-between">
                        <div class="media">
                            <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                <i class="mdi mdi-arrow-top-right-thick font-20"></i>
                            </div>
                            <div class="media-body align-self-center ms-3">
                                <div class="transaction-data">
                                    <h5 class="m-0 font-14">Send BTC</h5>
                                    <p class="text-muted mb-0">1 June 2019 11:30 PM</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="text-danger">0.000245684 BTC</span>
                    </li>
                    <li class="align-items-center d-flex justify-content-between">
                        <div class="media">
                            <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                <i class="mdi mdi-arrow-top-right-thick font-20"></i>
                            </div>
                            <div class="media-body align-self-center ms-3">
                                <div class="transaction-data">
                                    <h5 class="m-0 font-14">Send BTC</h5>
                                    <p class="text-muted mb-0">28 May 2019 08:45 AM</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="text-danger">0.000245684 BTC</span>
                    </li>
                    <li class="align-items-center d-flex justify-content-between">
                        <div class="media">
                            <div class="thumb-xs bg-soft-primary rounded-circle d-flex justify-content-center align-items-center">
                                <i class="mdi mdi-arrow-down-thick font-20"></i>
                            </div>
                            <div class="media-body align-self-center ms-3">
                                <div class="transaction-data">
                                    <h5 class="m-0 font-14">Receive BTC</h5>
                                    <p class="text-muted mb-0">25 May 2019 01:25 PM</p>
                                </div>
                            </div>
                            <!--end media body-->
                        </div>
                        <span class="text-success">0.012458632 BTC</span>
                    </li>
                </ul>
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
                        <h4 class="card-title">Market cap</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <p class="mt-n1 mb-2 fw-semibold">The global crypto market cap is $1.44T, a <span class="text-danger">3.99%</span> decrease over the last day.</p>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th class="text-end">Market cap</th>
                                <th class="text-end">Volume(24h)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media">
                                        <img src="{{URL::asset('assets/images/logos/btc.png')}}" class="me-3 thumb-xs align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center">
                                            <div class="coin-bal">
                                                <h5 class="m-0 font-14">$7289.45</h5>
                                                <p class="text-muted mb-0">Bitcoin
                                                    <span class="text-muted font-12">(BTC)</span>
                                                    <span class="text-success">2.5% <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>
                                        </div>
                                        <!--end media body-->
                                    </div>
                                    <!--end media-->
                                </td>
                                <td class="text-end">$129,820,932</td>
                                <td class="text-end">$25,111,773</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <div class="media">
                                        <img src="{{URL::asset('assets/images/logos/eth.png')}}" class="me-3 thumb-xs align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center">
                                            <div class="coin-bal">
                                                <h5 class="m-0 font-14">$234.45</h5>
                                                <p class="text-muted mb-0">Ethereum
                                                    <span class="text-muted font-12">(ETH)</span>
                                                    <span class="text-success">0.45% <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>
                                        </div>
                                        <!--end media body-->
                                    </div>
                                    <!--end media-->
                                </td>
                                <td class="text-end">$24,909,743</td>
                                <td class="text-end">$12,856,403</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <div class="media">
                                        <img src="{{URL::asset('assets/images/logos/lite.png')}}" class="me-3 thumb-xs align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center">
                                            <div class="coin-bal">
                                                <h5 class="m-0 font-14">$7289.45</h5>
                                                <p class="text-muted mb-0">Litecoin
                                                    <span class="text-muted font-12">(LTC)</span>
                                                    <span class="text-success">3.51% <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>
                                        </div>
                                        <!--end media body-->
                                    </div>
                                    <!--end media-->
                                </td>
                                <td class="text-end">$5,399,795,666</td>
                                <td class="text-end">$4,394,304,674</td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td>
                                    <div class="media">
                                        <img src="{{URL::asset('assets/images/logos/mon.png')}}" class="me-3 thumb-xs align-self-center rounded-circle" alt="...">
                                        <div class="media-body align-self-center">
                                            <div class="coin-bal">
                                                <h5 class="m-0 font-14">$7289.45</h5>
                                                <p class="text-muted mb-0">Monero
                                                    <span class="text-muted font-12">(XMR)</span>
                                                    <span class="text-success">0.95% <i class="mdi mdi-arrow-up"></i></span>
                                                </p>
                                            </div>
                                        </div>
                                        <!--end media body-->
                                    </div>
                                    <!--end media-->
                                </td>
                                <td class="text-end">$1,375,808,437</td>
                                <td class="text-end">$58,791,421 </td>
                            </tr>
                            <!--end tr-->
                        </tbody>
                    </table>
                    <!--end /table-->
                </div>
                <!--end /tableresponsive-->
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
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body p-0">
                <div class="p-3" style="height: 365px;" data-simplebar>
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
                                    <small class="text-muted">14 Nov 2019</small>
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
                                    <small class="text-muted">15 Nov 2019</small>
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
            <div class="card-body">
                <h4 class="mt-0 mb-3 header-title">Historical Bitcoin Price and Volume</h4>
                <script type="text/javascript" src="https://widgets.cryptocompare.com/serve/v1/coin/histo_week?fsym=BTC&amp;tsym=USD&amp;app=www.cryptocompare.com"></script>
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
<script src="{{URL::asset('assets/pages/crypto-index.init.js')}}"></script>
@endsection
