
<!DOCTYPE html>
<html>
	<head>
		<title>User</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<meta name="description" content="salmanulfaris.com">
		<meta name="author" content="salmanulfaris; salamn; salmanul faris; faris">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">	
		<link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
			
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/jquery-1.11.1.js"></script>
		<script src="js/bootstrap.js"></script>
	
<!--[if IE 7]>
    <link rel="stylesheet" href="/css/font-awesome-ie7.min.css">
<![endif]-->
				<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
<script/>
<![endif]-->
	
	

<body>
		
				<! Navigation bar with button responsive!>
				
	<header>	
		
		<div class="navbar navbar-inverse navbar-fixed-top">
		
			<div class="container">
		
				<a href="{{ URL::route('index') }}" class="navbar-brand"><img src="img/example.jpg"style="width:50px;height:30px;margin-left:50px;"><small></small></a>
					
					
					
					
					
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeadercollapse">
				
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				
				
					</button>
				
				<div class="collapse navbar-collapse navHeadercollapse">
				
					<ul  class=" nav navbar-nav navbar-right">
					
					
						<li id="nav" class="#"><a href="{{ URL::route('index') }}"><span class="glyphicon glyphicon-home"> Home </span></a></li>
						<li id="nav"><a href="#"><span class="glyphicon glyphicon-th-list"> Posts </span></a></li>
						<li id="nav"><a href="#"><span class="glyphicon glyphicon-globe"> About<span></a></li>
						<li id="nav"><a href="#"> <span class="glyphicon glyphicon-envelope"> Contact<span></a></li>
						
					
							
					<li id="nav"><a href="{{ URL::route('user') }}"><span class="glyphicon glyphicon-user"style="color:green;"> User</span>
					
					
					</a></li>
					
	
					</ul>
					
					<div class="center">
					<form role="search" class="navbar-form navbar-right"name="keyword">
						<div class="form-group">
						<input style="border-radius:13px; border-color:black;" type="text" placeholder="        Search" class="form-contol glyphicon glyphicon-search ">
						</div>
						<button type="submit" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search"style=";"></span></button>
					</form>
					
				
					</div>
					
					
				</div>
				
				
			
			</div>
			
	</header>		
			

	
	
	
	
	
	
	
			
			<!...Modal 1 starts..!>
		
		
<button class="btn btn-primary" style="width:100px;height:100px;border-radius:50px;margin-left:700px;margin-right:500px;margin-top:150px;margin-bottom:1px;background-color:#47ad9f;" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon-log-in"> Log-In</span></button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"style="background-color:white">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
	  
	 	<!...STARTING FORM...!>

		
		
<form class="form-inline" role="form"style="background-color:white; border-radius:50px;margin-top:50px;margin-bottom:50px;">
 
 <h4><center><a class="glyphicon glyphicon-user" style=""></a></center></h4>
 
 
  <div class="form-group">
    <div class="input-group">
      <input style="border-radius:10px;margin-top:20px; margin-left:10px; margin-right:60px;margin-bottom:20px;"class="form-control" type="email" placeholder="Enter email">
    </div>
  </div><br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Password</label>
    <input style="width:200px;margin-left:10px;margin-top:20px;margin-bottom:20px;margin:right:20px;"type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div><br>
  
  <button type="submit" style="width:50px;height:50px;border-radius:25px;margin-left:125px;margin-right:10px;margin-top:20px;margin-bottom:20px;background-color:green;" class="btn btn-default-med"><span class="glyphicon glyphicon-log-in"style="color:white;"></span></button>
 
	
	</form>

			<!..END OF FORM...!>
	  
	  
	  
	  
    </div>
  </div>
</div>

		
		<!...Modal 1 Ends..!>
		
		
		
		
		
		
			<!...Modal 2 starts..!>
			
<button class="btn btn-primary" style="width:100px;height:100px;border-radius:50px;margin-left:500px;margin-right:500px;margin-top:2px;margin-bottom:1px;background-color:#85275c;" data-toggle="modal" data-target=".sf-example-modal-sm"><span class="glyphicon glyphicon-collapse-up"> Sign-up</span></button>

<div class="modal fade sf-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"style="background-color:white;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
	  
	 	
	 	<!...STARTING FORM...!>

<form class="form-inline" role="form">
  
  
 <h4><center><a class="glyphicon glyphicon-user" style=""></a></center></h4>
 
  
  
  <div class="form-group">
    <div class="input-group">
      <input style="border-radius:10px;margin-top:20px; margin-left:20px; margin-right:20px;margin-bottom:20px;"class="form-control" type="email" placeholder="Enter email">
    </div>
  </div><br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Type Password</label>
    <input style="margin-left:20px;margin-top:20px;margin-bottom:20px;margin:right:20px;"type="password" class="form-control" id="exampleInputPassword2" placeholder="Type Password">
  </div><br>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Retype Password</label>
    <input style="margin-left:20px;margin-top:20px;margin-bottom:20px;margin:right:20px;"type="password" class="form-control" id="exampleInputPassword2" placeholder="Retype Password">
  </div><br>
  
  <button type="submit" style="width:50px;height:50px;border-radius:25px;margin-left:125px;margin-right:20px;margin-top:20px;margin-bottom:20px;background-color:#a339a3;" class="btn btn-default-med"><span class="glyphicon glyphicon-collapse-up"style="color:white;"></span></button>
  
			<!..END OF FORM...!>
	  
	  
	  
	  
    </div>
  </div>
</div>

			<!...Modal 2 Ends..!>
			
			


			<button type="button" class="btn btn-default"style="width:100px;height:100px;border-radius:50px;margin-left:750px;margin-right:500px;margin-top:2px;;background-color:#f00c4d;" data-toggle="modal" data-target=".np-example-modal-sm"><span class="glyphicon glyphicon-off"style="color:white"> Log-Off</span></button>

		
		
			<!...Modal 3 starts..!>

<div class="modal fade np-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true"style="background-color:white;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
	  
	 	
	 	<!...STARTING FORM...!>

<form class="form-inline" role="form">
  
  
 <h4><center><a class="glyphicon glyphicon-user" style=""></a></center></h4>
 
  
  
  
  <button type="submit" style="width:50px;height:50px;border-radius:25px;margin-left:125px;margin-right:20px;margin-top:20px;margin-bottom:10px;background-color:#f00c4d;" class="btn btn-default-med"><span class="glyphicon glyphicon-off"style="color:white;"></span></button>
  
			<!..END OF FORM...!>
	  
	  
	  
	  
    </div>
  </div>
</div>

			<!...Modal 3 Ends..!>
			
			
		
	
	
			<! Footer Starts Here!>
			
			
			<div id="footer" class="navbar navbar-inverse navbar-fixed-bottom">
			
			
				<div class="container">
				
				
				<li><a><span class="glyphicon glyphicon-copyright-mark"style=" color:#278f3c;margin-left:0px;margin-right:0px;margin-top:20px;margin-bottom:0px;pull-left;">2014-AllRightReserved </span></a></li>
				
				</div>
				
			</div>
			
			<!..END OF FOOTER..!>
			
	
	</body>


</html>
