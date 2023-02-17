<?php
$page_title = "Uppreppningar";
include("includes/header.php");
?>


<?php
include("includes/sidebar.php");
?>

<h2 class= "variabler" > Upprepningar </h2> 

<h3>Del 1 </h3> 
<div class="output">
<?php

for ($x = 10; $x >= 1; $x-=1) {
    echo "<b> $x </b> <br>";
  }

?>
</div> 

<h3>Del 2 </h3> 
<div class="output">
    <?php 
   echo "<p>Kurslistan i den ordning kurserna ges: </p>  <br> ";
   ?> 
   <ul class= "count"> 
<?php
$courses = array("Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"  );
$arrlength = count($courses);
for($x = 0; $x < $arrlength; $x++) {
    echo " <li>  $courses[$x] </li> ";
  }
?>
</ul>
</div> 

<h3>Del 3 </h3> 
<div class="output">
<?php
    echo "<p>Kurslistan i bokstavsordning: </p>  <br> ";
    ?> 
    <ul class= "count"> 
 <?php
 $courses = array("Webbutveckling I", "Introduktion till programmering i JavaScript", "Grafisk teknik för webb", "Webbanvändbarhet", "Databaser", "Webbutveckling II", "Webbdesign för CMS", "Webbutveckling III"  );
 $arrlength = count($courses);
 for($x = 0; $x < $arrlength; $x++) {
     sort($courses);
     echo " <li>  $courses[$x] </li> ";
   }
?>
</ul>
</div> 

<?php
include("includes/footer.php");
?>
