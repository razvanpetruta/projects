<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Caracter/siruri de caractere</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col=12">
         <h5>Caractere</h5>
      </div>
      <br>
   </div>
   <div class="row">
      <div class="col-12">
         <p>
            &nbsp;&nbsp;&nbsp;&nbsp;Prin codul ASCII, fiecarui caracter reprezentat in acest cod i se asociaza un numar. Aceste numere (numite chiar coduri ASCII) se gasesc in intervalul 0 .. 127.
         </p>
      </div>
      <br>  
   </div>
   <div class="row">
      <div class="col-3">

      </div>
      <div class="col-6">
         <img class="img-fluid" src="media/ascii.png" alt="">
         <br>
         <a class="sursa" href="https://ocw.cs.pub.ro/courses/cn1/laboratoare/05/nou">sursa</a>
      </div>
      <div class="col-3">

      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
         <h5>Exemple:</h5>
         <p> 
         - Fie declaratia: char c; <br>
         - daca c este litera mare si dorim sa o facem litera mica: c=c+32; <br>
         - daca c este litera mica si dorim sa o facem litera mare: c=c-32; <br>
         - daca vrem sa verificam daca c memoreaza caracterul 'd': if(c=='d')
         </p>
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Siruri de caractere</h5>
      </div>
      <br>
   </div>
   <div class="row">
      <div class="col-3">

      </div>
      <div class="col-6">
         <img class="img-fluid mobilecol" src="media/siruridecaractere1.jpg" alt="">
      </div>
      <div class="col-3">
         
      </div>
   </div>
   <br>
</div>

<?php
include 'footer.php';
?>