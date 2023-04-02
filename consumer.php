<html>
    <head>
        <script src="one.js"></script>
        <link rel="stylesheet" href="consumer.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script defer>
    function farm(nama,ia,kgs,addr,pnop){
  const newDiv = document.createElement("div");

  const newh3 = document.createElement("h3");
  const newContent = document.createTextNode(nama);
  newh3.appendChild(newContent);

  const dem = document.createElement("h4");

  const newContent2 = document.createTextNode("available: "+ia);
dem.appendChild(newContent2);
//   const di = document.createElement("h5");
//   const nc3 = document.createTextNode(ia);
//   di.appendChild(nc3)
    const loc = document.createElement("h4");
  const nc4= document.createTextNode("Location :");
  loc.appendChild(nc4);
  const locd= document.createElement("h5");
  const nc5= document.createTextNode(addr);
  locd.innerHTML = "<style>h5 { color:white; }</style>";

  locd.appendChild(nc5);
  const kg = document.createElement("h4");
const nc6 = document.createTextNode("kgs : "+kgs);
kg.appendChild(nc6);

const cont = document.createElement("h5");
const nc7 = document.createTextNode("contact : "+pnop);

cont.append(nc7);

const br = document.createElement("hr")

//var parent = document.getElementById("boxes")
//const bc = document.createElement("div");
//bc.id = "boxes";
  newDiv.appendChild(newh3);
  newDiv.appendChild(br);
  newDiv.appendChild(dem);
 // newDiv.appendChild(di);
  newDiv.appendChild(kg);
    newDiv.appendChild(loc);
    newDiv.appendChild(locd);
   newDiv.appendChild(cont);
  newDiv.id="bone";
  newDiv.className = "box";
//   parent.appendChild(newDiv);
  // add the newly created element and its content into the DOM
  const currentDiv = document.getElementById("boxes");
  console.log(currentDiv)
//   document.body.insertBefore(parent, currentDiv);
  //  document.body.insertAdjacentHTML(bc, currentDiv);
  $(document).ready(function(){
      $("#boxes").append(newDiv);
    });
}
</script>

    </head>
<body id="body" onload = "consu()">
        <div id="a">
            <section id="one">
                       
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
<!-- Container wrapper -->
<div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">
      <img src="logo.png" height="40" width="40" style="border-radius: 25px;" alt="MDB Logo"
        loading="lazy" />
    </a>


    <!-- Toggle button -->
    

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left links -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="one.html">Home</a>
        </li>

        <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            COMMUNITY
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="farmer.php">Farmer</a>
            <a class="dropdown-item" href="retailer.html">Retailer</a>
            
            <a class="dropdown-item" href="consumer.php">Consumer</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#two">Check Retailers</a>
        </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
        
        <li id ="hid" class="nav-item">
            <a class="nav-link active"  style="color:white;font-weight: bold;" href="" onclick="teesey()" tabindex="-1" aria-disabled="true">Logout</a>
        </li>
        
    </ul>
        
        
    
    <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
</div>
<!-- Container wrapper -->
</nav>
<!-- Navbar --> 
</section>
</div>

<?php
echo '<script src="one.js"></script>';
include("conf.php");
$db="agri";

$conn =  mysqli_connect($server, $user, $pass, $db); 
  if (!$conn){ 
   echo "NO CONNECTION ";
  }
else {echo "<p>.</p>";}

$s2 = "SELECT * FROM itemdis ";

$res2 = mysqli_query($conn,$s2);
$count = mysqli_num_rows($res2);
   while($row = $res2->fetch_assoc()) {
        $stn = $row['nam'];
        $ia = $row['ia'];
        $kg = $row['kg'];
        $addr = $row['addr'];
        $pno = $row['pno'];

        echo "<script>farm('$stn','$ia','$kg','$addr','$pno');</script>";
   }
?>

<div id="b">
    <h1>AGRI Community</h1>
</div>
<div id = "tot" style="border:1 px solid; box-shadow:20px 20px 88px white;">
<div id="c">
  <h2 >The CONSUMER</h2>
  <img src="consumer.jpg">
</div>
<div id="ftext">
  <h4>Consumer as the end-users of produce and service which are being traded in
the market. Demands for those goods and services make a direct impact
on supply chain and trading. 

Hence consumers play an important role as they create these demands which in
turn is the driving force for businesses. Without consumer demand, market 
would be inefficient and economy will faces loses. 

Consumers can also provide feedback regarding their products and services
which can be valuable to businesses so that they can improve and increase
the quality of their products. This helps meet consumer needs and ultimately 
driving increased sales and growth.</h4>
</div>
</div>
<section id="two">
    <div id="d">
      <h2>Retailers </h2>
      <div id="boxes">
        <div id="top">
</div>
      </div>
    </div>
    </section>
</body>
</html>