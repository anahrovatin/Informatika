<?php 
    include('/setup.php');

    
    if(isset($_POST['upload'])) {
      $target = "Dokumenti/".($_FILES ['file']['name']); //pot do shrambe dokumentov

     $file = $_FILES ['file'] ['name']; //pridobi podatek iz obrazca (form)

      move_uploaded_file($_FILES ['file']['tmp_name'], $target); } //premaknje naloženo datoteko v željeno mapo Dokumenti


    
 ?> 

<!DOCTYPE html>
<html>
   <head>

   <title> <?php echo $page['title']; ?> </title>


   <meta name="viewport" content="width=device-width, initial scale=1.0"> <!--prilagajanje strani glede na velikost naprave-->

   <?php  include('/css.php');?> <!--vklučitev css.php datoteke s pomočjo php funkcije-->

   <?php include('/js.php');?>

   </head>

    <body>

         <nav class="navbar navbar-default" role="navigation">
         <div class="container">
         	<ul class="nav navbar-nav">
         		<li <?php if($pageid == 1) { echo 'class="active"'; } ?> > <a href="?page=1">Matematika</a></li> <!--povem katero stran naj vzame iz baze in da naj obarva meni, če sem na tej strani -->
         		<li <?php if($pageid == 2) { echo 'class="active"'; } ?> > <a href="?page=2">Slovenščina</a></li>
         		<li <?php if($pageid == 3) { echo 'class="active"'; } ?> > <a href="?page=3">Angleščina</a></li>
         	</ul>
         </div>
         </nav> <!-- konec menuja-->

         <div class="container">
         	<h1><?php echo $page['header']; ?></h1>
          <p> <?php echo $page['body']; ?> </p>
            <p><form action="index.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="upload" name="upload">Naloži</button>
            </form> </p> 
             
            
           <p><b>Potegni dol naložene datoteke:<b></p> 

          <p><span class="glyphicon glyphicon-file glyphicon "> <a href="Dokumenti/INF.docx"> Informatika zapiski </a> </span></p>
          <p> <span class="glyphicon glyphicon-file glyphicon "> <a href="Dokumenti/brioni.jpg"> Brioni slika </a> </span></p>


           

         </div>



         <footer id="footer">
         	
         	<div class="container">
         		<p>Ana Hrenko-Hrovatin, Gimnazija Vič, maturitetna projektna naloga</p>
         	</div>

         </footer>
    </body>
</html>