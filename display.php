<!DOCTYPE html>
<html>
<head>
	<title>Crude Opretion</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>crude1

<div class="container">
	<button class="btn btn-primary my-5"> <a href="from.php" class="text-light"> Add User</a>
	</button>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Pasword</th>
      <th scope="col">Opretion</th>
    </tr>
  </thead>
  <tbody>
  	<?php 

  	$conn = mysqli_connect("localhost", "root", "", "crude");

   
       $sql ="SELECT * FROM `seenu`";

        $result = mysqli_query($conn,$sql);

        if($result) {
        	while($row=mysqli_fetch_assoc($result)) {
        		$id=$row['id'];
        		$Name=$row['Name'];
        		$Email=$row['Email'];
        		$Moblie=$row['Moblie'];
        		$Pasword=$row['Pasword'];


        		echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$Name.'</td>
      <td>'.$Email.'</td>
      <td>'.$Moblie.'</td>
      <td>'.$Pasword.'</td>
      <td>
  		<button class="btn btn-primary">
      <a href="Update.php?Updateid='.$id.'"class="text-light">Update</a>
      </button>
  		<button class="btn btn-danger"><a href="Delete.php?
  		deleteid='.$id.'" class="text-light">Delete</a>
       </button>
  	</td>
    </tr>';
        	
        	}
        }
  	?>
  	
    
</table>
</div>
</body>
</html>