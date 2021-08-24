<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/stylenav.css"/>
<script src="jss/script.js"></script>
</head>
<body id="pagetop">
<section id="start">
   <?php
      include 'navbar.php';   
   ?>
      <div class="container">
         <br>
         <br>
         <br>
         <br>
         <div class="row">
            <div class="col-6">
               <h1 class="titlesection1">
                  < INVATA INFO >
               </h1>
               <br>
               <br>
               <p class="descrieresecventa1">
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               Pentru a putea ajunge un programator adevarat este necesara dezvoltarea unei gandiri structurate, logice, iar acest skill este dobandit prin rezolvarea unor probleme elementare de matematica care necesita analiza critica si atentie. <br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               Pe acest website veti gasi prezentati cativa algoritmi pe care eu i-am considerat elementari pentru examenul de bacalaureat. <br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               Acestia sunt impartiti in functie de structurile de date pe care le utilizam pentru a le rezolva.
               </p>
            </div>
            <div class="col-6 mobilecol">
               <?php
                  echo file_get_contents("media/firstsection.svg");  
               ?>
            </div>
         </div>
   </div>
</section>
<section id="middle">
   <div class="container">
      <br>
      <br>
      <div class="row rowinfo">
         <div class="col-4">
            <?php
               echo file_get_contents("media/questionsign.svg");  
            ?>
         </div>
         <div class="col-1">

         </div>
         <div class="col-7">
            <h5 class="infosec">&nbsp;&nbsp;Cu ce ma ajuta sa rezolv probleme?</h5>
            <p class="paragraph">
               &nbsp;&nbsp;&nbsp;Mereu am considerat ca algoritmica din liceu te ajuta sa devii mai organizat si mai atent la detalii, deoarece fiecare aspect al unei probleme trebuie luat in considerare, antrenandu-ti mintea sa cauta solutii cat mai eficiente, iar acest lucru este important in orice domeniu ai alege.
            </p>
         </div>
      </div>
      <br>
      <br>
      <div class="row rowinfo">
         <div class="col-7">
            <h5 class="infosec">&nbsp;&nbsp;Cum sa rezolv o problema la info?</h5>
            <p class="paragraph"> 
                  &nbsp;&nbsp;&nbsp;La fiecare problema este absolut esential sa intelegi cerinta. Trebuie sa iti dai seama care sunt informatiile care ti se dau si sa creezi legaturi intre acestea pentru a obtine informatiile care se cer. Nu recomand scrierea directa a codului, ci realizarea de schite initiale.
            </p>
         </div>
         <div class="col-1">

         </div>
         <div class="col-4">
            <?php
               echo file_get_contents("media/hacker1.svg");  
            ?>
         </div>
      </div>
      <br>
      <br>
      <div class="row rowinfo">
         <div class="col-4">
            <?php
               echo file_get_contents("media/eroare1.svg");  
            ?>
         </div>
         <div class="col-1">

         </div>
         <div class="col-7">
            <h5 class="infosec">&nbsp;&nbsp;De ce nu reusesc sa rezolv?</h5>
            <p class="paragraph">      
               &nbsp;&nbsp;&nbsp;Pentru a putea rezolva probleme este important sa intelegi conceptele fundamentale. De aceea am incercat sa prezint doar fundamentele, iar de aici limita este cerul... Imagineaza-ti ca vrei sa rezolvi ecuatii la matematica dar tu nu stii cum se aduna si se inmultesc numerele. Toate trebuie luate cronologic.
            </p>
         </div>
      </div>
      <br>
      <br>
      <div class="row rowinfo">
         <div class="col-7">
            <h5 class="infosec">&nbsp;&nbsp;Cum devin mai bun?</h5>
            <p class="paragraph">       
                  &nbsp;&nbsp;&nbsp;Aici este un secret pe care foarte putini il stiu: sa lucrezi cat mai mult, dar, cel mai important, sa intelegi ceea ce faci si sa nu iei totul de-a gata. In momentul in care intelegi un algoritm si modul in care functioneaza, vei fi capabil sa-l modelezi conform propriilor nevoi.
               </p>
            </div>
         <div class="col-1">

         </div>
         <div class="col-4">
            <?php
               echo file_get_contents("media/improvement1.svg");  
            ?>
         </div>
      </div>
      <br>
      <br>
      <br>
      <div class="row rowinfo">
         <?php
               echo file_get_contents("media/startnow.svg");  
         ?>
      </div>
   </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="jss/script.js"></script>
</body>
</html>
