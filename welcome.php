<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <style type="text/css">
      body {
        font-family: Raleway;
      }
        .page-header{ font: 14px sans-serif; text-align: center; }
        #todoInput { margin-left: 55px; height: 35px; }
        ol#todoList { margin-left: 35px; margin-top: 25px; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Vitaj Miroslav. Aký máš deň ?</h1>
    </div>

<form class="form-horizontal" method="post" action="blog/addarticle.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Formulár na pridanie článku</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="article_title">Nadpis</label>  
  <div class="col-md-4">
  <input id="article_title" name="nadpis" type="text" placeholder="Nadpis článku" class="form-control input-md">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="source_description">Článok</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="source_description" placeholder="Text článku" name="textik"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="article_date">Dátum</label>  
  <div class="col-md-4">
  <input id="article_date" name="datum" type="text" placeholder="Dátum článku" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="article_authors">Autor</label>  
  <div class="col-md-4">
  <input id="article_authors" name="autor" type="text" placeholder="autor" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Pridaj obrazok</label>
  <input type="file" name="subor"> 
</div>


            <div class="form-group">
              <div class="col-md-4">
                <input type="submit" name="btn" class="btn btn-primary" value="Pridať článok">
              </div>
            </div>

</fieldset>
</form>

<br><br><br>

<?php
  $servername =  "46.229.230.117";
  $username = "nr026900";
  $password = "vnawaxyv";
  $dbname = "nr026900db";

$con=mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM clanky";
$result=mysqli_query($con,$sql);

// Associative array
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  $nadpis = $row["nadpis"]; 
  $textik = $row["textik"];
  $datum = $row["datum"];
  $autor = $row["autor"];
  $image = $row["image"];
  $identifikator = $row ["id"];

?>


<br><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col">
    <h2><?php echo $nadpis ?></h2>
    <h4 class="text-secondary"><?php echo $datum?>&nbsp;&nbsp;&nbsp;<?php echo $autor?>&nbsp;&nbsp;&nbsp;<?php echo $kategorie?></h4><br><br><img src="blog/img/<?php echo $image;?>" style="width: 50%; height: 50%;"><br><br>
    <p><?php 
$string = $textik;
if (strlen($string) > 200) {
$trimstring = substr($string, 0, 200);
} else {
$trimstring = $string;
}
echo $trimstring;
?></p><br>
    <a href="delete.php?delete=<?php echo $identifikator?>">Zmazať</a>
    </div>
  </div>
</div>

<?php 
} 
  mysqli_free_result($result);
   mysqli_close($con);
?> 


</body>
</html>