
<html>
<head>
<style>
#header{
height:120px;
	background-color:white;
}
#photo{
	
	
	width:50%;
	float:left;
}
#imgheader{
	height:80px;
	width:300px;
	padding:15px 15px 5px 100px;
}
#other{
	float:right;
	
	width:50%;
	
}
#admissioninq1
{
	border:2px solid black;
	border-radius:15px;
	width:170px;
	background-color:#1A4167;
	padding:5px;
	box-shadow:5px 0px 5px yellow;
}
#nav{
	margin-top:-5px;
	width:100%;
	height:43px;
	border:2px solid black;
	box-shadow:0px -4px 3px yellow;
	
	background-color:#1A4167;
}
#nav ul
{
	list-style-type:none;
	margin-left:-40px;
	margin-top:0px;
}
#nav ul li
{
float:left;
width:150px;
padding:12px;
text-align:center;
}	
#nav ul a
{
	color:white;
	text-decoration:none;
}
#nav ul li a:hover
{
	color:#e0c572;
	transition-duration:0.5s;
}
#div3
{

	
}
.gridcontainer
{
	width:24%;
	float:left;
display:grid;
padding:10px;
background-color:#f3f3f3;	
grid-row-gap:20px;
grid-template-row: auto auto auto;
}
.gridcontainer2
{
	float:left;
	width:24%;
display:grid;
padding:10px;
background-color:#f3f3f3;	
grid-template-row: auto auto auto;
grid-row-gap:20px;

}

.gridcontainer1
{
	float:left;	
	width:72%;
display:grid;
padding:10px;
background-color:#f3f3f3;	
grid-template-row: auto auto auto;
grid-row-gap:20px;
}


.griditem{
	box-shadow: 2px 2px 0px 0px rgba(0,0,0,0.05);
	padding:20px;
	font-sixe:30px;
	text-align:center;
	
}
.griditem ul li
{
	padding-right:150px;
}
.griditem1{
	padding:20px;
	font-sixe:30px;
	text-align:center;
	
}
.griditem2{
	padding:20px;
	font-sixe:30px;
	text-align:center;
}
#footer
{
}
#item
{
	  background-color: #dfc253;
    border-top: solid 6px #b9972f;
    color: #675314;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
#item ul{
	list-style-type:none;
}
#item ul li{
	text-align:justify;
	line-height:25px;
	
	font-family:Roboto, Arial, Tahoma, sans-serif;

}
#fb li
{
float:left;
padding:13px;
text-align:center;
}

.g13
{
	width:20%;
	float:left;
display:grid;
padding:10px;
background-color:#f3f3f3;	
grid-column-gap:20px;
grid-template-row: auto auto auto;
}

.option{
width:100%;
margin-top:-15px;
background-color:white;

}
.option #ok ul{
list-style-type:none;
}
.option #ok
{
margin-left:13%;
margin-top:30px;
}
.option #ok ul li{
float:left;
position:relative;
width:110px;
padding:23px;
font-size:20px;
text-align:center;
}
.option #ok li:hover{
background-color:rgb(0,0,0,0.3);
border-radius:10px;
cursor:pointer;
width:110px;
}
a{
text-decoration:none;
}
#img1{
width:100%;
margin-top:10px;
height:170px;
}
.logo1{
width:100%;

background-color:blue;
}
.logo2{
margin-left:40%;
}
.logo2 ul{
list-style-type:none;	
}
.logo2 ul li{
float:left;
}
.img2{
width:60px;
height:60px;
padding:10px;
border:1px solid red;
border-radius:40px;
}
.img2:hover{
width:65px;
height:65px;
bckground-color:blue;
}

.modal{font-family: Arial, Helvetica, sans-serif; 
width:600px; 
margin:auto auto;
box-shadow:0px 0px 30px rgb(0,0,0,0.6);
}
input{
border-radius:9px;
}
input:focus{
background-color:#ff8080;
font-weight:bold;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
   
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}



.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

.avatar {
    width: 40%;
    border-radius: 50%;
	margin-top:20px;
}

.container {
    padding: 16px;
	margin-top:-60px;
}

span.psw {
    float: right;
    padding-top: 16px;
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid white;
    width: 100%;
	height:100%;
}

</style>
</head>
<body>
<div>
	<div id="header">
		<div id="photo">
		<img id="imgheader" src="images/111.jpg">
		</div>
		<div id="other">
			<div id="contact" >
				<p align="right" style="padding:0px 180px 0px 5px;margin-top:0px;">
					<a style="text-decoration:none;" href="Stafflogin.php"><font color="black"><a href="stafflogin.php">Admin_login</a></font></a>
					<a style="text-decoration:none;" href="Stafflogin.php"><font color="black"><a href="studentdetail.php">student_detail</a></font></a>
				</p>
			</div>
			<div id="admissioninq" style="padding-left:420px;">
				<div id="admissioninq1">
				
					<center><font color="white" size="4px"><b>Admission Enquiry</b></font>
					<br>
					<font color="white">Mo.no:9913551362
					<br>
					Mo.no:9904859080</font></center>
					
				</div>
			</div>
		</div>
	</div>
	<div id="nav"> 
			
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about_us.php">About Us</a></li>
					<li id="academic"><a href="infrastructure.php">Infrastructure</a></li>
					<li><a href="activities.php">Activities</a></li>
					<li><a href="admission.php">Admission</a></li>
				</ul>
		
	</div>

    <div id="div3">
		<div class="gridcontainer">
			<div id="item" class="griditem" style="background-color:#dfc253">
				<b><h4 style="color:white;">IMPORTANT LINKS</h4></b>
				<ul>
					<li><a>School Timings</a></li>
					<li><a>Leave Rules</a></li>
					<li><a>School Calendar</a></li>
					<li><a>House Systems</a></li>
					<li><a>Our Branches</a></li>
				</ul>
			</div>
			<div class="griditem" style="background-color:white">
				<b><h4 style="color:black;">Contact with us</h4></b>
				<p align="justify">follow us on social media and be the first to find out about our announcement and promos</p>
				<ul id="fb" style="list-style-type:none;">
					<li ><img width="50px" height="50px" src="images/fb.png"></li>
					<li><img width="50px" height="50px" src="images/insta.jpg"></li>
					<li><img width="50px" height="50px" src="images/twitter.png"></li>
				</ul>
			</div>
			<div id="item" class="griditem" style="background-color:#1A4167;">
			<h3 style="color:white;" >School address</h3>
			<p style="text-decoration:underline; color:white;">PATHAK SCHOOL</p>
			<p style="color:white;">150 feet ring road-rajkot,Gujarat-360005</p>
			</div>
		</div>	
		<div class="gridcontainer1">
			<div class="griditem1">
			<h2 align="right"><a href="admincontrol.php">Back</a></h2>
			        <h2 align="left">Update Student Detail</h2>
			<div id="id01" class="modal">
			
	<?php
$con=mysqli_connect('localhost','root','','school');
     if(isset($_POST['submit']))
	 {
	$dstd=$_POST['std'];
	$droll=$_POST['roll'];
$sql="select * from `postadmission` where `roll no`='$droll' and `standard`='$dstd'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
	 }
?>		
  <form class="modal-content " action="update2.php" method="post">
    <div class="imgcontainer">
      <h3>Upadate student form</h3>
	  <br>
	  <br>
    </div>	
    <div class="container">
      <h4 align="left"><b>Roll no</b></h4>
      <input type="text" placeholder="Enter rollno" name="rollno" value="<?php if(isset($_POST['submit'])){echo $data['roll no'];} ?>" required >

       <h4 align="left"><b>Full name</b></h4>
      <input type="text" placeholder="Enter full name" name="fname" value="<?php if(isset($_POST['submit'])){ echo $data['full name'];}?>" required pattern="\w+[^\.]" minlength="5" title="minimum 5 alphanumeric required">
        <h4 align="left"><b>City</b></h4>
      <input type="text" placeholder="city" name="city" value="<?php if(isset($_POST['submit'])){ echo $data['city'];}?>" required pattern="\w{5,}" title="minimum 5 alphanumeric required">
	  
	 <h4 align="left"><b>parrent contact</b></h4>
      <input type="text" placeholder="Enter parrent contact" name="pcontact" required pattern="\w{5,}" value="<?php if(isset($_POST['submit'])){ echo $data['parrent contact'];}?>" maxlength="10"title="minimum 5 alphanumeric required">
	   <h4 align="left"><b>Address</b></h4>
      <input type="text" placeholder="Enter address" name="address" value="<?php if(isset($_POST['submit'])){ echo $data['address'];}?>" required pattern="\w{5,}" title="minimum 5 alphanumeric required">
      
    <h4 align="left"><b>Standard</b></h4>
      <input type="text" placeholder="Enter Standard" name="stdd" value="<?php if(isset($_POST['submit'])){echo  $data['standard'];}?>" required>
	  
	  <button type="submit" name="submi">Submit</button>
    </div>
  </form>
</div>

			
</div>
			<div class="griditem1" style="background-color:white; box-shadow: 2px 2px 0px 0px rgba(0,0,0,0.1);">
			<div class="main13">
			<h3 align="left">Gallery</h3>
			       <div class="g13">
				   <img  style="width:80%"src="images/111.jpg">
				  </div>
				  <div class="g13">
				   <img style="width:80%" src="images/111.jpg">
				  </div>
				  <div class="g13">
				   <img style="width:80%" src="images/111.jpg">
				  </div>
				  <div class="g13">
				   <img style="width:80%" src="images/111.jpg">
				  </div>
				  </div>
			</div>
		</div>
		
	</div>
	<div id="footer" style="height:80px; margin-top:-10px; line-height:60px; box-shadow:0px -4px 2px yellow; text-align:center; background-color:#1A4167; color:white;"> 
		<p >copyright &copy 2018 pathak school,150 feet ring road,rajkot.</p>
	</div>
</div>
</body>
</html>
<?php
$con = mysqli_connect('localhost','root','','school');
if($con==false)
{
echo "not done";
}
if(isset($_POST['submi']))
{
$roll=$_POST['rollno'];
$fname=$_POST['fname'];
$city=$_POST['city'];
$pcontact=$_POST['pcontact'];
$address=$_POST['address'];
$standard=$_POST['stdd'];
$qry="UPDATE `postadmission` SET `city`='$city',`parrent contact`='$pcontact',`full name`='$fname',`address`='$address' WHERE `roll no`='$roll' and `standard`='$standard'";
$run=mysqli_query($con,$qry);
if($run)
{
	echo "y";
}
else
{echo "n";
	
}
}
?>