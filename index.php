<!--NEW CODE FOR UPDATE PORTOLIO OF STUDENT-->

<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: user_login.php");
}
?>

<?php
if(isset($_POST['submit'])){

    $gender = $_POST['gender'];
    $pname1= $_POST['pname1'];
    $pdes1 = $_POST['pdes1'];
    $pname2 = $_POST['pname2'];
    $pdes2 = $_POST['pdes2'];
    $skills = $_POST['skills'];
    $achi = $_POST['achi'];
    $work1 = $_POST['work1'];
    $work2 = $_POST['work2'];
    $endor = $_POST['endor'];
    $extra1 = $_POST['extra1'];
    $extra2 = $_POST['extra2'];
    $social = $_POST['social'];
    $awards = $_POST['awards'];
    $soft = $_POST['soft'];
    


    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'login';

    $conn = mysqli_connect($host,$user,$pass,$dbname);
    
    $str = $_SESSION['username'];
    $sql = "UPDATE users SET gender = '$gender', pname1 = '$pname1', pdes1 = '$pdes1', 
    pname2 = '$pname2', pdes2 = '$pdes2', skills = '$skills',achi ='$achi' , work1='$work1' , work2='$work2' , endor='$endor' , extra1='$extra1' , 
    extra2='$extra2' , social='$social' , awards='$awards' , soft='$soft'   WHERE username = '$str'";
    mysqli_query($conn,$sql);
}
?>



<?php
$mysqli = new mysqli("localhost","root","","login");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$str1=$_SESSION['username'];
$sql = "SELECT * FROM users WHERE username='$str1'";
$result = $mysqli -> query($sql);
$row = $result->fetch_assoc();

?>




<html>


<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>

<body>


    <form action = "#" method="POST">
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo htmlspecialchars($row['name']);?></span><span class="text-black-50"><?php echo htmlspecialchars($row['username']);?></span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Semester</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                            <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                            <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" name = "pdes1" class="form-control" placeholder="enter address line 1" value="<?php echo htmlspecialchars($row['pdes1']);?>"></div>
                            <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" name="pdes2" class="form-control" placeholder="enter address line 2" value = "<?php echo htmlspecialchars($row['pdes2']);?>"></div>



                            <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo htmlspecialchars($row['pdes2']);?>"></div>




                            <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                            <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                            <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                        <input type="submit" name="submit" value="Update Data">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                        <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                        <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </form>
</body>
</html>


