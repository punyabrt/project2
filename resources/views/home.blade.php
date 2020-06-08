@extends('layouts.app')

<style type="text/css">
  .avatar_pic{
      border-radius: 50%;
      max-width: 200px;  
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%; 

  }

  .btn-editprofile {
  color: #212529;
  background-color: #6cb2eb;
  border-color: #6cb2eb;
}

.btn-editprofile:hover {
  color: #fff;
  background-color: #4aa0e6;
  border-color: #3f9ae5;
}

.btn-editprofile:focus,
.btn-editprofile.focus {
  color: #fff;
  background-color: #4aa0e6;
  border-color: #3f9ae5;
  box-shadow: 0 0 0 0.2rem rgba(97, 157, 206, 0.5);
}

.btn-editprofile.disabled,
.btn-editprofile:disabled {
  color: #212529;
  background-color: #6cb2eb;
  border-color: #6cb2eb;
}

.btn-editprofile:not(:disabled):not(.disabled):active,
.btn-editprofile:not(:disabled):not(.disabled).active,
.show > .btn-editprofile.dropdown-toggle {
  color: #fff;
  background-color: #3f9ae5;
  border-color: #3495e3;
}

.btn-editprofile:not(:disabled):not(.disabled):active:focus,
.btn-editprofile:not(:disabled):not(.disabled).active:focus,
.show > .btn-editprofile.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(97, 157, 206, 0.5);
}
  
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You are Login!</div>

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

                    
                           <center>
                                           @if(!empty($profile))
                                           <img src="{{$profile->avatar}}" alt="" class="avatar_pic">

                                           @else
                                           <img src="{{  url('assets/img/avatar.png') }}" alt="" class="avatar_pic">
                            
                                           @endif 
                                             

                                          <div class="row"  style="font-size:120%">

                                              <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                     <strong>Name:</strong>
                                                        {{auth()->user()->name}}
                                                  </div>
                                             </div>
                                             <div class="col-xs-12 col-sm-12 col-md-12">
                                                  <div class="form-group">
                                                   <strong>Email:</strong>
                                                     {{auth()->user()->email}}
                                                  </div>
                                             </div>
                                          </div>   <!--row-->
                                      
                      
                           
      
                    <a class="btn btn-editprofile" href="{{ route('users2.profile') }}">แก้ไขข้อมูลส่วนตัว</a>
                           </center>

                         

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                 



