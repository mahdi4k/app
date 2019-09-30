@extends('layouts.app')

@section('content')

    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-md-3 panelSide h-100">
                <div class="mr-4">
                    <img style="opacity: .5;" alt="car management" src="{{url('img/download.jpg')}}">
                    <p>مدیریت ماشین</p>
                    <a class="logoutBtn" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </div>
                <div class="d-flex flex-column align-items-center">
                    <img width="50" alt="user" src="{{url('img/profile.svg')}}">
                    <p>{{Auth::user()->name}}</p>
                 </div>

                <ul class="list-group-flush pr-2 mt-3">
                    <li class="list-group-item "><i class="fa fa-home  "></i><a href="#">خانه</a></li>
                    <li class="list-group-item "><i class="fa fa-car  " aria-hidden="true"></i><a href="">ماشین های
                            شما</a></li>
                    <li class="list-group-item "><i class="fa fa-tachometer  " aria-hidden="true"></i><a href="#">مدیریت
                            سوخت ماشین</a></li>
                    <li class="list-group-item "><i class="fa fa-wrench  " aria-hidden="true"></i><a href="#">تعمیرات
                            ماشین</a></li>
                    <li class="list-group-item "><i class="fa fa-money  " aria-hidden="true"></i><a href="#">هزینه های
                            دیگر</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="d-inline-flex justify-content-around w-100  ">
                    <div class="card  mt-3 mr-5 border-0" style="width: 18rem;">
                        <div class="card-body card-custom">
                            <img src="{{url('img/car.svg')}}">
                            <h6 style="color: #7b7a65;margin-top: 10px;" class="card-title text-center">ماشین های
                                شما</h6>
                            <div class="cars w-100">
                                <a href="#">دنا</a>
                                <a href="#">سمند</a>
                                <span>...</span>
                                <a class="btn btn-custom mr-2" href="#">مشاهده همه</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  mt-3 mr-5 border-0">
                        <div class="card-custom" id="container"
                             style="width: 288px; height: 300px; margin: 0 auto;direction: rtl">

                        </div>

                    </div>
                </div>

                <div class="d-inline-flex justify-content-around w-100  ">
                    <div class="card  mt-3 mr-5 border-0" style="width: 18rem;">
                        <div class="card-body card-custom">
                            <img alt="carRepair" src="{{url('img/rep.svg')}}">
                            <h6 style="color: #7b7a65;margin-top: 10px;" class="card-title text-center">تعمیرات
                                ماشین</h6>
                            <sub>مشاهده آخرین وضعیت ماشین</sub>
                            <div class="cars w-100">

                                <a class="btn btn-custom mr-2" href="#">مشاهده همه</a>
                            </div>
                        </div>
                    </div>

                    <div class="card  mt-3 mr-5 border-0" style="width: 18rem;">
                        <div class="card-body card-custom">
                            <img alt="carRepair" src="{{url('img/otherCost.svg')}}">
                            <h6 style="color: #7b7a65;margin-top: 10px;" class="card-title text-center">هزینه های
                                دیگر</h6>

                            <div class="cars w-100">

                                <a style="width: 64px" class="btn btn-custom mr-2" href="#">ادامه</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
<?php
$date = '';
$petro = '';

//month get
foreach ($date_list as $key => $value) {
    $withMonth = $value;
    $date .= "'$withMonth',";

}
//petrol get

foreach ($petrol as $item) {

    $petro .= $item . ',';
}


?>
@section('script')
    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'میانگین میزان مصرف بنزین'
            },

            xAxis: {
                categories: [ {!! $date !!}]
            },
            yAxis: {
                title: {
                    text: 'مصرف این ماه'
                }
            },
            tooltip: {
                useHTML: true,
                formatter: function () {
                    var s = '<p style="font-family: iransansLight; text-align: right;"><b>' + this.x + '</b>';

                    $.each(this.points, function () {
                        s += '<br/>' + 'مصرف' + ': ' +
                            this.y + 'لیتر';
                    });

                    return s + '</p>';
                },
                shared: true
            },

            series: [{
                name: '{{jdate('today')->format(' %B  ')}}',
                data: [<?= $petro ?>]
            }]
        });
    </script>
@endsection
