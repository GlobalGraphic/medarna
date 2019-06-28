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
<link rel="icon" href="../fav_bee.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="../style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<title>Medarna - BLOG</title>
</head>
<body>
 <nav id="menu" class="navbar navbar-expand-xs bg-light navbar-light fixed-top">
  <a class="navbar-brand" href="../index.php">
    <img src="../logo.png" alt="loginko" class="img-fluid mr-auto" style="width: 40%">
  </a>
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Domov</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../produkty.php">Produkty</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../omne.php">O mne</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../kontakt.php">Kontakt</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login.php">Administracia</a>
      </li>
    </ul>
  </div>  
</nav><br>


          <section id="variableBoxRight">

                <?php
                switch($_GET['id']) {
                default;
                require ("clanky.php");
                break;

                case 'read_more':
                include 'read_more.php';
                break;
                }
                ?>
            </section> 







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>