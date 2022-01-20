<?php 
$conn = mysqli_connect("localhost", "root", "", "crude");

 $id=$_GET['Updateid'];

 $sql="Select * from `seenu` where id=$id";

 $result=mysqli_query($conn,$sql);

 $row=mysqli_fetch_assoc($result);

 $Name=$row['Name'];
 $Email=$row['Email'];
 $Moblie=$row['Moblie'];
 $Pasword=$row['Pasword']; 

if(isset($_POST['submit'])){

  $a = $_POST['Name'];
  $b = $_POST['Email'];
  $c = $_POST['Moblie'];
  $d = $_POST['Pasword'];
  
   
         $sql="UPDATE `seenu` SET id=$id,Name='$a',Email='$b',Moblie='$c',Pasword='$d' WHERE id=$id";

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
 <input type="text" class="form-control" placeholder="Enter Your Name" name="Name" autocomplete="off" value="<?php echo $Name?>"> 
  </div>
  <div class="form-group">
    <label>Email</label>
 <input type="text" class="form-control" placeholder="Enter Your Email" name="Email" autocomplete="off" value="<?php echo $Email?>"> 
  </div>
  <div class="form-group">
    <label>Mobile</label>
 <input type="text" class="form-control" placeholder="Mobile" name="Moblie" autocomplete="off" value="<?php echo $Moblie?>"> 
 <div class="form-group">
    <label>Pasword</label>
 <input type="Pasword" class="form-control" placeholder="Enter Your Pasword" name="Pasword" autocomplete="off" value="<?php echo $Pasword?>"> 
  </div>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
  <button class="btn btn-primary my-5"> <a href="display.php" class="text-light">View User</a>
</form> 
  </div>
  </body>
</html>