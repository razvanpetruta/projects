<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Citirea sirurilor de caractere</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col=12">
         <h3>Sirul nu contine spatii</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-6">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>cstring</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
    <span style='color:#800000; font-weight:bold; '>char</span> sir<span style='color:#808030; '>[</span><span style='color:#008c00; '>8</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
    <span style='color:#696969; '>// daca nu avem spatii il putem citi si afisa simplu</span>
    <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>sir<span style='color:#800080; '>;</span>
    <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>sir<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-22 20:39:56 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/citirefaraspatii.jpg" alt="">
      </div>
   </div>
   <br>
   <br>
   <hr>
   <div class="row">
      <div class="col-6">
         <h3>Sirul contine spatii</h3>
      </div>
   </div>
   <div class="row">
      <div class="col-6">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>cstring</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
    <span style='color:#800000; font-weight:bold; '>char</span> sir<span style='color:#808030; '>[</span><span style='color:#008c00; '>8</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
    <span style='color:#696969; '>// daca avem spatii, este nevoie de o functii speciale</span>
    
   <span style='color:#696969; '>// varianta 1</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span>sir<span style='color:#808030; '>,</span> <span style='color:#008c00; '>8</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>

   <span style='color:#696969; '>// varianta 2</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>getline<span style='color:#808030; '>(</span>sir<span style='color:#808030; '>,</span> <span style='color:#008c00; '>8</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>

   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>sir<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-22 20:52:21 UTC -->
      </div>
      <div class="col-6 mobilecol">
         <img class="img-fluid" src="media/citirecuspatii.jpg" alt="">
      </div>
   </div>
   <hr>
      <div class="row">
      <div class="col-12">
         <h5>Explicatie:</h5>
         <br>
         <p> 
         - daca sirul nostru nu contine spatii, putem sa facem citirea cu cin <br>
         - in cazul in care citirea are loc cu cin, iar noi adaugam spatiu, se va memora sirul pana la spatiu <br>
         - daca sirul nostru contine spatii, citirea o putem face cu una dintre functiile cin.get(sir, nr_de_caractere) sau cin.getline(sir, nr_de_caractere), care vom citi caractere pana la aparitia lui '\n' (enter) sau maxim nr_de_caractere in caz ca nu apare '\n'
         </p>
      </div>
   </div>
</div>

<?php
include 'footer.php';
?>