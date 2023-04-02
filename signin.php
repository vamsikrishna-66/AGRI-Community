<?php
     echo ' <script src="one.js"></script>';
     session_start();
     include('conf.php');
     $db = "agri";
     $conn = new mysqli($server,$user,$pass,$db);
     if(!$conn){
         echo "no connect";
     }
     $lname = $_POST["uname"];
     $lpassword = $_POST["psd"];
     $_SESSION["lname"] = $lname;
     $_SESSION["password"] = $lpassword;

     $s2 = "SELECT * FROM log WHERE `phoneno` = '$lname' && `pad` = '$lpassword'";

     $res2 = mysqli_query($conn,$s2);
     $count = mysqli_num_rows($res2);
     if(!$res2 || $count == 1){
        $type = "SELECT `sup` FROM log  WHERE `phoneno` = '$lname'";
        $res9 = mysqli_query($conn,$type);
        while($row = $res9->fetch_assoc()) {
             $sup = $row['sup'];
             echo "<script>see('$sup');</script>";

        }

      
     }
     else{
        echo "<script> nota() </script>";
       
     }
?>


