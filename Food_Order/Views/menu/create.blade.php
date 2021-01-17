@extends ('master')

@section('content')

@if(auth()->check())
<div class="row">
    <div class="col-sm-12">
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
    </div>
    <div class="col-sm-8 offset-sm-2">
    <br />
    <h3 class="display-5 text-center">Add New Food Details</h3>
        <form method="post" action="{{route('menu.store')}}">
            @csrf
            <div class="form-group">    
                <label for="food_name">Food Name</label>
                <input type="text" class="form-control" name="food_name"/>
            </div>
            <div class="form-group">    
                <label for="food_price">Food Price</label>
                <input type="text" class="form-control" name="food_price"/>
            </div>
            <div class="row justify-content-center">
                <a href="{{ route('menu.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;                        
                <button type="submit" class="btn btn-primary text-center">Save Details</button>
            </div>
        </form>
    </div>
</div>
@else
    <script>window.location = "/home";</script>
@endif

@endsection