<?php
include('./dashboard/includes/config.php'); 
session_start();
$_SESSION['id'] = "";
  if (isset($_POST['login_btn'])) {  
  $email = mysqli_real_escape_string($con, $_POST['email']);
    if ($email == "email") {
    }
    else
    {
      $email = ucwords($email);
    //echo $username;
    }
    $password = mysqli_real_escape_string($con, $_POST['password']);
  $email = $_POST['email'];
   $password = $_POST['password'];

   $password = md5($password);
     $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'" or die("failed");
     $results = mysqli_query($con, $query);
            if (mysqli_num_rows($results) > 0){
            $tl = mysqli_fetch_array($results);
$_SESSION["email"] =  $tl['email'];
$_SESSION["username"] =  $tl['username'];
$_SESSION["id"] = $tl['id'];
// print_r($_SESSION);
    header("location: dashboard/food_tracker.php");
        
      }else {
     echo '<div class="alert alert-danger"><strong>Error!</strong>Incorrect Username And Password</div>';
            
            
      }
  }
?>
<?php
 // if(isset($_SESSION['id'])){
 //  $id=$_SESSION['id'];
 // }else{
 //  header('Location: ../login.php');
 // }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="./dashboard/css/sb-admin-2.css">
</head>
<body>


<?php
include('./dashboard/includes/header.php'); 
?>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
              <img src="./dashboard/img/newlogo.png" width="300px;" height="60px;" style="background-color: black"><br><br>
                <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
        
              </div>

                <form action="" method="POST">

                    <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address..." required="">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required="">
                    </div>
            
                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                    <hr>
                     Create Account?<a href="register.php">Register</a>
                </form>


            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>
<?php
include('./dashboard/includes/scripts.php'); 
?>
</body>
</html>