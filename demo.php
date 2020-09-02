<?php

session_start();
include('db.php');
include('function.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<!-- FA FA-Bars -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<style>

.itm-1{

  width: 45%;
  margin: 5px;
  box-shadow:  10px 10px 18px lightgrey;
  margin-left: 80%;

}

.itm-2{

  width: 45%;
  margin: 5px;
  margin-left: 40%;
  box-shadow:  10px 10px 18px lightgrey;

}

.itm-txt{
  font-weight: bold;
  text-align: center;
}

.itemimg{
  width: 100%;
}


.itm-price{
text-align: center;
}

.itm-buy{
  text-align: center;
  background-color: white;
}

.btnbuy{
  margin: 5px;
  background-color: #b30000;
  color: white;
  text-align: center;
}

.second-program-container{
  margin-top: 50px;
}

.second-prog-cont{
  background-color: blue;
  color: white;
}

.sc-pro-heading{
    font-weight: bold;
  margin-left: 19%;
  margin-top: 2%;
}
.sc-pro-shead{
    margin-left: 25%;
}

.sc-prog-content1{
  margin-top: 10px;
  margin-left: 40%;
  display: inline-block;
  width: 100%;
  border-radius: 10px;
  background-color: #bb99ff;
}

.sc-prog-content2{
  margin-top: 10px;
  margin-left: 40%;
  display: inline-block;
  width: 100%;
  border-radius: 10px;
  background-color: #009900;
}

.sc-prog-content3{
  margin-top: 10px;
  margin-left: 40%;
  display: inline-block;
  width: 100%;
  border-radius: 10px;
  background-color:#ff4dff;
}

.sc-prog-content4{
  margin-top: 10px;
  margin-left: 40%;
  display: inline-block;
  width: 100%;
  border-radius: 10px;
  background-color: #ffcc33;
}

.sc-prog-content5{
  margin-top: 10px;
  margin-left: 40%;
  display: inline-block;
  width: 100%;
  border-radius: 10px;
  background-color:   #ff4da6;
}

.sc-prog-content6{
  margin-top: 10px;
  margin-left: 40%;
  display: inline-block;
  width: 100%;
  border-radius: 10px;
  background-color:   #ff6666;
}

@media screen and (max-width: 600px){

.itm-1{

  width: 150%;
  max-width: 200%;
  margin: 10px;
  box-shadow:  10px 10px 18px lightgrey;
  margin-left: 30%;
  margin-right: 10%;

}

.itm-2{

  width: 150%;
  max-width: 150%;
  margin: 10px;
  margin-left: 180%;
  box-shadow:  10px 10px 18px lightgrey;

}

.itm-txt{
  font-weight: bold;
  text-align: center;
}

.itemimg{
  width: 100%;
}


.itm-price{
text-align: center;
}

.itm-buy{
  text-align: center;
  background-color: white;
}

.btnbuy{
  margin: 5px;
  background-color: #b30000;
  color: white;
  text-align: center;
}

.sc-pro-heading{
    font-weight: bold;
    text-align: center;
    font-size: 100%;
    margin-left: 0%;
}

.sc-pro-shead{
  margin-left: 0%;
    text-align: center;
    font-size: 100%;
}

.second-program-container{
  margin-top: 30px;
}

.second-prog-cont{
  background-color: blue;
  color: white;
}

.sc-prog-content1{
  margin-top: 10px;
  margin-left: 30px;
  display: inline-block;
  width: 200%;
  background-color: #bb99ff;
}

.sc-prog-content2{
  margin-top: 10px;
  margin-left: 120px;
  display: inline-block;
  width: 200%;
  border-radius: 10px;
  background-color: #009900;
}

.sc-prog-content3{
  margin-top: 10px;
  margin-left: 30px;
  display: inline-block;
  width: 200%;
  background-color:#ff4dff;
}

.sc-prog-content4{
  margin-top: 10px;
  margin-left: 120px;
  display: inline-block;
  width: 200%;
  border-radius: 10px;
  background-color: #ffcc33;
}

.sc-prog-content5{
  margin-top: 10px;
  margin-left: 30px;
  display: inline-block;
  width: 200%;
  background-color:   #ff4da6;
}

.sc-prog-content6{
  margin-top: 10px;
  margin-left: 120px;
  display: inline-block;
  width: 200%;
  border-radius: 10px;
  background-color:   #ff6666;
}

}

</style>
</head>
<body>


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

<!-- 
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-3">        
          <div class="lt-prog-content1">
          <div class="lt-prog-des">Quick Guide : Complete REET Crash Course Available on Monitors</div>
          <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j0wee1xqQP42qo-yslx-ipu">Watch More...</a></div>
          </div>
        </div>
        
        <div class="col-3">
          <div class="lt-prog-content2">
          <div class="lt-prog-des">Quick Start to SSC Competition Exam Only on Monitors Publications.</div>
          <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j1UiWGwY4FDRqSJmkQp9Am-">Watch More...</a></div>
         </div>
        </div>
      
      </div>
    </div>

    <div class="carousel-item">
      <img src="./Images/logo.png" class="d-block w-100" alt="...">
    </div>

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
 -->
</body>
</html>




  <!-- <div class="sc-prog-content1">
    <div class="sc-prog-des1">Watch Er. Satish Deshwal Sir</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j0wee1xqQP42qo-yslx-ipu">Watch More...</a></div>
  </div>

  <div class="sc-prog-content2">
    <div class="sc-prog-des2">Watch Anywhere, Anytime</div>
    <div class="sc-prog-heading2">YouTube</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/channel/UCvO3yPdPJu4OvlEP30uhyzA">Watch More...</a></div>
  </div>

  <div class="sc-prog-content3">
    <div class="sc-prog-des3">Check Distance Learning Programme</div>
    <div class="sc-prog-heading3">Distance Learning Programme (DLP)</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/channel/UCvO3yPdPJu4OvlEP30uhyzA">Watch More...</a></div>
  </div>

  <div class="sc-prog-content4">
    <div class="sc-prog-des4">Check Monitors LCM & HCF Problems</div>
    <div class="sc-prog-heading4">HCF & LCM</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j3BkM0YE8PPtbYpeexidlCp">Watch More...</a></div>
  </div>

  <div class="sc-prog-content5">
    <div class="sc-prog-des5">Check Out Monitors Square Root Problems</div>
    <div class="sc-prog-heading5">Square Root</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j2QS0u3I6qhx1h3x7KzPs4N">Watch More...</a></div>
  </div>

  <div class="sc-prog-content6">
    <div class="sc-prog-des6">Check Out Monitors Average Problems</div>
    <div class="sc-prog-heading6">Average</div>
    <div class="sc-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j20TbEQZB5MylZEF1rECl6j">Watch More...</a></div>
  </div> -->


  <!--   <div class="lt-prog-content1">
    <div class="lt-prog-des">Complete REET Crash Course</div>
    <div class="lt-prog-heading">REET</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j0wee1xqQP42qo-yslx-ipu">Watch More...</a></div>
  </div>

  <div class="lt-prog-content2">
    <div class="lt-prog-des">Complete   SSC Crash Course</div>
    <div class="lt-prog-heading">SSC</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j1UiWGwY4FDRqSJmkQp9Am-">Watch More...</a></div>
  </div>

  <div class="lt-prog-content3">
    <div class="lt-prog-des">Complete BANK Crash Course</div>
    <div class="lt-prog-heading">BANK</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j2Lldfi7fThEmfiCYnPqyMZ">Watch More...</a></div>
  </div>

  <div class="lt-prog-content4">
    <div class="lt-prog-des">Complete PATWAR Course</div>
    <div class="lt-prog-heading">PATWAR</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j0pZSyHSIJkFyn235buCgrS">Watch More...</a></div>
  </div>

  <div class="lt-prog-content5">
    <div class="lt-prog-des">Best   RAILWAY Course</div>
    <div class="lt-prog-heading">RAILWAY</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j37RssEnWZ0n1LYVE0o4yw0">Watch More...</a></div>
  </div>

  <div class="lt-prog-content6">
    <div class="lt-prog-des">Complete RPSC Crash Course</div>
    <div class="lt-prog-heading">RPSC</div>
    <div class="lt-prog-read"><a class="link" href="https://www.youtube.com/playlist?list=PLMs-Aebay8j20TbEQZB5MylZEF1rECl6j">Watch More...</a></div>
  </div>
 -->
