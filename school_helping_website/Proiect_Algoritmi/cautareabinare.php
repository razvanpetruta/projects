<?php
include 'header.php';
include 'navbar.php';
?>
<br>
<h1 class="text-center">Cautarea binara</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col=12">
         <h3>Elementele sunt sortate crescator</h3>
         <br>
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
   <span style='color:#800000; font-weight:bold; '>int</span> x<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>ce element doriti sa cautati in vector? </span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>x<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>int</span> st<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>,</span> dr<span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>bool</span> gasit<span style='color:#808030; '>=</span><span style='color:#800000; font-weight:bold; '>false</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>st<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>dr <span style='color:#808030; '>&amp;</span><span style='color:#808030; '>&amp;</span> <span style='color:#808030; '>!</span>gasit<span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> mijloc<span style='color:#808030; '>=</span><span style='color:#808030; '>(</span>st<span style='color:#808030; '>+</span>dr<span style='color:#808030; '>)</span><span style='color:#808030; '>/</span><span style='color:#008c00; '>2</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>v<span style='color:#808030; '>[</span>mijloc<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#808030; '>=</span>x<span style='color:#808030; '>)</span>
         gasit<span style='color:#808030; '>=</span><span style='color:#800000; font-weight:bold; '>true</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>else</span> <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>x<span style='color:#808030; '>&lt;</span>v<span style='color:#808030; '>[</span>mijloc<span style='color:#808030; '>]</span><span style='color:#808030; '>)</span>
               dr<span style='color:#808030; '>=</span>mijloc<span style='color:#808030; '>-</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>
            <span style='color:#800000; font-weight:bold; '>else</span>
               st<span style='color:#808030; '>=</span>mijloc<span style='color:#808030; '>+</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>gasit<span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>numarul </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>x<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> a fost gasit in vector</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>else</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>numarul </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>x<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> nu a fost gasit in vector</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-10 19:44:47 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/cautareabinara.jpg" alt="">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim elementele vectorului (acestea trebuie sa fie crescatoare, altfel trebuie sortate) <br>
         - aceasta metoda de cautare se bazeaza pe divide et impera (adica sirul se va tot imparti in doua, luandu-se mijlocul si verificand daca acesta este elementul cautat) <br>
         - cu ajutorul variabilelor st si dr se va realiza aceasta impartire <br>
         - se calculeaza mijlocul si se verifica daca am gasit elementul cerut <br>
         - in caz ca nu l-am gasit, vom verifica daca acesta se afla in stanga mijlocului sau in dreapta lui <br>
         - daca elementul cautat nu se afla in vector atunci st va deveni mai mare decat dr si algoritmul nostru se va opri
         
         </p>
      </div>
   </div>
   
      
</div>

<?php
include 'footer.php';
?>