<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Suma elementelor unui vector</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col-6">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> v<span style='color:#808030; '>[</span><span style='color:#008c00; '>11</span><span style='color:#808030; '>]</span><span style='color:#808030; '>,</span> suma<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
      suma<span style='color:#808030; '>=</span>suma<span style='color:#808030; '>+</span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>suma<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-09 20:54:46 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/sumaelemente.jpg" alt="">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim numarul de elemente pe care le vom citi in vector <br>
         - citim cate un elemente cu ajutorul unui for de la 1 la n, al i-lea element citit fiind pe pozitia i <br>
         - in timp ce citim elementul, il vom aduna la suma <br>
         - in final afisam suma 
         </p>
         <br>
         <h4 style="color: green;">TEMA: calculati produsul elementelor</h4>
         <br>
         <br>
      </div>
   </div>
   
</div>

<?php
include 'footer.php';
?>