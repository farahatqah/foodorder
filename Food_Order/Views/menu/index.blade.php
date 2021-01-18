@extends('master')

@section('content')
@if(auth()->check())
    <div class="row">
        <div class="col-sm-12">
            @if(session()->get('success'))
                <div class="alert alert-success text-center">
                {{ session()->get('success') }}  
                </div>
            @endif
        </div>
        <div class="col-sm-12">
            <br />
            <h3 class="display-5 text-center">Food List</h3>    
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
                            <a href="{{ route('menu.edit',$row['food_id'])}}" class="btn btn-primary btn-block">Edit</a>
                        </td>
                        <td class="text-center">
                            <form action="{{ route('menu.destroy', $row['food_id'])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-block" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                <a style="margin: 19px;" href="{{ route('menu.create')}}" class="btn btn-primary">Add Food</a>
                <a href="{{url('/admin')}}" class="btn btn-primary">Back</a>&nbsp;&nbsp;   
            </div>
        </div>
    </div>
@else
    <script>window.location = "/home";</script>
@endif
@endsection