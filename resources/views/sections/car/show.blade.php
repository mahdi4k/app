@extends('layouts.app')
@section('content')

    @include('include.sidebar')
    <div id="responsiveWith" class="col-md-9">
        <div class="d-flex justify-content-center">

            <h1  class="mt-5 mr-2 mb-5 borderBottom">مدیریت مصرف سوخت  {{$justName }}</h1>
        </div>

     <payment :values="{{json_encode($finalFuel)}}" :labels="{{json_encode($month)}}"></payment>

        <h2 class="mt-5 mb-4 text-center">اطلاعات تکمیلی</h2>
        <table class="table text-center mt-3 mb-5">
            <thead class="thead-dark">
            <tr>
                <th scope="col">حجم باک</th>
                <th scope="col">بنزین زده شده</th>
                <th scope="col">کیلومتر کارکرده</th>
                <th scope="col">هزینه سوخت</th>
                <th scope="col">تاریخ</th>
            </tr>
            </thead>
            <tbody>

            @foreach($fuelCar as $item)
            <tr>
                <td>{{$item->fuelTank}} لیتر </td>
                <td>{{$item->currentPetrol}} لیتر </td>
                <td>{{$item->currentKilo}} کیلومتر </td>
                <td>{{$item->paymentFuel}} هزار تومان </td>
                <td>{{jdate($item->date)->format('%A, %d %B %y')}} </td>
            </tr>
            @endforeach

            </tbody>
        </table>



    </div>
@endsection

