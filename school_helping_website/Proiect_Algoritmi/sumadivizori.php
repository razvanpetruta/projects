<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Suma divizorilor proprii ai unui numar</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col-8">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr<span style='color:#808030; '>,</span> suma<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>int</span> d<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>d<span style='color:#808030; '>=</span><span style='color:#008c00; '>2</span><span style='color:#800080; '>;</span>d<span style='color:#808030; '>*</span>d<span style='color:#808030; '>&lt;</span>nr<span style='color:#800080; '>;</span>d<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>nr<span style='color:#808030; '>%</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
         suma<span style='color:#808030; '>=</span>suma<span style='color:#808030; '>+</span>d<span style='color:#808030; '>+</span>nr<span style='color:#808030; '>/</span>d<span style='color:#800080; '>;</span> <span style='color:#696969; '>//perechea a caror membrii inmultiti dau nr</span>
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>d<span style='color:#808030; '>*</span>d<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span>nr<span style='color:#808030; '>)</span> <span style='color:#696969; '>//in caz ca este patrat perfect adunam doar o data</span>
      suma<span style='color:#808030; '>=</span>suma<span style='color:#808030; '>+</span>d<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>suma<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
      </div>
      <div class="col-4 mobilecol">
         <img class="img-fluid" src="media/sumadivizori.jpg" alt="">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim numarul <br>
         - cu ajutorul variabilei d vom parcurge divizorii de la 2 pana la < sqrt(nr) (strict mai mic in caz ca avem patrat perfect) <br>
         - in variabila suma vom aduna cate o pereche d si n/d <br>
         - in caz ca avem patrat perfect (d*d=n) vom aduna doar o data d, deoarece d si n/d reprezinta acelasi divizor <br>
         </p>
      </div>
   </div>
</div>

<?php
include 'footer.php';
?>