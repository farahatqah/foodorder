@extends('master')

@section('content')

    <div class="option">
        <a href="{{url('/payment/create')}}">Credit Card</a><br>
        <a href="{{url('/transaction/create')}}">Online Banking/FPX</a><br>
    </div>

@endsection