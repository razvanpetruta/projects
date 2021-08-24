<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Divizorii comuni a doua numere</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col=12">
         <h3>Metoda naiva</h3>
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
   <span style='color:#696969; '>//le vom modifica astfel incat a sa fie cel mai mic dintre cele 2</span>
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>b<span style='color:#808030; '>&lt;</span>a<span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> aux<span style='color:#808030; '>=</span>a<span style='color:#800080; '>;</span>
      a<span style='color:#808030; '>=</span>b<span style='color:#800080; '>;</span>
      b<span style='color:#808030; '>=</span>aux<span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#800000; font-weight:bold; '>int</span> d<span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//vom considera toti divizorii: proprii si improprii</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>d<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>a<span style='color:#800080; '>;</span>d<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>a<span style='color:#808030; '>%</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span> <span style='color:#808030; '>&amp;</span><span style='color:#808030; '>&amp;</span> b<span style='color:#808030; '>%</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-08 21:23:30 UTC -->
      </div>
      <div class="col-4 mobilecol">
         <img class="img-fluid" src="media/divizoricomuni.jpg" alt="">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim cele 2 numere: a si b <br>
         - le ordonam pentru a parcurge for-ul de divizori pana la cel mai mic <br>
         - vom verifica pentru fiecare numar de la 1 la cel mai mic dintre cele 2 numere daca se imparte la a si b <br>
         
         </p>
      </div>
   </div>
   <br>
   <br>
   <br>
   <div class="row">
      <div class="col-12">
         <h3>Metoda eficienta</h3>
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
   <span style='color:#696969; '>//le vom modifica astfel incat a sa fie cel mai mic dintre cele 2</span>
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>b<span style='color:#808030; '>&lt;</span>a<span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> aux<span style='color:#808030; '>=</span>a<span style='color:#800080; '>;</span>
      a<span style='color:#808030; '>=</span>b<span style='color:#800080; '>;</span>
      b<span style='color:#808030; '>=</span>aux<span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#800000; font-weight:bold; '>int</span> d<span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//vom considera toti divizorii: proprii si improprii</span>
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>a<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>)</span> <span style='color:#696969; '>//nu exista alti divizori in afara de 1</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>else</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>b<span style='color:#808030; '>%</span>a<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>a<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>d<span style='color:#808030; '>=</span><span style='color:#008c00; '>2</span><span style='color:#800080; '>;</span>d<span style='color:#808030; '>*</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>a<span style='color:#800080; '>;</span>d<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
         <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>a<span style='color:#808030; '>%</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span> <span style='color:#808030; '>&amp;</span><span style='color:#808030; '>&amp;</span> b<span style='color:#808030; '>%</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
         <span style='color:#800080; '>{</span>
            <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
            <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>b<span style='color:#808030; '>%</span><span style='color:#808030; '>(</span>a<span style='color:#808030; '>/</span>d<span style='color:#808030; '>)</span><span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span> <span style='color:#808030; '>&amp;</span><span style='color:#808030; '>&amp;</span> d<span style='color:#808030; '>*</span>d<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span>a<span style='color:#808030; '>)</span>
               <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>a<span style='color:#808030; '>/</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
         <span style='color:#800080; '>}</span>
   <span style='color:#800080; '>}</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-08 21:54:01 UTC -->
      </div>
      <div class="col-4 mobilecol">
         <img class="img-fluid" src="media/divcomuni.jpg" alt="">
      </div>
   </div>
   <hr>
      <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim cele 2 numere: a si b <br>
         - le ordonam pentru a parcurge for-ul de divizori pana la cel mai mic <br>
         - vom verifica pentru fiecare numar de la 2 la sqrt(a) daca acesta este divizor pentru ambele numere<br>
         - in caz afirmativ, vom verifica daca elementul care corespunde perechii a/d este divizor pentru b, deoarece pentru a este clar ca e <br>
         - mai trebuie verificat sa nu fi ajuns la sqrt(a) si sa nu afisam divizorul de 2 ori
         </p>
      </div>
   </div>
</div>

<?php
include 'footer.php';
?>