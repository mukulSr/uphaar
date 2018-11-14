<!doctype html>
	<head>
	<title>Donate Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		#outer
		{
		height:auto;
		width:100%;
		
		border:1px solid black;
		margin:0px auto;
		}
		#footer a img
{
	display:inline;
	height:50px;
	width:50px;
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
		height:autopx;
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
input[type=text], input[type=number]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email],select {
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
    padding: 20px;
}
p
{
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
   
    border-radius: 4px;
    box-sizing: border-box;
    font-family: "Times New Roman", Times, serif;
	font-size:25px;
	
}
#don
{
	height:auto;
		width:100%;
		
		margin:0px auto;
		float:left;
		
		#background-color:#9FE4F6;
		#color:red;
		font-size:25px;
}
label{
	font-size:25px;
	font-weight:bold;
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
		<a href="team.php"><li>TEAM</li></a>
		<a href="stardot.php"><li>STAR DONATORS</li></a>
		</ul>
		</div>
		</div>
		<div id="main">
	<br><br>
	
	<div id="don"><ul type="circle">
	<h2>Conditions to be Followed</h2>
	<li>The clothes,Books and shoes should be in good condition</li>
	<li>Everything you donate should be well wrapped and place your name on it</li>
	<h2>Place</h2>
	<li>Where and When to donate? </li>
	<h2>Requirement(recommended)</h2>
	<li>Clothes</li>
	<li>Books</li>
	
	
	</ul></div>&nbsp&nbsp
	
	<div id="for">
	  <form action="detail.php"method="get"name="donateform">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fn" placeholder="Your name.."required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="ln" placeholder="Your last name.."required>
    <label for="email">Email</label>
	<input type="email"name="email"placeholder="example@gmail.com">
	<label for="Contact">Contact No</label>
	<input type="text"name="contact"placeholder="Your mobile No">
	<label for="roll no">University Roll No.</label>
	<input type="text"name="rn"placeholder="university roll no.">
	<label for="items">Items</label>
	 <select name="ch">
  <option value="shoes">Shoes</option>
  <option value="clothes">Clothes</option>
  <option value="books">Books</option>
  <option value="money">Money</option>
</select> 

    
          
  
    <input type="submit" value="Submit">
  </form>
</div>


	
	
		
	</div>
		
	


		
		<div id="footer"><div id="footer">
<a href="#"><img src="images/facebook.png"></a>&nbsp&nbsp
<a href="#"><img src="images/instagram.png"></a>&nbsp&nbsp
<a href="#"><img src="images/twitter.png"></a>&nbsp&nbsp
<a href="#"><img src="images/youtube.png"></a>
		<div class="fpart">
&copy;uphaar a co-operative society
</div></div>
		</div>
	</body>
</html>
