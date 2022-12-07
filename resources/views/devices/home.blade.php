@extends('layouts.app')

@section('content')
<main id="main" class="main">

    <!-- <section class="section"> -->

            <div class="row">
                <div class="col-md-4 col-sm-12" style="display:flex; justify-content:center">
                <button type="button" class="btn btn-success mb-2"  style="margin:auto; width:350px">
                    Devices Online <span class="badge bg-white text-success">1</span>
                </button>
                </div>
                <div class="col-md-4 col-sm-12 " style="display:flex; justify-content:center">
                    <button type="button" class="btn btn-danger mb-2" style="margin:auto; width:350px">
                        Devices Offline <span class="badge bg-white text-danger">1</span>
                    </button>
                </div>
                <div class="col-md-4 col-sm-12 " style="display:flex; justify-content:center">
                    <button type="button" class="btn btn-warning mb-2" style="margin:auto; width:350px">
                        Warning <span class="badge bg-white text-warning">1</span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-sink"></i>
                            All Devices
                        </h5>
                        <div>
                            <label for="search-bar-0" class="search-label">
                                <span id="search-bar-0-label" class="sr-only">Search this table</span>
                                <input id="search-bar-0" type="text" aria-labelledby="search-bar-0-label" class="form-control " placeholder="Search" value=""></label>
                                <button id="btn_add_new_device" class="btn btn-primary" style="float:right">Add new device</button>
                                <span class="float-right p-2">3 devices found</span>
                                <div class="react-bootstrap-table table-responsive" style="width:100%">
                                    <table class="table table-striped table-hover table-sm" style="font-size:14px !important">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="check" data-sortable="false"><input class="form-check-input" type="checkbox" id="check_all"></th> -->
                                                <th data-field="code" data-sortable="true">Device Name</th>
                                                <th data-field="id" data-sortable="true">Device ID</th>
                                                <th data-field="distributor" data-sortable="true">Distributor</th>
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
                                                <th tabindex="5" aria-label="Sample Rate Pressure sortable" class="sortable"><span style="display: flex;">Sample Rate Pressure <span class=""><i class="far fa-question-circle mx-1" id="icon-with-tooltip-719470182"></i></span> <span class="order-4"></span></span></th>
                                                <th tabindex="6" aria-label="Health Status sortable" class="sortable"><span style="display: flex;">Health Status <span class=""><i class="far fa-question-circle mx-1" id="icon-with-tooltip-1656819792"></i></span> <span class="order-4"></span></span></th>
                                            </tr> -->
                                        </thead>
                                        <tbody>
                                            <tr class="align-middle">
                                                <!-- <td><input class="form-check-input" type="checkbox" id="check_1"></td> -->
                                                <td><a href="{{route('asset_dashboard','1') }}">Voltea Prototype 1 </a></td>
                                                <td>1</td>
                                                <td><a href="{{route('distributor','1') }}">ABC Distributor</a></td>
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
                                            <tr class="align-middle">
                                                <!-- <td><input class="form-check-input" type="checkbox" id="check_2"></td> -->
                                                <td>Voltea Prototype 2</td>
                                                <td>2</td>
                                                <td>XYZ Distributor</td>
                                                <td>XYZ</td>
                                                <td>Test Model</td>
                                                <td>29/01/2022</td>
                                                <td style="text-align:center"><i class="ri ri-wifi-off-fill fa-lg" style="color:red"></i><span hidden>Offline</span> </td>
                                                <td style="text-align:center">
                                                    <i class="bi bi-shield-fill-check fa-lg" style="color:green"></i><span class="info_status" hidden>OK</span></i>
                                                    <!-- <i id="battery" class="bi bi-battery-half"></i> -->
                                                </td>
                                                <td>
                                                    <i class="link_asset_detail bi bi-vector-pen"></i>
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
                                <div class="row react-bootstrap-table-pagination">
                                    <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                        <!-- <span class="react-bs-table-sizePerPage-dropdown dropdown" style="visibility: visible;">
                                            <button id="pageDropDown" type="button" class="btn btn-default btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">15 </button>
                                            <ul class="dropdown-menu " role="menu" aria-labelledby="pageDropDown">
                                                <a href="#" tabindex="-1" role="menuitem" class="dropdown-item" data-page="15">15 items per page</a>
                                                <a href="#" tabindex="-1" role="menuitem" class="dropdown-item" data-page="50">50 items per page</a>
                                                <a href="#" tabindex="-1" role="menuitem" class="dropdown-item" data-page="100">100 items per page</a>
                                                <a href="#" tabindex="-1" role="menuitem" class="dropdown-item" data-page="1000">All items</a>
                                            </ul>
                                        </span> -->
                                    </div>
                                    <div class="react-bootstrap-table-pagination-list col-md-6 col-xs-6 col-sm-6 col-lg-6">
                                        <!-- <ul class="pagination react-bootstrap-table-page-btns-ul">
                                            <li class="active page-item" title="1">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

    <!-- </section> -->

    </main><!-- End #main -->

    <div class="modal fade" id="modal-addNewDevice" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Device</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <i class="bi bi-cpu"></i> {{"Device Details"}}
                            </div>
                            <!-- Floating Labels Form -->
                            <form class="row g-3 p-1">

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" id="pcb_serial_number" placeholder="PCB Serial Number" value="">
                                        <label for="pcb_serial_number">PCB Serial Number <span class="mandatory">*</span</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="device_serial_number" placeholder="Device Serial Number" value="">
                                        <label for="device_serial_number">Device Serial Number <span class="mandatory">*</span</label>
                                    </div>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="pcb_version" placeholder="PCB Version" value="">
                                        <label for="pcb_version">Firmware Version <span class="mandatory">*</span></label>
                                    </div>
                                </div> -->
                                <!-- <div class="text-center action_buttons" hidden>
                                    <button id="btn-update_distributor" type="button" class="btn btn-primary">Update</button>
                                    <button id="btn-cancel_update" type="cancel" class="btn btn-secondary">Cancel</button>
                                </div> -->
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


<script>
    $('.link_asset_detail').on('click',function(){
        let id = $(this).closest('tr').attr('id');
        console.log(id)

    })

</script>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        console.log("ready")
        var table = $('.table').DataTable({'sDom': 't'});

        // #myInput is a <input type="text"> element
        $('#search-bar-0').on( 'keyup', function () {
            console.log("searching");
            table.search( this.value ).draw();
        } );
    });

    $('#btn_add_new_device').on('click',function(){
        $('#modal-addNewDevice').modal('show')
    })
</script>
@endsection
