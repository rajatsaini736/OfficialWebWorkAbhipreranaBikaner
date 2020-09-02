<?php


function navbar(){
	echo '

<div class="top-navbar" id=navcontainer>

<div class="dropdown">
      <a class="dropbtn" href="index.php"> HOME</a>
</div>

<div class="dropdown">
  <button class="dropbtn">COURSES</button>
  <div class="dropdown-content">
  <a href="ssc.php">SSC</a>
  <a href="netjrf.php">NET/JRF</a>
  <a href="bank.php">Bank</a>
  <a href="patwar.php">Patwar</a>  
    <a href="ldc.php">LDC</a> 
  <a href="1stgrade.php">1st Grade</a> 
  <a href="2ndgrade.php">2nd Grade</a> 
  <a href="reet.php">REET</a>
  <a href="ras.php">RAS</a>
  <a href="rajpolice.php">Raj. Police</a>
  <a href="delhipolice.php">Delhi Police</a>     

  </div>
</div>';
  
    if(!empty($_SESSION["admin"])){
      echo '
          <div class="dropdown">
            <button class="dropbtn">UPLOAD</button>
                <div class="dropdown-content">
                <a href="upload_material.php">Upload Material</a>
                <a href="upload_gallery.php">Upload Gallery</a>
                </div>               
          </div>
              <div class="dropdown">
        <button class="dropbtn">DOWNLOAD</button>
                <div class="dropdown-content">
                <a href="download_material.php">Download Material</a>
                <a href="download_gallery.php">Download Gallery</a>
                </div>   
    </div>
      <div class="dropdown">
            <a class="dropbtn" href="list_user.php"> USER LIST</a>
      </div>
      ';
    }
    else{
        echo '
    <div class="dropdown">
         <button class="dropbtn">DOWNLOAD</button>
                <div class="dropdown-content">
                <a href="download_material.php">Download Material</a>
                <a href="download_gallery.php">Download Gallery</a>
                </div>   
    </div>
    ';
}
echo '
<div class="dropdown">
  <button class="dropbtn">YOUTUBE GALLERY</button>
  <div class="dropdown-content">
  <a href="https://www.youtube.com/playlist?list=PLYTbAqCRJYVD6jc5Xwgf6NarfNFyhbQJk">Hindi Grammar</a>
  <a href="https://www.youtube.com/playlist?list=PLYTbAqCRJYVAUe5GJJ3nXeK1sfUsXUX6T">Maths</a>
  <a href="https://www.youtube.com/playlist?list=PLYTbAqCRJYVC4EGhXJOnu7xEt4D-M0ypZ">History</a>
  <a href="https://www.youtube.com/playlist?list=PLYTbAqCRJYVDAAOHdeKjDhw2DynrIP4SB">Reasoning</a>  
  <a href="https://www.youtube.com/playlist?list=PLYTbAqCRJYVA0le7JSmB9kenINGY55gkS">Rajasthan G.K.</a>      
  <a href="https://www.youtube.com/playlist?list=PLYTbAqCRJYVBvSPWEYsmEBrknmfba2eTi">NET/JRF</a>
  <a href="https://www.youtube.com/playlist?list=PLYTbAqCRJYVD1R1wydgFpuAZ40YvckkFa">English Grammar</a>  
  <a href="https://www.youtube.com/playlist?list=PLYTbAqCRJYVCuRpipkZpbNI7q4a9Gj7Ho">Rajasthan Geography</a>    
  </div>
</div>';

// <div class="dropdown">
//       <a class="dropbtn" href="download_gallery.php"> GALLERY</a>
//   </div>
if(empty($_SESSION["admin"])){
echo '
<div class="dropdown">
  <button class="dropbtn">CONTACT US</button>
  <div class="dropdown-content">
    <a href="tel:919929975863" class="call-cont"><i class="fa fa-phone" style="font-size:20px;color:black"></i> Call Us</a>
    
    <a href="https://wa.me/919929975863?text=I%20am%20interested%20in%20your%20coaching%20classes" class="chat-cont"><i class="fa fa-whatsapp" style="color: green; font-size: 20px;"></i> Chat With Us</a>
  
    <a href = "mailto: abhipreranabikaner@gmail.com" class="gmail-cont"><i class="fa fa-envelope" style="color: red; font-size: 20px;"></i> Mail Us</a>
  </div>

</div>';
}
 

  if(!empty($_SESSION['name'])){

    echo '

        <div class="dropdown">
            <a class="dropbtn" href="#">'.$_SESSION["name"].'</a>
  </div>

      <div class="dropdown">
        <a class="dropbtn" href="index.php?id=log_out">LOGOUT</a>
  </div>

    ';

  }
  else{
    echo '

    <div class="dropdown">
      <a class="dropbtn" href="login.php"> LOGIN</a>
  </div>

<div class="dropdown">
      <a class="dropbtn" href="signup.php"> SIGNUP</a>
  </div>

  ';  
  }


echo '

  <div class="toggle-icon">
      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
  </div>



</div>

  <div class="nav-container">
  
  <img src="./Images/abhiprerana.png" class="banner-img">';

  //     <div class="Monitors-logo">
  //   <a href="index.php" ><img src="./Images/logo.png" class="Mlogo"></a>
  // </div>


  // <div class="tag-line">
  // <div class="tag-word">Think</div>
  //   <div class="tag-word">Government</div>
  //     <div class="tag-word">Exam,</div>
  //       <div class="tag-word">Think</div>
  //         <div class="tag-word">Monitors</div>
  	    
  // </div>

  // <div class="mini-tag-line">
  // 	Connect - Learn - Prepare
  // </div>

  // <div class="sub-tag-line">
  // 	The More You Practice The Luckier You Get
  // </div>
echo '
</div>

 	';
}

function footer(){
	echo '<footer>

<div class="ftr-1">
  <div class="ft-pad"><b>ADDRESS :</b></div>
  <div class="ft-pad">Sector 8</div>
  <div class="ft-pad">Jai Narayan Vyas Colony</div>
  <div class="ft-pad">Bikaner 334001.</div>
  <div class="ft-pad">+91 9929975863</div>
  <div class="ft-pad">abhipreranabikaner@gmail.com</div>
</div>

<div class="ftr-2">
  <div class="ft-pad"><b><a href="aboutus.php" style="color:white">ABOUT US</a></b></div>
  <div class="ft-pad"><b>PRIVACY POLICY</b></div>
  <div class="ft-pad"><b>TERMS & CONDITIONS</b></div>
  
</div>

<div class="ftr-3">
  <div class="ft-pad"><b>&copy Abhiprerana</b></div>
  <div class="ft-pad"><b>Find Us On</b></div>
  <div class="ft-pad"><span><a href="https://www.facebook.com/abhiprernaclassesbikaner/" class="fa fa-facebook"></a></span><span><a href="https://www.linkedin.com/in/abhiprerana-bikaner-ab901a1a8/" class="fa fa-linkedin"></a></span><span><a href="https://twitter.com/AbhipreranaB" class="fa fa-twitter"></a></span><span><a href="https://www.instagram.com/abhipreranabikaner/" class="fa fa-instagram"></a></span></div>
</div>


</footer>';
}

?>