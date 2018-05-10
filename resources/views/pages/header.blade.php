<!DOCTYPE html>
<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet"  href="../css/bootstrap.min.css">
  <title>Homepage!</title>
  <!-- Custom styles for this template -->
  <link href="../Css/HomePage.css" rel="stylesheet"> </head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{route('trangchu')}}">
        <img src="../images/logo.jpg" alt="Logo" height="70" width="90"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('trangchu')}}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <div class="my-2 my-lg-0">
          <h6 class="my-2 my-sm-0">
            <a href="{{route('giohang')}}">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
              </svg>
              @if(Session::has('cart'))
              <span>({{Session('cart')->totalQty}})</span>
              
              @endif
            </a>
            @if(Session::has('dangnhap'))
             <a href="#">Tài khoản {{Session('dangnhap')->name}}</a>
              <a href="{{route('dangxuat')}}">&nbsp Đăng xuất</a>
            @else
             <a href="{{route('dangky')}}">Đăng Ký</a>/
            <a href="{{route('dangnhap')}}">Đăng Nhập</a>
            @endif
           
            
          </h6>
        </div>
      </div>
    </nav>
  </header>