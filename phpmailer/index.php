<?php
if (isset($_POST['btn'])) {
  
  $msg = "";
/*include_once "phpmailer/PHPMailer.php";
include_once "phpmailer/Exception.php";
include_once "phpmailer/SMTP.php";*/


    $meno = $_POST['meno'];
    $email = $_POST['email'];
    $predmet = $_POST['value'];
    $msg= '<div class="jumbotron">'. $_POST['meno'] . '<br>' . $_POST['email'] .'<br>' . $_POST['sprava'].'</div>';

    require('phpmailer/PHPMailerAutoload.php');
  
      $mail = new PHPMailer();
      $mail->CharSet = "UTF-8";
      $mail->addAddress('postmaster@globalgraphicdesign.eu');
      $mail->setFrom($email);
      $mail->Subject = $predmet;
      $mail->isHTML(true);
      $mail->Body = $msg;

      if ($mail->send()) {
          header("Location: email_gen_msg.html");
      } else{
         //$msg = "Vyskitla sa chyba, skúste to znova!";
        echo 'nastala chyba';
       }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Graphic Company Global Graphic & design. We are making website , print graphic and 3D templates for customers">
<meta name="robots" content="index, follow">
<meta name="keywords" content="web,web design,designer,dizajn,tvorba www stranok,print graphic, 2D,vector,3D">
<meta name="author" content="Global Graphic & Design">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="icon" href="logo.png" type="image/gif" sizes="16x16">
<title>Global Graphic & Design</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" type="text/css" href="animate.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130975904-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130975904-1');
</script>
<script src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"rnC4s1Fx9f207i", domain:"globalgraphicdesign.eu",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=rnC4s1Fx9f207i" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->  
</head>
<body>

<div id="main">
	
<nav id="menu" class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">
  	<img src="logo1.png" alt="loginko" style="width: 30%" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white hvr-float" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white hvr-float" href="portfolio.php">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white hvr-float" href="eshop.php">Services</a>
      </li>
    </ul>
  </div>  
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="slide"><img src="wallpaper.jpg" alt="pozadie"/></div>
      <div class="carousel-caption">
        <h1 class="text-center fadeInDown animated" id="prvy">Global Graphic & Design</h1>
        <p class="text-center fadeInDown animated" id="druhy">We provide custom website and design services for individual and business that are looking to establish,improve or maintain their presence whether it's online or offline.</p>
      </div> 
    </div>
        <div class="carousel-item">
      <div class="slide"><img src="ourwork.jpg" alt="nasa praca"/></div>
      <div class="carousel-caption">
        <h2>Our Work</h2>
        <p>Choose from our services!</p>
        <a href="services.php" class="text-white"><button type="button" class="btn">See more</button></a>
    </div> 
    </div>
    <div class="carousel-item">
      <div class="slide"><img src="ourteam.jpg" alt="nass team"/></div>
      <div class="carousel-caption">
        <h2>Our Team</h2>
        <p>Check our best designers here!</p>
        <a href="team.php" class="text-white"><button type="button" class="btn">Have a look</button></a>
      </div> 
    </div>
  </div>

</div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>


<div id="about" class="container text-center fadeInDown animated">
  <div class="row">
    <div class="col-sm-4">
      <h2>Web Development</h2>
      <p><ul class="about_row text-left">
        <li>E-Commerce</li>
        <li>Portfolio</li>
        <li>Company/Business</li>
      </ul></p>
    </div>
    <div class="col-sm-4">
      <h2>Print Graphic</h2>
      <p><ul class="about_row1 text-left">
        <li>Birthday invitations</li>
        <li>Posters</li>
        <li>Business cards</li>
      </ul></p>
    </div>
    <div class="col-sm-4">
      <h2>3D Graphic</h2>
      <p><ul class="about_row2 text-left">
        <li>Interior/Exterior design</li>
        <li>Templates of furtniture</li>
        <li>Models of watches</li>
      </ul></p>
    </div>
  </div>
</div>
<br><br><br><br><br><br>

<div class="unique">
  <div class="container">
    <div class="row">
      <div class="facka col-md-6">
      <h2>What make us unique ?</h2>
      <p>Global Graphic & Design doesn't just build typical websites. We strive to offer the best solutions for you business. Our websites serve a purpose, whether it is letting your customers interact with you business more efficiently to save you time or giving them the latest information right on their desktops or mobile device.<br><br> We love what we do, and we bring anthusiasm and commitment to every project we work on.<br><br> Put simply, if you looking for a partner who cares about your business. Look no further.</p>
    </div>
    </div>
  </div>
</div> <br><br><br>


<div class="w3-content" style="max-width:1000px">
  <img class="mySlides" src="brano/uzvmockupe.jpg" alt="foto1" style="width:100%">
  <img class="mySlides" src="brano/012.jpg" alt="foto2"  style="width:100%;display:none">
  <img class="mySlides" src="brano/06.jpg" alt="foto3" style="width:100%;display:none">

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="brano/uzvmockupe.jpg" alt="foto1" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="brano/012.jpg" alt="foto2" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="brano/06.jpg" alt="foto3" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
    </div>
  </div>
</div><br><br><br>

<div class="jumbotron wow fadeInLeft animated" data-delay="0.1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h2 class=cuheading>Contact Us</h2>
            </div>
        </div>
    </div>
</div>
<form id="contact_form" method="post" class="form-horizontal" action="#">
<div class="container">
    <div class="row">
        <div class="col-md-8">
                <div class="row" id="form_row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your name" name="meno" required />
                        </div>
                        <div class="form-group">
                            <label>
                                Email address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" class="form-control" placeholder="Your email" autocomplete='email' name="email" required id="mailos" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" class="form-control" name="value" required="required">
                                <option value="" selected="">Choose from option:</option>
                                <option value="Všeobecný zákaznícky servis">General customer service</option>
                                <option value="Návrhy">Ideas</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="sprava" id="message" class="form-control" rows="9" cols="25" required
                                      placeholder="Explain everything here!"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary pull-right" id="btnContactUs" name="btn">
                    </div>
                </div>
        </div>
        <div class="col-md-4" id="address">
<span class="glyphicon glyphicon-globe"></span>
            <address>
                <strong>Global Graphic & Design <br>
                </strong><br>
                7 Woodlawn Grove, Santry<br>
                Dublin 17, Ireland<br>
                Email: <a href="mailto:#">postmaster@globalgraphicdesign.eu</a><br>
                <abbr title="Phone">
                    Phone no.:</abbr>
                +353 83 039 8792<br>
                <p class="fa fa-facebook-square" style="font-size:24px"></p><a href="https://www.facebook.com/GlobalGD" target="_blank" class="web">Our fan page</a><br>
                <p class="fa fa-instagram" style="font-size:24px"></p><a href="https://www.instagram.com/global_graphicdesign" target="_blank" class="web">Our Instagram</a><br>
                <p class="fa fa-user" style="font-size: 24px"></p><a href="https://www.globalgraphicdesign.eu/obchodne_podmienky.php" target="_blank" class="web">Business Conditions</a><br>
                <p class="fa fa-lock" style="font-size: 24px"></p><a href="https://www.globalgraphicdesign.eu/zasady-spracuvania-osobnych-udajov.pdf" target="_blank" class="web">Privacy Conditions</a>
            </address>
        </div>
    </div>
</div>
</form>
<br><br><br>

<script>
  window.intercomSettings = {
    app_id: "ohk6oymm"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/ohk6oymm';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>


<!-- Footer -->
<footer class="page-footer font-small bg-dark lighten-3 pt-4">

    <div class="footer-copyright text-center py-3 text-white">© 2018 Copyright:
      <a href="https://globalgraphicdesign.eu" class="text-white"> Global Graphic & Design</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


</div>

<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>