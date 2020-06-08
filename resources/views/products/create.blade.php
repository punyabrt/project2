@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Product</div>

                <div class="card-body">
                
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control-file" name="image">
                                  </div>
      
   

         <div class="row">


		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name">
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Address:</strong>
		            <textarea class="form-control" style="height:150px" name="address" placeholder="Address"></textarea>
		        </div>
            </div> 
            
         
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>time:</strong>
		            <input type="text" name="time" class="form-control" placeholder="Time">
		        </div>
		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Detail:</strong>
		            <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
		        </div>
            </div> 
           

           <!--   <div class="form-group{{ $errors->has('image') ? 'has-error':'' }}">
                  <lable for="product_image" class="col-md-4 contro-lable">Choose file..<lable>  
                      <div class="col-md-6">
                          <imput id="product_image" type="file" class="form-control" name="product_image" require>
                              @if ($errors->has('product_image'))   
                                 <span class="help-block">
                                     <strong>{{ $errors->first('product_image') }} </strong>
                                 </span>
                              @endif
                      </div>
                   </div>                            
           <div class="col-xs-12 col-sm-12 col-md-12"> 
              <div class="custom-file mb-3">
                 <input type="file" ref="image" name="image" class="custom-file-input" id="image" required>
                   <label class="custom-file-label" >Choose file...</label>
              </div

                         <form  method="POST" enctype="multipart/form-data" >
                            {{ csrf_field()}}
    
                            <div class="form-group">
                                    <label for="image">Choose file...</label>
                                    <input type="file" class="form-control-file" name="image">
                                  </div> --->  
                                  


        
           
            
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>


    </form>

        
             

                </div>
            </div>
        </div>
    </div>
</div>
@endsection