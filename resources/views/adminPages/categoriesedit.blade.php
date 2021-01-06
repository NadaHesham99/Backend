@include('layout.header')

@include('layout.nav_admin')


<div class="edit">
    
  <section class="container">
			<h2 class="h1 text-center">Edit Category</h2>
			<form  id="edit-form" action="{{route('update_catgory' ,$category->id)}}" >
         @csrf         
				<label>Categories Name in English</label>
				  
                <input type="text" name="name_en" placeholder="Category Name" title="Category name must be in English character only" autocomplete="on" class="form-control" value="{{$category->name}}">
                
                <label>Categories minimum Price </label>
				     
                <input type="text" name="Price" placeholder="300" title="Product Price must be at least 5 digits" autocomplete="on" class="form-control" value="{{$category->price}}">
                
                <label> Categories Description</label>
                  
                <input type="text" name="name_en" placeholder="Category Description" title="Category Description must be in English character" autocomplete="on" class="form-control"
                value="{{$category->discription}}">
                     
                <input type="submit" value="Edit" title="Can't Register" data-content="you should match all validation first" class="btn-resigter form-control">
			
			</form>
			
		</section>    
</div>
<!--End login --> 
    
@include('layout.footer')
