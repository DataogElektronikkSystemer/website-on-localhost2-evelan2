<!-- Nav tabs -->
<div class="navbar"> 



<ul class="nav nav-tabs" id="navId">
            
             
             <li class="nav-item">
                 <a href="index.php" class="nav-link active"><img src="Bilder/kattaseglet.jpg" alt="Logo" style="width:30px; hight:30px;"></a>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                 <div class="dropdown-menu">
                     <a class="dropdown-item" href="side1.php">side 1</a>
                     <a class="dropdown-item" href="side2.php">Side 2 </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="Side3.php">Side 3</a>
                 </div>
             </li>

            
             <li class="nav-item">
                 <a href="kontaktinfo.php" class="nav-link">Kontakt meg</a>
             </li>

             <li class="nav-item">
                 <a href="kontaktinfo.php" class="nav-link">Rapporter</a>
             </li>

             <li class="nav-item">
                 <a href="kontaktinfo.php" class="nav-link">Fag</a>
             </li>

             <li class="nav-item">
                 <a href="kontaktinfo.php" class="nav-link">Prosjekter</a>
             </li>
            
         </ul>
         
        
         <script>
             $('#navId a').click(e => {
                 e.preventDefault();
                 $(this).tab('show');
             });
         </script>

</div>