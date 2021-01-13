<!--Start menu-->
    		<div class="wrapper text-center">
			<div id="sidebar" class="nav-admin container">
				<ul class="list-unstyled components">
					<li>
                    	 @if(url()->current() == route('admin') )
						<a href="#"> Products</a>
						 @else
						<a href="{{route('admin')}}"> Products</a> 
						 @endif
					</li>
					<li>
                    	 @if(url()->current() == route('catgory') )
						<a href="#"> Categories</a>
						 @else
						<a href="{{route('catgory')}}"> Catgories</a> 
						 @endif
					</li>
                    <li>
                    	 @if(url()->current() == route('user') )
						<a href="#"> Users</a>
						 @else
						<a href="{{route('user')}}"> Users</a> 
						 @endif
					</li>

					<li>
                    	 @if(url()->current() == route('admins') )
						<a href="#">Admins</a>
						 @else
						<a href="{{route('admins')}}"> Admins</a> 
						 @endif
					</li>
					
				</ul>
                </div>
			</div>
<!--End menu-->