<?php include("includes/config.php"); ?>
<?php include("includes/Nyhet.class.php"); ?>
<?php
$page_title = "";
include("includes/header.php");
?>
<script src="js/textarea.js" ></script>
<h1> Nyheter </h1> 


<?php

//SQL-fråga för att läsa ut inlaggda nyheter från tabellen  
$nyheter = new Nyhet();
$list = $nyheter->getnyhet();
foreach($list as $row){
<<<<<<< HEAD
    ?> 
    <article>
    <?php 
     echo  "" . "<h3>" .  $row['titel']. "</h3>" ;
     echo  "<p class='tid'>" .  $row['tid']. "</p>";
    echo"<p class='text'>" .  $row['innehall'] . "</p>"; 
    ?> 
    <p>  <a href= "details.php?id=<?= $row['id']; ?> ">läsa mer</a> </p> </article>
=======
    $innehall = $row['innehall'];
    ?> 
    <article class="article">
    <?php 
     echo  "" . "<h3>" .  $row['titel']. "</h3>" ;
     echo  "<p class='tid'>" .  $row['tid']. "</p>";
     echo  "<p class='text'> " .  substr($innehall, 0,  500 ). "...." . "</p>"; 
    ?> 
    <p class='radera'>  <a href= "details.php?id=<?= $row['id']; ?> ">läsa mer</a> </p> </article>
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
    <?php
}
?>


<?php
include("includes/footer.php");
?>
