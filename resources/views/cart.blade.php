@include('layout.header')

<!--Start Table -->
   <div class="table text-center">
     <div class="container">
         <h2 class="h1">Shopping Cart</h2>
           <table class="table">
  <thead>
    <tr>
      <th scope="col">Picture</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach($carts as $cart)
    <tr>
      <td><img src="{{asset($cart->product['image'])}}"></td>
      <td>{{$cart->product['name']}}</td>
      <td>{{$cart->product['price']}}</td>
      <td><input type="number" id="quantity" name="quantity" min="1" max="20" value="{{$cart->quantity}}">
      </td>
      <td>
          <a class="link-control delete" href="{{route('delete_cart',$cart->id)}}"><i class="fas fa-trash-alt"></i> Delete</a>
     </td>
    </tr>
   @endforeach
  </tbody>
</table>
         <h3>Total Price : </h3> <span>{{$total_price}}$</span>
            <div class="flex-end">
              <a href="{{route('checkout')}}" class="btn btn-primary">Check Out</a>
         </div>
       </div>
    </div>
<!--End Table-->
    
@include('layout.footer')
