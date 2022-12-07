@extends('layouts.app')

@section('content')
<main id="main" class="main">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-people"></i> All Members</h5>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <label for="search-bar-0" class="search-label" style="width:100%">
                            <span id="search-bar-0-label" class="sr-only">Search this table</span>
                            <input id="search-bar-0" type="text" aria-labelledby="search-bar-0-label" class="form-control" placeholder="Search" value="">
                        </label>
                    </div>
                    <div class="col-md-5 col-sm-12 float-right">
                        <span class="float-right p-2">1 member(s) found</span>
                    </div>
                    <div class="col-md-3 col-sm-12 float-right">
                        <button id="btn_add_new_client" class="btn btn-primary" style="width:100%">Add new member</button>
                    </div>

                    <div class="react-bootstrap-table table-responsive" style="width:100%">
                        <table class="table table-striped table-hover table-sm" style="font-size:14px !important">
                            <thead>
                                <tr>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="code" data-sortable="true">Name</th>
                                    <th data-field="email" data-sortable="true">Email</th>
                                    <th data-field="distributor" data-sortable="true">Distributor</th>
                                    <th data-field="client" data-sortable="true">Client</th>
                                    <th data-field="members" data-sortable="true"># Members </th>
                                    <th data-field="devices_number" data-sortable="true"># Devices</th>
                                    <th data-field="activation-date" data-sortable="true">Last Active</th>
                                    <th data-field="options" data-sortable="false"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td>1</td>
                                    <td><a href="{{route('distributor','1') }}">Dummy Client Member 1 </a> </td>
                                    <td>dummy@clientmember.com</td>
                                    <td>Dummy Distributor</td>
                                    <td>Dummy Client</td>
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
</script>
@endsection
