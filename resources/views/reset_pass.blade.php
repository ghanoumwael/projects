<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<body>

	 <div class="container-login100">
         
           
                <div>
                    @if (count($user)===1)
                    @foreach($user as $a)
 					<h1>Your password :{{$a->password}}<h1>
 					<div class="container-login100-form-btn">
 					<form action="{{url('a')}}" method="get">
						<button class="login100-form-btn" type="submit">
						<a href=>
							Sign in
						</a>	
						</button>
						</form>
					</div>
					@endforeach
                   
                    @else                    
                     <h1>{{"You dont have email in us please if you want sign in you have regester"}}</h1>
                     <div class="container-login100-form-btn">
                     <form action="{{url('a1')}}" method="get">
						<button class="login100-form-btn" >
						Go to regester
						</form>
						</button>
					</div>
                     @endif
                         
                </div>
               
                  </div>
	
	
</body>
</html>
