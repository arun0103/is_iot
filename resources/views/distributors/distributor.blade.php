@extends('layouts.app')

@section('head')


@endsection

@section('content')
    <main id="main" class="main">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <i class="ri ri-bank-line"></i> {{"Distbutor's Detail"}}
                        <button type="button" id="btn-edit_distributor" class="react-bs-table-csv-btn btn btn-sm btn-secondary float-right p-0">
                            <i class="bi bi-brush"></i> Edit
                        </button>
                    </div>
                    <!-- Floating Labels Form -->
                    <form>
                        <div class="row g-3 p-1">
                            <div class="col-md-1">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="distributorID" placeholder="ID" value="101" disabled>
                                    <label for="distributorID">ID</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="distributorComapnyName" placeholder="Company Name" value="Voltea Distributor" disabled>
                                    <label for="distributorComapnyName">Company Name</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="distributorEmail" placeholder="Email" value="voltea@distributor.com" disabled>
                                    <label for="distributorEmail">Company Email</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="distributorContactNumber" placeholder="Contact" value="+1 012 345 678" disabled>
                                    <label for="distributorContactNumber">Contact #</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 p-1">
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="select_country" aria-label="Select country" disabled>
                                        <option selected="">Nepal</option>
                                        <option value="1">America</option>
                                        <option value="2">Australia</option>
                                        <option value="3">England</option>
                                    </select>
                                    <label for="select_country">Country</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="select_state" aria-label="Select state" disabled>
                                        <option selected="">1</option>
                                        <option value="1">2</option>
                                        <option value="2">Bagmati</option>
                                        <option value="3">4</option>
                                    </select>
                                    <label for="select_state">State</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="city" placeholder="City" value="Kathmandu" disabled>
                                    <label for="city">City</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="address_line_1" placeholder="Address Line 1" value="Sanepa-2" disabled>
                                    <label for="address_line_1">Address Line 1</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 p-1" style="margin-top:-30px">
                            <div class="col-md-9">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="address_line_2" placeholder="APT/SUITE, OTHERS" value="Amatya Niwas, Besides Naulo Bakes" disabled>
                                    <label for="address_line_2">APT/SUITE, OTHERS</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="zip_code" placeholder="Zip Code" value="977" disabled>
                                    <label for="zip_code">Zip Code</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center action_buttons" hidden>
                            <button id="btn-update_distributor" type="button" class="btn btn-primary">Update</button>
                            <button id="btn-cancel_update" type="cancel" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form><!-- End floating Labels Form -->
                </div>
            </div>
        </div>

        <div class="row g-3 p-1">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                        <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="devices-tab" data-bs-toggle="tab" data-bs-target="#bordered-devices" type="button" role="tab" aria-controls="devices" aria-selected="true">Devices</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="collaborators-tab" data-bs-toggle="tab" data-bs-target="#bordered-collaborators" type="button" role="tab" aria-controls="collaborators" aria-selected="false" tabindex="-1">Collaborators</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="clients-tab" data-bs-toggle="tab" data-bs-target="#bordered-clients" type="button" role="tab" aria-controls="clients" aria-selected="false" tabindex="-1">Clients</button>
                            </li>
                        </ul>
                        </div>
                        <div class="tab-content pt-2" id="borderedTabContent">
                            <div class="tab-pane fade show active" id="bordered-devices" role="tabpanel" aria-labelledby="devices-tab">
                                <div>
                                    <label for="search-bar-0" class="search-label">
                                        <span id="search-bar-0-label" class="sr-only">Search devices</span>
                                        <input id="search-bar-0" type="text" aria-labelledby="search-bar-0-label" class="form-control " placeholder="Search" value="">
                                    </label>
                                    <span class="float-right p-2">2 devices found</span>
                                    <div class="react-bootstrap-table table-responsive" style="width:100%">
                                        <table class="table table-striped table-hover table-sm" style="font-size:14px !important">
                                            <thead>
                                                <tr>
                                                    <th data-field="code" data-sortable="true">Device Name</th>
                                                    <th data-field="id" data-sortable="true">Device ID</th>
                                                    <!-- <th data-field="distributor" data-sortable="true">Distributor</th> -->
                                                    <th data-field="value1" data-sortable="true">Client </th>
                                                    <th data-field="value2" data-sortable="true">Type</th>
                                                    <!-- <th data-field="streams" data-sortable="true">Streams <i class="bi bi-info-circle" style="color:green"></i></th> -->
                                                    <th data-field="activation-date" data-sortable="true">Activation Date</th>
                                                    <th data-field="connection" data-sortable="true">Connection</th>
                                                    <th data-field="status" data-sortable="true">Status</th>
                                                    <th data-field="info" data-sortable="false"></th>
                                                </tr>
                                                <!-- <tr>
                                                    <th tabindex="0" aria-label="Device ID sortable" class="sortable text-nowrap">Device ID<span class="order-4"></span></th>
                                                    <th tabindex="1" aria-label="Client sortable" class="sortable">Client<span class="order-4"></span></th>
                                                    <th tabindex="2" aria-label="Asset sortable" class="sortable">Asset<span class="order-4"></span></th>
                                                    <th tabindex="3" aria-label="Stream(s) sortable" class="sortable d-none d-md-table-cell"><span style="display: flex;">Stream(s) <span class=""><i class="far fa-question-circle mx-1" id="icon-with-tooltip--1797539030"></i></span> <span class="order-4"></span></span></th>
                                                    <th tabindex="4" aria-label="Sample Rate Flow sortable" class="sortable"><span style="display: flex;">Sample Rate Flow <span class=""><i class="far fa-question-circle mx-1" id="icon-with-tooltip-1210011700"></i></span> <span class="order-4"></span></span></th>
                                                    <th tabindex=" 5" aria-label="Sample Rate Pressure sortable" class="sortable"><span style="display: flex;">Sample Rate Pressure <span class=""><i class="far fa-question-circle mx-1" id="icon-with-tooltip-719470182"></i></span> <span class="order-4"></span></span></th>
                                                    <th tabindex="6" aria-label="Health Status sortable" class="sortable"><span style="display: flex;">Health Status <span class=""><i class="far fa-question-circle mx-1" id="icon-with-tooltip-1656819792"></i></span> <span class="order-4"></span></span></th>
                                                </tr> -->
                                            </thead>
                                            <tbody>
                                                <tr class="align-middle">
                                                    <!-- <td><input class="form-check-input" type="checkbox" id="check_1"></td> -->
                                                    <td><a href="{{route('asset_dashboard','1') }}">Voltea Prototype 1 </a></td>
                                                    <td>1</td>
                                                    <!-- <td><a href="{{route('distributor','1') }}">ABC Distributor</a></td> -->
                                                    <td><a href="">ABC</a></td>
                                                    <td>HPC</td>
                                                    <td>1/12/2021</td>
                                                    <td style="text-align:center"><i class="ri ri-wifi-fill fa-lg" style="color:green"></i><span hidden>Online</span> </td>
                                                    <td style="text-align:center">
                                                        <i class="bi bi-shield-fill-exclamation fa-lg" style="color:#ffc107"></i><span class="info_status" hidden>Warning</span></i>
                                                        <!-- <i id="battery" class="bi bi-battery-full"></i> -->
                                                    </td>
                                                    <td>
                                                        <a href=""><i class="link_asset_detail bi bi-vector-pen"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!-- <tbody>
                                                <tr class="align-middle">
                                                    <td>6B:39:67:01</td>
                                                    <td>Voltea</td>
                                                    <td><span>Kitchen sink  / <a href="/assets/644/dashboard">Voltea Kitchen DI use</a></span></td>
                                                    <td class="d-none d-md-table-cell">IN, OUT</td>
                                                    <td>5 min</td>
                                                    <td>15 min</td>
                                                    <td>
                                                        <span>
                                                            <a href="/troubleshoot?gateway_eui=58A0CBFFFE803FE2">
                                                                <span class="">
                                                                    <i class="fas fa-wifi" id="device-6b-39-67-01-health-wifi-icon" style="color: rgb(204, 0, 0);"></i>
                                                                </span>
                                                            </a>
                                                            <span class="">
                                                                <i class="fas fa-battery-full fa-rotate-270" id="device-6b-39-67-01-health-battery-icon" style="color: rgb(0, 153, 51);"></i>
                                                            </span>
                                                            <span class="">
                                                                <i class="fas fa-weight-hanging" id="device-6b-39-67-01-health-pressure-icon" style="color: rgb(128, 128, 128);"></i>
                                                            </span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr class="align-middle">
                                                    <td>81:39:77:01</td><td>Voltea</td><td><span><a href="/assets/943/dashboard">Gen 3 Option 4 Prototype 1 </a></span></td><td class="d-none d-md-table-cell">IN, OUT</td><td>5 min</td><td>15 min</td><td><span><a href="/troubleshoot?gateway_eui=58A0CBFFFE803FE2"><span class=""><i class="fas fa-wifi" id="device-81-39-77-01-health-wifi-icon" style="color: rgb(204, 0, 0);"></i></span></a><span class=""><i class="fas fa-battery-full fa-rotate-270" id="device-81-39-77-01-health-battery-icon" style="color: rgb(0, 153, 51);"></i></span><span class=""><i class="fas fa-weight-hanging" id="device-81-39-77-01-health-pressure-icon" style="color: rgb(128, 128, 128);"></i></span></span></td>
                                                </tr>
                                            </tbody> -->
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bordered-collaborators" role="tabpanel" aria-labelledby="collaborators-tab">
                                <div>
                                    <label for="search-bar-1" class="search-label">
                                        <span id="search-bar-1-label" class="sr-only">Search collaborators</span>
                                        <input id="search-bar-1" type="text" aria-labelledby="search-bar-1-label" class="form-control" placeholder="Search" value="">
                                    </label>
                                    <span class="float-right p-2">2 collaborators found</span>
                                    <div class="react-bootstrap-table table-responsive" style="width:100%">
                                        <table class="table table-striped table-hover table-sm" style="font-size:14px !important">
                                            <thead>
                                                <tr>
                                                    <th data-field="code" data-sortable="true">Name</th>
                                                    <th data-field="id" data-sortable="true">ID</th>
                                                    <th data-field="value1" data-sortable="true">Client </th>
                                                    <th data-field="value2" data-sortable="true">Type</th>
                                                    <th data-field="activation-date" data-sortable="true">Activation Date</th>
                                                    <th data-field="connection" data-sortable="true">Connection</th>
                                                    <th data-field="status" data-sortable="true">Status</th>
                                                    <th data-field="info" data-sortable="false"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="align-middle">
                                                    <td><a href="{{route('asset_dashboard','1') }}">Voltea Prototype 1 </a></td>
                                                    <td>1</td>
                                                    <td><a href="">ABC</a></td>
                                                    <td>HPC</td>
                                                    <td>1/12/2021</td>
                                                    <td style="text-align:center"><i class="ri ri-wifi-fill fa-lg" style="color:green"></i><span hidden>Online</span> </td>
                                                    <td style="text-align:center"><i class="bi bi-shield-fill-exclamation fa-lg" style="color:#ffc107"></i><span class="info_status" hidden>Warning</span></i></td>
                                                    <td><a href=""><i class="link_asset_detail bi bi-vector-pen"></i></a></td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bordered-clients" role="tabpanel" aria-labelledby="clients-tab">
                                <div>
                                    <label for="search-bar-2" class="search-label">
                                        <span id="search-bar-2-label" class="sr-only">Search clients</span>
                                        <input id="search-bar-2" type="text" aria-labelledby="search-bar-2-label" class="form-control " placeholder="Search" value="">
                                    </label>
                                    <span class="float-right p-2">2 clients found</span>
                                    <div class="react-bootstrap-table table-responsive" style="width:100%">
                                        <table class="table table-striped table-hover table-sm" style="font-size:14px !important">
                                            <thead>
                                                <tr>
                                                    <th data-field="code" data-sortable="true">Device Name</th>
                                                    <th data-field="id" data-sortable="true">Device ID</th>
                                                    <!-- <th data-field="distributor" data-sortable="true">Distributor</th> -->
                                                    <th data-field="value1" data-sortable="true">Client </th>
                                                    <th data-field="value2" data-sortable="true">Type</th>
                                                    <!-- <th data-field="streams" data-sortable="true">Streams <i class="bi bi-info-circle" style="color:green"></i></th> -->
                                                    <th data-field="activation-date" data-sortable="true">Activation Date</th>
                                                    <th data-field="connection" data-sortable="true">Connection</th>
                                                    <th data-field="status" data-sortable="true">Status</th>
                                                    <th data-field="info" data-sortable="false"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="align-middle">
                                                    <!-- <td><input class="form-check-input" type="checkbox" id="check_1"></td> -->
                                                    <td><a href="{{route('asset_dashboard','1') }}">Voltea Prototype 1 </a></td>
                                                    <td>1</td>
                                                    <!-- <td><a href="{{route('distributor','1') }}">ABC Distributor</a></td> -->
                                                    <td><a href="">ABC</a></td>
                                                    <td>HPC</td>
                                                    <td>1/12/2021</td>
                                                    <td style="text-align:center"><i class="ri ri-wifi-fill fa-lg" style="color:green"></i><span hidden>Online</span> </td>
                                                    <td style="text-align:center">
                                                        <i class="bi bi-shield-fill-exclamation fa-lg" style="color:#ffc107"></i><span class="info_status" hidden>Warning</span></i>
                                                        <!-- <i id="battery" class="bi bi-battery-full"></i> -->
                                                    </td>
                                                    <td>
                                                        <a href=""><i class="link_asset_detail bi bi-vector-pen"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Toastify"></div>
    </main>
    <div class="modal fade" id="modal-addNewDistributorDevice" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign New Device to Distributor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <i class="ri ri-bank-line"></i> {{"Device's Detail"}}
                                <!-- <button type="button" id="btn-edit_distributor" class="react-bs-table-csv-btn btn btn-sm btn-secondary float-right p-0">
                                    <i class="bi bi-brush"></i> Edit
                                </button> -->
                            </div>
                            <!-- Floating Labels Form -->
                            <form class="row g-3 p-1">
                                <div class="col-md-1">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="distributorID" placeholder="ID" value="101" disabled>
                                        <label for="distributorID">ID</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="distributorComapnyName" placeholder="Company Name" value="Voltea Distributor" disabled>
                                        <label for="distributorComapnyName">Company Name</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="distributorEmail" placeholder="Email" value="voltea@distributor.com" disabled>
                                        <label for="distributorEmail">Company Email</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="distributorContactNumber" placeholder="Contact" value="+1 012 345 678" disabled>
                                        <label for="distributorContactNumber">Contact #</label>
                                    </div>
                                </div>
                                <div class="text-center action_buttons" hidden>
                                    <button id="btn-update_distributor" type="button" class="btn btn-primary">Update</button>
                                    <button id="btn-cancel_update" type="cancel" class="btn btn-secondary">Cancel</button>
                                </div>
                            </form><!-- End floating Labels Form -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary mr-auto">Add</button>
            </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        var table = $('.table').DataTable({'sDom': 't'});

        // #myInput is a <input type="text"> element
        $('#search-bar-0').on( 'keyup', function () {
            table.search( this.value ).draw();
        } );
        $('#btn-addNewDistributorDevice').on('click',function(){
            console.log('Opening modal - Assign Device to Distributor')
            $('#modal-addNewDistributorDevice').modal('show');
        })
    });


    $('#btn-edit_distributor').on('click',function(){
        $('#distributorComapnyName').attr('disabled',false);
        $('#distributorEmail').attr('disabled',false);
        $('#distributorContactNumber').attr('disabled',false);

        $('#select_country').attr('disabled',false);
        $('#select_state').attr('disabled',false);
        $('#city').attr('disabled',false);
        $('#address_line_1').attr('disabled',false);
        $('#address_line_2').attr('disabled',false);
        $('#zip_code').attr('disabled',false);

        $('.action_buttons').attr('hidden',false);
    })
    $('#btn-update_distributor').on('click',function(){
        $('#distributorComapnyName').attr('disabled',true);
        $('#distributorEmail').attr('disabled',true);
        $('#distributorContactNumber').attr('disabled',true);

        $('#select_country').attr('disabled',true);
        $('#select_state').attr('disabled',true);
        $('#city').attr('disabled',true);
        $('#address_line_1').attr('disabled',true);
        $('#address_line_2').attr('disabled',true);
        $('#zip_code').attr('disabled',true);

        $('.action_buttons').attr('hidden',true);
    })
 </script>
@endsection
