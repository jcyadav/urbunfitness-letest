<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php 
include 'includes/config.php';

if (isset($_POST['edit_btn'])){
  $edit_id = $_GET['edit_id'];
  $sleep_time = $_POST['sleep_time'];
  $wakeup_time = $_POST['wakeup_time'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  $upd  = "UPDATE sleeptracker SET sleep_time = '$sleep_time', wakeup_time = '$wakeup_time', date = '$date', time = '$time' WHERE id ='$edit_id'";
 $updresult = mysqli_query($con, $upd ) or die("query failed");
if ( $updresult !=0) {

echo '<div class="alert alert-success"><strong>Success!</strong>Update Success!</div>';
  echo "<script>setTimeout(function(){
                         window.location.href = 'sleep_tracker.php';
                                  }, 2000);
                         </script>";
                        }
}else{

   // echo '<div class="alert alert-danger"><strong>Error!</strong> Please Try again </div>';

}

?>
<?php 

include 'includes/config.php';

  $edit = "SELECT * FROM sleeptracker";
  $result = $con->query($edit);

  $data = $result->fetch_assoc();

?>
      <form action="" method="POST">
        <div class="col-md-12">
            <div class="form-group">
              <div class="col-md-12">
                <label>Sleep Time</label>
              
                <input type="time" name="sleep_time" class="form-control" value="<?php echo $data['sleep_time']; ?>" >
            </div>
            </div>
          </div>
          <div class="col-md-12">
              <div class="form-group">
                  <div class="col-md-12">
                <label>Wake UpTime</label>
                <input type="time" name="wakeup_time" class="form-control" value="<?php echo $data['wakeup_time'] ?>" >
            </div>
          </div>
            </div>
            <div class="col-md-12">
<div class="form-group">
                <div class="col-md-12">
                  <label>date</label>
                <input type="date" name="date" class="form-control" value="<?php echo $data['date'] ?>" >
            </div>
                </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
                <div class="col-md-12">
                  <label>Time</label>
                <input type="time" name="time" class="form-control" value="<?php echo $data['time'] ?>" >
            </div>
          </div>
                </div>
        <input type="hidden" name="id" value="<?php echo $data['id']?>" />
       
        <div class="modal-footer">
            <a href="sleep_tracker.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">View</button></a>
          <button type="submit" name="edit_btn" class="btn btn-primary">Update</button>
           <!-- <a href='food_tracker.php?edit<?php echo $data['id'] ?>'></a> -->
        </div>
         </div>
      </form>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
  </div>
</div>

