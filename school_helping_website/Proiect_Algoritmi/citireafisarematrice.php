<?php
   include 'header.php';
   include 'navbar.php';
?>

<br>
<h1 class="text-center">Citirea/afisarea elementelor unei matrice</h1>
<br>
<br>


<div class="container">
<div class="row">
      <div class="col=12">
         <h3>Matrice indexata de la 0</h3>
      </div>
   </div>
   <div class="row"> 
      <div class="col-7">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr_linii<span style='color:#808030; '>,</span> nr_coloane<span style='color:#800080; '>;</span>

   <span style='color:#696969; '>// sa zicem ca putem avea maxim 100 de linii si maxim 100 de 50 de coloane</span>
   <span style='color:#696969; '>// numerotarea liniilor si a coloanelor va fi de la 0</span>

   <span style='color:#800000; font-weight:bold; '>int</span> mat<span style='color:#808030; '>[</span><span style='color:#008c00; '>100</span><span style='color:#808030; '>]</span><span style='color:#808030; '>[</span><span style='color:#008c00; '>50</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//se vor aloca 100*50=5000 spatii in memorie</span>
   <span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>,</span> j<span style='color:#800080; '>;</span>

   <span style='color:#696969; '>// citirea se face linie cu linie, de la stanga la dreapta, element cu element</span>

   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr_linii<span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr_coloane<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span>nr_linii<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span> <span style='color:#696969; '>// citim cate o linie</span>
      <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span>nr_coloane<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span> <span style='color:#696969; '>// pentru fiecare linie vom citi elementele acesteia</span>
         <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>

   <span style='color:#696969; '>// ca sa le afisam, o vom face linie cu linie, fiecare linie fiind pe un rand al ecranului</span>

   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span>nr_linii<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#696969; '>//afisam cate o linie</span>
      <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span>nr_coloane<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>// le afisam separate prin spatii</span>
         
      <span style='color:#696969; '>// dupa ce am afisat o linie trecem la un rand nou</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>'\n'</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//sau cout&lt;&lt;endl;</span>
   <span style='color:#800080; '>}</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-14 19:43:51 UTC -->
      </div>
      <div class="col-5 mobilecol">
         <img class="img-fluid" src="media/citirematrice.jpg" alt="">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim cate linii si cate coloane va avea matricea noastra <br>
         - deoarece numerotarea liniilor si a coloanelor se realizeaza de la 0, vom citi liniile cu indice 0, 1, 2, ..., nr_linii-1
         si coloanele cu indice 0, 1, 2, ..., nr_coloane-1 <br>
         - afisarea are loc asemanator cu citirea <br>
         </p>
      </div>
   </div>

   <br>
   <br>
   <br>

   <div class="row">
      <div class="col-12">
         <h3>Matrice indexata de la 1</h3>
      </div>
      <div class="row">
         <div class="col-12">
         <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr_linii<span style='color:#808030; '>,</span> nr_coloane<span style='color:#800080; '>;</span>

   <span style='color:#696969; '>// sa zicem ca putem avea maxim 100 de linii si maxim 100 de 50 de coloane</span>
   <span style='color:#696969; '>// numerotarea liniilor si a coloanelor va fi de la 1 pentru a pune linia i</span>
   <span style='color:#696969; '>// pe pozitia i, si nu pe pozitia i-1, cum se face in cazul numerotarii de la 0</span>

   <span style='color:#800000; font-weight:bold; '>int</span> mat<span style='color:#808030; '>[</span><span style='color:#008c00; '>101</span><span style='color:#808030; '>]</span><span style='color:#808030; '>[</span><span style='color:#008c00; '>51</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//am adugat 1 deoarece la fel ca la vectori linia 0/coloana 0 exista dar este ignorata</span>
   <span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>,</span> j<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr_linii<span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr_coloane<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>nr_linii<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>nr_coloane<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>nr_linii<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>nr_coloane<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>'\n'</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-14 20:06:27 UTC -->
         </div>
      </div>
      <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim cate linii si cate coloane va avea matricea noastra <br>
         - indexand de la 0, va trebui sa crestem numarul de linii si de coloane pe care le poate avea matricea, deoarece linia 0 si coloana 0 exista, dar sunt ignorate <br>
         - deoarece numerotarea liniilor si a coloanelor se realizeaza de la 1, vom citi liniile cu indice 1, 2, ..., nr_linii
         si coloanele cu indice 1, 2, ..., nr_coloane <br>
         - afisarea are loc asemanator cu citirea <br>
         </p>
      </div>
   </div>
   </div>

</div>

<?php
include 'footer.php';
?>