<!doctype html>
   <html lang="en">
     <head>
       <title>home</title>
       <?Php include 'includes/head.php' ?>
         <link rel="stylesheet" href="stiler/sidebar.css">

      
       </head>
    <!---------------------------- <body> tag er den som er synlig i brovse ------------------------------------------------------>
       <body>
       <?Php include 'includes/script.php' ?>
    <!---------------------------- <nav> tag er boksen for navigasjonsbar ------------------------------------------------------>
      <nav>
          <?Php include 'includes/nav2.php' ?>
          </nav>

      <div class="side">
          


          
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="side2.php">Infrastrutur</a>
  <a href="side3.php">Norsk</a>
  <a href="side4.php">Eengelsk</a>
  <a href="#">Samfunnsfag</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ fagmeny</button>  
  
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>




          </div>
                     
    </body>
   </html>
