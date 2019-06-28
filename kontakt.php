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
      $mail->addAddress('postmaster@medarna.sk');
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
<html lang="sk">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Vyroba domaceho medu">
<meta name="robots" content="index, follow">
<meta name="keywords" content="med, honey bee, vyroba medu, vcelarstvo, vcely, ul">
<meta name="author" content="Global Graphic & Design">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="icon" href="fav_bee.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Kontakt</title>
</head>
<body>
<div id="main">

 <nav id="menu" class="navbar navbar-expand-xs bg-light navbar-light fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="logo.png" alt="loginko" class="img-fluid mr-auto" style="width: 40%">
  </a>
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Domov</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="omne.php">O mne</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produkty.php">Produkty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontakt.php">Kontakt</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog/blog.php">Blog</a>
      </li>
    </ul>
  </div>  
</nav>
<br><br><br><br><br><br><br>

<div class="text-center py-3">
  <h2 style="font-size: 58px;">Neváhajte ma kontaktovať!</h2> 
</div>
<br><br><br><br><br><br>

<form id="contact_form" method="post" class="form-horizontal" action="#">
<div class="container">
    <div class="row">
        <div class="col-md-8">
                <div class="row" id="form_row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Meno</label>
                            <input type="text" class="form-control" id="name" placeholder="Vaše meno" name="meno" required />
                        </div>
                        <div class="form-group">
                            <label>
                                Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" class="form-control" placeholder="Váš Email" autocomplete='email' name="email" required id="mailos" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Predmet</label>
                            <select id="subject" class="form-control" name="value" required="required">
                                <option value="" selected="">Vyberte z možností:</option>
                                <option value="Zákaznicky zóna">Zákaznická zóna</option>
                                <option value="Návrhy">Návrhy</option>
                                <option value="Informácie o produktoch">Informacie o produktoch</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Správa</label>
                            <textarea name="sprava" id="message" class="form-control" rows="9" cols="25" required
                                      placeholder="Vaša správa"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary pull-right text-dark" style="background-color: #ffc418;" value="Odoslať" id="btnContactUs" name="btn">
                    </div>
                </div>
        </div>
        <div class="col-md-4" id="address">
<span class="glyphicon glyphicon-globe"></span>
            <address>
                <strong> Miroslav Sokol<br>
                </strong><br>
                Športova 81<br>
                Slepčany<br>
                <abbr title="Phone">
                    Telefónne č.:</abbr>
                +421 950 415 515<br>
            </address>
        </div>
    </div>
</div>
</form>
<br><br><br>



<footer class="page-footer font-small bg-light lighten-3 pt-4">

    <div class="footer-copyright text-center py-3">© Medárňa All Rights Reserved 2019, <br>
      <a href="https://globalgraphicdesign.eu">code by Global Graphic & Design</a>
    </div>

  </footer>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>