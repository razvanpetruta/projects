<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Cel mai mic multiplu comun</h1>

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
   <span style='color:#800000; font-weight:bold; '>int</span> a<span style='color:#808030; '>,</span> b<span style='color:#808030; '>,</span> cmmmc<span style='color:#808030; '>,</span> cmmdc<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>a<span style='color:#800080; '>;</span> <span style='color:#696969; '>//primul numar</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>b<span style='color:#800080; '>;</span> <span style='color:#696969; '>//al doilea numar</span>
   <span style='color:#800000; font-weight:bold; '>int</span> a_salvat<span style='color:#808030; '>=</span>a<span style='color:#808030; '>,</span> b_salvat<span style='color:#808030; '>=</span>b<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>b<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> r<span style='color:#808030; '>=</span>a<span style='color:#808030; '>%</span>b<span style='color:#800080; '>;</span>
      a<span style='color:#808030; '>=</span>b<span style='color:#800080; '>;</span>
      b<span style='color:#808030; '>=</span>r<span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#696969; '>//cel mai mare divizor comun va fi memorat de variabila a</span>
   cmmdc<span style='color:#808030; '>=</span>a<span style='color:#800080; '>;</span>
   cmmmc<span style='color:#808030; '>=</span><span style='color:#808030; '>(</span>a_salvat<span style='color:#808030; '>*</span>b_salvat<span style='color:#808030; '>)</span><span style='color:#808030; '>/</span>cmmdc<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>cmmmc<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-09 20:06:58 UTC -->
      </div>
      <div class="col-4 mobilecol">
         <img class="img-fluid" src="media/cmmmc.jpg" alt="">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim cele 2 numere: a si b <br>
         - avem proprietate cmmdc*cmmmc=a*b, asa ca aflam cmmdc-ul si dupa cmmmc-ul <br>
         - inainte de toate este necesar sa ne salvam cele doua variabile, deoarece acestea isi vor schimba valoarea in momentul calcularii cmmdc-ului <br>
         - in final aflam cmmmc-ul cu ajutorul formulei
         </p>
      </div>
   </div>
      
</div>

<?php
include 'footer.php';
?>