<?php
   include 'header.php';
   include 'navbar.php';
?>

<br>
<h1 class="text-center">Sortarea elementelor unui vector</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col=12">
         <h3>Metoda bulelor (bubble sort)</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-6">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> v<span style='color:#808030; '>[</span><span style='color:#008c00; '>11</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//il vom sorta crescator</span>
   <span style='color:#800000; font-weight:bold; '>bool</span> sortat<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>do</span>
   <span style='color:#800080; '>{</span>
      sortat<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//presupunem ca este sortat</span>
      <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
         <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>></span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>+</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>]</span><span style='color:#808030; '>)</span> <span style='color:#696969; '>//le vom interschimba</span>
         <span style='color:#800080; '>{</span>
            <span style='color:#800000; font-weight:bold; '>int</span> aux<span style='color:#808030; '>=</span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
            v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>+</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
            v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>+</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>aux<span style='color:#800080; '>;</span>
            sortat<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//am gasit un element care e mai mic decat urmatorul</span>
         <span style='color:#800080; '>}</span>
   <span style='color:#800080; '>}</span> <span style='color:#800000; font-weight:bold; '>while</span> <span style='color:#808030; '>(</span><span style='color:#808030; '>!</span>sortat<span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-11 20:52:14 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/bubblesort.gif" alt="">
         <a class="sursa" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Ftowardsdatascience.com%2Fessential-programming-sorting-algorithms-76099c6c4fb5&psig=AOvVaw1EYpWNKCCITQVk_y5C-Cv7&ust=1618263977734000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJC4zZ-V9-8CFQAAAAAdAAAAABAJ">sursa</a>
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim elementele vectorului <br>
         - ne vom lua o variabila in care vom stoca 1 daca vectorul este sortat sau 0 altfel <br>
         - inainte de a le parcurge vom presupune ca acesta este sortat <br>
         - vom tot compara doua elemente consecutive, iar in cazul in care gasim un numar care e mai mare decat succesorul acestuia le vom interschimba si in variabila sortat vom pune 0, deoarece nu este sortat<br>
         - tot comparand doua cate doua si interschimbandu-le vectorul nostru se va sorta, practic de fiecare data noi ducem cel mai mare dintre numere pe ultima pozitie, penultima pozitie ... si tot asa pana ajungem la un element care nu mai poate fi dus
         </p>
      </div>
   </div>

   <br>
   <br>
   <br>

   <div class="row">
      <div class="col=12">
         <h3>Metoda selectiei minimului</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-6">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> v<span style='color:#808030; '>[</span><span style='color:#008c00; '>11</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//il vom sorta crescator</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> p<span style='color:#808030; '>=</span>i<span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> j<span style='color:#808030; '>=</span>i<span style='color:#808030; '>+</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
        <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>v<span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span>v<span style='color:#808030; '>[</span>p<span style='color:#808030; '>]</span><span style='color:#808030; '>)</span>
            p<span style='color:#808030; '>=</span>j<span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>int</span> auv<span style='color:#808030; '>=</span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
      v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>v<span style='color:#808030; '>[</span>p<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
      v<span style='color:#808030; '>[</span>p<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>auv<span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-11 21:52:23 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/selectionsort.gif">
         <a class="sursa" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fdev.to%2Fchristinamcmahon%2Fcommon-sorting-algorithms-in-javascript-58a7&psig=AOvVaw1fgV_gsBLjnwtnScCYBRTt&ust=1618263592453000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPCzw8OX9-8CFQAAAAAdAAAAABAD">sursa</a>
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim elementele vectorului <br>
         - pentru fiecare pozitie de la 1 la n-1 vom cauta cel mai mic element de la pozitia curenta in colo si vom memora pozitia pe care se afla <br>
         - dupa ce am cautau vom aduce elementul respectiv pe pozitia i, interschimband elementul cu minimul
         </p>
      </div>
   </div>

   <br>
   <br>
   <br>

   <div class="row">
      <div class="col=12">
         <h3>Cu ajutorul unei functii predefinite</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>algorithm</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> v<span style='color:#808030; '>[</span><span style='color:#008c00; '>11</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//il vom sorta crescator</span>
   <span style='color:#603000; '>sort</span><span style='color:#808030; '>(</span>v<span style='color:#808030; '>+</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>,</span> v<span style='color:#808030; '>+</span>n<span style='color:#808030; '>+</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//se sorteaza elementele de pe pozitiile din intervalul [primul_parametru, ultimul_parametru)</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>v<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-12 06:28:20 UTC -->
      </div>
     
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim elementele vectorului <br>
         - aceasta functie sorteaza crescator elementele in functie de pozitiile oferite de cei doi parametrii
         </p>
      </div>
   </div>
   

</div>


<?php
include 'footer.php';
?>