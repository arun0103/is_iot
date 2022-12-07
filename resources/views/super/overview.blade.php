@extends('layouts.app')

@section('content')
<main id="main" class="main">
    <section class="section">
    <div id="loading"><div class="spinner-grow" role="status">
                <span class="visually-hidden"  style="min-width:100%;min-height:100%; z-index:1000; align:center">Loading...</span>
        </div>
    </div>
    <div class="row" hidden>
        <div class="col-md-12">
            <h3 style="text-align:center">WATER USAGE INSIGHTS</h3>
        </div>
        <div class="col-md-3 col-sm-12">
            <canvas id="doughnutChart" style="max-height: 120px; display: block; box-sizing: border-box; height: 120; width: 200;" width="200" height="120"></canvas>
            <h4 style="text-align:center"><b style="padding-top:5px">3 </b>assets monitored</h4>
        </div>
        <div class="col-md-3 col-sm-12" style="padding:10px">
            <div class="row" style="text-align:center">
                <div class="col-md-12"><b style="font-size:25px; padding-top:10px">-</b></div>
                <div class="col-md-12"><b style="font-size:25px; ">0</b> litres</div>
                <div class="col-md-12">(0 litres per day)</div><br/>
                <div class="col-md-12" style="padding-top: 15px;"><h4>LAST 7 DAYS</h4></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12" style="padding:10px">
            <div class="row" style="text-align:center">
                <div class="col-md-12"><b style="font-size:25px">-</b></div>
                <div class="col-md-12"><b style="font-size:25px; ">0</b> litres</div>
                <div class="col-md-12">(0 litres per day)</div><br/>
                <div class="col-md-12" style="padding-top: 15px;"><h4>LAST 30 DAYS</h4></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12" style="padding:10px">
            <div class="row" style="text-align:center">
                <div class="col-md-12"><b style="font-size:25px">-</b></div>
                <div class="col-md-12"><b style="font-size:25px; ">0</b> litres</div>
                <div class="col-md-12">(0 litres per day)</div><br/>
                <div class="col-md-12" style="padding-top: 15px;"><h4>LAST 12 MONTHS</h4></div>
            </div>
        </div>
    </div>

    <div class="row" hidden style="max-height:250px; background-color:#d1e7dd">
        <div class="col-md-12">
            <h3 style="text-align:center; margin-top:15px">ENVIRONMENTAL IMPACT</h3>
        </div>

        <div class="col-md-4 col-sm-12">
            <div class="row" style="text-align:center; margin-bottom:10px">
                <div class="col-md-12">
                    <i class="ri ri-6x ri-recycle-fill" style="width:250px;height:250px"></i>

                </div>
                <div class="col-md-12"><b>10</b> items recycled</div>

            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="row" style="text-align:center; margin-bottom:10px">
                <div class="col-md-12">
                    <i class="ri ri-6x ri-alarm-warning-fill" style="width:250px;height:250px"></i>

                </div>
                <div class="col-md-12"><b>0</b> unplanned interventions avoided</div>

            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="row" style="text-align:center; margin-bottom:10px">
                <div class="col-md-12">
                    <i class="ri ri-6x ri-truck-fill" style="width:250px;height:250px"></i>

                </div>
                <div class="col-md-12"><b>0</b> automated orders sent</div>

            </div>
        </div>

    </div>
    <div class="row" hidden style="max-height:250px">
        <div class="col-md-12">
            <h3 style="text-align:center;margin-top:15px">Operations</h3>
        </div>

        <div class="col-md-3 col-sm-12">
            <div class="row" style="text-align:center">
                <div class="col-md-12">
                    <i class="ri ri-6x ri-recycle-fill" style="width:250px;height:250px"></i>

                </div>
                <div class="col-md-12"><b>10</b> items recycled</div>

            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="row" style="text-align:center">
                <div class="col-md-12">
                    <i class="ri ri-6x ri-alarm-warning-fill" style="width:250px;height:250px"></i>

                </div>
                <div class="col-md-12"><b>0</b> unplanned interventions avoided</div>

            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="row" style="text-align:center">
                <div class="col-md-12">
                    <i class="ri ri-6x ri-truck-fill" style="width:250px;height:250px"></i>

                </div>
                <div class="col-md-12"><b>0</b> automated orders sent</div>

            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="row" style="text-align:center">
                <div class="col-md-12">
                    <i class="ri ri-6x ri-truck-fill" style="width:250px;height:250px"></i>

                </div>
                <div class="col-md-12"><b>0</b> automated orders sent</div>

            </div>
        </div>

    </div>


    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new Chart(document.querySelector('#doughnutChart'), {
            type: 'doughnut',
            data: {
                labels: [
                'Offline',
                'Inactive',
                'Active'
                ],
                datasets: [{
                label: 'Assets Overview',
                data: [1, 1, 1],
                backgroundColor: [
                    'rgb(248 215 218)',
                    'rgb(255, 243, 205)',
                    'rgb(209, 231, 221)'
                ],
                hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false,
                    }
                }
            }
            });
        });

        $(document).ready(function () {
            $('.row').attr('hidden',false);
            $('#loading').attr('hidden',true);
        });
    </script>
    <script src="{{asset('assets/vendor/chart.js/chart.min.js')}}"></script>
    </section>
</main>
@endsection
