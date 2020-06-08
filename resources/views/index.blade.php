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
<img class="img-1" src="assets\img\2.jpg" alt="devbanban" style="width:1600px;height:400px;">
    <section class="blog-area section">
		<div class="container">

			<div class="row">
                @foreach ($products as $product)
				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="{{$product->image}}" alt="Blog Image"></div>

							<div class="blog-info">
							
								<h4 class="title"><a href="{{ route('post') }}"><b>{{$product->name}}</b></a></h4>
						
							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
				@endforeach
			<!--	<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="assets/img/audrey-jackson-260657.jpg" alt="Blog Image"></div>

						

							<div class="blog-info">
								<h4 class="title"><a href="#"><b>?</b></a></h4>

							
							</div>

						</div>

					</div>
				</div> 

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="assets/img/pexels-photo-370474.jpeg" alt="Blog Image"></div>

						

							<h4 class="title"><a href="#"><b>?</b></a></h4>  

						

						</div>
					</div>
				</div>  ---->

			
			</div><!-- row -->

			<a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

		</div><!-- container -->
	</section><!-- section -->


@endsection