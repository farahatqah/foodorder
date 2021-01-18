@extends('master')

@section('content')
@if(auth()->check())
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Enter Your Details</h3>
        <p style="color:red;">Please enter the recipient details first to proceed to the menu page</p>
        <div>
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
        </div>
        <form method="post" action="{{ route('customer.store') }}">
        @csrf
            <div class="form-group">    
                <label for="c_name">Recipient Name</label>
                <input type="text" class="form-control" name="c_name"/>
            </div>
            <div class="form-group">    
                <label for="c_phoneNo">Contact Number</label>
                <input type="text" class="form-control" name="c_phoneNo"/>
            </div>
            <div class="form-group">    
                <label for="c_address">Address to Deliver</label>
                <input type="text" class="form-control" name="c_address"/>
            </div>
            <div class="row justify-content-center">
                <a href="{{ url('/')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;                     
                <button type="submit" class="btn btn-primary text-center">Save Details</button>
            </div>
        </form>
    </div>
</div>
@else
    <script>window.location = "/home";</script>
@endif
@endsection