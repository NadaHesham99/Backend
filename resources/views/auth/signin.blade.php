@include('layout.header')

<!--Start logni --> 
<div class="login" id="form-login">
    
  <section class="container">
			<h2> Log In </h2>
			<form  id="register-form" action="{{route('login')}}" method="post">
        @csrf
				               <label>Your Email</label>
                       <input type="text" name="email" placeholder="name@domain-name.com" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" title="your email must be like that name@domain-name.com" autocomplete="on" value="{{ old('email') }}">
                       @error('email')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                      <br>
                     <label>Your Password</label>
				             <input type="password" name="password" placeholder="at least 8 characters" pattern="^.{8,}$" title="your password must be 8 caharacters at least" autocomplete="on" >
                     @error('password')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                      @enderror

                     <input type="submit" value="login" title="Can't Register" data-content="you should match all validation first" class="btn-resigter form-control">
                
                
                   <input type="checkbox" name="remember" title="you should agree all terms" >
				           <a href="#" class="agree">Remember Me</a>
			</form>	
		</section>    
</div>
<!--End login --> 
@include('layout.footer')
     

    
   