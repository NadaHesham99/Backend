@include('layout.header')
@include('layout.nav_admin')


<!--Start Table -->
   <div class="table  ">
     <div class="container-fluid">
        @if(isset($user))
         <h2 class="h1 text-center">Update User</h2>
        @else
          <h2 class="h1 text-center">Add User</h2>
        @endif

         <div class="add-db">
          @if(isset($user))
         <form  id="edit-form" action="{{route('update_user' ,$user->id)}}" method="post" class="userform">
          @else
         <form  id="edit-form" action="{{route('addUser')}}" method="post">
          @endif
          @csrf
                  
          
                <input type="text" name="name_ar" placeholder="اسم المستخدم" title="User name must be in English character only" pattern="^[\u0621-\u064A ]+$" autocomplete="on" class="form-control" 
                @if(isset($user)) 
                
                value="{{$user->name_ar}}"

                @else value="{{ old('name_ar') }}"
                
                @endif>

                @error('name_ar')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror

                <input type="text" name="name_en" placeholder="User Name in English" title="User name must be in English character only" pattern="^[a-zA-Z ]+$" autocomplete="on" class="form-control"
                 @if(isset($user)) 
                 
                 value="{{$user->name_en}}" 

                  @else value="{{ old('name_en') }}"
                  
                 @endif>
                
                @error('name_en')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror
          
                <input type="text" name="address" placeholder="User Address" title=" User Adress must be in English character only" pattern="^[a-zA-Z ]+$" autocomplete="on" class="form-control" 
                @if(isset($user)) 
                
                value="{{$user->adress}}"

                 @else value="{{ old('address') }}"  
               
                @endif>
                
                @error('address')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror

                <input type="text" name="phone" placeholder="User Phone Number +201..." pattern="^\+?\d{10,}$" title="your phone must be at least 10 digits" autocomplete="on" class="form-control" 
                @if(isset($user))  
                
                value="{{$user->phone}}"  

                 @else value="{{ old('phone') }}"
               
                @endif>

                @error('phone')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                      
                <input type="text" name="email" placeholder="User Email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" title="user email must be like that name@domain-name.com" autocomplete="on" class="form-control" 
                @if(isset($user)) 
                
                value="{{$user->email}}"

                 @else value="{{ old('email') }}" 
                
                @endif >

                @error('email')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror

                <input type="password" name="password" placeholder="User Password" pattern="^.{8,}$" title="your password must be 8 caharacters at least" autocomplete="on" class="form-control" 
                @if(isset($user)) 
                value="{{$user->password}}"
                 @else value="{{ old('password') }}"
                @endif>

                @error('password')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                       @enderror

                <select name="role" id="role" class="form-control">
                   <option selected="">User Role</option>
                   <option value="0">User</option>
                   <option value="1">Admin</option>
                </select>
                     
                @error('role')
                       <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                       </span>
                 @enderror

                <input type="submit" title="Can't Register" data-content="you should match all validation first" class="btn-resigter form-control" @if(isset($user)) value="Update" @else value="Add" @endif>
      
      </form>

         </div>
         <hr>
          <h2 class="h1 text-center">Users Table</h2>

<table class="table text-center userform">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name in Arabic</th>
      <th scope="col">Name in English</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">role</th>
      <th scope="col">Edit</th>
     <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
     @foreach($users as $user)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$user->name_ar}}</td>
      <td>{{$user->name_en}}</td>
      <td>{{$user->adress}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->password}}</td>
      <td>@if($user->role == 0)<h6>User</h6>
          @elseif($user->role ==1)<h6>Admin</h6>
          @endif
      </td>
       <td>
         <a class="link-control" href="{{route('edit_user' ,$user->id )}}"><i class="fas fa-pen"></i>Edit</a>
      </td>
      <td>
          <a class="link-control delete" href="{{route('delete_user' ,$user->id )}}"><i class="fas fa-trash-alt"></i>Delete</a>
     </td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>       
                   
      </div>
 </div>
<!--End Table-->
  @include('layout.footer')
    
    
    
