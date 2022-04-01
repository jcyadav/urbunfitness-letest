<?php 
session_start(); 
include 'includes/config.php';
 if(isset($_SESSION['username'])){
  $username=$_SESSION["username"];
 }else{
  header('Location: ../login.php');
 }
?>
<?php 
$username = $_SESSION['username'];
 $qury = "SELECT * FROM users WHERE username = '$username'";
     $res = mysqli_query($con, $qury);
     $row = mysqli_fetch_array($res);
     $id = $row['id'];
include 'includes/config.php';
if(isset($_POST['submitbtn'])){
  $sleep_time = $_POST['sleep_time'];
  $user_id = $_POST['user_id'];
  $wakeup_time = $_POST['wakeup_time'];
  $date = $_POST['date'];
  $time = $_POST['time'];

$sqli = "INSERT INTO sleeptracker(user_id, sleep_time, wakeup_time, date,time) 
          VALUES ('$user_id','$sleep_time','$wakeup_time','$date', '$time')";
          $resultt = mysqli_query($con,$sqli);
if ($resultt >0) {
 echo '<div class="alert alert-success"><strong>Success!</strong>Add Success!</div>';
}else{
   echo '<div class="alert alert-danger"><strong>Error!</strong>Fail Please Try again </div>';
}
}
?>
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Sleep Time</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">

        <div class="modal-body">
 <input type="hidden" name="user_id" value="<?=$id?>">
            <div class="form-group">
            <label for="appt">Sleep Time:</label>
            <input type="hidden" name="user_id" value="<?=$id?>">
             <input type="time"  name="sleep_time" class="form-control" >
            </div>
             <div class="form-group">
            <label for="appt">Wake Up Time:</label>
            <input type="time"  name="wakeup_time" class="form-control">
            </div>
        
            <div class="form-group">
            <label for="appt"> Date:</label>
             <input type="date" name="date" class="form-control" >
            </div>
             <div class="form-group">
            <label for="appt">Time:</label>
            <input type="time" name="time" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submitbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sleep Tracker
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Add 
            </button>
    </h6>
       <?php 
  echo  "<h5 style='color:black;float:right; margin-top:-20px; font-family:arial;'>Welcome"."  " ." <bold>".$_SESSION["username"];
?></bold></h5>
  </div>

  <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> User ID </th>
            <th>Sleep Time </th>
            <th>Wake Up Time</th>
            <th>Date </th>
            <th>Time</th>
            <th>EDIT</th>
            <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
              <?php 
include 'includes/config.php';
if (isset($_GET['del_id'])){
  
  $del_id = $_GET['del_id'];

$delete = "DELETE FROM sleeptracker WHERE id = '$del_id'";

$delresult = mysqli_query($con, $delete) or die("query failed");

if ($delresult === true) {
 echo '<div class="alert alert-danger"><strong>danger!</strong>Delete Success!</div>';
   echo "<script>setTimeout(function(){
                         window.location.href = 'sleep_tracker.php';
                                  }, 2000);
                         </script>";
                        
}else{
   echo '<div class="alert alert-danger"><strong>Error!</strong>Fail Please Try again </div>';
}

}
?>
    <?php
     $username = $_SESSION['username'];
 $qury1 = "SELECT * FROM users WHERE username = '$username'";
     $res1 = mysqli_query($con, $qury1);
     $row1 = mysqli_fetch_array($res1);
     $id = $row1['id'];
      $displey = "SELECT * FROM sleeptracker WHERE user_id = '$id'";
      $result = $con->query($displey);

      if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['user_id']."</td>
            <td>".$row['sleep_time']."</td>
            <td>".$row['wakeup_time']."</td>
            <td>".$row['date']."</td>
            <td>".$row['time']."</td>
            <td><a href='sleep_edit.php?edit_id=".$row['id']."'<button type='button' name='edit_btn' class='btn btn-success'>EDIT</button></a></td>
                <td>
              <a href='sleep_tracker.php?del_id=".$row['id']."'><button type='submit' class='btn btn-danger'>DELETE</button></a>
              </td>
          </tr>";
        }
      } 
      ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
    </div>

  </div>


<!-- /.container-fluid -->

