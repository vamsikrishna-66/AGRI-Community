<?php
echo '<script src="one.js"></script>';
session_start();
include("conf.php");
$db="agri";
$nam=$_POST["snam"];
$ia=$_POST["ia"];
$no=$_POST['ctd'];
$addr=$_POST['locd'];
$wt=$_POST['wtd'];



$_SESSION['no']=$no;
$_SESSION["ia"]=$ia;
$_SESSION["nam"]=$nam;
$_SESSION["wt"]=$wt;
$_SESSION["addr"]=$addr;



$conn =  mysqli_connect($server, $user, $pass, $db); 
  if (!$conn){ 
   echo "NO CONNECTION ";
  }
else {echo "<h1>SUCCESSFULLY CONNECTED<h1><br>";}


$sql3 = "INSERT INTO itemdis (nam,ia,kg,addr,pno)
VALUES ('$nam','$ia','$wt','$addr','$no')";
if (mysqli_query($conn, $sql3)) {
    echo "<script>pub()</script>";
} else {
    echo "invalid";
}
    


