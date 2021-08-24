<?php
   include 'header.php';
   include 'navbar.php';
?>

<br>
<h1 class="text-center">Probleme cu secvente</h1>

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
         Fisierul "bac.in" contine n-valori naturale de maxim 9 cifre. Determinati cea mai lunga secventa de elemente ordonate strict crescator din vector. Daca exista mai multe astfel de secvente se va determina cea mai din stanga. Pe ecran se vor afisa indicele de inceput si cel de final al secventei;
         </p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>fstream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#603000; '>ifstream</span> in<span style='color:#808030; '>(</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>bac.in</span><span style='color:#800000; '>"</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> st<span style='color:#808030; '>,</span> dr<span style='color:#808030; '>,</span> l_max<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span> l<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>,</span> x<span style='color:#808030; '>,</span> y<span style='color:#808030; '>,</span> cnt<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>

   <span style='color:#696969; '>// mergem pe ideea sa comparam cate 2 numere consecutive si sa vedem</span>
   <span style='color:#696969; '>// daca precedentul(x) este mai mare decat numarul actual(y)</span>

   in<span style='color:#808030; '>></span><span style='color:#808030; '>></span>x<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>in<span style='color:#808030; '>></span><span style='color:#808030; '>></span>y<span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      cnt<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>// la al catelea numar suntem</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>y<span style='color:#808030; '>></span>x<span style='color:#808030; '>)</span> <span style='color:#696969; '>// daca respecta regula mergem mai departe si crestem lungimea curenta</span>
         l<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>else</span> <span style='color:#696969; '>// am gasit un element care este mai mic decat precedentul</span>
      <span style='color:#800080; '>{</span>
         <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>l<span style='color:#808030; '>></span>l_max<span style='color:#808030; '>)</span> <span style='color:#696969; '>// in caza ca lungimea curenta este maxima, fiind '>' se va lua cea din stanga</span>
         <span style='color:#800080; '>{</span>
            l_max<span style='color:#808030; '>=</span>l<span style='color:#800080; '>;</span>
            st<span style='color:#808030; '>=</span>cnt<span style='color:#808030; '>-</span>l<span style='color:#800080; '>;</span>
            dr<span style='color:#808030; '>=</span>cnt<span style='color:#808030; '>-</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>
         <span style='color:#800080; '>}</span>
         l<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>// actualizam lungimea curenta cu un 1</span>
      <span style='color:#800080; '>}</span>
      <span style='color:#696969; '>// pentru a realiza compararile urmatoare este nevoie sa actualul sa devina precedent</span>
      x<span style='color:#808030; '>=</span>y<span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   in<span style='color:#808030; '>.</span>close<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>

   <span style='color:#696969; '>// exista posibilitatea ca secventa maxima sa se afle la final</span>
   <span style='color:#696969; '>// si sa nu se gaseasca un numar care sa nu respecte regula si </span>
   <span style='color:#696969; '>// astfel nu se actualizeaza l_max, asa ca verificam inca o data la final</span>
   
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>l<span style='color:#808030; '>></span>l_max<span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      st<span style='color:#808030; '>=</span>cnt<span style='color:#808030; '>-</span>l<span style='color:#800080; '>;</span>
      dr<span style='color:#808030; '>=</span>cnt<span style='color:#808030; '>-</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>
   <span style='color:#800080; '>}</span>
   <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>st<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>dr<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-24 21:58:08 UTC -->
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
         Numim secventa uniforma a unui sir de numere naturale un subsir al acestuia, format din termeni cu aceeasi valoare, aflati pe pozitii consecutive in sirul dat. Lungimea secventei este egala cu numarul de termeni ai acesteia.
         <br>
         In fisierul "bac.in" se afla un sir de cel putin doua și cel mult 1000000 de numere naturale din intervalul [0,109]. In sir exista cel putin doi termeni egali pe pozitii consecutive. Se cere sa se determine o secventa uniforma de lungime maxima in sirul dat si sa se afișeze pe ecran lungimea acestei secvente si termenii acesteia. Daca sunt mai multe astfel de secvente, se afiseaza doar termenii ultimei dintre acestea.
         </p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>fstream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#603000; '>ifstream</span> in<span style='color:#808030; '>(</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>bac.in</span><span style='color:#800000; '>"</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
    <span style='color:#800000; font-weight:bold; '>int</span> l_cur<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>,</span> lmax<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#808030; '>,</span> x<span style='color:#808030; '>,</span> y<span style='color:#800080; '>;</span>
    <span style='color:#800000; font-weight:bold; '>int</span> nr<span style='color:#800080; '>;</span> <span style='color:#696969; '>//deoarece secventa este formata din aceeasi termeni putem memora doar un termen</span>

   <span style='color:#696969; '>// x-ul va fi precedentul iar in y vom citi cate un numar si vom verifica daca acestea sunt egale</span>

    in<span style='color:#808030; '>></span><span style='color:#808030; '>></span>x<span style='color:#800080; '>;</span>
    <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>in<span style='color:#808030; '>></span><span style='color:#808030; '>></span>y<span style='color:#808030; '>)</span>
    <span style='color:#800080; '>{</span>
        <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>y<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span>x<span style='color:#808030; '>)</span> <span style='color:#696969; '>// avem elemente consecutive egale</span>
            l_cur<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
        <span style='color:#800000; font-weight:bold; '>else</span>
        <span style='color:#800080; '>{</span>
            <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>l_cur<span style='color:#808030; '>></span><span style='color:#808030; '>=</span>lmax<span style='color:#808030; '>)</span> <span style='color:#696969; '>// avem lungime curenta maxima, fiind '>=' se va lua secventa din dreapta</span>
            <span style='color:#800080; '>{</span>
                lmax<span style='color:#808030; '>=</span>l_cur<span style='color:#800080; '>;</span>
                nr<span style='color:#808030; '>=</span>x<span style='color:#800080; '>;</span> <span style='color:#696969; '>// numarul care formeaza aceasta secventa</span>
            <span style='color:#800080; '>}</span>
            l_cur<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>// actualizam l_cur cu 1 deoarece acum avem doar un element</span>
            x<span style='color:#808030; '>=</span>y<span style='color:#800080; '>;</span> <span style='color:#696969; '>// fiindca trecem la alta secventa este necesar sa ne actualizam precedentul</span>
        <span style='color:#800080; '>}</span>
    <span style='color:#800080; '>}</span>
    in<span style='color:#808030; '>.</span>close<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
    <span style='color:#696969; '>// facem verificarea de la final in cazul in care secventa noastra esta la </span>
    <span style='color:#696969; '>// final si nu va gasi un nr diferit de precedent, si astfel nu ne actualizeaza l_max</span>
    <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>l_cur<span style='color:#808030; '>></span><span style='color:#808030; '>=</span>lmax<span style='color:#808030; '>)</span> 
    <span style='color:#800080; '>{</span>
        lmax<span style='color:#808030; '>=</span>l_cur<span style='color:#800080; '>;</span>
        nr<span style='color:#808030; '>=</span>x<span style='color:#800080; '>;</span>
    <span style='color:#800080; '>}</span>
    <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>lmax<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#603000; '>endl</span><span style='color:#800080; '>;</span>
    <span style='color:#800000; font-weight:bold; '>for</span><span style='color:#808030; '>(</span><span style='color:#800000; font-weight:bold; '>int</span> i<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>i<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>=</span>lmax<span style='color:#800080; '>;</span>i<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#808030; '>)</span>
        <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>nr<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-24 22:12:10 UTC -->
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
         Numim secventa neuniforma a unui sir de numere naturale un subsir al acestuia, format din termeni aflati pe pozitii consecutive in sirul dat, cu proprietatea ca oricare trei termeni aflati pe pozitii consecutive sunt diferiti. Lungimea secventei este egala cu numarul de termeni ai acesteia. <br>
         In fisierul "bac.in" se da un sir de cel mult 1 000 000 numere naturale din intervalul [0,9], in care exista cel putin trei termeni diferiti pe pozitii consecutive. Se cere sa se afiseze lungimea maxima a unei secvente neuniforme a sirului dat.
         </p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>fstream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#603000; '>ifstream</span> in<span style='color:#808030; '>(</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>bac.in</span><span style='color:#800000; '>"</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
    <span style='color:#696969; '>// deoarece trebuie sa verificam ca 3 numere consecutive sa fie</span>
    <span style='color:#696969; '>// diferite este necesar sa avem cate 2 precedente(a si b) si un actual(c)</span>

    <span style='color:#800000; font-weight:bold; '>int</span> a<span style='color:#808030; '>,</span> b<span style='color:#808030; '>,</span> c<span style='color:#808030; '>,</span> lmax<span style='color:#808030; '>=</span><span style='color:#008c00; '>3</span><span style='color:#808030; '>,</span> l<span style='color:#808030; '>=</span><span style='color:#008c00; '>2</span><span style='color:#800080; '>;</span>

    <span style='color:#696969; '>// initalizam lungimea curenta l cu 2 deoarece in momentul in care gasim</span>
    <span style='color:#696969; '>// 3 numere diferite intre ele, l va deveni 3 si astfel il putem incrementa cu 1</span>

    in<span style='color:#808030; '>></span><span style='color:#808030; '>></span>a<span style='color:#808030; '>></span><span style='color:#808030; '>></span>b<span style='color:#800080; '>;</span>
    <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>in<span style='color:#808030; '>></span><span style='color:#808030; '>></span>c<span style='color:#808030; '>)</span>
    <span style='color:#800080; '>{</span>
        <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>a<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span>b <span style='color:#808030; '>&amp;</span><span style='color:#808030; '>&amp;</span> a<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span>c <span style='color:#808030; '>&amp;</span><span style='color:#808030; '>&amp;</span> b<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span>c<span style='color:#808030; '>)</span> <span style='color:#696969; '>// cele 3 sunt diferite intre ele</span>
            l<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
        <span style='color:#800000; font-weight:bold; '>else</span> <span style='color:#696969; '>// cel putin 2 sunt egale intre ele</span>
        <span style='color:#800080; '>{</span>
            <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>l<span style='color:#808030; '>></span>lmax<span style='color:#808030; '>)</span> <span style='color:#696969; '>// vedem daca avem lungime maxima</span>
               lmax<span style='color:#808030; '>=</span>l<span style='color:#800080; '>;</span> 
            l<span style='color:#808030; '>=</span><span style='color:#008c00; '>2</span><span style='color:#800080; '>;</span> <span style='color:#696969; '>// actualizam lungimea curenta</span>
        <span style='color:#800080; '>}</span>
        <span style='color:#696969; '>// actualizam cei doi precedenti</span>
        a<span style='color:#808030; '>=</span>b<span style='color:#800080; '>;</span>
        b<span style='color:#808030; '>=</span>c<span style='color:#800080; '>;</span>
    <span style='color:#800080; '>}</span>
    in<span style='color:#808030; '>.</span>close<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>

    <span style='color:#696969; '>// facem verificarea de la final in cazul in care secventa cautata este ultima</span>

    <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>l<span style='color:#808030; '>></span>lmax<span style='color:#808030; '>)</span> 
      lmax<span style='color:#808030; '>=</span>l<span style='color:#800080; '>;</span>
    <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>lmax<span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-24 22:23:22 UTC -->
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
         Scrieti un program care citeste din fisierul "bac.in" un sir de cel mult 1 000 000 numere naturale din intervalul [0,1 000 000 000] ordonate crescator si determina cel mai mic numar din sir care apare de un numar impar de ori. Daca in sir nu se afla o astfel de valoare, se afiseaza mesajul nu exista.
         </p>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col-12">
      <pre style='color:#000000;'><span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>iostream</span><span style='color:#800000; '>></span>
<span style='color:#004a43; '>#</span><span style='color:#004a43; '>include </span><span style='color:#800000; '>&lt;</span><span style='color:#40015a; '>fstream</span><span style='color:#800000; '>></span>

<span style='color:#800000; font-weight:bold; '>using</span> <span style='color:#800000; font-weight:bold; '>namespace</span> <span style='color:#666616; '>std</span><span style='color:#800080; '>;</span>

<span style='color:#603000; '>ifstream</span> in<span style='color:#808030; '>(</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>bac.in</span><span style='color:#800000; '>"</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>

<span style='color:#800000; font-weight:bold; '>int</span> <span style='color:#400000; '>main</span><span style='color:#808030; '>(</span><span style='color:#808030; '>)</span>
<span style='color:#800080; '>{</span>
   <span style='color:#800000; font-weight:bold; '>int</span> l<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#808030; '>,</span> x<span style='color:#808030; '>,</span> y<span style='color:#800080; '>;</span>

   <span style='color:#696969; '>// deoarece cautam un minim impar si stim ca numere pot fi</span>
   <span style='color:#696969; '>// maxim 1 000 000 000, ne vom initializa minimul cu valoarea respectiva</span>

   <span style='color:#800000; font-weight:bold; '>int</span> minim<span style='color:#808030; '>=</span><span style='color:#008c00; '>1000000000</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>in<span style='color:#808030; '>></span><span style='color:#808030; '>></span>x<span style='color:#808030; '>)</span>
   <span style='color:#800080; '>{</span>
      l<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>bool</span> este_acelasi<span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span><span style='color:#800080; '>;</span>
      <span style='color:#800000; font-weight:bold; '>while</span><span style='color:#808030; '>(</span>in<span style='color:#808030; '>></span><span style='color:#808030; '>></span>y <span style='color:#808030; '>&amp;</span><span style='color:#808030; '>&amp;</span> este_acelasi<span style='color:#808030; '>)</span> <span style='color:#696969; '>// cat timp putem citi numere si nu am gasit unul diferit</span>
      <span style='color:#800080; '>{</span>
         <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>x<span style='color:#808030; '>=</span><span style='color:#808030; '>=</span>y<span style='color:#808030; '>)</span>
            l<span style='color:#808030; '>+</span><span style='color:#808030; '>+</span><span style='color:#800080; '>;</span>
         <span style='color:#800000; font-weight:bold; '>else</span>
            este_acelasi<span style='color:#808030; '>=</span><span style='color:#008c00; '>0</span><span style='color:#800080; '>;</span>
            <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>l<span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#0000e6; '>' '</span><span style='color:#800080; '>;</span> 
      <span style='color:#800080; '>}</span>
      <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>l<span style='color:#808030; '>%</span><span style='color:#008c00; '>2</span><span style='color:#808030; '>=</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>1</span> <span style='color:#808030; '>&amp;</span><span style='color:#808030; '>&amp;</span> x<span style='color:#808030; '>&lt;</span>minim<span style='color:#808030; '>)</span>
         minim<span style='color:#808030; '>=</span>x<span style='color:#800080; '>;</span>
      x<span style='color:#808030; '>=</span>y<span style='color:#800080; '>;</span> <span style='color:#696969; '>// vom face acelasi lucru si pentru urmatorul</span>
   <span style='color:#800080; '>}</span>
   in<span style='color:#808030; '>.</span>close<span style='color:#808030; '>(</span><span style='color:#808030; '>)</span><span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>if</span><span style='color:#808030; '>(</span>minim<span style='color:#808030; '>!</span><span style='color:#808030; '>=</span><span style='color:#008c00; '>1000000000</span><span style='color:#808030; '>)</span> <span style='color:#696969; '>// am gasit un numar</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span>minim<span style='color:#800080; '>;</span>
   <span style='color:#800000; font-weight:bold; '>else</span>
      <span style='color:#603000; '>cout</span><span style='color:#808030; '>&lt;</span><span style='color:#808030; '>&lt;</span><span style='color:#800000; '>"</span><span style='color:#0000e6; '>nu exista</span><span style='color:#800000; '>"</span><span style='color:#800080; '>;</span>
<span style='color:#800080; '>}</span>
</pre>
<!--Created using ToHtml.com on 2021-04-24 22:45:36 UTC -->
      </div>
   </div>

</div>


<?php
include 'footer.php';
?>