@extends('layouts.app')
@section('content')

 @dump($finalFuel)
     <payment :values="{{json_encode($finalFuel)}}" :labels="{{json_encode($month)}}"></payment>

@endsection

