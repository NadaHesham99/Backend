@include('layout.header')
@include('layout.nav_admin')


<!--Start Table -->
   <div class="table">
     <div class="container">
        @if(isset($product))
         <h2 class="h1 text-center">Update Product</h2>
        @else
          <h2 class="h1 text-center">Add Product</h2>
        @endif

        <div class="add-db">
         @if(isset($product))
         <form  id="edit-form" action="{{route('update_product' ,$product->id)}}" method="post" enctype="multipart/form-data">
          @else
         <form  id="edit-form" action="{{route('addProduct')}}" method="post" enctype="multipart/form-data">
          @endif
          @csrf
          
                <input type="text" name="name_en" placeholder="Product Name" title="Product name must be in English character only" autocomplete="on" class="form-control"@if(isset($product)) value="{{$product->name}}" @else @endif>
                
                @error('name_en')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                
             
                <input type="text" name="Price" placeholder="Price" title="Product Price must be at least 5 digits" autocomplete="on" class="form-control" @if(isset($product)) value="{{$product->price}}" @else  @endif>

                @error('Price')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                  
                <input type="file" name="Product_Image" placeholder="Choose Product Image" title="Procduct Image must be taken" class="form-control" >
                 @if(isset($product))
                <img class="img-fluid" src="{{asset($product->image)}}" width="150" height="150">
                @endif
                
                @error('Product_Image')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror
               
                <select name="category" class="form-control" required>
                <option selected disabled>select category</option>
                 @foreach($categories as $category)
                  @if(isset($product))
                 @if($category->id == $product->category_id)
                 <option value="{{ $category->id }}" selected="">{{ $category->name }}</option>
                 @endif
                 @endif
                  <option value="{{$category->id}}">{{ $category->name }}</option>
                @endforeach
                </select>

                 @error('category')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                     
                <input type="submit" title="Can't Register" data-content="you should match all validation first" class="btn-resigter  form-control" @if(isset($product)) value="Update" @else value="Add" @endif>
      
      </form>
    </div>

    <hr>

             <h2 class="h1 text-center">Product Table</h2>

           <table class="table  text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Picture</th>
      <th scope="col">Category</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th> 
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td><img src="{{asset($product->image)}}"></td>
      <td>{{$product->categories['name']}}</td>
      <td>
         <a class="link-control" href="{{route('product_edit',$product->id)}}"><i class="fas fa-pen"></i> Edit</a>
      </td>
      <td>
          <a class="link-control delete" href="{{route('delete_product',$product->id)}}"><i class="fas fa-trash-alt"></i> Delete</a>
     </td>

    </tr>
    @endforeach
    
  </tbody>
</table>
       </div>
    </div>
<!--End Table-->
    
  @include('layout.footer')
    
    
