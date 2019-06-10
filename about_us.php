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
#img1{
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
	height:1020px;
	
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
	height:80px;
	margin-top:-10px;
	line-height:60px;
	box-shadow:0px -4px 2px red;
	text-align:center;
	background-color:yellow;
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
</style>
</head>
<body>
<div>
	<div id="header">
		<div id="photo">
		<img id="img1" src="images/111.jpg">
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
		
		<div class="gridcontainer1">
			
			<div class="griditem1" style=" background-color:white;">
			<h3 align="left" style="font-size:30px">About us</h3>
			<div style="text-align:justify; padding:10px; box-shadow: 2px 2px 0px 0px rgba(0,0,0,0.1);">
			<font size="5px">AHPS is one of the most prominent secondary schools of India which has become the hallmark, in the field of education. The school is well known for its innovative teaching, methodologies, academic and cultural achievements. Its aim is to lay the foundation of students’ life and spread the divine light of education by nurturing all its students.
AHPS also endeavors to transform the entire education scenario of the nation by incorporating extensive measures in shaping the young brains on contemporary and futuristic issues.
We believe that Excellence in learning should not be limited within the classroom but should reach beyond it.That is why , we want our students in a learning mode throughout their life. They should grow up into knowledgeable and compassionate adults so that they become professionals well versed in modern technology.We think that the progress in today's world can be achieved through active participation, to be passionate about their goals and to value excellence.</font>

 
			</div>
			</div>
		
		</div>
		<div class="gridcontainer2">
			<div class="griditem2" id="item">
			<b><h4 style="color:white;">IMPORTANT LINKS</h4></b>
				<ul>
					<li><a>School Timings</a></li>
					<li><a>Leave Rules</a></li>
					<li><a>School Calendar</a></li>
					<li><a>House Systems</a></li>
					<li><a>Our Branches</a></li>
				</ul>
			</div>
			<div class="griditem2" ID="item" style="background-color:#1A4167;">
			<center><h3 style="color:white;">Message</h3></center>
			<div style="background-color:lightblue; width:65%; align:center; margin-left:50px">
			<p style="text-align:justify; padding:15px;">
			  While your customer will have probably forgotten that your competitors even exist. Which brings us, by a somewhat circutorus route to another small point, but one which we fill shouble be raised.
			</p>
			</div>
			</div>
			<div class="griditem2" id="item">
			<center><h3>NEWS & ACHIVEMENT</h3></center>
			<p>News1</p>
			<br>
			<hr>
			<br>
			<p>News1</p>
			<br>
			<hr>
			<br>
			<p>News1</p>
			<br>
			<hr>
			<br>
			</div>
		</div>
	</div>	

	<div id="footer" style="height:80px; margin-top:-10px; line-height:60px; box-shadow:0px -4px 2px yellow; text-align:center; background-color:#1A4167; color:white;"> 
		<p >copyright &copy 2018 pathak school,150 feet ring road,rajkot.</p>
	</div>
</div>
</body>
</html>