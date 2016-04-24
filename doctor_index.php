<!DOCTYPE html>
<?php 
include('session_doctor.php'); ?>
<html>
<head>
	<title>Healthcare</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Healthcare</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Upload <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Prescription</a></li>
	            <li><a href="#">Diagnosis</a></li>
	            <li><a href="#">Symptoms</a></li>
	            <li role="separator" class="divider"></li>
				<li><a href="#">Test Request</a></li>	
	            <li><a href="#">Test Results</a></li>
	            </ul>
	        </li>
	      </ul>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Patient Info <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	          	<li><a href="#">View Patient</a></li>
	             <li><form method="get" action="patient_modification.html">
                                <button type="submit">Modify Patient details</button></form></li>
	            <li role="separator" class="divider"></li>
	             <li><form method="get" action="patient_reg.html">
                                <button type="submit">Patient registration</button></form></li>
	            </ul>
                </li>
	      </ul>
          </div>
          <!--<form class="navbar-form navbar-right" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        	      </form>-->
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Log Out</a></li>
	         <li><form method="get" action="doctor_modification.html">
                                <button type="submit">Modify details</button></form></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<p> Dr. <?php echo $_SESSION['user_name']; ?></p>
	<!-- 
	<a href="./doctor_reg.html">Sign up</a>
	<a href="./doctor_login.html">Log in</a>

	<a href="./patient_reg.html">Sign up</a>
	<a href="./patient_login.html">Log in</a> -->
	<h1 class="text-center">Prescription</h1>
	<textarea rows="15" cols="150" style="margin-top: 25px ; margin-left:45px;">
	</textarea><br>
	<input type="button" value="Submit" class="btn bt-default btn-lg" style="float: right; margin-right:55px;" />
</body>
</html>