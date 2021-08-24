<?php
   include 'header.php';
   include 'navbar.php';
?>

<br>
<h1 class="text-center">Numarul de aparitii ale unei cifre intr-un numar </h1>

<br><br>
<div class="container">
  <div class="row">
    <div class="col-7">
    <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr<span style='color:#808030; '>,</span> cifra<span style='color:#808030; '>,</span> nr_aparitii<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr<span style='color:#800080; '>;</span> <span style='color:#696969; '>//numarul in care vom verifica de cate ori apare cifra</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>cifra<span style='color:#800080; '>;</span> <span style='color:#696969; '>//cifra pe care o vom verifica</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>nr<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> ult_cifra<span style='color:#808030; '>=</span>nr<span style='color:#808030; '>%</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>ult_cifra<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span>cifra<span style='color:#808030; '>)</span>
         nr_aparitii<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
      nr<span style='color:#808030; '>=</span>nr<span style='color:#808030; '>/</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>cifra </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>cifra<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> apare de </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>nr_aparitii<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> ori</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-03 19:14:13 UTC -->

    </div>
    <div class="col-5 mobilecol">
    <img class="img-fluid" src="media/nraparitii.jpg">
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
      - citim cifra pe care vrem sa o verificam <br>
      - cat timp numarul este diferit de 0 (mai avem cifre), in variabila ult_cifra vom memora ultima cifra a numarului si o vom verifica daca este egala cu cifra dorita, iar daca este egala vom incrementa variabila nr_aparitii <br>
      - la final vom scapa de ultima cifra din numar <br>
      - vom afisa un mesaj in care vom preciza de cate ori apare cifra in numar


      </p>
   </div>
</div>
</div>
<?php
include 'footer.php';
?>






