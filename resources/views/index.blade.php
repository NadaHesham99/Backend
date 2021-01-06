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
          <div class="col-lg-2 col-md-4 col-sm-12 example">
            <img src="images/wooden/10.jpg" class="img-fluid">
            <span>Wooden Toys</span>
            <span class="price"><a href="{{route('wooden_toys')}}"><i class="fas fa-arrow-right"></i></a></span>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-12 example">
            <img src="images/carpets/12.jpg" class="img-fluid">
            <span>Carpet</span>
            <span class="price"><a href="{{route('carpets')}}"><i class="fas fa-arrow-right"></i></a></span>
          </div>
        <div class="col-lg-2 col-md-4 col-sm-12 example">
            <img src="images/furniture/3.jpg" class="img-fluid">
            <span>Furniture</span>
            <span class="price"><a href="{{route('furniture')}}"><i class="fas fa-arrow-right"></i></a></span>
          </div>
        <div class="col-lg-2 col-md-4 col-sm-12 example">
            <img src="images/Accessories/3.jpg" class="img-fluid">
            <span>Accessories</span>
            <span class="price"><a href="{{route('accessories')}}"><i class="fas fa-arrow-right"></i></a></span>
          </div>
            <div class="col-lg-2 col-md-4 col-sm-12 example">
            <img src="images/clothes/14.jpg" class="img-fluid">
            <span>Clothes</span>
            <span class="price"><a href="{{route('clothes')}}"><i class="fas fa-arrow-right"></i></a></span>
          </div>
         <div class="col-lg-2 col-md-4 col-sm-12 example">
            <img src="images/paintings/4.jpg" class="img-fluid">
            <span>Painting</span>
            <span class="price"><a href="{{route('paintings')}}"><i class="fas fa-arrow-right"></i></a></span>
          </div>
  </div>
</div>
</section>  
<!--End Categories-->

    
       
    
    <!--Start New Collection Section -->
       <section class="best-selling text-center" id="lastest">
          <div class="container">
             <h2 class="h1">New Collection</h2>
             <p class="lead">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br> aliqua. Quis ipsum suspendisse ultrices gravida.</p>
             
             
             <div class="row">
                <div class="col-lg">
                   <div class="content">
                     <img src="images/n.jpeg" alt="Product-three" class="img-fluid">
                     <h3>Add to card</h3>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div> 
                 
                 <div class="col-lg">
                   <div class="content">
                     <img src="images/c.jpeg" alt="Product-three" class="img-fluid">
                     <h3>Add to card</h3>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div>
                 
                 <div class="col-lg">
                   <div class="content">
                     <img src="images/g.jpeg" alt="Product-three" class="img-fluid">
                     <h3>Add to card</h3>
                   </div> 
                   <div class="details">
                       <p class="product-name">Consectetur adipiscing elit</p>
                       <p>$ 45,743</p>
                   </div>
                </div>
                 
                <div class="col-lg">
                   <div class="content">
                     <img src="images/e.jpeg" alt="Product-two" class="img-fluid">
                     <h3>Add to card</h3>
                   </div> 
                   <div class="details">
                       <p class="product-name">Consectetur adipiscing elit</p>
                       <p>$ 45,743</p>
                   </div>
                </div>
              </div>
              
              <div class="row disabled" id="see">
                <div class="col-lg">
                   <div class="content">
                     <img src="images/j.jpeg" alt="Product-two" class="img-fluid">
                     <h3>Add to card</h3>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div> 
                 
                 <div class="col-lg">
                   <div class="content">
                     <img src="images/f.jpg" alt="Product-one" class="img-fluid">
                     <h3>Add to card</h3>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div>
                  
                  
                 
                 <div class="col-lg">
                   <div class="content">
                     <img src="images/b.jpeg" alt="Product-two" class="img-fluid">
                     <h3>Add to card</h3>
                   </div> 
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div>
                  
                   <div class="col-lg">
                   <div class="content">
                     <img src="images/a.jpeg" alt="Product-one" class="img-fluid">
                     <h3>Add to card</h3>
                   </div> 
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div>
              </div>
              
              <button id="btn-see">view more products</button>
           </div>
       </section>
    <!--End New Collection Section --> 
     
    
    <!--Start best-selling Section -->
       <section class="best-selling text-center">
          <div class="container">
             <h2 class="h1">Best Selling</h2>
             <p class="lead">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna<br> aliqua. Quis ipsum suspendisse ultrices gravida.</p>
             
             
             <div class="row">
                <div class="col-lg">
                   <div class="content">
                     <img src="images/rr.jpeg" class="img-fluid" alt="best-selling one">
                     <h3>Add to card</h3>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div> 
                 
                 <div class="col-lg">
                   <div class="content">
                     <img src="images/tt.jpeg" class="img-fluid" alt="best-selling two">
                     <h3>Add to card</h3>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div>
                 
                 <div class="col-lg">
                   <div class="content">
                     <img src="images/ee.jpeg" class="img-fluid" alt="best-selling three">
                     <h3>Add to card</h3>
                   </div> 
                   <div class="details">
                       <p class="product-name">Consectetur adipiscing elit</p>
                       <p>$ 45,743</p>
                   </div>
                </div>
              </div>
              
              <div class="row disabled" id="product">
                <div class="col-lg">
                   <div class="content">
                     <img src="images/yy.jpeg" class="img-fluid" alt="best-selling one">
                     <h3>Add to card</h3>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div> 
                 
                 <div class="col-lg">
                   <div class="content">
                     <img src="images/w.jpeg" class="img-fluid" alt="best-selling two">
                     <h3>Add to card</h3>
                   </div>
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div>
                 
                 <div class="col-lg">
                   <div class="content">
                     <img src="images/pp.jpeg" class="img-fluid" alt="best-selling three">
                     <h3>Add to card</h3>
                   </div> 
                   <div class="details">
                      <p class="product-name">Consectetur adipiscing elit</p>
                      <p>$ 45,743</p>
                   </div>
                </div>
              </div>
              
              <button id="btn-product">view more products</button>
           </div>
       </section>
    <!--End best-selling Section -->
    

    
    
    
    
   <!--Start Contact Section-->
     <section class="contact-us text-center" id="contact">
       <div class="container fix">
          <div class="row">
             <div class="col-md">
                <div class="contact-content">
                   <i class="fas fa-phone-volume"></i>
                   <h4>Call us:</h4>
                   
                   <span class="contact">012-34567890</span>
                </div> 
             </div> 
              
              <div class="col-md">
                <div class="contact-content">
                   <i class="fas fa-envelope-open"></i>
                   <h4>Contact us:</h4>
                   
                   <span class="contact">hmzone@gmail.com</span>
                </div> 
             </div> 
              
              
          </div>  
       </div>  
     </section>
    <!--End Contact Section-->
     
    
  @include('layout.footer')
