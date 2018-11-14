<!doctype html>
	<head>
	<title>Uphaar A Co-operative Society</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		#outer
		{
		height:auto;
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
		height:auto;
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
#slider
{
height:400px;
width:100%;
background-image:url('images/b.jpg');
background-repeat:no-repeat;
background-size:cover;
background-attachment:fixed;
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
#donate 
{
	width: 100%;
background-color: #f2f2f2;
    padding: 12px 20px;
font-size:25px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#round {
  border-radius: 50%;

    background-color: #f2f2f2;
    padding: 20px;
}
table tr td
{
 text-align:center;


font-size:25px;
}
#vis
{
	height:auto;
		width:100%;
		border:1px solid black;
		margin:0px auto;
		float:left;
		Background:url("images/vision.jpeg");
		color:red;
background-repeat:no-repeat;
background-size:cover;
background-attachment:fixed;
	
	}
.visp
{
	font-family:Arial Rounded MT Bold;
	font-size:30px;
}
#footer a img
{
	display:inline;
	height:50px;
	width:50px;
}
#vide
{
	height:45px;
	width:600px;
	background-color:#33FF00;
	font-family:Pasifico;
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
input[type=email] {
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
.fdbk
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
#don
{
	height:auto;
		width:100%;
		border:1px solid black;
		margin:0px auto;
		float:left;
		#Background:url("images/support.jpg");
		background-color:#9FE4F6;
		color:red;
}
.address{
	border:1px solid black;
	width:600px;
	height:auto;
	font-family:arial;
	Background:url("images/kiet.jpg");
}
	</style>
	<script>
var txt=["WELCOME TO OUR SITE","UPHAAR   <sub>A  CO-OPERATIVE SOCIETY</sub>",""];
var color=["rgba(231,243,12,.5)","rgba(1,43,212,.5)","rgba(31,43,32,.5)"];
var arr=["b.jpg","c.jpg","f.jpg"];
var imgno=0;
function slider()
{
var dv2=document.getElementById("inner");
var dv1=document.getElementById("slider");
dv1.style.backgroundImage="url('images/"+arr[imgno]+"')";
dv2.style.background=color[imgno];
dv2.innerHTML="<i>"+txt[imgno]+"</i>";
imgno++;
if(imgno==arr.length)
imgno=0;
window.setTimeout("slider()",2000);
} 
</script>
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
		<a href="#for"><li>CONTACT</li></a>
		<a href="team.php"><li>TEAM</li></a>
		<a href="stardot.php"><li>STAR DONATORS</li></a>
		</ul>
		</div>
		</div>
		<div id="main">
		
		<div id="slider">
		<div id="inner">WELCOME TO OUR SITE</div>
		</div></div>		

		<div id="donate">

<center><b><p>Alarming Conditions</p></b></center>
<div id="don"><ul type="circle">
<li>There are more than 1.5 crore children who don't even have books to study </li>
<li>In 2012, the Indian government stated 22% of its population is below its official poverty limit.</li>
<li>22000 children die each day due to lack of food and proper medical facility.</li>
<li>About 72 million children of primary school age in the developing world were not in school, 57 percent of them were girls.</li>
</ul></div>&nbsp
<P size="50"color="green"><center><b><p>Visions</p></b></center>

<div id="vis"><center><p class="visp"><b>"UPHAAR" was initiated to the belief that equal opportunity is the concrete of civilization.</p>
<p class="visp">We at UPHAAR, aspire to change this inequality.We do this by bringing people together who 
look forward to help them,with our cooperative society UPHAAR, that works to make a positive difference.</p>
<p class="visp">The idea of UPHAAR is simply to build a bridge in between the gap of two groups of people.</p></center></div>&nbsp&nbsp

<center><b><p size="50">Your single donation can bring happiness to someone's world</b></p></b></center>


	 <center><video controls width="600" height="340" >
  <source src="videos/shoes.mp4" type="video/mp4">
  
Your browser does not support the video tag.
</video> <div id="vide">Soles4Souls</div></center>&nbsp
<center><video controls width="600" height="340" style="border:1px solid black">
  <source src="videos/clothes.mp4" type="video/mp4">
  
Your browser does not support the video tag.
</video><div id="vide">Give your clothes a new life</div> 	</center>&nbsp
</center>
<center><video controls width="600" height="340" style="border:1px solid black">
  <source src="videos/books.mp4" type="video/mp4">
  
Your browser does not support the video tag.
</video> <div id="vide">The giving of love is an education in itself</div>	</center>&nbsp

<center><b><p>Donate &hearts;</p></u></center>
<hr size="10"color="#66CCFF"text="Donate">
<center><p>Every single unit counts!... You can make a difference.<br><br>
Come forward now!...</p></center>
<hr size="10"color="#66CCFF">
			<center><table>
<tr><td>
<img id="round"src="old-shoes.jpg" alt="Shoes" style="width:200px;height:200px"></td>
<td>
<img id="round"src="clothes.png" alt="Clothes" style="width:200px;height:200px"></td>
<td>
<img id="round"src="books.jpeg" alt="Books" style="width:200px;height:200px"></td>
<td>
<img id="round"src="money.jpg" alt="Money" style="width:200px;height:200px"></td></tr>
<tr><td>Shoes</td>
<td>Clothes</td>
<td>Books</td>
<td>Money</td>
</tr></table>
<table>
<tr><td></td>
</tr>
</table><br><a href="donate.php"><img src="donate.gif"alt="donate"width="350"height="50"></a>
</center>

<div id="for"><p class="fdbk"style="width: 100%; background-color: #34E0CC;
    color: red;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;">Help us Improving/Queries</p>

        
	  <form action="message.php"method="get"name="contactform">
    <label for="fname">First Name</label>
    <input  id="fname"type="text" name="fn" placeholder="Your name.."required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="ln" placeholder="Your last name.."required>
    <label for="email">Email</label>
	<input type="email"name="email"placeholder="example@gmail.com">

    <label for="message">Message</label>
    <textarea rows="10"cols="30"name="mess"placeholder="Your Message here"></textarea>
          
  
    <input type="submit" value="Submit">
  </form>
 
</div>

	Address:
	<div class="address">&nbsp&nbsp&nbsp&nbspDepartment OF Information 
	Technology<br>
	&nbsp&nbsp&nbsp&nbspKIET Group OF Institution,<br>
	&nbsp&nbsp&nbsp&nbspMuradnagar, Ghaziabad<br>
	&nbsp&nbsp&nbsp&nbsp201206
	<table><tr>
	<td><img src="whatsapp.png"height="30"width="30"></td><td> +918707262565,7503436356</td>
	</tr>
	</table>
	</div>

		</div>

	
		
		<div id="footer">
<a href="#"><img src="images/facebook.png"></a>&nbsp&nbsp
<a href="#"><img src="images/instagram.png"></a>&nbsp&nbsp
<a href="#"><img src="images/twitter.png"></a>&nbsp&nbsp
<a href="#"><img src="images/youtube.png"></a>
		<div class="fpart">
&copy;uphaar a co-operative society
</div></div>
	</body>
</html>
