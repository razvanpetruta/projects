<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Parcurgerea elementelor</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col=12">
         <h3>Indexate de la 0</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-6">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr_elemente<span style='color:#808030; '>,</span> v<span style='color:#808030; '>[</span><span style='color:#008c00; '>10</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr_elemente<span style='color:#800080; '>;</span>

   <span style='color:#696969; '>//citirea elementelor unui vector</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span>nr_elemente<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>

   <span style='color:#696969; '>//afisarea elementelor unui vector</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span>nr_elemente<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-09 20:30:57 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/elementevector.jpg" alt="">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim numarul de elemente pe care le vom citi in vector <br>
         - citim cate un elemente cu ajutorul unui for de la 0 la nr_elemente-1, al i-lea element citit fiind pe pozitia i-1 <br>
         - afisarea se face la fel ca citirea doar ca in loc sa citim pe rand cate un element, il vom afisa cu ajutorul pozitiei pe care acesta se afla <br>
         - daca le indexam de la 0 si pot fi maxim 10 elemente, putem sa punem marimea vectorului de 10, intrucat cele 10 elemente vor fi memorate pe pozitiile de la 0 la 9, adica fix 10 pozitii(adica 10 elemente)
         </p>
      </div>
   </div>
   <br>
   <br>
   <br>
   <div class="row">
      <div class="col-6">
         <h3>Indexate de la 1</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-6">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr_elemente<span style='color:#808030; '>,</span> v<span style='color:#808030; '>[</span><span style='color:#008c00; '>11</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr_elemente<span style='color:#800080; '>;</span>

   <span style='color:#696969; '>//citirea elementelor unui vector</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>nr_elemente<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>

   <span style='color:#696969; '>//afisarea elementelor unui vector</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>nr_elemente<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-09 20:39:14 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/indexaredela1.jpg" alt="">
      </div>
   </div>
   <hr>
      <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim numarul de elemente pe care le vom citi in vector <br>
         - citim cate un elemente cu ajutorul unui for de la 1 la nr_elemente, al i-lea element citit fiind pe pozitia i <br>
         - afisarea se face la fel ca citirea doar ca in loc sa citim pe rand cate un element, il vom afisa cu ajutorul pozitiei pe care acesta se afla <br>
         - daca le indexam de la 1 si pot fi maxim 10 elemente, este necesar sa punem marimea vectorului de 11, intrucat cele 10 elemente vor fi memorate pe pozitiile de la 1 la 10, iar elementul de pe pozitia 0 va fi sarit, <font color="red">insa el exista</font>
         </p>
      </div>
   </div>
</div>

<?php
include 'footer.php';
?>