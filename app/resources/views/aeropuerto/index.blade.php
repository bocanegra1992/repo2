@extends('aeropuertos.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.7 CRUD Example from scratch - :)</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('aeropuertos.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($aeropuertos as $aeropuertos)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $aeropuertos->name }}</td>
            <td>{{ $aeropuertos->detail }}</td>
            <td>
                <form action="{{ route('aeropuerto.destroy',$aeropuertos->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('aeropuerto.show',$aeropuertos->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('aeropuerto.edit',$aeropuertos->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $aeropuertos->links() !!}
      
@endsection
