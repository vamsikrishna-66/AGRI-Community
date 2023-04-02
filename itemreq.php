<?php
echo '<script src="one.js"></script>';
session_start();
include("conf.php");
$db="agri";
$nam=$_POST["stname"];
$ir=$_POST["ir"];
$no=$_POST['ct'];
$addr=$_POST['loc'];
$wt=$_POST['wt'];



$_SESSION['no']=$no;
$_SESSION["ir"]=$ir;
$_SESSION["nam"]=$nam;
$_SESSION["wt"]=$wt;
$_SESSION["addr"]=$addr;



$conn =  mysqli_connect($server, $user, $pass, $db); 
  if (!$conn){ 
   echo "NO CONNECTION ";
  }
else {echo "<h1>SUCCESSFULLY CONNECTED<h1><br>";}


$sql3 = "INSERT INTO retreq (stname,ir,kg,addr,pno)
VALUES ('$nam','$ir','$wt','$addr','$no')";
if (mysqli_query($conn, $sql3)) {
    echo "<script>req()</script>";
} else {
    echo "invalid";
}
    
?>


