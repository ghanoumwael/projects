<!DOCTYPE html >
<html  lang="en">
    <head>
        <title>CSS Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/default.css">
        <!--===============================================================================================-->	
	
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
   <style>
	   .ww{
		 background-color:rgba(1,1,1,1.00);  
		   width: 350px;
		   margin-left: 800px;
		  
		   
	   }	
		</style>
    </head>
    <body >   
      
        <form action="{{url('a2')}}"  method="post" class="register">
           {{csrf_field()}}
           
            <h1>Registration
            </h1>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label>Email *
                    </label>
                    <input type="text" name="email" class="input100" style="height:30px"/>
                    <label>Repeat email *
                    </label>
                    <input type="text" class="input100" style="height:30px"/>
                </p>
                <p>
                    <label>Password*
                    </label>
                    <input type="text" name="password" class="input100" style="height:30px"/>
                    <label style="font-size:12">Repeat*
                    </label>
                    <input type="text" class="input100" style="height:30px"/>
                   
                </p>
            </fieldset>
             
            <fieldset class="row1">
                <legend>Study Information
                </legend>
                <p>
                   <label>the year*
                    </label>
                    <input type="text" name="year_academic" class="input100" style="height:30px"/>
                    <label>the section *
                    </label>
                    <input type="text" name="section" class="input100" style="height:30px"/>
                </p>
               
            </fieldset>
            
            
            
            
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                
                <p>
                    <label>Name *
                    </label>
                    <input type="text" name="title"  class="input100" style="height:30px"/>
                </p>
                <p>
                    <label>Phone *
                    </label>
                    <input type="text" name="phone" maxlength="10" class="input100" style="height:30px"/>
                </p>
                <p>
                    <label class="optional">Street
                    </label>
                    <input type="text" name="street" class="input100" style="height:30px"/>
                </p>
                <p>
                    <label>City *
                    </label>
                    <input type="text" name="city"  class="input100" style="height:30px"/>
                </p>
                <p>
                    <label>Country *
                    </label>
                       <input type="text" name="country" class="input100" style="height:30px"/>
                    
                </p>
                <p>
                    <label class="optional">Website
                    </label>
                    <input  name="website" type="text" class="input100" style="height:30px"/>

                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender *</label>
                    <input type="text" name="Gender"
                    class="input100" style="height:30px"/>
                    <label class="gender"></label>
                </p>
                <p>
                    <label>Birthdate *
                    </label>
                  <input class="input100" type="date" size="4" style="height:30px" name="birthdate" maxlength="4"/>
                </p>
                <p>
                    <label>work*
                    </label>
                    <select  class="input100" style="height:20pt">
                	<option class="input100" style="height:20pt">student</option>
                	<option class="input100" style="height:20pt">teacher</option>
                 </select>
                 </p>
               </fieldset>
               <div class="ww" js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
            <div>
           <button type="submit" class="button">Register &raquo;</button>
            </div>
        </form>
 <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    </body>
</html>





