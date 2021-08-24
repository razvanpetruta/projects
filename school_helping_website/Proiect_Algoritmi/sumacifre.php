<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Suma cifrelor unui numar </h1>

<br><br>
<div class="container">
  <div class="row">
    <div class="col-8">
    <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> numar<span style='color:#808030; '>,</span> suma_cifre<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>numar<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>numar<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#696969; '>//ne vom stoca ultima cifra intr-o variabila</span>
      <span style='color:#800000; font-weight:bold; '>int</span> ult_cifra<span style='color:#808030; '>=</span>numar<span style='color:#808030; '>%</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
      <span style='color:#696969; '>//in suma_cifre vom aduna fiecare cifra</span>
      suma_cifre<span style='color:#808030; '>=</span>suma_cifre<span style='color:#808030; '>+</span>ult_cifra<span style='color:#800080; '>;</span>
      <span style='color:#696969; '>//vom elimina cifra pe care am adaugat-o</span>
      numar<span style='color:#808030; '>=</span>numar<span style='color:#808030; '>/</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>suma_cifre<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span> 
</pre>


    </div>
    <div class="col-4 mobilecol">
    <img class="img-fluid" src="media/sumacifre1.jpg">

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
- cat timp numarul este diferit de 0 (mai avem cifre), in variabila ult_cifra vom memora ultima cifra a numarului si o vom aduna in variabila suma_cifre, iar la final scapam de ultima cifra din numar <br>
- afisam suma
</p>
</div>
</div>
</div>

<?php
include 'footer.php';
?>