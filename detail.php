<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uphaar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$name = $_GET['fn'];
$namel= $_GET['ln'];
$email= $_GET['email'];
$Rno= $_GET['rn'];
$choice= $_GET['ch'];
$cont= $_GET['contact'];
	
	
	  
$sql = "INSERT INTO details VALUES(0,'$Rno','$name $namel','$email','$cont','$choice');";


if (mysqli_query($conn, $sql)) {
    
}





?>

<!doctype html>
<html>
	<head>
	<title>Thank You for your suggestion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		#outer
		{
		height:600px;
		width:100%;
		
		border:1px solid black;
		margin:0px auto;
		}
		#upper
		{
		height:200px;
		width:100%;
		border:1px solid black;
		margin:0px auto;
		}
		#logo
		{
		height:150px;
		width:100%;
		
		
		margin:0px auto;
		}
		#menu
		{
		height:50px;
		width:100%;
		background-color:#33FF00;
		border:1px solid black;
		margin:0px auto;
		}
		
		#main
        {
		height:400px;
		width:100%;
		}
		
		#footer
        {
		height:auto;
		width:100%;
		background:black;
		}
		#menu ul a li:hover
		{
background:#d5440d;
color:white;
transition:all ease 1s;
border-radius:5px;
}
#menu ul a
{
color:#330066;
text-decoration:none;
font-weight:bold;
font-size:17px;
}
#footer a img
{
	display:inline;
	height:50px;
	width:50px;
}
#menu ul a li
{
display:inline;

padding:8px;
margin:20px;
}
#inner
{
height:400px;
width:100%;
background:rgba(0,0,0,.4);
color:white;
font-size:60px;
text-align:center;
line-height:400px;
}
.fpart
{
height:45px;
width:500px;
color:white;
float:left;
text-align:center;
line-height:45px;
font-size:20px;
}
input[type=text], textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #20EA38;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

#for {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;font-size:25px;
font-family:""
	
}
p
{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-family: "Times New Roman", Times, serif;
	font-size:25px;
	
}
	</style>
		</head>
	
	<body onload="slider()">
	    <div id="outer">
		<div id="upper">
		<div id="logo">
			<center><a href="index.php"><img src="logo.png" height="150"width="800"></a></center>
		</div>
		<div id="menu">
		<ul>
		<a href="index.php"><li>HOME</li></a>
       <a href="donate.php"><li>DONATE</li></a>
		<a href="about.php"><li>ABOUT</li></a>
		<a href="work.php"><li>WORK</li></a>
		<a href="index.php#for"><li>CONTACT</li></a>
		<a href="stardot.php"><li>TEAM</li></a>
		<a href="stardot.php"><li>STAR DONATORS</li></a>
		</ul>
		</div>
		</div>
		<div id="main">

	
	

	
	
		
	

        <div id="for">We appreciate you for taking this decision. One of our colleagues will get back to you shortly.

Have a great day!<br>return to our <a href="index.php">Home</a> Page
	  
</div></div>


		
		<div id="footer"><div id="footer">
<a href="#"><img src="images/facebook.png"></a>&nbsp&nbsp
<a href="#"><img src="images/instagram.png"></a>&nbsp&nbsp
<a href="#"><img src="images/twitter.png"></a>&nbsp&nbsp
<a href="#"><img src="images/youtube.png"></a>
		<div class="fpart">
&copy;uphaar a co-operative society
</div></div>
		
	</body>
</html>