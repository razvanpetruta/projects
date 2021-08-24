<?php
   include 'header.php';
   include 'navbar.php';
?>

<br>
<h1 class="text-center">Interclasarea a doi vectori(sortati crescator)</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col-6">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#696969; '>//elementele trebuie sa fie ordonate crescator in cei doi vectori</span>
   <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> a<span style='color:#808030; '>[</span><span style='color:#008c00; '>11</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>a<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>int</span> m<span style='color:#808030; '>,</span> b<span style='color:#808030; '>[</span><span style='color:#008c00; '>11</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>m<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>m<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>b<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//ne vom lua un al treilea vector in care le vom interclasa</span>
   <span style='color:#800000; font-weight:bold; '>int</span> c<span style='color:#808030; '>[</span><span style='color:#008c00; '>21</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>int</span> k<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//cu ajutorul acestei variabile vom pune elementele in vector</span>
   <span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>,</span> j<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>//vom parcurge simultan cei doi vectori si vom compara elementele</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n <span style='color:#808030; '>&amp;</span><span style='color:#808030; '>&amp;</span> j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>m<span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>a<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span>b<span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>)</span> <span style='color:#696969; '>//punem cel mai mic element dintre cele doua</span>
      <span style='color:#800080; '>{</span>
         k<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
         c<span style='color:#808030; '>[</span>k<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>a<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
         i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
      <span style='color:#800080; '>}</span>
      <span style='color:#800000; font-weight:bold; '>else</span>
      <span style='color:#800080; '>{</span>
         k<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
         c<span style='color:#808030; '>[</span>k<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>b<span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
         j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
      <span style='color:#800080; '>}</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#696969; '>// exista posibilitate sa terminam elementele dintr-un vector, iar din altul nu</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#808030; '>)</span> <span style='color:#696969; '>//cat timp mai avem elemente in vectorul a[]</span>
   <span style='color:#800080; '>{</span>
      k<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
      c<span style='color:#808030; '>[</span>k<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>a<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
      i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>m<span style='color:#808030; '>)</span> <span style='color:#696969; '>//cat timp mai avem elemente in vectorul b[]</span>
   <span style='color:#800080; '>{</span>
      k<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
      c<span style='color:#808030; '>[</span>k<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>b<span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
      j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#696969; '>// afisam vectorul obtinut</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>k<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>c<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-12 06:46:53 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/interclasare.gif" alt="">
         <a class="sursa" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.globalsoftwaresupport.com%2Fparallel-merge-sort%2F&psig=AOvVaw2U2HE_mlpR-1qyVNEKAW_2&ust=1618296499591000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCICuy7KO-O8CFQAAAAAdAAAAABAD">sursa</a>
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - citim cei doi vectori, pe rand <br>
         - ne vom lua un al treilea vector in care vom adauga cate un element, comparand in paralel elementele celor doi vectori si adaugam cel mai mic dintre doua elemente la un moment dat <br>
         - cu ajutorul variabile i vom parcurge primul vector, iar cu j vom parcurge cel de-al doilea <br>
         - in momentul in care vom adauga un element dintr-un vector, vom creste si indicele corespunzator <br>
         - la final, vom verifica daca ne-au mai ramas elemente in unul din vectori, iar daca raspunsul este afirmativ le vom adauga in cel de-al treilea vector
         </p>
      </div>
   </div>
   

</div>


<?php
include 'footer.php';
?>