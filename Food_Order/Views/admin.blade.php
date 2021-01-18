@extends('master')

@section('content')
@if(auth()->check())
<style>
.option{
    text-align: center;
}

</style>
<div class="row">
    <div class="col-sm-12">
        <h3 class="display-5 text-center">Admin</h3>
    </div>
    <div class="col-sm-12">
        <div class="option">
            <a href="{{url('/payment/show')}}">Credit Card</a><br>
            <a href="{{url('/transaction/show')}}">Online Banking/FPX</a><br>
            <a href="{{url('/menu')}}">Modify Menu</a><br>
            <a href="{{url('/customer')}}">View Customer Data</a><br>
            <a href="#">View Customer Order</a><br>
            <br><br>
        </div>
    </div>
</div>
@else
    <script>window.location = "/home";</script>
@endif
@endsection