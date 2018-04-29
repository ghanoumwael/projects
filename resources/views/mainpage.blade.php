<!doctype html>
<html >
<head >
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" >
<title>Untitled Document</title>

<style>
body{
	margin:0;
}
.head_page{
background-color:rgba(25,7,69,1.00);
	height: 70px;
	
	
}
.ite
{
	color: rgba(255,255,255,1.00);
	margin-left: 3px;
	margin-right: 200px;
	margin-top: 8px;
	width:60px;
	float:left;
	
	
	}
.signout
{		font-family: Constantia, Lucida Bright, DejaVu Serif, Georgia, serif;
	color:rgba(248,247,247,1.00);
	margin-right: 7px;
	margin-top: 10px;
	margin-left: 445px;
	float:left;
	font-size:23px;
	text-decoration: none;
	}	
	
	
	.img1
{margin-left: 30px;
	margin-top: 8px;
	width:60px;
	float:left;

	}
	
.img2
{	
	margin-top: 14px;
	width:30px;
	float:left;
	right:260px;
	position: absolute;
	}	
.btn1
{margin-left: 8px;
	margin-top: 15px;
	width:35px;
	float:left;
	

	}		
	
	
	
.input1{
	 border-radius: 25px;
	height: 30px;
	margin-left: 5px;
	margin-right: 60px;
	margin-top: 15px;
	width:250px;
	float:left;
}
	
.search
{	margin-bottom: 25px;
	width:60px;
	float:left;
	margin-left: 30px;
 
	}
	.dropd select{
	display: none;
	}	
	.dropd.open select{
		display: block;
	}	
	
*{margin:0;
	padding:0; }
	
a{
color:rgba(255,251,251,1.00);
font-family: Constantia, Lucida Bright, DejaVu Serif, Georgia, serif;	
text-decoration: none;	
}
	.center1{
	height:340px;
	width:1370px;
	background: #9053c7;
  background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
  background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
  background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
  background: linear-gradient(-135deg, #c850c0, #4158d0);
		
	}
	
	.center1 img{
	height:300px;
	
	float: left;
	background: #9053c7;
  background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0);
  background: -o-linear-gradient(-135deg, #c850c0, #4158d0);
  background: -moz-linear-gradient(-135deg, #c850c0, #4158d0);
  background: linear-gradient(-135deg, #c850c0, #4158d0);
		
	}	
	
.qq
	{height:150px;
	float: left;
	}
.qq ul li:hover{
	background-color: rgba(35,140,41,1.00);
}
.qq ul 
{list-style:non;
}	
.qq ul ul
{
	display: none;
	
}
.qq ul li:hover > ul
{
	display: block;
}	
	
.qq ul li
{display: inline-block;
background-color:rgba(25,7,69,1.00); 		
height:40px;
width:180px;
font-size:24px;
text-align:center;
color: rgba(255,255,255,1.00);	
float:left;
font-family: Constantia, Lucida Bright, DejaVu Serif, Georgia, serif;
border:1px solid   rgba(255,253,253,1.00);
}
	
.menu ul li
	{
background-color:rgba(25,7,69,1.00); 		
height:40px;
width:250px;
font-size:24px;
text-align:center;
color: rgba(255,255,255,1.00);	
font-family: Constantia, Lucida Bright, DejaVu Serif, Georgia, serif;
border:1px solid   rgba(255,253,253,1.00);	
}
	
	
	
	
.menu h1{
	color: rgba(255,255,255,1.00);		
	font-family: Constantia, Lucida Bright, DejaVu Serif, Georgia, serif;
	text-align: center;
	}	
	
	
	
.menu 
{
	height:1000px; width:250px;
	background-color:rgba(25,7,69,1.00);
	right:-250px;
	float:right;
	z-index: 999;
	position: relative;
	transition: all 1s;
	}
.menu ul li:hover{
	background-color: rgba(35,140,41,1.00);
}
.menu ul 
{list-style:non;
}	
.menu ul ul
{
	display: none;
	
}
.menu ul li:hover > ul
{
	display: block;
}		

	
.close_btn{

	right:0px;
	
	}	
	
	
	
	
</style>






</head>
<body>
<nav class= "menu" id="pp">
		<img src="images/index4.png" class="img2" onClick="myfunction()">
			<h1>main menu</h1>
			<ul>
			<li>creat new board</li>
			<li>your profil</li>
			<li><a href="{{url('a')}}"></a>sign out</a></li>
			</ul>	
		</nav>

<div class="head_page">
<img src="images/Damas_univ.png" class="img1" >
<h1 class="ite">ITE </h1>
<img  src="images/images2.png" class="search">
<input class="input1" type="text">

</div>
<div class="center1">
<img src="images/qqq.png"  >
</div>

	<div class="qq">
		<ul>
			<li>Home</li>
			<li>product</li>
			<li>About us</li>
			<li>Help
			<ul>
				<li style="display: block" >information </li>
				<li style="display: block">primary key</li>
			</ul>
			</li>
		</ul>
	</div>

			
			
	
	

	
<script>
function myfunction(){
	if(document.getElementById("pp").style.right=="-250px")
	{document.getElementById("pp").style.right="0px";
	
	
	}
	else
	{document.getElementById("pp").style.right="-250px";
	}

} </script>	
	
	
	

</body>

</html>
