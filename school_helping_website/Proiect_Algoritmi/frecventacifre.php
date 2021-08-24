<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Frecventa cifrelor </h1>

<br><br>
<div class="container">
  <div class="row">
    <div class="col-8">
    <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> nr<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>nr<span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//ne vom lua un vector de frecventa in care vom memora numarul de aparitii</span>
   <span style='color:#696969; '>//ale unei cifre</span>
   <span style='color:#800000; font-weight:bold; '>int</span> ap<span style='color:#808030; '>[</span><span style='color:#008c00; '>10</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//la inceput il vom initializa cu 0</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>9</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      ap<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>nr<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>int</span> ult_cifra<span style='color:#808030; '>=</span>nr<span style='color:#808030; '>%</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
      ap<span style='color:#808030; '>[</span>ult_cifra<span style='color:#808030; '>]</span><span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
      nr<span style='color:#808030; '>=</span>nr<span style='color:#808030; '>/</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>9</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>cifra </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> apare de </span><span style='color:#800000; '>"</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>ap<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '> ori</span><span style='color:#0f69ff; '>\n</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>


    </div>
    <div class="col-4 mobilecol">
    <img class="img-fluid" src="media/frecventacifre.jpg">

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
- ne initializam vectorul de frecventa cu 0 <br>
- vom lua pe rand fiecare cifra din numar cu ajutorul variabilei ult_cifra, iar in vectorul ap[] vom incrementa elementul
de pe pozitia ult_cifra, acesta corespunzand numarului de aparitii ale cifrei stocate in ult_cifra <br>
- la final vom afisa cate un mesaj corespunzator pentru fiecare cifra, acest mesaj continand cifra si numarul ei de aparitii


</p>
</div>
</div>
</div>

<?php
include 'footer.php';
?>






