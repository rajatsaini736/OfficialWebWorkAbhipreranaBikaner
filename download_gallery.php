<?php

session_start();
include('function.php');
include('db.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title>Abhiprerana</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

<style>

.gallery-heading{
	text-align: center;
}

.innerblock{
	max-height: 10%;
	max-width: 15%;
	box-shadow:  5px 10px 18px #bfbfbf;
	background-color: white;
	padding: 5px;
	display: inline-block;
	margin: 5%;
	margin-right: 2%;
}
.innerimg{
	max-width: 100%;
	height: 100%;
	height: 250px;
}
.innerprice{
	color:	#003300;
	text-align: center;
}

.nothing-para{
	text-align: center;
	font-size: 25px;
}

	@media screen and (max-width: 600px){

.gallery-heading{
	text-align: center;
	font-size: 100%;
}

.innerblock{
	max-height: 10%;
	max-width: 40%;
	box-shadow:  5px 10px 18px #bfbfbf;
	background-color: white;
	padding: 5px;
	display: inline-block;
	margin: 5%;
	margin-right: 2%;
}
.innerimg{
	max-width: 90%;
	height: 100%;
	height: 250px;
}
.innerprice{
	color:	#003300;
	text-align: center;
}

.nothing-para{
	font-size: 100%;
}

	footer{
		    background-color: #00001a;
		    color: white;
		  top: 130%;
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

<?php navbar(); ?>

<?php 

$sql = "SELECT `title`,`name`,`date` FROM `gallery` ORDER BY `name` DESC";
    $result = $conn->query($sql);
    echo '<h2 class="gallery-heading">Have A Look On Abhiprerana`s Gallery</h2>

    	<div class="gallery-container">
    ';

    if($result->num_rows>0){
    	while($data = $result->fetch_assoc()){

							echo '<div class="innerblock">';
							echo '<img class="innerimg" src="Images/Gallery/'.$data['name'].'">';
							echo '<p class="innerprice">'.$data["title"].' </p>';
							echo '<p class="innerprice">Published On : '.$data["date"].'</p>';	

							echo '</div>';
    		
    }
	}
	else{
		echo'
			<p class="nothing-para">Nothing Is Here</p>
		';
	}
echo '</div>';

?>







<?php footer(); ?>
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