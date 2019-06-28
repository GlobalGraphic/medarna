<?php

if (isset($_POST["btn"])) {
  $servername =  "46.229.230.117";
  $username = "nr026900";
  $password = "vnawaxyv";
  $dbname = "nr026900db";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
    die("ERROR: Could not connect. " . $conn->connect_error);
	}

	$sql = "INSERT INTO clanky (nadpis, textik, datum, autor, image)
			VALUES ('". $_POST['nadpis']."','". $_POST['textik']."','". $_POST['datum']."','". $_POST['autor']."', '". $_FILES['subor']['name']."')";



	if (mysqli_query($conn, $sql)) {
		echo "New Record added";
		header("Location: http://www.medarna.sk/welcome.php");
	}else {
		echo "Error" . $sql . "" . mysqli_error($conn);
	}
	$conn->close();
}

function kontrola($subor){
	if ($subor['size'] <= 10000000) {
		return 1;

	}else{
		return 0;
	}
	
}

function pripona($subor) {
	$povolene = array('jpg','JPG','jpeg','JPEG','gif','png','PNG');
	$pripona = pathinfo($subor['name'],PATHINFO_EXTENSION);

	if (in_array($pripona, $povolene)) {
		return 1;
	} else {
		return 0;
	}
}

$subor = $_FILES['subor'];

if (isset($subor)) {
	if (kontrola($subor) == 1 and pripona($subor) == 1) {
		move_uploaded_file($_FILES['subor']['tmp_name'],"img/".$_FILES['subor']['name']);
	}else {
		echo "súbor sa nenahral pre nepovolený formát";
	}
}


?>