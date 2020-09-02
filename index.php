<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


include('function.php');

if(!empty($_GET["id"])){
    $_SESSION["name"] = "";
	$_SESSION['email'] = "";
  $_SESSION['admin'] = "";
}
  
if (!empty($_POST["Submit"])) {
echo '<meta http-equiv="refresh" content="1; URL=https://wa.me/919929975863?text=I%20am%20'.$_POST["name"].'%20from%20'.$_POST["city"].'%20interested%20in%20your%20coaching.%20 My%20email%20and%20mobile%20number%20are%20'.$_POST["email"].'%20and%20'.$_POST["mobile"].'"/>';
}

if(!empty($_POST["rasbuy"])){
  $item_name = "ras";
  $item_price = "500";

  $_SESSION["item_name"] = "";
  $_SESSION["item_price"] = "";

  $_SESSION["item_name"] = $item_name;
  $_SESSION["item_price"] = $item_price;

  header('Location: ./PaytmKit/TxnTest.php');

}

if(!empty($_POST["reetbuy"])){
  $item_name = "reet";
  $item_price = "1000";

  $_SESSION["item_name"] = "";
  $_SESSION["item_price"] = "";

  $_SESSION["item_name"] = $item_name;
  $_SESSION["item_price"] = $item_price;

  header('Location: ./PaytmKit/TxnTest.php');

}

if(!empty($_POST["bstcbuy"])){
  $item_name = "bstc";
  $item_price = "700";

  $_SESSION["item_name"] = "";
  $_SESSION["item_price"] = "";

  $_SESSION["item_name"] = $item_name;
  $_SESSION["item_price"] = $item_price;

  header('Location: ./PaytmKit/TxnTest.php');

}

if(!empty($_POST["ptetbuy"])){
  $item_name = "ptet";
  $item_price = "600";

  $_SESSION["item_name"] = "";
  $_SESSION["item_price"] = "";

  $_SESSION["item_name"] = $item_name;
  $_SESSION["item_price"] = $item_price;

  header('Location: ./PaytmKit/TxnTest.php');

}

if(!empty($_POST["netbuy"])){
  $item_name = "net/jrf";
  $item_price = "400";

  $_SESSION["item_name"] = "";
  $_SESSION["item_price"] = "";

  $_SESSION["item_name"] = $item_name;
  $_SESSION["item_price"] = $item_price;

  header('Location: ./PaytmKit/TxnTest.php');

}

if(!empty($_POST["patwarbuy"])){
  $item_name = "patwar";
  $item_price = "400";

  $_SESSION["item_name"] = "";
  $_SESSION["item_price"] = "";

  $_SESSION["item_name"] = $item_name;
  $_SESSION["item_price"] = $item_price;

  header('Location: ./PaytmKit/TxnTest.php');

}

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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



</head>
<body style="font-family: "Times New Roman", Times, serif;">
        



<?php

navbar();
?>

<div class="img-scroller">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-15">        
          <img src="./Images/001.jpg" class="scroller-img" alt="...">
        </div>  
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-15">        
          <img src="./Images/002.jpg" class="scroller-img" alt="...">
        </div>  
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-15">        
          <img src="./Images/003.jpg" class="scroller-img" alt="...">
        </div>  
      </div>
    </div>

    <div class="carousel-item">
      <div class="row">
        <div class="col-15">        
          <img src="./Images/004.jpg" class="scroller-img" alt="...">
        </div>  
      </div>
    </div>

<!--     <div class="carousel-item">
      <div class="row">
        <div class="col-15">        
          <img src="./Images/slider5.jpg" class="scroller-img" alt="...">
        </div>  
      </div>
    </div> -->

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

  <h3 class="lt-pro-heading">From Director's Desk</h3>
  <div class="dirblock">
    <img class="imgblock"    src="./Images/desk.jpeg">
  </div>

<!-- <div class="latest-program-container">
	<h3 class="lt-pro-heading">Abhiprerana's Programs</h3>
  <h6 class="lt-pro-shead">Scroll to check more programs</h6>
 
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        
        <div class="carousel-item active">
          <div class="row">
            <div class="col-3">        
                <div class="plan-container1">
                  
                  <div class="heading-cont1">Hindi</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Dr. Ashok Swami</div>

                  <hr class="line" >

                  <div class="price">Source : Youtube</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : REET Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Lectures : 23+ Lectures</div>
                  
                  </div>

                    <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-danger" onclick="location.href='https://www.youtube.com/playlist?list=PLYTbAqCRJYVD6jc5Xwgf6NarfNFyhbQJk'">Explore</button>
                      </div>
                    </div>

                </div>
            </div>
            
            <div class="col-3">
                <div class="plan-container2">
                  
                  <div class="heading-cont2">History</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Dr. Mahesh Lohia</div>

                  <hr class="line" >

                  <div class="price">Source : Youtube</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : NET/JRF Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Lectures : 3+ Lectures</div>
                  
                  </div>

                      <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-info">Explore</button>
                      </div>
                    </div>

                </div>
            </div>
          
          </div>
        </div>

        <div class="carousel-item">
            <div class="row">
              <div class="col-3">        
                <div class="plan-container3">
                  
                  <div class="heading-cont3">Hindi</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Dr. Ashok Swami</div>

                  <hr class="line" >

                  <div class="price">Source : Youtube</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : NET/JRF/LECTURER Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Lectures : 18+ Lectures</div>
                  
                  </div>

                      <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-warning" onclick="location.href='https://www.youtube.com/playlist?list=PLYTbAqCRJYVBvSPWEYsmEBrknmfba2eTi'">Explore</button>
                      </div>
                    </div>

                </div>
              </div>
              
              <div class="col-3">
                <div class="plan-container4">
                  
                  <div class="heading-cont4">English</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Manoj Sir</div>

                  <hr class="line" >

                  <div class="price">Source : Youtube</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : All Competitive Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Lectures : 17+ Lectures</div>
                  
                  </div>

                      <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-success" onclick="location.href='https://www.youtube.com/playlist?list=PLYTbAqCRJYVD1R1wydgFpuAZ40YvckkFa'">Explore</button>
                      </div>
                    </div>

                </div>
              </div>
            
            </div>
        </div>

        <div class="carousel-item">
            <div class="row">
              <div class="col-3">        
                <div class="plan-container5">
                  
                  <div class="heading-cont5">Geography</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Hoshiyar Sir</div>

                  <hr class="line" >

                  <div class="price">Source : Youtube</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : All Competitive Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Lectures : 9+ Lectures</div>
                  
                  </div>

                      <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-primary" onclick="location.href='https://www.youtube.com/playlist?list=PLYTbAqCRJYVD1R1wydgFpuAZ40YvckkFa'">Explore</button>
                      </div>
                    </div>

                </div>
              </div>
              
              <div class="col-3">
                <div class="plan-container6">
                  
                  <div class="heading-cont6">Science/Physics</div>

                  <div class="sec-plan-cont">

                  <div class="faculty">FACULTY : Er. VC Sir</div>

                  <hr class="line" >

                  <div class="price">Source : Youtube</div>

                  <hr class="line" >

                  <div class="exam-covered">Exam Covered : All Competitive Exam</div>

                  <hr class="line" >

                  <div class="hours-live">Total Lectures : 10+ Lectures</div>
                  
                  </div>

                      <div class="third-plan-cont">
                      <div>
                        <button class="btn btn-dark" onclick="location.href='https://www.youtube.com/playlist?list=PLYTbAqCRJYVCps48frzCbFFzw94TQN0Yd'">Explore</button>
                      </div>
                    </div>

                </div>
              </div>
            
            </div>
        </div>

      </div>
    </div>

</div> -->

<div class="whats-new-container">

  <h3 class="w-n-cont-heading">Latest Updates</h3>

  <div class="whats-new-eng">
      <div class="eng-heading"> What's New</div>
      
      <div class="eng-cont-date">July 02, 2020</div>
      <a href="https://www.youtube.com/watch?v=pbjER579pyA" class="eng-cont-txt">HISTORY CLASS-13 || For NET/JRF AND ALL EXAMS : Dr.Mahesh Lohia</a>
      <hr class="w-n-line">


      <div class="eng-cont-date">July 14, 2020</div>
      <a href="https://www.youtube.com/watch?v=WEAnfUmXBQ0" class="eng-cont-txt">NET/JRF HINDI || CLASS-32 ||  BY DR. ASHOK SWAMI</a>
      <hr class="w-n-line">


      <div class="eng-cont-date">June 19, 2020</div>
      <a href="https://www.youtube.com/watch?v=rDgF__sxg18" class="eng-cont-txt">REASONING CLASS-10 || CALENDAR-02 || For All Competitive Exam : Sushil Chouhan Sir</a>
      <hr class="w-n-line">


      <div class="eng-cont-date">July 02, 2020</div>
      <a href="https://www.youtube.com/watch?v=siFhY-7YOmo" class="eng-cont-txt">PHYSICS CLASS-18 || Optics Lecture- 06 || BY : Er. VC Sir</a>
      <hr class="w-n-line">


      <div class="eng-cont-date">July 02, 2020</div>
      <a href="https://www.youtube.com/watch?v=iTl_Ds456GE" class="eng-cont-txt">Rajasthan Geography || CLASS - 18 || BY : Hoshiyar sir</a>
      <hr class="w-n-line">

  </div>

</div>


<div class="second-program-container">

  <h3 class="sc-pro-heading">Abhiprerana's Featured Books</h3>
  <h6 class="sc-pro-shead">Scroll to check more books</h6>

    <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        
        <div class="carousel-item active">
          <div class="row">
            <div class="col-3">        
                <div class="itm-1">
                  <div class="itm-txt">
                    RAS
                  </div>
                  <div class="itm-img">
                    <img class="itemimg"  src="./Images/rasbook.png">
                  </div>
                  <div class="itm-price">
                    <strong>₹ 500 </strong><strike>₹ 700</strike>
                  </div>
                  <div class="itm-buy">
                  <form method="POST">
                    <input type="submit" name="rasbuy" value="Buy Now" class="btnbuy">
                  </form>
                  </div>
                </div>
            </div>
            
            <div class="col-3">
            <div class="itm-2">
              <div class="itm-txt">
                REET
              </div>
              <div class="itm-img">
                <img class="itemimg"  src="./Images/reetbook.png">
              </div>
              <div class="itm-price">
                <strong>₹ 1000 </strong><strike>₹ 1200</strike>
              </div>
              <div class="itm-buy">
              <form method="POST">
                <input type="submit" name="reetbuy" value="Buy Now" class="btnbuy">
              </form>
              </div>
            </div>
            </div>
          
          </div>
        </div>

        <div class="carousel-item">
            <div class="row">
              <div class="col-3">        
                <div class="itm-1">
                  <div class="itm-txt">
                    BSTC
                  </div>
                  <div class="itm-img">
                    <img class="itemimg" src="./Images/bstcbook.png">
                  </div>
                  <div class="itm-price">
                    <strong>₹ 700 </strong><strike>₹ 900</strike>
                  </div>
                  <div class="itm-buy">
                  <form method="POST">
                    <input type="submit" name="bstcbuy" value="Buy Now" class="btnbuy">
                  </form>
                  </div>
                </div>
              </div>
              
              <div class="col-3">
                <div class="itm-2">
                  <div class="itm-txt">
                    PTET
                  </div>
                  <div class="itm-img">
                    <img class="itemimg" src="./Images/ptetbook.png">
                  </div>
                  <div class="itm-price">
                    <strong>₹ 600 </strong><strike>₹ 1000</strike>
                  </div>
                  <div class="itm-buy">
                  <form method="POST">
                    <input type="submit" name="ptetbuy" value="Buy Now" class="btnbuy">
                  </form>
                  </div>
                </div>
              </div>
            
            </div>
        </div>

        <div class="carousel-item">
            <div class="row">
              <div class="col-3">        
                <div class="itm-1">
                  <div class="itm-txt">
                    NET/JRF
                  </div>
                  <div class="itm-img">
                    <img class="itemimg" src="./Images/netbook.png">
                  </div>
                  <div class="itm-price">
                    <strong>₹ 400 </strong><strike>₹ 700</strike>
                  </div>
                  <div class="itm-buy">
                  <form method="POST">
                    <input type="submit" name="netbuy" value="Buy Now" class="btnbuy">
                  </form>
                  </div>
                </div>
              </div>
              
              <div class="col-3">
              <div class="itm-2">
                <div class="itm-txt">
                  PATWAR
                </div>
                <div class="itm-img">
                  <img class="itemimg" src="./Images/netbook.png">
                </div>
                <div class="itm-price">
                  <strong>₹ 400 </strong><strike>₹ 700</strike>
                </div>
                <div class="itm-buy">
                <form method="POST">
                  <input type="submit" name="patwarbuy" value="Buy Now" class="btnbuy">
                </form>
                </div>
              </div>
              </div>
            
            </div>
        </div>

      </div>

    </div>
</div>

<div class="img-slider">

  <figure>

 <!--  <p class="slider-head-txt">Director's Office</p> -->
  <img class="img-slider-img" src="./Images/apslider1.jpeg"/>
<!--   <p class="slider-txt">Director's cabin from where all Abhiprerana's programs directed</p>
 -->
  <hr>
  
<!--   <p class="slider-head-txt">Hindi Grammar</p>
 -->  <img class="img-slider-img" src="./Images/apslider2.jpeg"/>
<!--   <p class="slider-txt">Get complete knowledge of hindi grammar</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">History</p>
 -->  <img class="img-slider-img" src="./Images/apslider3.jpeg"/>
<!--   <p class="slider-txt">Watch lectures on history</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">NET/JRF</p>
 -->  <img class="img-slider-img" src="./Images/apslider4.jpeg"/>
<!--   <p class="slider-txt">NET/JRF competitive exams</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">English Grammar</p>
 -->  <img class="img-slider-img" src="./Images/apslider5.jpeg"/>
<!--   <p class="slider-txt">Online classes on english grammar</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">Rajasthan Geography</p>
 -->  <img class="img-slider-img" src="./Images/apslider6.jpeg"/>
<!--   <p class="slider-txt">Get complete knowledge of rajasthan geography</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">Rajasthan Geography</p>
 -->  <img class="img-slider-img" src="./Images/apslider7.jpeg"/>
<!--   <p class="slider-txt">Get complete knowledge of rajasthan geography</p>
 -->
  <hr>  

<!--   <p class="slider-head-txt">Science Physics</p>
 -->  <img class="img-slider-img" src="./Images/apslider8.jpeg"/>
<!--   <p class="slider-txt">Now have more control over science/physics concepts</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">Reasoning</p>
 -->  <img class="img-slider-img" src="./Images/apslider9.jpeg"/>
<!--   <p class="slider-txt">Easily understand complex concepts of reasoning</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">Abhiprerana's Classes</p>
 -->  <img class="img-slider-img" src="./Images/apslider10.jpeg"/>
<!--   <p class="slider-txt">Join abhiprerana's free online classes</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">Abhiprerana's Coaching</p>
 -->  <img class="img-slider-img" src="./Images/apslider11.jpeg"/>
<!--   <p class="slider-txt">We deliver best study material</p>
 -->

<!--   <p class="slider-head-txt">English Grammar</p>
 -->  <img class="img-slider-img" src="./Images/apslider12.jpeg"/>
<!--   <p class="slider-txt">Online classes on english grammar</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">Rajasthan Geography</p>
 -->  <img class="img-slider-img" src="./Images/apslider13.jpeg"/>
<!--   <p class="slider-txt">Get complete knowledge of rajasthan geography</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">Rajasthan Geography</p>
 -->  <img class="img-slider-img" src="./Images/apslider1.jpeg"/>
<!--   <p class="slider-txt">Get complete knowledge of rajasthan geography</p>
 -->
  <hr>  

<!--  <p class="slider-head-txt">Director's Office</p> -->
  <img class="img-slider-img" src="./Images/apslider2.jpeg"/>
<!--   <p class="slider-txt">Director's cabin from where all Abhiprerana's programs directed</p>
 -->
  <hr>
  
<!--   <p class="slider-head-txt">Hindi Grammar</p>
 -->  <img class="img-slider-img" src="./Images/apslider3.jpeg"/>
<!--   <p class="slider-txt">Get complete knowledge of hindi grammar</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">History</p>
 -->  <img class="img-slider-img" src="./Images/apslider4.jpeg"/>
<!--   <p class="slider-txt">Watch lectures on history</p>
 -->
  <hr>

<!--   <p class="slider-head-txt">NET/JRF</p>
 -->  <img class="img-slider-img" src="./Images/apslider5.jpeg"/>
<!--   <p class="slider-txt">NET/JRF competitive exams</p>
 -->
  <hr>


</figure>

</div>

<div class="gallery-container">

    <img src="./Images/adimg.jpeg" class="gal-img">

    <div class="gal-heading">
      About Abhiprerana
    </div>

    <div class="gal-subhead">
     Abhiprerana group of education aspires all students to succeed in their world. We are proud of our continuous goal of providing an excellent education for our students.Our dynamic, hardworking faculty is centered on highly personalized attention and supervision.
    </div>

</div>

  <div class="bottom-head-cont">

  <h3 class="bottom-head" style="">Best Coaching Institute in Bikaner - Abhiprerana Classes</h3>


  <p class="bottom-lead">Abhiprerana Classes is the best coaching institute located at Sector 8
Jai Narayan Vyas Colony, Bikaner 334001. Abhiprerana Classes provide quality service in several competition exam preparations like <a href=""> UPSC, RPSC, RAS, NET, JRF, REET, PATWAR, POLICE, PSI, SSC, LDC, BANK, ACC, LECTURER and TEACHERS.</a></p>

  <p class="bottom-lead">In view of the prevailing circumstances, Abhiprerana brings online classes and live doubt session to aspirants to provide them proper teaching and guidance for their upcoming exams.</p>

  <p class="bottom-lead">We have designed our website to answer most of your queries. We hope you all will explore the site and put forward your valuable suggestions.</p>

</div>


<div class="enquiry-form">
  <div class="enq-head">Quick Enquiry Form</div>

<form method="POST" action="#"> 

  <div class="form-cont">
    <label for="name" class="name"><b>Name</b></label>
    <input type="text" placeholder="" name="name" required>

    <label for="email" class="name"><b>Email</b></label>
    <input type="text" placeholder="" name="email" required>
        
    <label for="mobile" class="name"><b>Mobile</b></label>
    <input type="text" placeholder="" name="mobile" required>

    <label for="city" class="name"><b>City</b></label>
    <input type="text" placeholder="" name="city" required>

      <input type="submit" class="submit-btn" name="Submit" value="Submit">
  </div>

  </form>

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