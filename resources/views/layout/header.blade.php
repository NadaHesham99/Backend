<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Final Project</title>
    <link rel='shortcut icon' href="{{asset('images/handmade.jpg')}}" >
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,700;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('css')
</head>
<body>
  
  


<!--Start Navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light ">

  <a class="navbar-brand" href="{{route('index')}}">H&amp;M<span>Zone</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item"><a class="nav-link lastest" href="#lastest">Lastest</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('clothes')}}">Clothes</a>
          <a class="dropdown-item" href="{{route('accessories')}}">Accessories</a>
          <a class="dropdown-item" href="{{route('wooden_toys')}}">Wooden Toys</a>
          <a class="dropdown-item" href="{{route('furniture')}}">Furniture</a>
          <a class="dropdown-item" href="{{route('carpets')}}">carpets</a>
           <a class="dropdown-item" href="{{route('paintings')}}">Paintings</a>
        </div>
      </li>
      <li class="nav-item">
       @if(url()->current() == route('admin') )
      <a class="nav-link" href="#">Admin</a>
        @else
       <a class="nav-link" href="{{route('admin')}}">Admin</a>
    @endif
    </li>

     <li class="nav-item log"><a class="nav-link" href="resigter.html"><i class="fas fa-user"></i> Resigter</a></li>
     <li class="nav-item log"><a class="nav-link" href="login.html"><i class="fas fa-user"></i> Login</a></li>
    
   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search">

      <button class="btn btn-outline search-icon my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
        <a href="cart.html" class="cart"><i class="fas fa-shopping-cart"></i></a>
  </div>
</nav>