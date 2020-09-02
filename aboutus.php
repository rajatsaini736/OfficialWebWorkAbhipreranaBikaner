<?php

session_start();
include('function.php');
include('db.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		About Us	
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

<style >
	
	.about-header{
		font-size: 40px;
		padding: 70px;
		text-align: center;
		background-color: #ffebe6;
		font-weight: bold;
	}

	.about-content{
		display: inline-block;
		padding: 10px;
	}

	.about-content-text{
		max-width: 55%;
		text-align: justify;
		padding: 15px;
		margin-left: 43%;
	}

	.about-content-img{	
		margin-right: 150px;
	}

	.about-img{
		float: right;
		display: inline-block;
		width: 40%;
	}

	.about-counter{
		padding: 40px;
		width: 100%;
		background-color: #b3ffd9;
		display: inline-block;
	}

	.counter-1{
		font-weight: bold;
		font-size: 30px;
		text-align: center;
	}

	.counter-2{
		display: inline-block;
		width: 15%;
		margin-left: 25%;
	}

	.counter-3{
		display: inline-block;
		width: 15%;
	}	

	.counter-4{
		display: inline-block;
		width: 15%;
	}	

	.card {
		margin: 20px;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  padding: 16px;
	  text-align: center;
	  background-color: #444;
	  color: white;
	}

	/*.fa {font-size:50px;}*/


@media screen and (max-width: 600px){
	.about-header{
		font-size: 30px;
		padding: 40px;
		text-align: center;
		background-color: #ffebe6;
		font-weight: bold;
	}

.about-content{
		display: inline-block;
		padding: 10px;
	}

	.about-content-text{
		max-width: 90%;
		text-align: justify;
		padding: 15px;
		margin-left: 15px;
	}

	.about-content-img{	
		margin-right: 2px;
		margin-left: 2px;
	}

	.about-img{
		float: right;
		display: inline-block;
		width: 100%;
	}

	.about-counter{
		padding: 40px;
		width: 100%;
		background-color: #b3ffd9;
		display: block;
	}

	.counter-1{
		font-weight: bold;
		font-size: 20px;
		text-align: left;
	}

	.counter-2{
		display: block;
		width: 50%;
		margin-left:10%;
	}

	.counter-3{
		display: block;
		width: 50%;
		margin-left:10%;
	}	

	.counter-4{
		display: block;
		width: 50%;
		margin-left:10%;
	}	

	.card {
		margin: 20px;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  padding: 16px;
	  text-align: center;
	  background-color: #444;
	  color: white;
	}

	.fa {font-size:20px;}	

	footer{
    background-color: #00001a;
    color: white;
  top: 170%;
  height: 50%;
  position: initial;
  display: block;
  padding: 1%;
  width: 101%;
  margin-left: 0%;
  margin-right: -5%;
}
}
</style>

</head>
<body>

<?php
navbar();
?>

<div class="about-header">
	About Us
</div>

<!-- <div class="about-content">

	<div class="about-content-img">
 		<img src="./Images/desk.jpg" class="about-img">
	</div>	
	<div class="about-content-text">
		<p>To begin with, I would like to send warm greetings to all our students and the parents.
		We are going through an unprecedented global crisis. Each one of us and the entire world is affected by the coronavirus pandemic. 
		In these difficult and anxious times I wanted to reach out to you and update you on how we would like to approach and deal with the academics given the prevailing circumstances.
		The institute has drafted out the plan for upcoming months. We advice you to ensure that the child revises all the concepts taught to him in the online class.
		You will receive updates from the institute regarding what would be taught to the child and how till the lockdown is officially lifted by the government. Be free to contact us regarding any queries.</p>
		<p>Stay home. Stay safe.</p>
		<p>With best regards,</p>
		<p>Director</p>
	</div>
</div> -->



<div class="about-counter">
	<div class="counter-1">
		Number Speak For Themselves!
	</div>

	<div class="counter-2">
		<div class="card">
	      <p><i class="fa fa-user"></i></p>
	      <h3>13,000+</h3>
	      <p>Satisfied Students</p>
	    </div>
	</div>

	<div class="counter-3">
	    <div class="card">
	      <p><i class="fa fa-check"></i></p>
	      <h3>55+</h3>
	      <p>Courses</p>
	    </div>
	</div>

	<div class="counter-4">
		<div class="card">
	      <p><i class="fa fa-users"></i></p>
	      <h3>110+</h3>
	      <p>Staff</p>
	    </div>
	</div>

</div>

	<div class="about-content-text">
		<p>&rarr; Best faculty in the city</p>
		<p>&rarr; Expert teachers</p>
		<p>&rarr; Affordable fee</p>
		<p>&rarr; Digital classroom also available</p>
		<p>&rarr; Centrally air-conditioned classrooms</p>
		<p>&rarr; PDF on app for notes of all subjects</p>		
		<p>&rarr; Weekly test series</p>
	</div>

<?php
footer();
?>

<script>
  
function myFunction(){
  var x = document.getElementById("navcontainer");
  if(x.className == "top-navbar"){
    x.className += " responsive";
  }
  else{
    x.className = "top-navbar";
  }

}

</script>

</body>
</html>