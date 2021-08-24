<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Separarea cuvintelor</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col-6">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>cstring</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>char</span> sir<span style='color:#808030; '>[</span><span style='color:#008c00; '>10</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span>sir<span style='color:#808030; '>,</span> <span style='color:#008c00; '>10</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//vom parcurge sirul</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>&lt;</span><span style='color:#603000; '>strlen</span><span style='color:#808030; '>(</span>sir<span style='color:#808030; '>)</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>char</span> cuvant<span style='color:#808030; '>[</span><span style='color:#008c00; '>10</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
      cuvant<span style='color:#808030; '>[</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>'\0'</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//golim sirul</span>
      <span style='color:#800000; font-weight:bold; '>int</span> j<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//vom construi sirul cuvant[]</span>
      <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>&lt;</span><span style='color:#603000; '>strlen</span><span style='color:#808030; '>(</span>sir<span style='color:#808030; '>)</span> <span style='color:#808030; '>&amp;</span><span style='color:#808030; '>&amp;</span> sir<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>' '</span><span style='color:#808030; '>)</span>
      <span style='color:#800080; '>{</span>
         cuvant<span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>sir<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
         i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
         j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
      <span style='color:#800080; '>}</span>
      cuvant<span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>'\0'</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//eliminam caracterele reziduale</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>cuvant<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#603000; '>endl</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>sir<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>' '</span><span style='color:#808030; '>)</span> <span style='color:#696969; '>//sa sarim peste spatii</span>
         i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-22 21:26:05 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/separarecuvinte.jpg" alt="">
      </div>
   </div>
   <hr>
      <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - vom parcurge sirul initial cu ajutorul indicelui i <br>
         - intr-un vector auxiliar, cuvant[], ne vom memora cate un cuvant, delimitat de spatii, sau care se afla la final <br>
         - in momentul in care gasim primul caracter diferit de spatiu vom incepe sa bagam cate un caracter in vectorul nostru auxiliar si ne vom opri in momentul in care dam de un spatiu sau ajungem la finalul sirului <br>
         - dupa ce am izolat un cuvant, vom sari peste spatii <br>
         - procesul se repeta pana termina de izolat toate cuvintele
         </p>
      </div>
   </div>
</div>

<?php
include 'footer.php';
?>