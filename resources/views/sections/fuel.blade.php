@extends('layouts.app')

@section('content')

    @include('include.sidebar')

    <div   class="col-md-9">
    <p>مدیریت مصرف سوخت خودرو</p>


         @foreach($petrol as $item)
         {{implode($item->petrols,',')}}
         @endforeach


    </div>

@endsection
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
