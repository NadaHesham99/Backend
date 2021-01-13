@include('layout.header')

<div class="cotent-cart">
  <div class="container">
<div class="card mb-3 cart-details" style="max-width: 1000px;">
  <div class="row g-0">
    <div class="col-md-7">
      <img src="{{asset($product->image)}}" alt="Product-two" class="img-fluid">    
    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h5 class="card-title">Product Details</h5>
        <p class="card-text description">{{$product->categories['discription']}}</p>
        <p class="card-text price first"><span>Name:</span> {{$product->name}}</p>
        <p class="card-text price"><span>Price:</span> ${{$product->price}}</p>

       
          <div class="related">
            @foreach($related_products as $related_product)

            <div class="item">
              <a href="{{route('details' , $related_product->id)}}">
                <img src="{{asset($related_product->image)}}">
              </a>
            </div>

            @endforeach
          </div>

        <a href="{{route('add_cart' , $product->id)}}" class="btn btn-danger">Add To cart</a>
      </div>
    </div>
  </div>
</div>
</div>

</div>


@include('layout.footer')