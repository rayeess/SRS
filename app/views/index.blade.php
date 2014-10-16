<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrapsite</title>
		
		<meta http-equiv="content-type" content="text/html;charset=UTF-8">
		<meta name="description" content="salmanulfaris.com">
		<meta name="author" content="salmanulfaris; salamn; salmanul faris; faris">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="font-awesome-4.1.0/css/font-awesome.min.css">
			
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	<!--I think it is working -->
		<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
<script/>
<![endif]-->
	</head>

	<body>
	
		
	
	
				<! Navigation bar with button responsive!>
				
	<header>	
		
		<div class="navbar navbar-inverse navbar-static-top">
		
			<div class="container">
		
				<a href="{{ URL::route('index') }}" class="navbar-brand"><img src="img/example.jpg"style="width:50px;height:30px;margin-left:50px;"></a>
					
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeadercollapse">
				
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				
				
					</button>
				
				<div class="collapse navbar-collapse navHeadercollapse">
				
					<ul class=" nav navbar-nav navbar-right">
					
					
						<li class="#" ><a href="{{ URL::route('index') }}"><span class="glyphicon glyphicon-home"> Home </span></a></li>
						
						<li><a href="#"><span class="glyphicon glyphicon-globe"> About<span></a></li>
						<li><a href="#"> <span class="glyphicon glyphicon-envelope"> Contact<span></a></li>
						
					
						
					
					<li><a href="{{ URL::route('user') }}"><span class="glyphicon glyphicon-user"> User</span>
					</a></li>
					
					</ul>
					
					
					
					<div class="center">
					<form role="search" class="navbar-form navbar-right"name="keyword">
						<div class="form-group">
						<input type="text" style="border-radius:13px;outline:none;border-color:black;" type="text" placeholder="        Search" class="form-contol glyphicon glyphicon-search">
						</div>
						<button type="submit" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-search"></span></button>
					</form>
					
				
					</div>
					
					
				</div>
				
				
			
			</div>
			
	</header>		
			
			<! END OF NAVIGATION BAR!>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<! Footer Starts Here!>
			
			
			<div id="footer" class="navbar navbar-inverse navbar-fixed-bottom">
			
			
				
				
				
				<a><span class="glyphicon glyphicon-copyright-mark"style=" color:#278f3c;margin-left:3px;margin-right:0px;margin-top:20px;margin-bottom:0px;pull-left;">2014-AllRightReserved </span></a></li>
						
			
				
				
			</div>
			
			<!END OF FOOTER!>
			
	</body>


</html>
