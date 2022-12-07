@extends('layouts.app')
@section('head')
<style>
    .mandatory{
        color:red;
    }
</style>
@endsection
@section('content')
<main id="main" class="main">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-diagram-3"></i> All Clients</h5>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <label for="search-bar-0" class="search-label" style="width:100%">
                            <span id="search-bar-0-label" class="sr-only">Search this table</span>
                            <input id="search-bar-0" type="text" aria-labelledby="search-bar-0-label" class="form-control" placeholder="Search" value="">
                        </label>
                    </div>
                    <div class="col-md-5 col-sm-12 float-right">
                        <span class="float-right p-2">1 client(s) found</span>
                    </div>
                    <div class="col-md-3 col-sm-12 float-right">
                        <button id="btn_add_new_client" class="btn btn-primary" style="width:100%">Add new client</button>
                    </div>

                    <div class="react-bootstrap-table table-responsive" style="width:100%">
                        <table class="table table-striped table-hover table-sm" style="font-size:14px !important">
                            <thead>
                                <tr>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="code" data-sortable="true">Name</th>
                                    <th data-field="email" data-sortable="true">Email</th>
                                    <th data-field="address" data-sortable="true">Address</th>
                                    <th data-field="client_members" data-sortable="true"># Members </th>
                                    <th data-field="devices_number" data-sortable="true"># Devices</th>
                                    <th data-field="activation-date" data-sortable="true">Last Active</th>
                                    <th data-field="options" data-sortable="false"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td>1</td>
                                    <td><a href="{{route('distributor','1') }}">Dummy Client </a> </td>
                                    <td>dummy@client.com</td>
                                    <td>123 street, Abc City, Nepal</td>
                                    <td><a href="">2</a></td>
                                    <td><a href="">0</a></td>
                                    <td>1/12/2021</td>
                                    <td>
                                        <a href=""><i class="link_asset_detail bi bi-vector-pen"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- </div> -->
                </div>
            </div>

            </div>
        </div>
    </div>
</main><!-- End #main -->
<div class="modal fade" id="modal-addNewClient" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <i class="bi bi-cpu"></i> {{"Client Details"}}
                        </div>
                        <!-- Floating Labels Form -->
                        <form class="row g-3 p-1">
                            <!-- <div class="col-md-1">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="deviceID" placeholder="ID" value="###" disabled>
                                    <label for="deviceID" style="color:grey">ID</label>
                                </div>
                            </div> -->
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pcb_serial_number" placeholder="PCB Serial Number" value="">
                                    <label for="pcb_serial_number" style="color:#798eb3">First Name <span class="mandatory">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pcb_serial_number" placeholder="PCB Serial Number" value="">
                                    <label for="pcb_serial_number" style="color:#798eb3">Last Name <span class="mandatory">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="device_serial_number" placeholder="Device Serial Number" value="">
                                    <label for="device_serial_number" style="color:#798eb3">Email <span class="mandatory">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pcb_version" placeholder="PCB Version" value="">
                                    <label for="pcb_version" style="color:#798eb3">Phone Number</label>
                                </div>
                            </div>
                            </div>
                            <div class="row g-3 p-1" style="margin-top:-35px">
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pcb_version" placeholder="PCB Version" value="">
                                    <label for="pcb_version" style="color:#798eb3">Address Line 1</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pcb_version" placeholder="PCB Version" value="">
                                    <label for="pcb_version" style="color:#798eb3">Address Line 2</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pcb_version" placeholder="PCB Version" value="">
                                    <label for="pcb_version" style="color:#798eb3">City</label>
                                </div>
                            </div><div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pcb_version" placeholder="PCB Version" value="">
                                    <label for="pcb_version" style="color:#798eb3">State</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pcb_version" placeholder="PCB Version" value="">
                                    <label for="pcb_version" style="color:#798eb3">Country</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pcb_version" placeholder="PCB Version" value="">
                                    <label for="pcb_version" style="color:#798eb3">Zip Code</label>
                                </div>
                            </div>
                            <!-- </div> -->


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
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary mr-auto">Save</button>
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
    $('#btn_add_new_asset').on('click', function(){
        $('#row_add_new_distributor').attr('hidden',false);
    })
    $('#btn_add_new_client').on('click',function(){
        $('#modal-addNewClient').modal('show')
    })
</script>
@endsection
