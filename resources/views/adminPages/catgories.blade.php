@include('layout.header')
@include('layout.nav_admin')




<!--Start Table -->
   <div class="table ">
     <div class="container">
        @if(isset($category))
         <h2 class="h1 text-center">Update Categories</h2>
        @else
          <h2 class="h1 text-center">Add Categories</h2>
        @endif

         <div class="add-db">
         @if(isset($category))
         <form  id="edit-form" action="{{route('update_catgory' ,$category->id)}}" method="post">
          @else
          <form  id="edit-form" action="{{route('addCatgory')}}" method="post">
          @endif
          @csrf
               

                     
                <input type="text" name="name_en" placeholder="Categories Name in English" title="Category name must be in English character only" autocomplete="on" class="form-control"  @if(isset($category)) value="{{$category->name}}" @else  value="{{ old('name_en')}}" @endif>
                
                 @error('name_en')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" name="Price" placeholder="Categories minimum Price" title="Product Price must be at least 5 digits" autocomplete="on" class="form-control" @if(isset($category)) value="{{$category->minPrice}}" @else value="{{ old('Price')}}" @endif>

                 @error('Price')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  
                <input type="text" name="nameDiscription" placeholder="Category Description" title="Category Description must be in English character" autocomplete="on" class="form-control" @if(isset($category)) value="{{$category->discription}}" @else value="{{ old('nameDiscription')}}" @endif>
                
                 @error('nameDiscription')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                     
                <input type="submit" title="Can't Register" data-content="you should match all validation first" class="btn-resigter form-control" @if(isset($category)) value="Update" @else value="Add" @endif>
      
      </form>

         </div>
              <hr>
              <h2 class="h1 text-center">Categories Table</h2>
           <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Min-Price$</th>
      <th scope="col">Description</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach($categories as $category)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->minPrice}}</td>
      <td>{{$category->discription}}</td>
      <td>
         <a class="link-control" href="{{route('categoriesedit' ,$category->id )}}"><i class="fas fa-pen"></i> Edit</a>
      </td>
      <td>
          <a class="link-control delete" href="{{route('delete_category' ,$category->id )}}"><i class="fas fa-trash-alt"></i> Delete</a>
     </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
        

      

</div>
       </div>
<!--End Table-->
    
  @include('layout.footer')
    
    
