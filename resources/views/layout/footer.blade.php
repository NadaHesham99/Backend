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
     

<!--Start Footer-->
      <section class="footer">
         <div class="container">
            <div class="row">
              <div class="col-lg">
                <div class="logo-footer">
                   <a href="{{route('index')}}">H&amp;M <span>Zone</span></a>
                   <p class="lead">Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</p>
                   <img src="{{asset('images/pay.png')}}" class="img-fluid">
                </div>
              </div>
              <div class="col-lg">
                <div class="quick-link-footer">
                  <h3>Quick Links</h3>
                  <ul class="list-unstyled">
                     <li><a href="#">About</a></li>
                     <li><a href="#lastest">Lastest</a></li>
                     <li><a href="{{route('cart')}}">Cart</a></li>
                     <li><a href="#contact">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg">
                <div class="quick-link-footer">
                <h3>New Products</h3>
                  <ul class="list-unstyled">
                    @foreach($categories as $category)
                    @if($category->id < 5)
                     <li><a href="{{route('product_categories' , $category->id)}}">{{$category->name}}</a></li>
                     @endif
                     @endforeach
                 </ul>
                </div>
              </div>
              <div class="col-lg">
                <div class="quick-link-footer">
                <h3>Support</h3>
                  <ul class="list-unstyled">
                     <li><a href="#">Frequently Asked Questions</a></li>
                     <li><a href="#">Our Location</a></li>
                     <li><a href="#">Privacy Policy</a></li>
                  </ul>
                </div>
              </div>
            </div> 
         </div> 
      </section> 
    <!--End Footer-->
    
    <!--Start CopyRight -->
    <section class="copyright">
       <div class="container">
          <div class="row">
             <div class="col-sm-6">
                <div class="copyright-content">
                  <p>Copyright &copy; 2020 &#124; This Website is made by <span>Nada Hesham</span></p>
                </div>
             </div> 
              <div class="col-sm-6">
                 <div class="social text-right">
                    <i class="fab fa-twitter"><a href="https://www.twitter.com"></a></i>
                    <i class="fab fa-facebook-f"><a href="https://www.facebook.com"></a></i>
                    <i class="fab fa-pinterest-p"><a href="https://www.pinterest.com/"></a></i>
                    <i class="fab fa-instagram"><a href="https://www.instagram.com"></a></i>
                 </div>
              </div>
          </div>
       </div>   
    </section>
    <!--End CopyRight -->
    
    
    <!--Start Scroll to top-->
      <div id="scroll-top">
       <i class="fas fa-level-up-alt"></i>
      </div>
    <!--End Scroll to top-->


  <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
  <script src="{{asset('js/slick.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/script.js')}}"></script>
  @yield('js')
</body>
</html>