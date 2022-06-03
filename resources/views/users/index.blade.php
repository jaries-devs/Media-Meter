@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>  
    </div>
</div>
<div style="display:flex;margin-bottom: 20px;">
  <div class="input-group">
    {!! Form::open(['method' => 'GET','route' => ['users.index'],'style'=>'display:flex;margin: 0;', 'id'=>'search-form']) !!}               
    <input type="text" name="search" class="input-search form-control" placeholder="Search">
    <div class="input-group-append">
      {!! Form::button('<i class="fa fa-search"></i>', ['type' => 'submit', 'class' => 'search btn btn-secondary', 'style'=>'height: 40px;']) !!}
    </div>
    {!! Form::close() !!}
  </div>
  <div>
      <a class="btn btn-info" href="{{ route('users.index') }}" style="height: 40px;white-space: nowrap;"> Show All</a>
  </div>
  <div>

    <a class="btn btn-success" href="{{ route('users.create') }}" style="height: 40px;white-space: nowrap;"> Create New User</a>

  
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
   <th>Email</th>
   <th>Gender</th>
   <th>Age</th>
   <th width="375px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email}}</td>
    <td>{{ $user->gender}}</td>
    <td>{{ $user->age }}</td>
    <td>

        
            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
          {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}


      
    </td>
  </tr>
 @endforeach
</table>


{{-- {!! $data->render() !!} --}}

{!! $data->links('pagination::bootstrap-5') !!}

@endsection
