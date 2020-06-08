@extends('layouts.app')


@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Product</div>

                <div class="card-body">
                
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>

        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $product->address }}
            </div>
        </div>

     

       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>time:</strong>
                {{ $product->time }}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
      
  
                          <img src="{{$product->image}}" alt="" class="product_image">
                
 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
