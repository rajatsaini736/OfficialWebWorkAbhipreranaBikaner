<?php

session_start();
include('db.php');
include('function.php');

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

.download-btn{
	text-align: center;
	margin: 1%;
}

.download-link{
	text-decoration: none;
	border-radius: 10px;
	padding: 15px;
	margin-top: 50px;
	color: white;
	background-color: 		#004d66;
	text-align: center;
}

.link-cont{
	display: block;
	padding: 5px;
	text-align: center;
}

.dwnld-link{
	display: inline-block;
}

.link-line{
	width:25%;
}

.pdf-head{
	text-align: center;
}

.nothing-para{
	text-align: center;
	font-size: 25px;
}

	@media screen and (max-width: 600px){
.download-btn{
	text-align: center;
	margin: 2%;
}

.download-link{
	text-decoration: none;
	border-radius: 10px;
	padding: 10px;
	color: white;
	background-color: 		#004d66;
	text-align: center;
}

.link-cont{
	display: block;
	padding: 5px;
	text-align: center;
}

.dwnld-link{
	display: inline-block;
}

.link-line{
	width:auto;
}

.pdf-head{
	font-size: 100%;
	text-align: center;
}	

.nothing-para{
	text-align: center;
	font-size: 100%;
}

		footer{
		    background-color: #00001a;
		    color: white;
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

$sql = "SELECT `name`,`email`,`mobile` FROM `user_info` ORDER BY `uid` DESC";
    $result = $conn->query($sql);

    echo '<h2 class="pdf-head">User List</h2>';
    echo '<div class="download-btn"><a href="download_user_list.php" class="download-link">Download List</a></div>';

    if($result->num_rows>0)
    {
        while($data = $result->fetch_assoc())
        {
        	echo '
        	<div class="link-cont">Name : '.$data["name"].'</div>';
        	echo '<div class="link-cont">Email : '.$data["email"].'</div>';
        	echo '<div class="link-cont">Mobile : '.$data["mobile"].'</div>';
        	echo '	<hr class="link-line">
   
        	';

        }
    }
    else{
    	echo '
    		<p class="nothing-para">Nothing Is Here</p>
    	';
    }
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