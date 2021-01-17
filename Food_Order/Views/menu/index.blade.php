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
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Food ID</th>
                    <th>Food Name</th>
                    <th>Food Price (RM)</th>
                    <th colspan="2" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menu as $row)
                    <tr>
                        <td>{{$row['food_id']}}</td>
                        <td>{{$row['food_name']}}</td>
                        <td>{{$row['food_price']}}</td>
                        <td class="text-center">
                            <a href="{{ route('menu.edit',$row['food_id'])}}" class="btn btn-primary btn-block">Add to Cart</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
</div>
@else
    <script>window.location = "/home";</script>
@endif
@endsection