@include('layout.header')

  
<!--Start logni --> 
<div class="resigter">
    
  <section class="container">
			<h2> Registeration </h2>
			<form  id="register-form" method="post" action="{{route('register')}}">
        @csrf
				<div class="row">
          <div class="col-lg">
              <label class="" >Your Name in Arabic</label>
				       <input class="" type="text" name="name_ar" placeholder="اسمك" pattern="^[\u0621-\u064A ]+$" title="your name must be in Arabic character only" data-toggle="tooltip"  autocomplete="on" autofocus value="{{ old('name_ar') }}">
                @error('name_ar')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div>
                  
				
          <div class="col-lg">
				    <label>Your Name in English</label>
				      <input type="text" name="name_en" placeholder="Your Name" pattern="^[a-zA-Z ]+$" title="your name must be in English character only" autocomplete="on" value="{{ old('name_en') }}">
              @error('name_en')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>    
          <div class="row">
                  <div class="col-lg">  
                    <label>Your Address</label>
                    <input type="text" name="address" placeholder="Country, State, City, Street" pattern="^([\u0621-\u064A0-9\-, ]{3,})|([a-zA-Z0-9\-, ]{3,})+$" title="your address must be in English or Arabic characters only and at least 3 characters" autocomplete="on" value="{{ old('address') }}">
                @error('address')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="col-lg">
                <label>Your Phone</label>
                 <input type="text" name="phone" placeholder="+201..." pattern="^\+?\d{10,}$" title="your phone must be at least 10 digits" autocomplete="on" value="{{ old('phone') }}"> 
                @error('phone')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
           
              
            </div>
                <div class="row">
                  <div class="col-lg">
                  <label>Your Email</label>
                      <input type="text" name="email" placeholder="name@domain-name.com" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" title="your email must be like that name@domain-name.com" autocomplete="on" value="{{ old('email') }}">
                  @error('email')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div> 
                   <div class="col-lg">
                      <label>Your Password</label>
                      <input type="password" name="password" placeholder="at least 8 characters" pattern="^.{8,}$" title="your password must be 8 caharacters at least" autocomplete="on">
                     </div>   
                 @error('password')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="row">
                   <div class="col-lg">
                    <label>Confirm Password</label>
				    
                       <input type="password" name="password_confirmation" placeholder="the same as password" pattern="^.{8,}$" title="confirm password must match the password" autocomplete="on">
                    </div>
                @error('password_confirmation')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                   <div class="col-lg">
                       <input type="submit" value="Register" title="Can't Register" data-content="you should match all validation first" class="btn-resigter form-control">
                    </div>
                </div>

				<input type="checkbox" name="agree" title="you should agree all terms" >
				<a href="#" class="agree"> I agree all terms  </a>
        <a class="btn-login" href="login.html">I Already have an acount</a>
			</form>
			
		</section>    
</div>
<!--End login --> 

     

@include('layout.footer')