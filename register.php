<?php 
 require("./dashboard/includes/config.php");
if(isset($_POST['submit'])){
 $username = $_POST['username'];
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $mobile = $_POST['mobile'];
    // date_default_timezone_set('Asia/Kolkata'); 
    // $date = date("d-m-Y H:i:s");

    $sql = ("INSERT INTO users(username, email, password, mobile)
      VALUES ('$username','$email','$password','$mobile')");
      // use exec() because no results are returned
      // $results=$con->exec($sql);
      $results = mysqli_query($con, $sql);
      if($results!=0){

     echo '<div class="alert alert-success"><strong>success!</strong>Registration Successful!</div>';
      echo "<script>setTimeout(function(){
                         window.location.href = 'login.php';
                                  }, 2000);
                         </script>";
                       
      }else{
          echo '<div class="alert alert-danger"><strong>Error!</strong>Registration Fail Please Try again.</div>';
      }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
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
                <h1 class="h4 text-gray-900 mb-4">Registration Here!</h1>
        
              </div>

                <form action="register.php" method="POST">
               <div class="form-group">
                 <input type="hidden" name="user_id" value="<?=$id?>">
                    <input type="text" name="username" class="form-control form-control-user" placeholder="Enter Username" required="">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="hidden" name="user_id" placeholder="Username:" id="user_id" required>
                    <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address..." required="">
                    </div>
                    <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                    <input type="text" name="mobile" class="form-control form-control-user" placeholder="Mobile Number" required="">
                    </div>
            
                    <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Register </button>
                    <hr>
                    Already Register?<a href="login.php">Login</a>
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