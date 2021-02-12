<!DOCTYPE html>
<html>
<head>
<title>My Indore</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style1.css">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
--
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style >
  
</style>
<body>
<section>
 <div class="topnav" id="myTopnav">
      <a href="#hfood" class="active">Home</a>
      <a href="#contact" >Contact</a>
      <a href="#gallery" >Gallery</a>
      <a href="#feedback" >Feedback</a>
      <a href="#post" >Post</a>
      <a href="#about" >About</a>
        <a href="javascript:void(0)" class="icon" onclick="fun1()"> <i class="fa fa-bars">
          </i>
  </a>
     </div>

     <script type="">
      function fun1()
  {
          var a =document.getElementById("myTopnav");
          
  if (a.className === "topnav") {
    a.className += " responsive";
     } 
  else {
    a.className = "topnav";
      }
      
  }

     </script>
   
</section>
<section id="hfood">
    <div class="hfood container">
      <div style="margin-left: 20px;">
      <h1>WELCOME,<span></span></h1>
      <h1> To  <span></span></h1>
      <h1> INDORE <span></span></h1>
            
      <a href="#" type="button" class="cta">Views </a>

      </div>
      <br>
    </div>
</section>

<br>
    <!-- Page Content -->
<section id="gallery">    
   <div class=" gallery-container">

<div class="gallery-top ">
       <h1 class="section-title" >Gal<span>L</span>ery</h1>
     </div> 

        <div class="row">


            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/in3.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/in3.jpg" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/in2.jpg"  class="fancybox" rel="ligthbox">
                    <img  src="img/in2.jpg" class="zoom img-fluid"  alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/in4.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/in4.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/in5.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/in5.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/in6.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/in6.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/in8.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/in8.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/in7.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/in7.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="img/inn2.jpg" class="fancybox" rel="ligthbox">
                    <img  src="img/inn2.jpg" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
         <script >
 $(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
    
    $(this).addClass('transition');
  }, function(){
        
    $(this).removeClass('transition');
  });
});
    
</script>   
           
           
       </div>

    </div>
</section>
  



<section id="services">
<div class="services container ">
     <div class="services-top ">
       <h1 class="section-title" >serv<span>I</span>ces</h1>
     </div> 
    <div class="services-bottom"> 

        <div class="service-item" style="background-image:url('img/sin1.jpg') ; ">
          <div class="icon"><img src="https://img.icons8.com/emoji/96/000000/oncoming-taxi.png"/></div>
          <div>
          <h2><b>Transport</b></h2>
      
        </div>
        </div>

        <div class="service-item" style="background-image:url('img/sin4.jpg') ;">
          <div class="icon"><img src="https://img.icons8.com/officel/96/000000/restaurant-pickup.png"/ ></div>
          <div>
            <h2><b>Hotel/Resturant</b></h2>
        
          </div>
        </div>
        
        <div class="service-item" style="background-image:url('img/sin41.jpg') ;">
          <div class="icon"><img src="https://img.icons8.com/dusk/96/000000/shopping-cart.png"/></div>
          <div>
            <h2><b>Shopping Mall and Market</b></h2>
  
          </div>
        </div> 

        <div class="service-item" style="background-image:url('img/sin31.jpg') ;">
          <div class="icon"><img src="https://img.icons8.com/fluent/96/000000/dead-food.png"/></div>
          <div>
            <h2><b>FOOD</b></h2>
      
          </div>
        </div>     
           
   </div>
  </div>
</section>
<br><br>
<section id="project">
 <div class="project-container">
  
    <h1 class="section-title">Tour<span>ist</span> Place</h1>
  
 <div style="float: left; margin-left:100px;font-size:16px;margin-top: 10px; "> 
     <ul class="list-group">
      <li class="list-group-item d-flex justify-content-between align-items-center list active">
      Mandir</li>   
    <li class="list-group-item d-flex justify-content-between align-items-center list">
      Khajrana Ganesh Mandir
    
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Annapurna Mandir
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Bijjasan Mata Mandir
     
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    
       <a href="#" data-toggle="popover" title="Gopal Mandir" data-content="Gopal Mandir is a religious spot arranged in Indore in Madhya Pradesh province of India. Address-120, Dhar Road, Nihalpura, Rajwada, Indore,"
       >  Gopal Mandir</a> 
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      
      <a href="#" data-toggle="popover" title="Surya Mandir" data-content=" Surya Mandir Indore in CAT Rd, Siddhipuram Colony, Ragasasas Road, Rau, Indore, MP">Surya Mandir</a>
    </li>
</ul>
 </div>
 <script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
 <div style="float: left; margin-left:80px;font-size: 16px; margin-top: 10px; ">
    <ul class="list-group">
      <li class="list-group-item d-flex justify-content-between align-items-center list active">
      Picnic Spot</li>   
    <li class="list-group-item d-flex justify-content-between align-items-center list">
      Patapani & Heritage Train
    
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Ralamandal Wildlife Sanctuary
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Choral River     
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Lotus Lake </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
      Pitra Parvat
    </li>
</ul>
 </div>
 <div style="float:left; margin-left:80px;font-size: 16px; margin-top: 10px; ">
      <ul class="list-group">
      <li class="list-group-item d-flex justify-content-between align-items-center list active">
      Near visiting spots </li>   
    <li class="list-group-item d-flex justify-content-between align-items-center list">
    Ujjain Mahakaleshvar Mandir    
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Mandu and Maheshvar
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Omkareshvar 
     
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Hanumantiya     
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Chidiya Bhadak Waterfall 
    </li>
</ul>
 </div>
     
   </div>
    
 </div>
</section>



<section id="about">
 <div class="about container">
   <div class="col-left">
     <div class="about-img">
     <img src="img/logo-in.png" alt="img">
       </div>
   </div>
   <div class="col-right">
     <div class="section-title">AB<span>O</span>UT</div>
     <div class="section-title">
        <h3>Indore City </h3>
      <p>Indore  the commercial capital of <span>Madhya Pradesh</span>, is situated on the Malwa Plateau. While growing at a fast pace, it still manages to combine traditional and modern lifestyles.Indore has witnessed the reign of one of the greatest women in Indian history,<span> Rani Ahilyabai Holkar</span>.Indore has been ranked <span>India's cleanest city</span> for the fourth consecutive year by Swachh Survekshan 2020, 
          </p>
     </div>
     <a href="#" class="cta">DOWNLOAD INFO</a>

   </div>
 </div>
</section>
<br><br><br><br>
<section id="feedback">
  <div class="feedback-container">
  <div class="section-title">FEED<span>B</span>ACK</div>
    <div class="feedback-item" style="margin-right: 10px;">
      <div class="feedback-form">
        <form method="POST" action="">
        <h3>Feedback form</h3>
        <div class="form-group" style="float: left;  ">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="" >
          </div>

          <div class="form-group" style="float: left;">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>


          <div class="form-group" style="float: left;">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>     
          <br>
           
          <div class="form-group">
           <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" style="font-size:15px; margin-left: 40px;
           width: 60%; box-shadow: 0px 0px 18px grey;  " ></textarea>
           <span class="help-block"><p id="characterLeft" class="help-block">Max Character length : 140 </p></span>
          </div> 

          <input type="submit" name="submit" type="button" id="submit"  class="btn btn-primary pull-right"/>    
      </form>

      <?php 
  
if(isset($_POST['submit']))
{
require 'connection.php';
$con=connect();

$name=$con->real_escape_string($_POST['name']);
$subject=$con->real_escape_string($_POST['subject']);
$email=$con->real_escape_string($_POST['email']);
$message=$con->real_escape_string($_POST['message']);

$qry="INSERT INTO `feedback`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$Subject','$message')";
$result=$con->query($qry);
if($result){
  echo "data submitted";
}
else{
 die("Couldnt enter data: ".$con->error);
}

}

      ?>
      </div>
    </div>
  
    
  </div>

</section>
<br><br>
<section id="contact">
<div class="contact container">
  <div class="section-title"> contact <span>Here</span> </div>
   <div class="contact-item">
     <div class="icon"><img src="https://img.icons8.com/nolan/64/ringing-phone.png"/></div>
     <div class="contact-info">
       <h1>Phone</h1>
       <h3>21+ 6326563232</h3>
       <h3>21+ 6566556554</h3>
     </div>
   </div>
   <div class="contact-item">
     <div class="icon"><img src="https://img.icons8.com/clouds/100/000000/email.png"/></div>
     <div class="contact-info">
       <h1>Email</h1>
       <h3>indoretour@gmail.com</h3>
       <h3>ITC@gmail.com</h3>
     </div>
   </div>
   <div class="contact-item">
     <div class="icon"><img src="https://img.icons8.com/nolan/64/address.png"/></div>
     <div class="contact-info">
       <h1>Address</h1>
       <h3>34,East Mhownaka </h3>
       <h3>Indore MP</h3>
     </div>
   </div>

</div>
</div>
</section>
<section id="footer">
   <div class=" footer container">
     <div class="brand">
     <h1><span>IN</span>DORE <span>To</span>urist Guide</h1>
     <h4 style="color: white;">Social Links</h4>
     <div class="social-icon">
       <div class="social-item" style="float: left; "> <a href="# "><img src="https://img.icons8.com/offices/40/000000/facebook-new.png"/></a></div>
       <div class="social-item" style="float: left;margin-left:20px;"> <a href="#" ><img src="https://img.icons8.com/doodle/40/000000/google-maps-new.png"/></a></div>
       <div class="social-item" style="float: left;margin-left:20px;">
          <a href="#"><img src="https://img.icons8.com/nolan/40/linkedin.png"/></a>
        </div>
        <div class="social-item" style="float: left;margin-left:20px;">
          <a href="#"><img src="https://img.icons8.com/office/40/000000/instagram-new.png"/></a>
        </div>

     </div>

           <p style=" font-size:12px;color:white; float:right;margin-top:20px; ">© 2020 shivani All rights reserved.</p> 
   </div>
   </div>
</section>
<script src="./app.js"></script>
</body>
</html>