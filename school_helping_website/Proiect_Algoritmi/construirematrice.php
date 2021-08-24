<?php
   include 'header.php';
   include 'navbar.php';
?>

<br>
<h1 class="text-center">Consturirea unor matrice</h1>

<br>
<br>
<div class="container">
   <div class="row">
      <div class="col=12">
         <h5>Problema 1</h5>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <p>
         Scrieti un program care citeste de la tastatura doua numere naturale nenule n si m si care construieste in memorie si apoi afiseaza o matrice A cu n linii (numerotate de la 1 la n) si m coloane (numerotate de la 1 la m) cu proprietatea ca fiecare element Aij memoreaza cea mai mica valoare dintre valorile indicilor i şi j ( 1≤i≤n, 1≤j≤m ).
         </p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> mat<span style='color:#808030; '>[</span><span style='color:#008c00; '>21</span><span style='color:#808030; '>]</span><span style='color:#808030; '>[</span><span style='color:#008c00; '>21</span><span style='color:#808030; '>]</span><span style='color:#808030; '>,</span> n<span style='color:#808030; '>,</span> m<span style='color:#800080; '>;</span>
   <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#808030; '>></span><span style='color:#808030; '>></span>m<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
      <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> j<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>m<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
         <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>&lt;</span>j<span style='color:#808030; '>)</span>
            mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>i<span style='color:#800080; '>;</span>
         <span style='color:#800000; font-weight:bold; '>else</span> <span style='color:#696969; '>//j este mai mic sau egal</span>
            mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>j<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> j<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>m<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
         <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#603000; '>endl</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-22 15:04:34 UTC -->
      </div>
   </div>

   <br>
   <br>
   <hr>

   <div class="row">
      <div class="col=12">
         <h5>Problema 2</h5>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <p>
         Scrieti un program care citeste de la tastatura un numar natural n si construieste in memorie o matrice cu n linii si n coloane ale carei elemente vor primi valori dupa cum urmeaza: <br>
         - elementele aflate pe diagonala principala a matricei vor primi valoarea 0; <br>
         - elementele de pe prima coloana, cu exceptia celui aflat pe diagonala principala vor primi valoarea n; <br>
         - elementele de pe a doua coloana, cu exceptia celui aflat pe diagonala principala vor primi valoarea n-1; <br>
         … <br>
         - elementele de pe ultima coloana, cu exceptia celui aflat pe diagonala principala vor primi valoarea 1; <br>
         </p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
    <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> i<span style='color:#808030; '>,</span> j<span style='color:#808030; '>,</span> mat<span style='color:#808030; '>[</span><span style='color:#008c00; '>24</span><span style='color:#808030; '>]</span><span style='color:#808030; '>[</span><span style='color:#008c00; '>24</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
    <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#800080; '>;</span>
    <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
        <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span>n<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
        <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span>j<span style='color:#808030; '>)</span> 
            mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//daca este pe diagonala principala</span>
        <span style='color:#800000; font-weight:bold; '>else</span> <span style='color:#696969; '>// respectam regula</span>
            mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>n<span style='color:#808030; '>-</span>j<span style='color:#800080; '>;</span>
    <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
    <span style='color:#800080; '>{</span>
        <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span>n<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
            <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
        <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#603000; '>endl</span><span style='color:#800080; '>;</span>
    <span style='color:#800080; '>}</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-22 15:12:59 UTC -->
      </div>
   </div>

   <br>
   <br>
   <hr>
     
   <div class="row">
      <div class="col=12">
         <h5>Problema 3</h5>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <p>
         Scrieti un program care citeste de la tastatura doua numere naturale nenule n şi m şi construieste in memorie o matrice cu n linii şi m coloane astfel incat, parcurgand tabloul linie cu linie de sus in jos si fiecare linie de la stanga la dreapta, sa se obtina sirul primelor n*m patrate perfecte impare , ordonat strict crescator.
         </p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
    <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> m<span style='color:#808030; '>,</span> mat<span style='color:#808030; '>[</span><span style='color:#008c00; '>24</span><span style='color:#808030; '>]</span><span style='color:#808030; '>[</span><span style='color:#008c00; '>24</span><span style='color:#808030; '>]</span><span style='color:#808030; '>,</span> patrat<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>
    <span style='color:#696969; '>// in variabila patrat ne vom pastra radacinile patrate impare</span>
    <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#808030; '>></span><span style='color:#808030; '>></span>m<span style='color:#800080; '>;</span>
    <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
        <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> j<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>m<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
        <span style='color:#800080; '>{</span>
           mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>patrat<span style='color:#808030; '>*</span>patrat<span style='color:#800080; '>;</span> <span style='color:#696969; '>//construim patratul</span>
           patrat<span style='color:#808030; '>=</span>patrat<span style='color:#808030; '>+</span><span style='color:#008c00; '>2</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//crestem cu 2 pentru a le lua doar pe cele impare</span>
        <span style='color:#800080; '>}</span>
    <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>n<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
    <span style='color:#800080; '>{</span>
        <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> j<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>m<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
            <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>mat<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
        <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#603000; '>endl</span><span style='color:#800080; '>;</span>
    <span style='color:#800080; '>}</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-22 15:22:10 UTC -->
      </div>
   </div>

   <br>
   <br>
   <hr>

   <div class="row">
      <div class="col=12">
         <h5>Problema 4</h5>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <p>
         Scrieti un program care citeste de la tastatura un numar natural nenul n cu cel mult 9 cifre si construieste un tablou bidimensional patratic cu dimensiunea egala cu numarul de cifre ale lui n, completata cu cifrele lui n. Elementele de pe prima coloana vor fi egale cu cifra unitatilor lui n, elementele de pe a doua coloana vor fi egale cu cifra zecilor, etc.
         </p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
    <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> a<span style='color:#808030; '>[</span><span style='color:#008c00; '>9</span><span style='color:#808030; '>]</span><span style='color:#808030; '>[</span><span style='color:#008c00; '>9</span><span style='color:#808030; '>]</span><span style='color:#808030; '>,</span> i<span style='color:#808030; '>,</span> j<span style='color:#808030; '>,</span> c<span style='color:#808030; '>[</span><span style='color:#008c00; '>9</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
    <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#800080; '>;</span>
    <span style='color:#800000; font-weight:bold; '>int</span> nrc<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//a catea cifra este de la dreapta la stanga</span>
    <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>n<span style='color:#808030; '>)</span>
    <span style='color:#800080; '>{</span>
        c<span style='color:#808030; '>[</span>nrc<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>n<span style='color:#808030; '>%</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//memoram cifrele intr-un vector</span>
        n<span style='color:#808030; '>/</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span>
        nrc<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
    <span style='color:#800080; '>}</span>
    <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span>nrc<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
        <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span>nrc<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
        a<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>c<span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//elementul de pe coloana j va corespunde cifrei a j-a, fiindca le-am memorat de la stang la dreapta</span>
    <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span>nrc<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
    <span style='color:#800080; '>{</span>
        <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span>nrc<span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
            <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>a<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
        <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#603000; '>endl</span><span style='color:#800080; '>;</span>
    <span style='color:#800080; '>}</span>
<span style='color:#800080; '>}</span>
<span style='color:#696969; '>/*</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;n=1359</span>
<span style='color:#696969; '></span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;matricea este:</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;9 5 3 1</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;9 5 3 1</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;9 5 3 1</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;9 5 3 1</span>
<span style='color:#696969; '>*/</span>
</pre>
<!--Created using ToHtml.com on 2021-04-22 15:29:13 UTC -->
      </div>
   </div>

   <br>
   <br>
   <hr>

   <div class="row">
      <div class="col=12">
         <h5>Problema 5</h5>
      </div>
   </div>
   <div class="row">
      <div class="col-12">
         <p>
         Scrieti un program care citeste de la tastatura un numar natural n cu exact 5 cifre şi construieste in memorie o matrice cu 6 linii si 6 coloane ale carei elemente vor primi valori dupa cum urmeaza: <br>
         - elementele aflate pe diagonala principala sunt toate nule; <br>
         - elementele de pe linia 1, aflate deasupra diagonalei principale precum si elementele de pe coloana 1, aflate sub diagonala principala au toate valoarea egala cu cifra unitatilor lui n; <br>
         - elementele de pe linia 2, aflate deasupra diagonalei principale precum si elementele de pe coloana 2, aflate sub diagonala principala au toate valoarea egala cu cifra zecilor lui n; <br>
         … <br>
         - elementele de pe linia 6, aflate deasupra diagonalei principale precum si elementele de pe coloana 6, aflate sub diagonala principala au toate valoarea egala cu cifra zecilor de mii a lui n;
         </p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
    <span style='color:#800000; font-weight:bold; '>int</span> n<span style='color:#808030; '>,</span> a<span style='color:#808030; '>[</span><span style='color:#008c00; '>7</span><span style='color:#808030; '>]</span><span style='color:#808030; '>[</span><span style='color:#008c00; '>7</span><span style='color:#808030; '>]</span><span style='color:#808030; '>,</span> i<span style='color:#808030; '>,</span> j<span style='color:#808030; '>,</span> c<span style='color:#808030; '>[</span><span style='color:#008c00; '>6</span><span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
    <span style='color:#603000; '>cin</span><span style='color:#808030; '>></span><span style='color:#808030; '>></span>n<span style='color:#800080; '>;</span>
    <span style='color:#800000; font-weight:bold; '>int</span> nrc<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//a catea cifra este de la dreapta la stanga</span>
    <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>n<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>)</span>
    <span style='color:#800080; '>{</span>
        nrc<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
        c<span style='color:#808030; '>[</span>nrc<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>n<span style='color:#808030; '>%</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>//memoram cifrele intr-un vector</span>
        n<span style='color:#808030; '>/</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>10</span><span style='color:#800080; '>;</span> 
    <span style='color:#800080; '>}</span>
    <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>6</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
        <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>6</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
            <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span>j<span style='color:#808030; '>)</span> <span style='color:#696969; '>//daca e pe diagonala</span>
               a<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
            <span style='color:#800000; font-weight:bold; '>else</span> 
               <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>&lt;</span>j<span style='color:#808030; '>)</span> 
                  a<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>c<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
               <span style='color:#800000; font-weight:bold; '>else</span>
                  a<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>=</span>c<span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#800080; '>;</span>
    <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>6</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
    <span style='color:#800080; '>{</span>
        <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span>j<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>6</span><span style='color:#800080; '>;</span>j<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
            <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>a<span style='color:#808030; '>[</span>i<span style='color:#808030; '>]</span><span style='color:#808030; '>[</span>j<span style='color:#808030; '>]</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
        <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#603000; '>endl</span><span style='color:#800080; '>;</span>
    <span style='color:#800080; '>}</span>
<span style='color:#800080; '>}</span>
<span style='color:#696969; '>/*</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;n=28731</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;0 1 1 1 1 1 </span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;1 0 3 3 3 3</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;1 3 0 7 7 7</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;1 3 7 0 8 8</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;1 3 7 8 0 2</span>
<span style='color:#696969; '>&#xa0;&#xa0;&#xa0;1 3 7 8 2 0</span>
<span style='color:#696969; '>*/</span>
</pre>
<!--Created using ToHtml.com on 2021-04-22 18:54:48 UTC -->
      </div>
   </div>


</div>


<?php
include 'footer.php';
?>