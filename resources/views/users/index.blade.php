@extends('layouts.app')
@section('content')

       

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


{!! $data->render() !!}


      
<div class="container" >

    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users Management</div>
                  <div class="card-body">
   <!---content---->
                
                  <table class="table table-bordered">
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Roles</th>
                      <th width="280px">Action 
                          <span class="pull-right" style=" float:right;text-align:right;">
                              <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                          </span>
                      </th>
                    </tr>
               @foreach ($data as $key => $user)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>

                      <td>
                         @if(!empty($user->getRoleNames()))
                             @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                             @endforeach
                         @endif
                      </td>
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

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


