
<!--
    HTML STARTS HERE !
-->
<?php
if (isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $emailquery = " select * from users where username='$email' ";
    $query = mysqli_query($conn, $emailquery);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount)
    {
        $userdata = mysqli_fetch_array($query);
        $username = $userdata['username'];
        $token = $userdata['token'];
        $subject = "Password reset";
        $body = "Hi,$username. click here to reset your password http://localhost/login/reset_password.php?token=$token";
        $sender_email = "From: sarthakmadhamshettiwar@gmail.com";

        if(mail($email,$subject,$body,$sender_email)){
            $_SESSION["msg"] = "check your email to reset passwaord $email";
            header("location : admin_login.php");
        }
        else{
            echo "Email sending failed";
        }
    }
    else
    {
        echo "No account linked with this email";
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
    <title>Recover the Password!</title>
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
        <a class="nav-link" href="page-0.html">Home <span class="sr-only">(current)</span></a>
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
      <label for="inputPassword4">Username</label>
      <input class="form-control" name ="password" id="inputPassword4" placeholder="Enter username">
    </div>
  </div>

  <button type="button" onclick="document.location='user_login.php'"><span></span>RESET PASSWORD</a></button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
