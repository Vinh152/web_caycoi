@extends("admin.layout.layout")
@section("main")
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Sản phẩm</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{count($count_sanpham)}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Doanh thu</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{count($count_giohang)}} đơn ->
                                    
                                    @php
                                    $tong_doanh_thu=0;
                                        foreach ($count_giohang as $tong_don) {
                                            $tong_doanh_thu=$tong_doanh_thu+$tong_don->tong_don_hang;
                                        }
                                        echo number_format($tong_doanh_thu);
                                    @endphp
                                    đ</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Nhân viên</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{count($count_nhanvien)}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Tin tức</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{count($count_tintuc)}}</h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>

                    <div id="chart"></div>
                </div>
    
            </div>
            <!-- #/ container -->
            <script src = "https://code.highcharts.com/highcharts.js" ></script> 
    <script>
        // Set up the chart
        let thang1={{$thang1}};
        let thang2={{$thang2}};
        let thang3={{$thang3}};
        let thang4={{$thang4}};
        let thang5={{$thang5}};
        let thang6={{$thang6}};
        let thang7={{$thang7}};
        let thang8={{$thang8}};
        let thang9={{$thang9}};
        let thang10={{$thang10}};
        let thang11={{$thang11}};
        let thang12={{$thang12}};
        let tittle="Bảng thống kê doanh thu của năm "+ {{$year}};
const chart = new Highcharts.Chart({
    chart: {
        renderTo: 'chart',
        type: 'column',
        options3d: {
            enabled: true,
            alpha: 15,
            beta: 15,
            depth: 50,
            viewDistance: 25
        }
    },
    xAxis: {
        categories: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6',
            'Tháng 7', 'Tháng 8', '9', 'Tháng 10', 'Tháng 11', 'Tháng 12']
    },
    yAxis: {
        title: {
            enabled: false
        }
    },
    tooltip: {
        headerFormat: '<b>{point.key}</b><br>',
        pointFormat: 'Doanh thu: {point.y}'
    },
    title: {
        text: tittle
    },
    subtitle: {
        text: 'Source: ' +
            '<a href="https://ofv.no/registreringsstatistikk"' +
            'target="_blank">OFV</a>'
    },
    legend: {
        enabled: false
    },
    plotOptions: {
        column: {
            depth: 25
        }
    },
    series: [{
        data: [thang1, thang2, thang3, thang4, thang5, thang6, thang7, thang8, thang9, thang10, thang11, thang12],
        colorByPoint: true
    }]
});

function showValues() {
    document.getElementById('alpha-value').innerHTML = chart.options.chart.options3d.alpha;
    document.getElementById('beta-value').innerHTML = chart.options.chart.options3d.beta;
    document.getElementById('depth-value').innerHTML = chart.options.chart.options3d.depth;
}

// Activate the sliders
document.querySelectorAll('#sliders input').forEach(input => input.addEventListener('input', e => {
    chart.options.chart.options3d[e.target.id] = parseFloat(e.target.value);
    showValues();
    chart.redraw(false);
}));

showValues();
    </script>
    @endsection