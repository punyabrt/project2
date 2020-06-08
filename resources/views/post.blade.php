@extends('welcome')
<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/post/responsive.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/post/styles.css'); ?>">

@section('main-content')

 
                 @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item active">
                                     {{$error}}
                                  </li>
                            @endforeach
                            
                          </ul>
                          @endif

<div class="slider-top" style = "height: 400px; width: 100%; background-size: cover;">
     <img src="assets/img/2.jpg" alt="Blog Image">
	</div><!-- slider -->

	<section class="post-area">
		<div class="container">

			<div class="row">

				<div class="col-lg-1 col-md-0"></div>
				<div class="col-lg-10 col-md-12">

					<div class="main-post">

					@foreach ($products as $product)
						<div class="post-top-area">
							<p class="para">

                    <div class="row"  style="font-size:200%">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                        
                          {{$product->name}}
                        </div>
                     </div>
					 </p>

						</div><!-- post-top-area -->



					
        
        <div class="data-detail" >
			<p class="round3" style = "border: 2px solid blue;border-radius: 15px;">
          
                <strong>ที่อยู่:</strong>
                {{ $product->address }}
                  
				  <br><br>
           
                <strong>เวลาทำการ:</strong>
                {{ $product->time }}
           
			</p>
        </div>

    
						<div class="post-image"><img src="{{$product->image}}" alt="Blog Image"></div>

					

						<div class="post-bottom-area">

							<p class="para">
							{{$product->detail}}
							</p>
						</div><!-- post-bottom-area -->
							@endforeach




					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->




@endsection