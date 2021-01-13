@include('layout.header')

	<div class="checkout resigter">

		<div class="container">
				<h3 class="text-center">Bill Information</h3>	
                <form  action="{{route('add_bill')}}" method="post" >

                	@csrf
                	<input type="text" name="address" value="" placeholder="Address In Details">

                	<input type="text" name="Payment_Details" value="" placeholder="Payment Information">
                	
                    <input  value="submit" type="submit" class="btn-submit">
				</form>
		</div>

	</div>


@include('layout.footer')
