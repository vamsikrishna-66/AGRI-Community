<?php
echo '<script src="one.js"></script>';
session_start();
include("conf.php");
$db="agri";
$pasd=$_POST["pwd"];
$nam=$_POST["nam"];
$no=$_POST['phno'];
$addr=$_POST['addr'];
$yaaru=$_POST['yaaru'];



$_SESSION['no']=$no;
$_SESSION["pasd"]=$pasd;
$_SESSION["nam"]=$nam;
$_SESSION["yaaru"]=$yaaru;
$_SESSION["addr"]=$addr;



$conn =  mysqli_connect($server, $user, $pass, $db); 
  if (!$conn){ 
   echo "NO CONNECTION ";
  }
else {echo "<h1>SUCCESSFULLY CONNECTED<h1><br>";}

$s1 = "SELECT * FROM log WHERE `phoneno` = '$no' ";

$res1 =mysqli_query($conn,$s1);
$count2 = mysqli_num_rows($res1);
if($count2 == 0){
$sql3 = "INSERT INTO log (nam,phoneno,addr,sup,pad)
VALUES ('$nam','$no','$addr','$yaaru','$pasd')";
if (mysqli_query($conn, $sql3)) {
    echo "<script>sub()</script>";
} else {
    echo "invalid";
}
    }
    else{
        echo "<script>nosub()</script>";

    }


