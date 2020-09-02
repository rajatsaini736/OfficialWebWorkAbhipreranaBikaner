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
  
  .ssc-img{
    margin-left: 40%;
    width: 20%;
  }

  .lead{
    margin: 50px;
    text-align: justify;
  }

  .best{
    font-weight: bold;
    margin-top: 5%;
    margin-left: 3%;
  }

  .best-txt{
    margin-top: 1%;
    margin-left: 3%;
  }

  .sub-head{
    margin-left: 3%;
  }

table{
  width: 50%;
  margin-left: 25%;
}

table, th, td{
  text-align: left;
  border: 1px solid black;
  border-collapse: collapse;
}

@media screen and (max-width: 600px){

  .display-4{
  font-size: 130%;
}

  .lead{
      font-size: 100%;
    margin: 50px;
    text-align: justify;
  }

  .ssc-img{
    margin-left: 25%;
    width: 50%;
  }

  .best{
    font-weight: bold;
    margin-top: 10%;
    margin-left: 10%;
  }

  .best-txt{
    margin-top: 3%;
    margin-left: 10%;
  }

   .sub-head{
    margin-left: 10%;
  }
  table{
  width: 100%;
  margin-left: 1%;
}

table, th, td{
  text-align: left;
  border: 1px solid black;
  border-collapse: collapse;
}
footer{
    background-color: #00001a;
    color: white;
  top: 220%;
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

  <h2 class="display-4" style="text-align: center; font-weight: bold;">Rajasthan Police Constable Exam</h2>

  <p class="lead">Rajasthan Police Constable Exam will be organised in 2020. All the candidates who wish to appear for the exam will have to report at examination center as per guidelines written on admit card.</p>



  <h3 class="best">Rajasthan Police Constable Selection Process </h3>

  <table class="ras-table">
    <tr>
      <th style="text-align: left;">Events</th>
      <th style="text-align: left;">Constable GD</th>
      <th style="text-align: left;">Constable Driver, Band, Horse Rider, Dog Squad</th>
    </tr>
    <tr>
      <td>Written Test</td>
      <td>75 </td>
      <td>75 </td>
    </tr>
    <tr>
      <td>Physical Standard/ Efficiency Test</td>
      <td>15</td>
      <td>10</td>
    </tr>
    <tr>
      <td>Proficiency Test</td>
      <td>Not Applicable</td>
      <td>15</td>
    </tr>
    <tr>
      <td>Special Qualification for NCC and Home Guard</td>
      <td>10</td>
      <td>Not Applicable</td>
    </tr>
        <tr>
      <td>Total Marks</td>
      <td>100</td>
      <td>100</td>
    </tr>
  </table>


    <h3 class="sub-head">Selection Process</h3>
    <p class="best-txt">&rarr; Submission of Online Application.</p>
    <p class="best-txt">&rarr; Written Examination.</p>
    <p class="best-txt">&rarr; Physical Standard Test/ Physical measurement Test.</p>
     <p class="best-txt">&rarr; Pysical Efficiency Test</p>  
    <p class="best-txt">&rarr; Efficiency Test for Driver, Band, Horse Rider, Dog squad.</p>
     <p class="best-txt">&rarr; Combined Selection List</p>
     <p class="best-txt">&rarr;Combined Merit List</p>
     <p class="best-txt">&rarr; Medical Test</p>
     <p class="best-txt">&rarr; Document Verification</p>
     <p class="best-txt">&rarr; Appointment</p>   

  
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