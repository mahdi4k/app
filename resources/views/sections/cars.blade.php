@extends('layouts.app')

@section('content')

            @include('include.sidebar')

            <div id=myGroup class="col-md-9">
                <h1 class="mt-5 mr-2 mb-5">ماشین های شما</h1>
                <div class="d-flex justify-content-around w-100  ">
                    <ul class="nav nav-justified w-85" role="tablist">
                        @foreach($Cars as  $item)
                            <li style="margin-left: 50px" class="nav-item card-custom    ">
                                <a style="cursor: default"  class="nav-link " data-toggle="tab" href="#register" role="tab"
                                   aria-controls="home" aria-selected="true">
                                    <div>
                                        <img style="width:100%" alt="CarDetail" src="{{url('img/soloCar.svg')}}">
                                        <p style="color: #3b4151">{{$item->name}}</p>
                                        <h6 style="color: #3b4151">{{$item->brand}}</h6>

                                        <button  class="btn btn-custom border-0 collapsed" data-toggle="collapse"
                                                data-target="#car-{{$item->id}}"
                                                aria-expanded="false" aria-controls="car-{{$item->id}}">مشاهده اطلاعات
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
                                <div class="collapse  @if($loop->first) show @endif" data-parent="#myGroup" id="car-{{$item->id}}">
                                    <div class="card card-body">


                                        <div class="d-inline-block justify-content-around">


                                            <div class="carDetail">نام خودرو :{{$item->name}}</div>


                                            <div class="carDetail">برند خودرو :{{$item->brand}}</div>


                                            <div class="carDetail"> سال ساخت :{{$item->yearMake}}</div>


                                            <div class="carDetail"> حجم موتور :{{$item->engineVolume}}</div>


                                            <div class="carDetail">شماره شاسی :{{$item->chassisNumber}} </div>

                                             <div class="carDetail"> شماره پلاک :{{$item->carTag}}</div>

                                            <div class="carDetail"> کیلومتر کارکرده :{{$item->currentKilo}}</div>

                                            <div class="carDetail"> حجم باک :{{$item->BuckVolume}}</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


@endsection

