@include('layout.header')

<div class="cotent-cart">
  <div class="container">
<div class="card mb-3 cart-details" style="max-width: 740px;">
  <div class="row g-0">
    <div class="col-md-7">
    <img src="{{asset($product->image)}}" alt="Product-two" class="img-fluid">    </div>
    <div class="col-md-5">
      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text description">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        <p class="card-text price">${{$product->price}}</p>
        <a href="#" class="btn btn-danger">Add To cart</a>
      </div>
    </div>
  </div>
</div>
</div>

</div>

@include('layout.footer')