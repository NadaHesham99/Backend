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
						<a href="#"> catgories</a>
						 @else
						<a href="{{route('catgory')}}"> catgories</a> 
						 @endif
					</li>
                    <li>
                    	 @if(url()->current() == route('user') )
						<a href="#"> users</a>
						 @else
						<a href="{{route('user')}}"> users</a> 
						 @endif
					</li>


					
				</ul>
                </div>
			</div>
<!--End menu-->