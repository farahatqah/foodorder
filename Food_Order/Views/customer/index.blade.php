@extends('master')

@section('content')
@if(auth()->check())


</style>
<div class="row">
    <div class="col-md-12">
      <br />
      <h3 class="display-5 text-center">Customer Record</h3>
      @if($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
      @endif

      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Address</th>
            <th>PhoneNo</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($customer as $row)
          <tr>
            <td>{{$row['c_name']}}</td>
            <td>{{$row['c_address']}}</td>
            <td>{{$row['c_phoneNo']}}</td>
            <td class="text-center">
              <form action="{{ route('customer.destroy', $row['cust_id'])}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-block" type="submit">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="row justify-content-center">
          <a href="{{url('/admin')}}" class="btn btn-primary">Back</a>&nbsp;&nbsp;                     
      </div>
    </div>
</div>

@else
    <script>window.location = "/home";</script>
@endif
@endsection