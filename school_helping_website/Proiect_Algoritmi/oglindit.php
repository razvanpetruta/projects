<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Oglindit</h1>

<br><br>
<div class="container">
  <div class="row">
    <div class="col-7">
    <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr<span style='color:#808030; '>,</span> oglindit<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr<span style='color:#800080; '>;</span><span style='color:#696969; '>//citim numarul caruia ii vom construi oglinditul</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>nr<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> ult_cifra<span style='color:#808030; '>=</span>nr<span style='color:#808030; '>%</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
      oglindit<span style='color:#808030; '>=</span>oglindit<span style='color:#808030; '>*</span><span style='color:#008c00; '>10</span><span style='color:#808030; '>+</span>ult_cifra<span style='color:#800080; '>;</span>
      nr<span style='color:#808030; '>=</span>nr<span style='color:#808030; '>/</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>oglindit<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
    </div>
    <div class="col-5 mobilecol">
    <img class="img-fluid" src="media/ogl1.jpg">

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
            - cat timp numarul este diferit de 0 (mai avem cifre), in variabila ult_cifra vom memora ultima cifra a numarului memorat in variabila nr
            si vom construi oglinditul dupa relatia: oglindit=oglindit*10+ult_cifra<br>
            - afisam oglinditul
         </p>
      </div>
   </div>
<br>



<h1 class="text-center">Palindrom</h1>
<br>
<br>
<br>
  <div class="row">
    <div class="col-7">
    <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr<span style='color:#808030; '>,</span> oglindit<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr<span style='color:#800080; '>;</span><span style='color:#696969; '>//citim numarul caruia ii vom construi oglinditul</span>
   <span style='color:#800000; font-weight:bold; '>int</span> copie<span style='color:#808030; '>=</span>nr<span style='color:#800080; '>;</span> 
   <span style='color:#696969; '>//copiem intr-o variabila numarul citit pentru a putea vedea </span>
   <span style='color:#696969; '>//ulterior daca acesta este palidrom</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>copie<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> ult_cifra<span style='color:#808030; '>=</span>copie<span style='color:#808030; '>%</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
      oglindit<span style='color:#808030; '>=</span>oglindit<span style='color:#808030; '>*</span><span style='color:#008c00; '>10</span><span style='color:#808030; '>+</span>ult_cifra<span style='color:#800080; '>;</span>
      copie<span style='color:#808030; '>=</span>copie<span style='color:#808030; '>/</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>oglindit<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>'\n'</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>oglindit<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span>nr<span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>numarul </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>nr<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> este palindrom</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>else</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>numarul </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>nr<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> nu este palindrom</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
    </div>
    <div class="col-5 mobilecol">
    <img class="img-fluid" src="media/oglindit1.jpg">
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
         - ii vom memora valoarea intr-o variabila ajutatoare numita copie pentru a putea vedea ulterior daca oglinditul este chiar numarul citit <br>
         - cat timp numarul este diferit de 0 (mai avem cifre), in variabila ult_cifra vom memora ultima cifra a numarului memorat in variabila nr
         si vom construi oglinditul dupa relatia: oglindit=oglindit*10+ult_cifra<br>
         - afisam oglinditul si vom afisa un mesaj corespunzator: daca numarul citit este palindrom sau nu
         </p>
      </div>
   </div>
</div>


<?php
include 'footer.php';
?>