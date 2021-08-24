<?php
include 'header.php';
include 'navbar.php';
?>

<br>
<h1 class="text-center">Functii siruri de caractere</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col=12">
         <h4>strlen(sir)</h4>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>cstring</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>char</span> sir<span style='color:#808030; '>[</span><span style='color:#008c00; '>10</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span>sir<span style='color:#808030; '>,</span> <span style='color:#008c00; '>10</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#603000; '>strlen</span><span style='color:#808030; '>(</span>sir<span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>// se va afisa lungimea sirului, adica numarul de caractere citite</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-22 21:59:57 UTC -->
      </div>
   </div>
   <br>
   <br>
   <hr>
   <div class="row">
      <div class="col-6">
         <h4>strcpy(sir_destinatie, sir_sursa)</h4>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>cstring</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>char</span> sir_sursa<span style='color:#808030; '>[</span><span style='color:#008c00; '>10</span><span style='color:#808030; '>]</span><span style='color:#808030; '>,</span> sir_destinatie<span style='color:#808030; '>[</span><span style='color:#008c00; '>10</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span>sir_sursa<span style='color:#808030; '>,</span> <span style='color:#008c00; '>10</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   
   <span style='color:#603000; '>strcpy</span><span style='color:#808030; '>(</span>sir_destinatie<span style='color:#808030; '>,</span> sir_sursa<span style='color:#808030; '>)</span><span style='color:#800080; '>;</span></span>
   <span style='color:#696969; '>// copiaza sir_sursa in sir_destinatie</span>

   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>sir_destinatie<span style='color:#800080; '>;</span>
   <span style='color:#696969; '>// se va afisa acelasi sir cu cel memorat in sir_sursa</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-22 22:03:32 UTC -->
      </div>
   </div>
   <br>
   <br>
   <hr>
   
   <div class="row">
      <div class="col-6">
         <h4>strncpy(sir_destinatie, sir_sursa, nr_caractere)</h4>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>cstring</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>char</span> sir_destinatie<span style='color:#808030; '>[</span><span style='color:#008c00; '>15</span><span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>ana are mere</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>char</span> sir_sursa<span style='color:#808030; '>[</span><span style='color:#008c00; '>15</span><span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>ionel</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
   
   <span style='color:#603000; '>strncpy</span><span style='color:#808030; '>(</span>sir_destinatie<span style='color:#808030; '>,</span> sir_sursa<span style='color:#808030; '>,</span> <span style='color:#008c00; '>3</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>

   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>sir_destinatie<span style='color:#800080; '>;</span>
   <span style='color:#696969; '>// se vor copia primele 3 caractere din sir_sursa</span>
   <span style='color:#696969; '>// pe primele 3 locuri din sir_destinatie</span>
   <span style='color:#696969; '>// se afiseaza: ion are mere</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-23 15:50:25 UTC -->
      </div>
   </div>
   <br>
   <br>
   <hr>
   <div class="row">
      <div class="col-6">
         <h4>strcat(sir_destinatie, sir_sursa)</h4>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>cstring</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#696969; '>// aceasta functie are rolul de a concatena(adauga)</span>
   <span style='color:#696969; '>// la sir_destinatie pe sir_sursa</span>

   <span style='color:#800000; font-weight:bold; '>char</span> sir_destinatie<span style='color:#808030; '>[</span><span style='color:#008c00; '>15</span><span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>ana </span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>char</span> sir_sursa<span style='color:#808030; '>[</span><span style='color:#008c00; '>15</span><span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>are mere</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
   
   <span style='color:#603000; '>strcat</span><span style='color:#808030; '>(</span>sir_destinatie<span style='color:#808030; '>,</span> sir_sursa<span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>

   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>sir_destinatie<span style='color:#800080; '>;</span>

   <span style='color:#696969; '>// se va afisa: ana are mere</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-23 15:56:06 UTC -->
      </div>
   </div>
   <br>
   <br>
   <hr>
   <div class="row">
      <div class="col-6">
         <h4>strchr(sir, caracter)</h4>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>cstring</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>char</span> sir<span style='color:#808030; '>[</span><span style='color:#008c00; '>15</span><span style='color:#808030; '>]</span><span style='color:#808030; '>,</span> caracter<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span>sir<span style='color:#808030; '>,</span> <span style='color:#008c00; '>15</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#696969; '>// deoarece cu functia cin.get() se citeste pana la '\n'</span>
   <span style='color:#696969; '>// este nevoie sa mai apelam inca o data functia cin.get()</span>
   <span style='color:#696969; '>// pentru a scapa din buffer de '\n', si a citi corect mai departe</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>caracter<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#603000; '>strchr</span><span style='color:#808030; '>(</span>sir<span style='color:#808030; '>,</span> caracter<span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#696969; '>/*</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;daca sirul nostru este "informatica", iar caracterul este 'm'</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;functia va returna sirul care incepe cu caracterul 'm', adica</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;"matica"</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;in cazul in care in sir nu se gaseste caracterul,</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;functia va returna NULL</span>
<span style='color:#696969; '>*/</span>
</pre>
<!--Created using ToHtml.com on 2021-04-23 16:08:15 UTC -->
      </div>
   </div>
   <br>
   <br>
   <hr>
   <div class="row">
      <div class="col-6">
         <h4>strstr(sir1, sir2)</h4>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>cstring</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#696969; '>// are rolul de a cauta sir2 in sir 1</span>
   <span style='color:#696969; '>// si de a returna subsirul din sir1</span>
   <span style='color:#696969; '>// care incepe cu sir2</span>
   <span style='color:#800000; font-weight:bold; '>char</span> sir1<span style='color:#808030; '>[</span><span style='color:#008c00; '>15</span><span style='color:#808030; '>]</span><span style='color:#808030; '>,</span> sir2<span style='color:#808030; '>[</span><span style='color:#008c00; '>15</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span>sir1<span style='color:#808030; '>,</span> <span style='color:#008c00; '>15</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span>sir2<span style='color:#808030; '>,</span> <span style='color:#008c00; '>15</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#603000; '>strstr</span><span style='color:#808030; '>(</span>sir1<span style='color:#808030; '>,</span> sir2<span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#696969; '>/*</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;daca sir1 este "ana are mere", iar sir2 este "are"</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;se va returna si afisa "are mere"</span>
<span style='color:#696969; '>*/</span>
</pre>
<!--Created using ToHtml.com on 2021-04-23 16:12:40 UTC -->
      </div>
   </div>
   <br>
   <br>
   <hr>
   <div class="row">
      <div class="col-6">
         <h4>strcmp(sir1, sir2)</h4>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>cstring</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#696969; '>// are rolul de a returna o valoare strict negativa daca sir1 este</span>
   <span style='color:#696969; '>// inaintea lui sir2, o valoare strict pozitiva daca sir1 este dupa sir2</span>
   <span style='color:#696969; '>// sau 0 daca sunt egale</span>
   <span style='color:#800000; font-weight:bold; '>char</span> sir1<span style='color:#808030; '>[</span><span style='color:#008c00; '>15</span><span style='color:#808030; '>]</span><span style='color:#808030; '>,</span> sir2<span style='color:#808030; '>[</span><span style='color:#008c00; '>15</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span>sir1<span style='color:#808030; '>,</span> <span style='color:#008c00; '>15</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>.</span>get<span style='color:#808030; '>(</span>sir2<span style='color:#808030; '>,</span> <span style='color:#008c00; '>15</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span><span style='color:#603000; '>strcmp</span><span style='color:#808030; '>(</span>sir1<span style='color:#808030; '>,</span> sir2<span style='color:#808030; '>)</span><span style='color:#808030; '>&lt;</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>sir1 este lexicografic inaintea lui sir2</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>else</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span><span style='color:#603000; '>strcmp</span><span style='color:#808030; '>(</span>sir1<span style='color:#808030; '>,</span> sir2<span style='color:#808030; '>)</span><span style='color:#808030; '>></span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>sir1 este lexicografic dupa sir2</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>else</span> <span style='color:#696969; '>// in caz ca sun egale functia returneaza 0</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>cele doua siruri sunt egale</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
<span style='color:#696969; '>/*</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;daca sir1 este "abcd", iar sir2 este "acbb" atunci</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;apelul strcmp(sir1, sir2) va returna o valoare negativa;</span>
<span style='color:#696969; '></span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;compararea are loc caracter cu caracter, iar in cazul in care</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;sir1 este "ab", iar sir2 este "aba", sir1 va fi inaintea lui sir2</span>
<span style='color:#696969; '>*/</span>
</pre>
<!--Created using ToHtml.com on 2021-04-23 16:28:58 UTC -->
      </div>
   </div>

</div>

<?php
include 'footer.php';
?>