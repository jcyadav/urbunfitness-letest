<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php 
include 'includes/config.php';

if (isset($_POST['edit_btn'])){
  $edit_id = $_GET['edit_id'];
  $food_name = $_POST['food_name'];
  $unit = $_POST['unit'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  $upd  = "UPDATE foodtracker SET food_name = '$food_name', unit = '$unit', date = '$date', time = '$time' WHERE id ='$edit_id'";
 $updresult = mysqli_query($con, $upd ) or die("query failed");
if ( $updresult !=0) {

echo '<div class="alert alert-success"><strong>Success!</strong>Add Success!</div>';
  echo "<script>setTimeout(function(){
                         window.location.href = 'food_tracker.php';
                                  }, 2000);
                         </script>";
                        }
}else{

   // echo '<div class="alert alert-danger"><strong>Error!</strong> Please Try again </div>';

}

?>
<?php 

include 'includes/config.php';

  $edit = "SELECT * FROM foodtracker";
  $result = $con->query($edit);

  $data = $result->fetch_assoc();

?>
      <form action="" method="POST">
        <div class="col-md-12">
            <div class="form-group">
              <div class="col-md-12">
                <label>Food Name</label>
                  <input type="hidden" name="id"  value="" >
                <input type="text" name="food_name" class="form-control" value="<?php echo $data['food_name']; ?>" >
            </div>
            </div>
          </div>
          <div class="col-md-12">
              <div class="form-group">
                  <div class="col-md-12">
                <label>unit</label>
                <input type="text" name="unit" class="form-control" value="<?php echo $data['unit'] ?>" >
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
            <a href="food_tracker.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">View</button></a>
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

