<?php
session_start();
include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Abhiprerana</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">


<!-- FA FA-Bars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

<style type="text/css">
    .lead{

    margin: 50px;
    text-align: justify;
  }
  .ssc-img{
    margin-left: 40%;
    width: 20%;
  }

  .best-txt{
    margin: 50px;
    text-align: justify;
  }

  .best{
    font-weight: bold;
    margin-top: 5%;
    margin-left: 3%;
  }

  .best-best-txt{
    margin-top: 1%;
    margin-left: 3%;
  }

  .sub-head{
    margin-left: 3%;
  }
table{
  width: 50%;
  margin-left: 25%;
  margin-bottom: 5%;
}

table, th, td{
  text-align: left;
  border: 1px solid black;
  border-collapse: collapse;
}

@media screen and (max-width: 600px){
    .lead{
      font-size: 100%;
    margin: 50px;
    text-align: justify;
  }

  .display-4{
  font-size: 130%;
}

  .ssc-img{
    margin-left: 25%;
    width: 50%;
  }

  .best{
    font-size: 100%;
    font-weight: bold;
    margin-top: 10%;
    margin-left: 10%;
  }

  .best-txt{
    margin-top: 3%;
    margin-left: 10%;
  }

  .best-best-txt{
    font-size: 100%;
    margin-top: 3%;
    margin-left: 10%;
  }

   .sub-head{
    font-size: 100%;
    margin-left: 10%;
  }
  table{
  width: 100%;
  margin-left: 1%;
  margin-bottom: 5%;
}

table, th, td{
  text-align: left;
  border: 1px solid black;
  border-collapse: collapse;
}

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

<div class="jumbotron">


  <h3 class="best">RPSC 2nd Grade Teacher Exam Pattern</h3>

<h3 class="best">Rajasthan 1st Grade Teacher Exam Pattern Paper1 </h3>
  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subjects</th>
      <th style="text-align: left;">Number of Questions</th>
      <th style="text-align: left;">Maximum Marks</th>
      <th style="text-align: left;">Total Time</th>
    </tr>
    <tr>
      <td>Geographical, Historical, Cultural and General knowledge of Rajasthan</td>
      <td>40</td>
      <td>80</td>
      <td rowspan="5">2 Hours</td>
    </tr>
    <tr>
      <td>Current Affairs of Rajasthan</td>
      <td>10</td>
      <td>20</td>
    </tr>
    <tr>
      <td>General Knowledge of World and India</td>
      <td>30</td>
      <td>60</td>
    </tr>

    <tr>
      <td>Educational Psychology</td>
      <td>20</td>
      <td>40</td>
    </tr>

    <tr>
      <td>Total</td>
      <td>100</td>
      <td>200</td>
    </tr>

  </table>

<h3 class="best">RPSC Grade 2nd Exam Pattern Paper II</h3>
   <table class="ras-table">
    <tr>
      <th style="text-align: left;">Subjects</th>
      <th style="text-align: left;">Number of Questions</th>
      <th style="text-align: left;">Maximum Marks</th>
      <th style="text-align: left;">Total Time</th>
    </tr>
    <tr>
      <td>Knowledge of secondary and senior secondary standard about relevant subject</td>
      <td>90</td>
      <td>180</td>
      <td rowspan="4">2 Hours</td>
    </tr>
    <tr>
      <td>Knowledge of graduation standard about relevant subject</td>
      <td>40</td>
      <td>80</td>
    </tr>
    <tr>
      <td>Teaching methods of relevant subject</td>
      <td>20</td>
      <td>40</td>
    </tr>

    <tr>
      <td>Total</td>
      <td>150</td>
      <td>300</td>
    </tr>

  </table>


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