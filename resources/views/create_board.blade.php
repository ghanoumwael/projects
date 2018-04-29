<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	*{
	padding:0;
		margin:0;
		
		
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
	float:right;
	
	}
.menu ul li:hover{
	background-color: rgb(34, 140, 29);
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

	
</style>

	
	
	
	</style>


</head>

<body>

<nav class= "menu">
		
			<h1>main menu</h1>
			<ul>
			<li>creat new board</li>
			<li>your profil</li>
			<li><a href="{{url('a')}}"></a>sign out</a></li>
			</ul>	
		</nav>


</body>
</html>