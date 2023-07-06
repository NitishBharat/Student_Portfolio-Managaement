
<!--
    HTML STARTS HERE !
-->
<?php
if(isset($_POST['submit'])){
    if(isset($_GET['token'])){
        $token=$_GET['token'];
    }
    $newpassword=mysqli_real_escape($con,$_POST['password']);
    $cpassword=mysqli_real_escape($con,$_POST['password']);
    $pass = password_hash($newpassword,PASSWORD_BCRYPT);
    $cpass= password_hash($cpassword,PASSWORD_BCRYPT);


    if($pass==$cpass){
     $updatequery="update users set password='$pass' where token='$token'";
     $iquery=mysqli_query($con,$updatequery);
     if($iquery){
        $_SESSION['msg']="Your passqord has been updated";
        header('location:user_login.php');
     }
     else{
        $_SESSION['passmsg']="Your password is not updated";
        header('location:reset_password.php');
     }
    }

}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        form{
            margin : 0px auto;
            height: 300px;
            width: 400px;
        }

        .login-display{
          text-align: center;
        }
    </style>
    <title>Reset the Password!</title>
  </head>

  <?php

 ?>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><strong>Student Portfolio System</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="admin_homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li> -->     
     
    </ul>
  </div>
</nav>

<div class="container mt-4">
<h3 class = "login-display">Password Update portal:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Enter Password">
    </div>
  </div>

  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
    </div>
    <p>
      <?php
      if(isset($_SESSION['passmsg'])){
          echo $_SESSION['passmsg'];
      }
      else{
          echo $_SESSION['passmsg']="";
      }
      ?>
    </p>
  <button type="submit" class="btn btn-primary">Update Password</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
