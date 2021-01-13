@include('layout.header')

<!--Start Header -->
       <section class="header">
         <div class="overlay">
            <div class="container text-center">
              <h2 class="h1">Select Your New Handmade Products</h2>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut <br>aliquip ex ea commodo consequat is aute irure.</p>
              <button class="main-button">See More</button>
              
            </div>     
         </div>      
       </section>
<!--End Header-->
    

<!--Start Categories-->
   <section class="categories text-center" id="categories">
     <div class="container">
        <div class="row">
          @foreach($categories as $category)

          @foreach($products as $product)

           @if($product->id == $category->id)
           <div class="col-lg-2 col-md-4 col-sm-12 example">
            <img src="{{asset($product->image)}}" class="img-fluid">
            <span>{{$category->name}}</span>
            <span class="price"><a href="{{route('product_categories', $category->id)}}"><i class="fas fa-arrow-right"></i></a></span>
          </div>

          @endif
          @endforeach
          @endforeach
  </div>
</div>
</section>  
<!--End Categories-->

    
       
    
    <!--Start New Collection Section -->
       <section class="best-selling text-center" id="lastest">
          <div class="container">
             <h2 class="h1">New Collection</h2>
             <p class="lead">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br> aliqua. Quis ipsum suspendisse ultrices gravida.</p>
             
            
            
             <div class="row related">
               @foreach($products as $product)
                <div class=" col-md-3 col-sm-12">
                   <div class="content">
                     <img src="{{$product->image}}" alt="Product-three" class="img-fluid">
                     <a href="{{route('add_cart' , $product->id)}}" class="btn-cart">Add to card</a>
                   </div>
                   <div class="details">
                      <p class="product-name">{{$product->name}}</p>
                      <p>$ {{$product->price}}</p>
                      <a href="{{route('details' , $product->id)}}">More details</a>
                   </div>
                </div> 
                 @endforeach

              </div>
           </div>
       </section>
    <!--End New Collection Section --> 
     
    
    <!--Start best-selling Section -->
       <section class="best-selling text-center">
          <div class="container">
             <h2 class="h1">Best Selling</h2>
             <p class="lead">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br> aliqua. Quis ipsum suspendisse ultrices gravida.</p>
             
             
             <div class="row">
                <div class="col-md-3 col-sm-12">
                   <div class="content">
                     <img src="{{asset('images/rr.jpeg')}}" class="img-fluid" alt="best-selling one">
                     <a href="" class="btn-cart">Add to card</a>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div> 
                 
                 <div class="col-md-3 col-sm-12">
                   <div class="content">
                     <img src="{{asset('images/tt.jpeg')}}" class="img-fluid" alt="best-selling two">
                     <a href="" class="btn-cart">Add to card</a>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div>
                 
                 <div class="col-md-3 col-sm-12">
                   <div class="content">
                     <img src="{{asset('images/d.jpg')}}" class="img-fluid" alt="best-selling three">
                     <a href="" class="btn-cart">Add to card</a>
                   </div> 
                   <div class="details">
                       <p class="product-name">Consectetur adipiscing elit</p>
                       <p>$ 45,743</p>
                   </div>
                </div>
                <div class="col-md-3 col-sm-12">
                   <div class="content">
                     <img src="{{asset('images/ee.jpeg')}}" class="img-fluid" alt="best-selling three">
                     <a href="" class="btn-cart">Add to card</a>
                   </div> 
                   <div class="details">
                       <p class="product-name">Consectetur adipiscing elit</p>
                       <p>$ 45,743</p>
                   </div>
                </div>
              </div>
              
              <div class="row disabled" id="product">
                <div class="col-md-3 col-sm-12">
                   <div class="content">
                     <img src="{{asset('images/yy.jpeg')}}" class="img-fluid" alt="best-selling one">
                     <a href="" class="btn-cart">Add to card</a>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div> 
                 
                 <div class="col-md-3 col-sm-12">
                   <div class="content">
                     <img src="{{asset('images/w.jpeg')}}" class="img-fluid" alt="best-selling two">
                     <a href="" class="btn-cart">Add to card</a>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div>
                 
                 <div class="col-md-3 col-sm-12">
                   <div class="content">
                     <img src="{{asset('images/pp.jpeg')}}" class="img-fluid" alt="best-selling three">
                    <a href="" class="btn-cart">Add to card</a>
                   </div> 
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div>

                <div class="col-md-3 col-sm-12">
                   <div class="content">
                     <img src="{{asset('images/h.jpeg')}}" class="img-fluid" alt="best-selling three">
                     <a href="" class="btn-cart">Add to card</a>
                   </div> 
                   <div class="details">
                       <p class="product-name">Consectetur adipiscing elit</p>
                       <p>$ 45,743</p>
                   </div>
                </div>
              </div>
              
              <button id="btn-product" class="view-more">view more products</button>
           </div>
       </section>
    <!--End best-selling Section -->
    

    
    
    
    
  @include('layout.footer')
