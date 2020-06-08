@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> User profile</div>

                <div class="card-body">
                    @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item active">
                                     {{$error}}
                                  </li>
                            @endforeach
                            
                          </ul>
                          @endif

                          
                          <form action="{{route('users2.profile.update')}}" method="POST" enctype="multipart/form-data" >
                            {{ csrf_field()}}
    
                            <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <input type="file" class="form-control-file" name="avatar">
                                  </div>
    
    
    
                            <div class="form-group">
                              <label for="name">User</label>
                              <input type="text" class="form-control" name="name"  value="{{$user->name}}">
                             </div>
                            
                             <div class="form-group">
                                    <label for="name">Email</label>
                                    <input type="text" class="form-control" name="email"  value="{{$user->email}}">
                                   </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password"  value="">
                                </div>
    
                            <button type="submit" class="btn btn-primary">Update</button>
                          </form>  
                         
             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
