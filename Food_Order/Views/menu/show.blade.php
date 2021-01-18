@extends('master')

@section('content')
@if(auth()->check())
<div class="col-sm-8 offset-sm-2">
    <br>
    <h3 class="display-5 text-center">Menu</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
    @endif
    @if(session()->get('success'))
        <div class="alert alert-success text-center">
        {{ session()->get('success') }}  
        </div>
    @endif
        <form method="POST" action="{{ route('order.store')}}">
        <table class="table table-striped">
            @csrf
                <thead>
                    <tr>
                    <th>Food ID</th>
                    <th>Food Name</th>
                    <th>Food Price (RM)</th>
                    <th colspan="2" class="text-center">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menu as $row)
                    <tr>
                        <td>{{$row['food_id']}}</td><input type="hidden" value="{{ $row['food_id'] }}" name="food_id">
                        <td>{{$row['food_name']}}</td><input type="hidden" value="{{ $row['food_name'] }}" name="food_name">
                        <td>{{$row['food_price']}}</td><input type="hidden" value="{{ $row['food_price'] }}" name="food_price">
                        <td class="text-center">
                            <input type="number" class="form-control" name="quantity" min="0" max="50"/>
                        </td>
                    </tr>
                    @endforeach
                </tbody>    
        </table>
        <div class="row justify-content-center">         
            <a href="{{ url('/method')}}" class="btn btn-primary">Pay Now</a>&nbsp;&nbsp;                 
            <button type="submit" class="btn btn-primary text-center">Add to cart</button>
        </div>
        </form>
</div>
@else
    <script>window.location = "/home";</script>
@endif
@endsection