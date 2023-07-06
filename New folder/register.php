<!--
    THIS PAGE WILL BE USED BY ADMIN FOR ENTERING DATA OF NEW USERS.

    Ex : After JEE MAINS, new student will get enrolled in college; Admin will register student's data on their behalf into the database. 
-->
<?php
require_once "config.php";

$username = $password = $confirm_password = $name = ""; //variables
$username_err = $password_err = $confirm_password_err = $name_error = ""; //variables which will store error if there is one
$extension_err = "";
// $newstring = substr($_POST["username"], -10);
// $reqstring = "@iiita.ac.in";
if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        // echo "username cannot be blank !";
        $username_err = "Username cannot be blank";
    }
    else if(substr($_POST['username'], -12) != "@iiita.ac.in"){
        $extension_err = "Not a valid official email";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";   
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statementecho "This username already exist! Please choose different username.";
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                 // checking whether the entered username already exists or not ?
                if(mysqli_stmt_num_rows($stmt) == 1)    //if there exist a row with a given username display error
                {
                    // 
                    $username_err = "This username is already taken";  
                }
                else{
                    $username = trim($_POST['username']);   //everything is working correctly
                    $name = trim($_POST['name']);
                }
            }
            else{
                echo "Something went wrong";    //unidentified error
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    // echo "Passwords should match";
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($extension_err))
{
    $sql = "INSERT INTO users (username, password, name) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password, $param_name);  //entering two strings -> "ss"

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);   //PASSWORD_DEFAULT is standard algorithm used for hashing the password to increase the security.
        $param_name = $name;
        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>


<!--
    HTML STARTS HERE !
-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <title>Register New Student !</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><strong>Student Portfolio System</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>
  </div>
</nav>

<div class="container mt-4">
<h3 class = "login-display">Please Register New Student Here:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputEmail4">Name of Student</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name of Student">
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Username</label>
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Enter Email">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Enter Password">
    </div>
  </div>

  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
    </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
