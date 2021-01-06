@include('layout.header')

    
    
    <!--Start best-selling Section -->
       <section class="best-selling text-center">
          <div class="container">
             <h2 class="h1">Wooden Toys</h2>
             <p class="lead">Lorem Ipsum elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br> aliqua. Quis ipsum suspendisse ultrices gravida.</p>
             
             
              <div class="row">
                @foreach($products as $product)
                @if($product->category_id ==2)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                   <div class="item-product">
                     <div class="content">
                     <img src="{{asset($product->image)}}" class="img-fluid" alt="best-selling one">
                     <h3 class="btn-cart">Add to card</h3>
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
