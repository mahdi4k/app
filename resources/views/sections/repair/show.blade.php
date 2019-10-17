@extends('layouts.app')

@section('content')

    @include('include.sidebar')
    <div id="responsiveWith" class="col-md-9">
        <div class="d-flex justify-content-center">
            <h1 class="mt-5 mr-2 mb-5 borderBottom">مدیریت هزینه های متفرقه خودرو<span style="font-size: 27pt;color: tomato;font-style: italic;text-shadow: rgba(72, 63, 21, 0.51)1px 1px;letter-spacing: 2px;font-weight: bolder">{{$car->name}}</span></h1>
        </div>
        <div class="w-50 mx-auto">
            <img src="{{url('img/carRepair.svg')}}">
        </div>

        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">کیلومتر کارکرده</th>
                    <th scope="col">محل تعمیر</th>
                    <th scope="col">نوع تعمیر</th>
                    <th scope="col">تاریخ تعمیر</th>
                    <th scope="col">یادداشت</th>
                </tr>
            </thead>

            @foreach($allRepair as $item)
                @if($loop->first)
                    @php
                        $nowTime =\Carbon\Carbon::now()  ;
                        $diffDate =  $nowTime->diffInDays($item->created_at);
                    @endphp
                @endif
                @endforeach
            @if($diffDate >93)<p class="alert alert-danger text-center d-flex align-items-center "><i style="margin-left: 10px;color: crimson" class='fa fa-exclamation-triangle faa-pulse animated fa-2x'></i>
                    بیش از سه ماه از آخرین معاینه فنی خودرو شما میگذرد</p> @endif
            @foreach($allRepair as $item)
            <tbody>
                <tr>
                    <td>{{$item->currentKilo}}</td>
                    <td>{{$item->repairPlace}}</td>
                    <td>{{$item->typeRepair}}</td>
                    <td>{{jdate($item->created_at)->format('%A, %d %B %y')}}</td>
                    <td>@empty($item->noteRepair)<p style="color: red">یادداشتی وجود ندارد</p> @endempty</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection
