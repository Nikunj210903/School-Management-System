
<?php
include('../datacon.php');
	$roll=$_REQUEST['sid'];
	$qry="delete from `student` where `rollno`='$roll'";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
		?>
		<script>
		alert('data deleted succesfully');
		window.open('delete.php','_self');
		</script>
		<?php
		
	}
?>