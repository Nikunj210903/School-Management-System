s<?php
include('../datacon.php');
	$roll=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$std=$_POST['standard'];
	//$img = $_FILES['studentimage']['name'];
	//$temp = $_FILES['studentimage']['tmp_name'];
	//move_uploaded_file($temp,"../dataimages/$img");
	$qry="UPDATE `student` SET `name`='$name',`city`='$city',`parentno`='$pcon',`std`='$std' WHERE `rollno`='$roll'";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert('data updated succesfully');
		</script>
		<?php
		header('location:updateform.php?sid=$roll');
	}
?>