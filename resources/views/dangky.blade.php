<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng Ký</title>

    <!-- Bootstrap core CSS -->
<!--     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
  <link rel="stylesheet"  href="../css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="./Css/Login.css" rel="stylesheet">
  </head>

  <body>  
    <form class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="./images/logo.jpg" alt="" width="150" height="120">
        <h1 class="h3 mb-3 font-weight-normal">Đăng Kí</h1>
      </div>

      <div class="form-label-group">
        <input type="name" id="inputName" class="form-control" placeholder="Name" required="">
        <label for="inputName">Họ tên</label>
      </div>

      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputEmail">Địa chỉ Email</label>
      </div>

      <div class="form-label-group">
            <input type="number" id="inputNumber" class="form-control" placeholder="Number" required="" autofocus="">
        <label for="inputNumber">Số điện thoại</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <label for="inputPassword">Mật khẩu</label>
      </div>


      <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng ký</button>
      <p class="mt-5 mb-3 text-muted text-center">© 2017-2018</p>
    </form>
  </body>
</html>