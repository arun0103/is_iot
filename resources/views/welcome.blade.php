@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-sm-12 col-md-4">
          <button type="button" class="btn btn-success mb-2">
            Assets Online <span class="badge bg-white text-success">4</span>
          </button>
        </div>
        <div class="col-sm-12 col-md-4">
              <button type="button" class="btn btn-danger mb-2">
                Assets Offline <span class="badge bg-white text-danger">4</span>
              </button>
        </div>
        <div class="col-sm-12 col-md-4">
            <button type="button" class="btn btn-warning mb-2" >
                Warning <span class="badge bg-white text-warning">4</span>
              </button>
        </div>
      </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    <h4 class="alert-heading">Assets Online</h4>
                    <hr>
                    <p class="mb-0">12</p>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Assets Offline</h4>
                    <hr>
                    <p class="mb-0">12</p>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="alert alert-warning  alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">Assets Inactive</h4>
                    <hr>
                    <p class="mb-0">12</p>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            All Assets
                            <i style="float:right" class="bi bi-download" aria-hidden="true"> CSV</i>
                        </h5>

                        <!-- <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                            </div>
                        </div> -->
                        <table class="table datatable"
                            data-id-field="code"
                            data-sort-name="value1"
                            data-sort-order="desc"
                            data-show-chart="false"
                            data-pagination="false"
                            data-show-pagination-switch="false">
                            <thead>
                                <tr>
                                    <th data-field="check" data-sortable="false"><input class="form-check-input" type="checkbox" id="check_all"></th>
                                    <th data-field="code" data-sortable="true">Name</th>
                                    <th data-field="value1" data-sortable="true">Client</th>
                                    <th data-field="value2" data-sortable="true">Type</th>
                                    <th data-field="streams" data-sortable="true">Streams <i class="bi bi-info-circle" style="color:green"></i></th>
                                    <th data-field="activation-date" data-sortable="true">Activation Date</th>
                                    <th data-field="status" data-sortable="true">Status</th>
                                    <th data-field="info" data-sortable="false"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" id="check_1"></td>
                                    <td>Voltea Prototype 1</td>
                                    <td>ABC</td>
                                    <td><i class="bi bi-hdd-fill"></i></td>
                                    <td>
                                        IN, OUT
                                    </td>
                                    <td>2022-01-29</td>
                                    <td>
                                        <i id="wifi" class="bi bi-wifi" style="color:green"></i>
                                        <i id="battery" class="bi bi-battery-full"></i>
                                    </td>
                                    <td>
                                        <i class="bi bi-vector-pen"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" id="check_2"></td>
                                    <td>Voltea Prototype 2</td>
                                    <td>XYZ</td>
                                    <td><i class="bi bi-hdd-fill"></i></td>
                                    <td>
                                        OUT
                                    </td>
                                    <td>2022-02-29</td>
                                    <td>
                                        <i id="wifi" class="bi bi-wifi-off" style="color:green"></i>
                                        <i id="battery" class="bi bi-battery-half"></i>
                                    </td>
                                    <td>
                                        <i class="bi bi-vector-pen"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" id="check_3"></td>
                                    <td>Arun Test Device</td>
                                    <td>Arun</td>
                                    <td><i class="bi bi-hdd-fill"></i></td>
                                    <td>
                                        IN, OUT
                                    </td>
                                    <td>2022-11-01</td>
                                    <td>
                                        <i id="wifi" class="bi bi-wifi-1" style="color:green"></i>
                                        <i id="battery" class="bi bi-battery"></i>
                                    </td>
                                    <td>
                                        <i class="bi bi-vector-pen"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
