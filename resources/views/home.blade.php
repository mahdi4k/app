@extends('layouts.app')

@section('content')

             @include('include.sidebar')

            <div id="responsiveWith " class="col-md-9">

                <div class="d-inline-flex justify-content-around w-100  ">
                    <div class="card  mt-3 mr-5 border-0" style="width: 18rem;">
                        <div class="card-body card-custom">
                            <img src="{{url('img/car.svg')}}">
                            <h6 style="color: #7b7a65;margin-top: 10px;" class="card-title text-center">ماشین های
                                شما</h6>
                            <div class="cars w-100">
                                @if( $carName->isNotEmpty())
                                    @foreach ($carName ?? '' as $item)
                                        <a href="/Cars#{{$item->name}}">{{$item->name}}</a>
                                    @endforeach
                                @endif
                                <span>...</span>
                                <a class="btn btn-custom mr-2" href="{{url('/Cars')}}">مشاهده همه</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  mt-3 mr-5 border-0">
                        <div class="card-custom"
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


@endsection
<?php


//month get



//petrol get

?>

@section('script')

@endsection
