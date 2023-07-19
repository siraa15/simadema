<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Login</title>
    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
          .alert-error{
      background-color: #FABEC0;
      border: 1px solid;
      color:#F51720;
    }

    </style>
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="edit/css/style.css">
	<link rel="stylesheet" href="edit/js/sweetalert2.min.css">
	<script src="edit/js/sweetalert2.all.min.js"></script>
</head>

<body background="../img/bgnavy.jpg" >
    <form class="form-signin" action="ceklogin.php" method="POST" class="form-horizontal">
        <div class="text-center">
            <img class="mb-4 mt-4" src="../img/logoombudsman.png" alt="" width="200" height="50" >
            <h1 class="h3 mb-3 font-weight-normal"> FORM LOGIN</h1>
            <label for="email" class="sr-only">Username</label>
            <input type="text" id="email" class="form-control" placeholder="Masukkan Email" name="email" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Masukkan Password" name="password" required>
            <div class="checkbox mb-3">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <p class="mt-2 mb-1"> <img class="mb-1" src="../img/simadema2.png" alt="" width="300" height="150"></p>
        </div>
        
    </form>
</body>
</html>


