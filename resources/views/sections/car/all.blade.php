@extends('layouts.app')

@section('content')

    @include('include.sidebar')

    <div id="myGroup" class="col-md-9">
        <div class="d-flex justify-content-center">
            <h1  class="mt-5 mr-2 mb-5 borderBottom">ماشین های شما</h1>
        </div>

        <div class="d-flex justify-content-around w-100  ">
            <ul id="MyCars"  class="nav nav-justified w-85" role="tablist">
                @foreach($Cars as  $item)
                    <li  style="margin-left: 50px" class="nav-item card-custom @if($loop->first) addBoxShadow  @endif   ">
                        <a style="cursor: default" class="nav-link " data-toggle="tab"  role="tab"
                           aria-controls="home" aria-selected="true">
                            <div>
                                <img style="width:100%" alt="CarDetail" src="{{url('img/soloCar.svg')}}">
                                <p style="color: #3b4151">{{$item->name}}</p>
                                <h6 style="color: #3b4151">{{$item->brand}}</h6>

                                <button class="btn btn-custom border-0 " data-toggle="collapse"
                                        data-target="#car-{{$item->id}}"
                                        >مشاهده اطلاعات
                                </button>

                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>


        @foreach($Cars as $item)
            <div class="d-inline-block w-100">
                <div class="row">
                    <div class="col">
                        <div class="collapse  @if($loop->first) show @endif" data-parent="#myGroup"
                             id="car-{{$item->id}}">
                            <div class="card card-body">


                                <div class="d-inline-block justify-content-around">


                                    <div class="carDetail"><span class="carDetail-span">نام خودرو</span>
                                        : {{$item->name}}</div>


                                    <div class="carDetail"><span class="carDetail-span">برند خودرو</span>
                                        : {{$item->brand}}</div>


                                    <div class="carDetail"><span class="carDetail-span"> سال ساخت</span>
                                        : {{jdate($item->yearMake)->format('%Y')}}</div>


                                    <div class="carDetail"><span class="carDetail-span"> حجم موتور</span>
                                        : {{arabic_w2e($item->engineVolume)}} </div>


                                    <div class="carDetail"><span class="carDetail-span">شماره شاسی</span>
                                          : {{arabic_w2e($item->chassisNumber)}} </div>

                                    <div class="carDetail"><span class="carDetail-span">شماره پلاک</span>
                                        : {{arabic_w2e($item->carTag)}} </div>

                                    <div class="carDetail"><span class="carDetail-span">کیلومتر کارکرده</span>
                                        : {{arabic_w2e($item->currentKilo)}}</div>

                                    <div class="carDetail"><span class="carDetail-span">حجم باک</span>
                                         : {{arabic_w2e($item->BuckVolume)}}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>

    {{--<div class="accordion" id="accordionExample">

        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
            Collapsible Group Item #1
        </button>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
        </div>
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="false" aria-controls="collapseThree">
            Collapsible Group Item #3
        </button>
        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
        </div>
    </div>--}}
@endsection

