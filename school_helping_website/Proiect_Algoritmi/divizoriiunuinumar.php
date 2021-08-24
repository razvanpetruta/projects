<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Divizorii unui numar </h1>
<br>

<br>
<div class="container">
<div class="row">
   <div class="col-12">
      <h3>Metoda naiva</h3>
   </div>
</div>
<br>
  <div class="row">
    <div class="col-8">
    <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr<span style='color:#800080; '>;</span>

   <span style='color:#696969; '>//toti divizorii</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> d<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>nr<span style='color:#800080; '>;</span>d<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>nr<span style='color:#808030; '>%</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>'\n'</span><span style='color:#800080; '>;</span>
   
   <span style='color:#696969; '>//divizorii proprii</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> d<span style='color:#808030; '>=</span><span style='color:#008c00; '>2</span><span style='color:#800080; '>;</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>nr<span style='color:#808030; '>/</span><span style='color:#008c00; '>2</span><span style='color:#800080; '>;</span>d<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>nr<span style='color:#808030; '>%</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>


</div>
    <div class="col-4 mobilecol">
    <img class="img-fluid" src="media/divizoriiunuinumar.jpg">

    </div>
  </div>

  <hr>
<br>
<div class="row">
<div class="col-12">
<h5>Explicatie:</h5>
<br>
<p> 

- citim numarul <br>
- in variabila d vom parcurge toate numerele de la 1 la nr si vom verifica daca acestea sunt divizori ai lui nr <br>


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

<div class="row">
    <div class="col-8">
    <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr<span style='color:#800080; '>;</span>

   <span style='color:#696969; '>//toti divizorii</span>
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>nr<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>nr<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>else</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> d<span style='color:#800080; '>;</span>
      <span style='color:#696969; '>//le vom afisa ca perechi</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>nr<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span> 
      <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>d<span style='color:#808030; '>=</span><span style='color:#008c00; '>2</span><span style='color:#800080; '>;</span>d<span style='color:#808030; '>*</span>d<span style='color:#808030; '>&lt;</span>nr<span style='color:#800080; '>;</span>d<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span> <span style='color:#696969; '>//d*d&lt;n inseamna ca mergem pana la &lt; sqrt(nr)</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>nr<span style='color:#808030; '>%</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>nr<span style='color:#808030; '>/</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//d * nr/d = nr</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>d<span style='color:#808030; '>*</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span>nr<span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>d<span style='color:#800080; '>;</span> <span style='color:#696969; '>//vom afisa doar o data, deaorece nu mai avem pereche</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>'\n'</span><span style='color:#800080; '>;</span>
   
   <span style='color:#696969; '>//divizorii proprii</span>
   <span style='color:#800000; font-weight:bold; '>int</span> d<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>d<span style='color:#808030; '>=</span><span style='color:#008c00; '>2</span><span style='color:#800080; '>;</span>d<span style='color:#808030; '>*</span>d<span style='color:#808030; '>&lt;</span>nr<span style='color:#800080; '>;</span>d<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>nr<span style='color:#808030; '>%</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>nr<span style='color:#808030; '>/</span>d<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>d<span style='color:#808030; '>*</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span>nr<span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>d<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>



</div>
    <div class="col-4 mobilecol">
    <img class="img-fluid" src="media/divizorieficienti.jpg">

    </div>
  </div>
</div>
<hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 

         - citim numarul <br>
         - in variabila d vom parcurge toate numerele de la 2 la sqrt(nr) si vom verifica daca acestea sunt divizori ai lui nr <br>
         - le vom afisa drept perechi, deoarece d * nr/d va avea rezultat nr <br>
         - trebuie sa fim atenti in momentul in care numarul este patrat perfect pentru a nu afisa un divizor de 2 ori
         </p>
      </div>
   </div>
</div>

<?php
include 'footer.php';
?>






