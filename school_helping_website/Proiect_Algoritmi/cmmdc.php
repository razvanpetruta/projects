<?php
include 'header.php';
include 'navbar.php';
?>
<br>
<h1 class="text-center">Cel mai mare divizor comun</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col=12">
         <h3>Metoda prin scaderi repetate</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-8">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> a<span style='color:#808030; '>,</span> b<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>a<span style='color:#800080; '>;</span> <span style='color:#696969; '>//primul numar</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>b<span style='color:#800080; '>;</span> <span style='color:#696969; '>//al doilea numar</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>a<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span>b<span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>a<span style='color:#808030; '>></span>b<span style='color:#808030; '>)</span>
         a<span style='color:#808030; '>=</span>a<span style='color:#808030; '>-</span>b<span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>else</span>
         b<span style='color:#808030; '>=</span>b<span style='color:#808030; '>-</span>a<span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#696969; '>//cel mai mare divizor va fi unul dintre cele doua numere intrucat la final acestea devin egale</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>a<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-09 19:34:24 UTC -->
      </div>
      <div class="col-4 mobilecol">
         <img class="img-fluid" src="media/cmmdc.jpg" alt="">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim cele 2 numere: a si b <br>
         - cat timp cele 2 numere nu sunt egale vom scadea din cel mai mare dintre ele pe cel mai mic <br>
         - la final cele doua numere vor deveni egale, iar acest numar reprezinta cmmdc-ul <br>
         </p>
         <br>
         <h5 style="color: red;">ATENTIE!</h5>
         <br>
         In cazul in care unul dintre cele doua numere este 0 algoritmul nostru nu ne va ajuta, intrand in ciclu infinit
      </div>
   </div>
   <br>
   <br>
   <br>
   <div class="row">
      <div class="col-12">
         <h3>Metoda prin impartiri repetate</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-8">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> a<span style='color:#808030; '>,</span> b<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>a<span style='color:#800080; '>;</span> <span style='color:#696969; '>//primul numar</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>b<span style='color:#800080; '>;</span> <span style='color:#696969; '>//al doilea numar</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>b<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> r<span style='color:#808030; '>=</span>a<span style='color:#808030; '>%</span>b<span style='color:#800080; '>;</span>
      a<span style='color:#808030; '>=</span>b<span style='color:#800080; '>;</span>
      b<span style='color:#808030; '>=</span>r<span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#696969; '>//cel mai mare divizor comun va fi memorat de variabila a</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>a<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-09 19:49:01 UTC -->
      </div>
      <div class="col-4 mobilecol">
         <img class="img-fluid" src="media/cmmdcimpartiri.jpg" alt="">
      </div>
   </div>
   <hr>
      <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim cele 2 numere: a si b <br>
         - aceasta metoda se bazeaza pe impartirea deimpartitului(a) la impartitor(b) si memorarea restului(r), pana cand acest rest devine 0 <br>
         - impartitorul devine deimpartit, iar restul devine impartitor <br>
         - in momentul cand restul impartirii devine 0, cmmdc-ul va fi stocat in a 
         </p>
         <br>
         <h5 style="color: green;">OBSERVATIE!</h5>
         <br>
         Acest algoritm functioneaza si in cazul in care unul dintre cele doua numere este 0(daca ambele sunt 0, algoritmul va afisa 0, ceea ce nu are sens), iar in plus acest algoritm este mai eficient
      </div>
   </div>
</div>
<br>

<?php
include 'footer.php';
?>