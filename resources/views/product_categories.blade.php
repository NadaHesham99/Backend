@include('layout.header')

    <!--Start best-selling Section -->
       <section class="best-selling text-center">
          <div class="container">
           @foreach($categories as $category)
           @if($category->id == $category_id)
             <h2 class="h1">{{$category->name}}</h2>
             <p class="lead">{{$category->discription}}</p>
             @endif
            @endforeach

             <div class="row">
                @foreach($products as $product)
                @if($product->category_id == $category_id)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="item-product">
                   <div class="content">
                     <img src="{{asset($product->image)}}" class="img-fluid" alt="best-selling one">
                     <a href="{{route('add_cart' , $product->id)}}" class="btn-cart">Add to card</a>
                   </div>
                   <div class="details">

                      <p class="product-name">{{$product->name}}</p>
                      <p>{{$product->price}} $</p>
                      <a href="{{route('details' , $product->id)}}">More details</a>
                   </div>
                  </div>
                </div> 
                 @endif
                 @endforeach
              </div>
              
           </div>
       </section>
    <!--End best-selling Section -->
    


     
  @include('layout.footer')
