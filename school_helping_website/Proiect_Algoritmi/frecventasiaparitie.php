<?php
include 'header.php';
include 'navbar.php';
?>
   
<br>
<h1 class="text-center">Vectori de aparitie/frecventa</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col=12">
         <h3>Vector de aparitie</h3>
         <br>
      </div>
   </div>
   <div class="row">
      <div class="col-6">
      
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>const</span> <span style='color:#800000; font-weight:bold; '>int</span> val_max<span style='color:#808030; '>=</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//nu e necesar sa fie 10, e mai usor de prezentat...</span>
   <span style='color:#800000; font-weight:bold; '>bool</span> aparitii<span style='color:#808030; '>[</span>val_max<span style='color:#808030; '>+</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//initializam fiecare element al vectorului cu 0</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>val_max<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      aparitii<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> x<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>x<span style='color:#800080; '>;</span>
      aparitii<span style='color:#808030; '>[</span>x<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>val_max<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>aparitii<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>numarul </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> a aparut</span><span style='color:#0f69ff; '>\n</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>else</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>numarul </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> nu a aparut</span><span style='color:#0f69ff; '>\n</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>

<!--Created using ToHtml.com on 2021-04-10 20:18:04 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/aparitii.jpg" alt="">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - vom folosi un vector a carui lungime este data de valoarea maxima pe care o pot avea elementele ce urmeaza sa fie citite +1 (deoarece numerotarea este de la 0, indiferent daca 0 conteaza sau nu) <br>
         - acest vector va fi initializat cu 0, semnificand faptul ca elementele nu au fost gasite inca <br>
         - in momentul in care citim cate un numar, ii vom creste valoare in vector cu 1 (sa zicem ca citim numarul in x, ca sa il marcam ca l-am gasit vom pune in vector, pe pozitia x, vom creste valoarea cu 1) <br>
         
         </p>
      </div>
   </div>
   <br>
   <br>
   <br>
   <div class="row">
      <div class="col=12">
         <h3>Vector de frecventa</h3>
         <br>
      </div>
   </div>
   <div class="row">
      <div class="col-6">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>const</span> <span style='color:#800000; font-weight:bold; '>int</span> val_max<span style='color:#808030; '>=</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//nu e necesar sa fie 10, e mai usor de prezentat...</span>
   <span style='color:#800000; font-weight:bold; '>int</span> frecv<span style='color:#808030; '>[</span>val_max<span style='color:#808030; '>+</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//initializam fiecare element al vectorului cu 0</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>val_max<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      frecv<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> x<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>x<span style='color:#800080; '>;</span>
      frecv<span style='color:#808030; '>[</span>x<span style='color:#808030; '>]</span><span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>val_max<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>frecv<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>numarul </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> a aparut de </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>frecv<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> ori</span><span style='color:#0f69ff; '>\n</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>else</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>numarul </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> nu a aparut</span><span style='color:#0f69ff; '>\n</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-10 20:38:42 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/frecventa.jpg" alt="">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - vom folosi un vector a carui lungime este data de valoarea maxima pe care o pot avea elementele ce urmeaza sa fie citite +1 (deoarece numerotarea este de la 0, indiferent daca 0 conteaza sau nu) <br>
         - acest vector va fi initializat cu 0, semnificand faptul ca elementele nu au fost gasite inca <br>
         - in momentul in care citim cate un numar, il vom marca in vector cu 1 (sa zicem ca citim numarul in x, ca sa il marcam ca l-am gasit vom pune in vector, pe pozitia x, valoarea 1) <br>
         
         </p>
      </div>
   </div>
      
</div>

<?php
include 'footer.php';
?>