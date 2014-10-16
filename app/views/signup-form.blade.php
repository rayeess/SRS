
<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<meta name="description" content="salmanulfaris.com">
		<meta name="author" content="salmanulfaris; salamn; salmanul faris; faris">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/signup.css" rel="stylesheet">
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
		
		<div class="navbar navbar-inverse navbar-static-top">
		
			<div class="container">
		
				<a href="{{ URL::route('index') }}" class="navbar-brand"><img src="img/example.jpg"style="width:50px;height:30px;margin-left:50px;"><small></small></a>
					
					
					
					
					
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeadercollapse">
				
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				
				
					</button>
				
				<div class="collapse navbar-collapse navHeadercollapse">
				
					<ul  class=" nav navbar-nav navbar-right">
					
					
						<li id="nav" class="{{ URL::route('index') }}"><a href="#"><span class="glyphicon glyphicon-home"> Home </span></a></li>
						
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
			

	
			


		<div class="container" style="margin-top:100px;margin-bottom:100px;">
			<div class="row">
			
			
				<div class="col-md-6 col-md-offset-3"style="">
				
					
					<div class="panel panel-default">
					
						<div class="panel-body">
						
							<div class="page-header">
							
							
							
							
							<!.... page header here.....!>
							
							<h2 style="margin-left:100px; color:;">Register<span class="glyphicon glyphicon-pencil"style="color:green;"></span></h2>
						
							
							
							</div>
																				<!......signup form starts here...!>
																				
					
						<form class="form" role="form" action="{{ URL::route('signup-post') }}" method="post">
					
							  <div class="form-group">
						
						
						
						
								<label for="inputTitle" class="col-sm-2 control-label">Title</label>
								<div class="col-sm-5">
								<select class="form-control" name="Title" size="1"style="width:200px;">
								  <option selected></option>
								  <option value="Mr">Mr</option>
								  <option value="Mrs">Mrs</option>
								  <option value="Miss">Miss</option>
								  <option value="Ms">Ms</option>
								  <option value="Other">Other</option>
								</select>
							  </div><br><br>
 
						
						
						
						
								<label for="inputname1" class="col-sm-2 control-label">Name </label>
								<div class="col-sm-10">
							<input type="text" class="form-control" name="FirstName" placeholder="First Name" style="width:200px; margin-left:0px;margin-bottom:8px">					
								</div>
							</div>
							
							<div class="form-group">
						
								<label for="inputname2" class="col-sm-2 control-label">Surname</label>
								<div class="col-sm-10">
							<input type="text" class="form-control" name="Surname" placeholder="Surname" style="width:200px; margin-left:0px;margin-bottom:8px">					
								</div>
							</div>
							

							<div class="form-group">
						
								<label for="inputname2" class="col-sm-2 control-label">DOB</label>
								<div class="col-sm-10">
							<input type="text" class="form-control" name="DOB" placeholder="day-month-year" style="width:200px; margin-left:0px;margin-bottom:8px">					
								</div>
							</div>
							
							
							<div class="form-group">
						
								<label for="inputname2" class="col-sm-2 control-label">Company</label>
								<div class="col-sm-10">
							<input type="text" class="form-control" name="Company" placeholder="Company Name" style="width:200px; margin-left:0px;margin-bottom:8px">					
								</div>
							</div>
							
							
							<div class="form-group">
						
						
								<label for="inputname1" class="col-sm-2 control-label">County</label>
								<div class="col-sm-10">
							<input type="text" class="form-control" name="County" placeholder="County" style="width:200px; margin-left:0px;margin-bottom:8px">					
								</div>
							</div>
							
							<div class="form-group">
						
						
								<label for="inputname1" class="col-sm-2 control-label">Town</label>
								<div class="col-sm-10">
							<input type="text" class="form-control" name="Town" placeholder="Town" style="width:200px; margin-left:0px;margin-bottom:8px">					
								</div>
							</div>
							
							
							<div class="form-group">
						
								<label for="inputname1" class="col-sm-2 control-label">Street</label>
								<div class="col-sm-10">
							<input type="text" class="form-control" name="Street" placeholder="Street" style="width:200px; margin-left:0px;margin-bottom:8px">					
								</div>
							</div>
							
							
							<div class="form-group">
						
								<label for="inputname1" class="col-sm-2 control-label">Postcode</label>
								<div class="col-sm-10">
							<input type="text" class="form-control" name="Postcode" placeholder="postcode" style="width:200px; margin-left:0px;margin-bottom:8px">					
								</div>
							</div>
							
							
							<div class="form-group">
						
								<label for="inputname1" class="col-sm-2 control-label">Phone</label>
								<div class="col-sm-10">
							<input type="text" class="form-control" name="Phone" placeholder="Phone" style="width:200px; margin-left:0px;margin-bottom:8px">					
								</div>
							</div>
							
							
							  <div class="form-group">
								<label for="inputEmail1" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
								  <input type="email" class="form-control" name="Email" id="inputEmail3" placeholder="Email"style="width:200px; margin-left:0px;margin-bottom:8px">
								</div>
							  </div>
							  
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
								  <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password"style="width:200px; margin-left:0px;margin-bottom:8px">
								</div>
							  </div>
							 
							 
							  <div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Re-type</label>
								<div class="col-sm-10">
								  <input type="password" class="form-control" name="RetypePassword" id="inputPassword3" placeholder="Re-type Password"style="width:200px; margin-left:0px;margin-bottom:5px">
								</div>
							  </div>
							 
							  <div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								  <button type="submit" class="btn btn-default" style="width:90px; margin-top:20px;margin-left:30px;margin-bottom; border-color:green;"><span class="glyphicon glyphicon-pencil"style="color:green;"></span>Register</button>
								  {{ Form::token() }}
								</div>
							  </div>
						</form>
											
				
				
				
				</div>
				
			</div>
		</div>
		
		
		

	</div>
	
	
	
	
	
			<!....End of signup form....!>
			
	
				
			</div>
			
			
			<! Footer Starts Here!>
			
			
			<div id="footer" class="navbar navbar-inverse navbar-static-bottom" style="width:100%;">
			
			
				<div class="container">
				
				
				<li><a><span class="glyphicon glyphicon-copyright-mark"style=" color:#278f3c;margin-left:0px;margin-right:0px;margin-top:20px;margin-bottom:0px;pull-left;">2014-AllRightReserved </span></a></li>
				
				</div>
			
			<!..END OF FOOTER..!>
			
	
	</body>


</html>
