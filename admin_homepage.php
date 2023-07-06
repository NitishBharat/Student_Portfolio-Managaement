<!----------------------------------------------------------- SAMPLE ADMIN HOMEPAGE ----------------------------------------------------->
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: admin_login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<!---setting navbar to scroll type-->
<body data-bs-spy="scroll" data-bs-target=".navbar">
<!---creating navbar and assignning it's proprty-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
                <span class="h3 fw-bold d-block d-lg-none">User overviewpage</span>
                <img src="./assets/images/iiitalogo.jpg" class="d-none d-lg-block rounded-circle" alt="iiita_logo">
            </a>
            <!--defined the class and property of button to be used in navbar-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!--new division for buttons of navbar-->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">
                    <!---by using #in href website shifts it's position without changing the pages-->
                    <li class="nav-item">
                        <a class="nav-link" href="#overview">OVERVIEW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">REGISTER NEW STUDENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="update.php">UPDATE STUDENT INFORMATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">SEARCH STUDENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="delete.php">DELETE STUDENT INFORMATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#verification_status">VERIFICATION STATUS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#detailed_portfolio_view">DETAILED PORTFOLIO VIEW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#verification_comments">VERIFICATION COMMENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio_feedback">PORTFOLIO FEEDBACK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#approval_workflow">APPROVAL WORKFLOW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>

<div id="content-wrapper">
        <!--instead of making new html for overview we are adding content of overview as sliding page-->

        <div class="container mt-4">
<h3>ADMIN HOMEPAGE</h3>
<h3><?php echo "Welcome ". $_SESSION['username']?> You can now use this website !</h3>
<!-- The "Welcome" statement will only be printed when the session is currently going. -->
  <?php
  
  
  
  
  if(isset($_SESSION['status']))
  {
    ?>

    <!--ALERT MESSAGE DISPLAY-->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong> <?php     echo $_SESSION['status'];?> </strong>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>

    <?php
    unset($_SESSION['status']);
  }
  ?>




<hr>

</div>
        <section id="overview" class="full-height px-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-4 fw-bold" data-aos="fade-up">Exploring the <span class="text-brand">MULTIFACETED TALENTS</span></h1>
                        <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">IIITA Student Portfolio: Uncovering Hidden Talents and Technical Expertise.</p>
                        <div data-aos="fade-up" data-aos-delay="600">
                           
                            <a href="#view portfolio" class="btn btn-brand me-3">View portfolio</a>
                            <a href="#verify portfolio" class="btn btn-brand me-3">Verify Portfolio</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- //overview -->

        
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>



</body>


