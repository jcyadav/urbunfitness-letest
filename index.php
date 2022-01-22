<?php 
$conn = mysqli_connect("localhost", "root", "", "crude");

if(isset($_POST['submit'])){

  $a = $_POST['Name'];
  $b = $_POST['Email'];
  $c = $_POST['Moblie'];
  $d = $_POST['Pasword'];
  
  
         $sql = "INSERT INTO seenu(Name, Email, Moblie,Pasword) 
          VALUES ('$a','$b','$c', '$d')";
           mysqli_query($conn,$sql) or die (mysqli_error($conn));

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Crude Opretion</title>
  </head>
  <body>
  <div class="container my-5">
    <form method="POST" action=""> 
  <div class="form-group">
    <label>Name</label>
 <input type="text" class="form-control" placeholder="Enter Your Name" name="Name" autocomplete="off"> 
  </div>
  <div class="form-group">
    <label>Email</label>
 <input type="text" class="form-control" placeholder="Enter Your Email" name="Email" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Mobile</label>
 <input type="text" class="form-control" placeholder="Mobile" name="Moblie" autocomplete="off"> 
 <div class="form-group">
    <label>Pasword</label>
 <input type="Pasword" class="form-control" placeholder="Enter Your Pasword" name="Pasword" autocomplete="off"> 
  </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <button class="btn btn-primary my-5"> <a href="display.php" class="text-light">View User</a>

</form> 
  </div>
  </body>
</html>