<?php

  	$conn = mysqli_connect("localhost", "root", "", "crude");

  	if(isset($_GET['deleteid'])){

  		$id=$_GET['deleteid'];

  		 $sql="DELETE FROM `seenu` WHERE id=$id";

  		$result=mysqli_query($conn,$sql);

  		if($result){

  			header('location:display.php');

  		}else{
  			die(mysqli_error($conn));
  		}
  	}

?>