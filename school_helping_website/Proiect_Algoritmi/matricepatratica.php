<?php
   include 'header.php';
   include 'navbar.php';
?>

<br>
<h1 class="text-center">Matrice patratica</h1>
<br>
<br>

<div class="container">
   <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6">
         <h5>O matrice patratica are numarul de linii egal cu numarul de coloane</h5>
      </div>
   </div>
   <br>
   <img src="media/matricepatratica.jpg" class="center">
   <br>
   <br>
   <hr>
   <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6">
         <h5>Zone in matricea patratica</h5>
      </div>
      <br>
      <img src="media/zonematrice.jpg" class="center">
      <br>
      <div class="row">
      <div class="col-3">
      </div>
      <div class="col-6">
         <h5>Explicatie: </h5>
         <br>
         <p> 
         - zona 1 = deasupra diagonalei principale si deasupra diagonalei secundare <br>
         - zona 2 = deasupra diagonalei principale si sub diagonala secundara <br>
         - zona 3 = sub diagonala principala si sub diagonala secundara <br>
         - zona 4 = sub diagonala principala si deasupra diagonalei secundare
         </p>
      </div>
   </div>
   <div class="row">
   <div class="col-3">
      </div>
      <div class="col-6">
         <h3 style="color: green;">Tema: calculati sumele din fiecare zona </h3>
      </div>
   </div>
   </div>
</div>

<?php
include 'footer.php';
?>