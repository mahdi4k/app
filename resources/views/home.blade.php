@extends('layouts.app')

@section('content')

    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-md-3 panelSide h-100">
                <div class="mr-4">
                    <img src="{{url('img/download.jpg')}}">
                    <p>مدیریت ماشین</p>
{{Auth::user()->name}}
                </div>
                <a href="{{route('logout')}}">خروج</a>
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
                            <h6 style="color: #7b7a65;margin-top: 10px;" class="card-title text-center">ماشین های شما</h6>
                            <div class="cars w-100">
                                <a  href="#">دنا</a>
                                <a  href="#">سمند</a>
                                <span>...</span>
                                <a class="btn btn-custom mr-2" href="#">مشاهده همه</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  mt-3 mr-5 border-0" style="width: 18rem;">
                        <div class="card-custom" id="container" style="min-width: 310px; height: 300px; margin: 0 auto;direction: rtl">

                        </div>

                    </div>
                </div>

                <div class="d-inline-flex justify-content-around w-100  ">

                </div>
            </div>
        </div>
    </div>

@endsection
<?php
    $date = '';
    $petro='';

foreach ($date_list as $key=>$value){
$date .="'$value',";
}
foreach ($petrol as $item){
      foreach ($item as $item2){
         $petro .= $item2->currentPetrol.',' ;

      }
}

 $finalPetrol = ltrim($petro,',');

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
                categories: [<?=$date?> ]
            },
            yAxis: {
                title: {
                    text: 'مصرف این ماه'
                }
            },

            series: [{
                name: '{{jdate('today')->format(' %B  ')}}',
                data: [<?= $finalPetrol ?>]
            } ]
        });
    </script>
@endsection
