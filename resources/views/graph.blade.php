<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="colorlib.com">
    <meta name="keywords" content="Colrolib Templates">

    <!-- Title Page-->
    <title>TRG Pricing</title>

    <!-- Icons font CSS-->
    <link href="{{asset('search/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('search/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('search/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('search/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('search/css/main.css')}}" rel="stylesheet" media="all">
    <!-- Jquery JS-->
    <script src="{{asset('search/vendor/jquery/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>


</head>

<body>

    <div class="page-wrapper bg-color-1 p-t-165 p-b-120">
        <div class="wrapper wrapper--w1070">
            <div class="card card-7">
                <div class="card-body">

                    <form class="form" method="POST" action="{{route('filter')}}">
                        {{ csrf_field() }}
                        <div class="input-group input--large">
                            <label class="label">Product Model</label>
                            <input class="input--style-1 phone_model" id="autocomplete" required type="text" placeholder="Phone Model" @isset($_POST['model']) value="{{$_POST['model']}}" @endisset name="model">
                        </div>

                        <div class="input-group input--medium">
                            <label class="label">Start Date</label>
                            <input class="input--style-1" type="text" required name="checkin" @isset($_POST['checkin']) value="{{$_POST['checkin']}}" @endisset placeholder="dd/mm/yyyy" id="input-start">
                        </div>
                        <div class="input-group input--medium">
                            <label class="label">End Date</label>
                            <input class="input--style-1" type="text" required name="checkout" @isset($_POST['checkout']) value="{{$_POST['checkout']}}" @endisset placeholder="dd/mm/yyyy" id="input-end">
                        </div>
                        <div class="input-group input--medium">
                            <label class="label">Capacity (GB)</label>
                            <select class="input--style-1 custom-select capacity" type="text" required name="capacity"  id="input-end">
                                @isset($capacities)
                                    @foreach ($capacities as $capacity)
                                        <option value="{{$capacity}}">{{$capacity}}GB</option>
                                    @endforeach
                                @endisset
                            </select>
                        </div>
                        <div class="input-group input--medium">
                            <label class="label">Network    </label>
                            <div class="input-group-icon js-number-input">

                                <select class="input--style-1 select2 custom-select network"  required name="network"  id="input-end">
                                    <option value="Unlocked">Unlocked</option>
                                    <option value="EE">EE</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Other">Other</option>
                                    <option value="Three">Three</option>
                                    <option value="Tesco">Tescor</option>
                                    <option value="Vodafone">Vodafone</option>
                                    <option value="Virgin">Virgin</option>
                                    <option value="T-mobile">T-Mobile</option>
                                    <option value="O2">O2</option>
                                    <option value="giffgaff">giffgaff</option>
                                </select>
                            </div>
                        </div>

                        <button class="btn-submit" type="submit">search</button>
                    </form>
                </div>
            </div>
        </div>
        @if(!empty($graph_datas))
        <div class="graph">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="toogleCheckbox" checked/>
                <label class="form-check-label" for="toogleCheckbox">Show/Hide All</label>
            </div>
            <div id="chartContainer">

            </div>
        </div>
    <script src="{{asset('search/js/chart.js')}}"></script>


    <script>
        var network = "{{$_POST['network']}}";
        $('.custom-select.network').val(network);
        var capacity = "{{$_POST['capacity']}}";
        $('.custom-select.capacity').val(capacity);

        var graphdatas =  <?php echo json_encode($graph_datas)?> ;
        var datas ;
        datas = new Array();
        var merchants = <?php echo json_encode($merchants)?>;
        for(var i in graphdatas){
            var graphdata = graphdatas[i];

            for(j in graphdata){
                graphdata[j]['x'] = new Date(graphdata[j]['x']);
            }
            var data = {
                    type:'line',
                    name: merchants[i],
                    showInLegend: true,
                    markerSize: 8,
                    stacked: false,
                    yValueFormatString: '\xA3' + '#',
                    dataPoints: graphdata
                }
                // console.log(graphdata);
            datas.push(data);
        }
        console.log(datas);

        var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light2",
            animationEnabled: true,
            zoomType: "xy",
            zoomEnabled: true,
            title: {
                text: "{{$product}}"
            },

            axisX: {
                valueFormatString: "DD/MM",
                title:'Date',
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true
                }
            },
            axisY: {
                title: "Price",
                prefix: '\xA3',
                crosshair: {
                    enabled: true,
                    snapToDataPoint: true
                }
            },
            toolTip: {
                shared: true
            },
            legend: {
                cursor: "pointer",
                verticalAlign: "top",
                horizontalAlign: "center",
                itemclick: toogleDataSeries
            },
            data: datas
        });
        chart.render();

        $('#toogleCheckbox').change(function(e){
            console.log(e.target.checked);
            datas = [];
                for(var i in graphdatas){
                var graphdata = graphdatas[i];

                for(j in graphdata){
                    graphdata[j]['x'] = new Date(graphdata[j]['x']);
                }
                var data = {
                        type:'line',
                        name: merchants[i],
                        showInLegend: true,
                        markerSize: 8,
                        stacked: false,
                        yValueFormatString: '\xA3' + '#',
                        dataPoints: graphdata,
                        visible: e.target.checked
                    }
                    // console.log(graphdata);
                datas.push(data);
            }
            console.log(datas);

            var chart = new CanvasJS.Chart("chartContainer", {
                theme: "light2",
                animationEnabled: true,
                zoomType: "xy",
                zoomEnabled: true,
                title: {
                    text: "{{$product}}"
                },

                axisX: {
                    valueFormatString: "DD/MM",
                    title:'Date',
                    crosshair: {
                        enabled: true,
                        snapToDataPoint: true
                    }
                },
                axisY: {
                    title: "Price",
                    prefix: '\xA3',
                    crosshair: {
                        enabled: true,
                        snapToDataPoint: true
                    }
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    cursor: "pointer",
                    verticalAlign: "top",
                    horizontalAlign: "center",
                    itemclick: toogleDataSeries
                },
                data: datas
            });
            chart.render();
            function toogleDataSeries(e){
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else{
                    e.dataSeries.visible = true;
                }

                chart.render();
            }
        });
        function toogleDataSeries(e){
            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                e.dataSeries.visible = false;
            } else{
                e.dataSeries.visible = true;
            }

            chart.render();
        }


    </script>
    @elseif(!empty($error_msg))
        <div class="error-block">
            <p>{{$error_msg}}</p>
        </div>
        <script>

            var network = "{{$_POST['network']}}";
            $('.custom-select.network').val(network);
            var capacity = "{{$_POST['capacity']}}";
            $('.custom-select.capacity').val(capacity);

         </script>
    @endif

    <script>
        $( "#autocomplete" ).autocomplete({
            source: <?php echo json_encode($products) ?>,
            select: function(e, ui) {
                valplus = ui.item.value.replace(/ /g,"_");
                val = valplus.replace(/\+/g, '*');
                console.log(val);
                $('.custom-select.capacity').load('graph/capacity_filter?val='+val);
            }
          });
    </script>

</div>

    <!-- Vendor JS-->
    <script src="{{asset('search/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('search/vendor/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('search/vendor/bootstrap-wizard/bootstrap.min.js')}}"></script>
    <script src="{{asset('search/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
    <script src="{{asset('search/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('search/vendor/datepicker/daterangepicker.js')}}"></script>


    <!-- Main JS-->
    <script src="{{asset('search/js/global.js')}}"></script>


</body>

</html>
<!-- end document-->
