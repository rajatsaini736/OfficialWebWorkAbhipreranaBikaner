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
  margin-bottom: 10%;
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
  top: 225%;
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

  <h2 class="display-4" style="text-align: center; font-weight: bold;">RPSC RAS Exam</h2>
  <p class="lead">Rajasthan Administrative Services (RAS) exam is a state-level civil services exam which is conducted by Rajasthan Government under Rajasthan Public Service Commission (RPSC). This exam is also known as Rajasthan State and Subordinate Services Combined Competitive Exam. RAS Post is the highest state services and also the most sought after job in the state.The exam is conducted to fill Group-A and B vacancies in our state.</p>



  <table class="ras-table">
    <tr>
      <th style="text-align: left;">RPSC RAS Exam EVENTS</th>
      <th style="text-align: left;">RPSC RAS Exam Dates( Tentative )</th>
    </tr>

      <tr>
      <td>Notifications</td>
      <td>June 2020( Tentative ) </td>
    </tr>
    <tr>
      <td>Online applications</td>
      <td>June 2020( Tentative )</td>
    </tr>
    <tr>
      <td>Admit cards</td>
      <td>October 2020( Tentative )</td>
    </tr>
    <tr>
      <td>Prelims exam</td>
      <td>November 2020( Tentative )</td>
    </tr>
  </table>


    <h3 class="sub-head">RPCS RAS selection process</h3>
    <h3 class="sub-head">Preliminary Exam : </h3>
    <p class="best-txt">&rarr; This is an objective-type screening exam of 200 marks. Candidates need to complete the paper in 3 hours duration.</p>

    <h3 class="sub-head">Main exam : </h3>
    <p class="best-txt">&rarr; This is a descriptive/ analytical-type written exam. The exam contains 4 papers of 200 marks each. The time allowed to complete each paper is 3 hours.</p>

    <h3 class="sub-head">Personality/ viva-voce exam : </h3>
    <p class="best-txt">&rarr; Candidates qualifying the Main exam need to appear for a personality test/ interview. The weightage for the personality test is 100 marks.</p>

<h3 class="best">RPCS RAS Pre Exam Pattern</h3>
      <table class="ras-table">
    <tr>
      <th style="text-align: left;">Number of Paper</th>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Total Marks</th>
     <th style="text-align: left;">Total Question</th>   
    </tr>
    <tr>
      <td>One</td>
      <td>General knowledge and general science</td>
      <td>200</td>
      <td>150</td>      
    </tr>

  </table>

 <h3 class="best">RPCS RAS Mains Exam Pattern</h3>
      <table class="ras-table">
    <tr>
      <th style="text-align: left;">Number of Paper</th>
      <th style="text-align: left;">Subject</th>
      <th style="text-align: left;">Total Marks</th>
     <th style="text-align: left;">Total Time</th>   
    </tr>
    <tr>
      <td>Four</td>
      <td>General Studies I, General Studies II, General Studies III, General Hindi and General English</td>
      <td>200</td>
      <td>3 Hours each</td>      
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