<?php include("includes/config.php"); ?>
<?php include("includes/Nyhet.class.php"); ?>
<?php
$page_title = "Startsida";
include("includes/header.php");
?>


<<<<<<< HEAD
<h1> startsidan </h1> 
=======
<h1> Senaste nyheter </h1> 
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
<article id = "postHolder"> 



<?php
<<<<<<< HEAD

$nyheter = new Nyhet();
$list = $nyheter->getnyheter();
foreach($list as $row){
    ?> 
    <article>
    <?php 
     echo  "" . "<h3>" .  $row['titel']. "</h3>" ;
     echo  "<p class='tid'>" .  $row['tid']. "</p>";
    echo"<p class='text'>" .  $row['innehall'] . "</p>"; 
    ?> 
    <p>  <a href= "details.php?id=<?= $row['id']; ?> ">läsa mer</a> </p> </article>
=======
$nyheter = new Nyhet();
$list = $nyheter->getnyheter();
foreach($list as $row){
    $innehall = $row['innehall'];
    ?> 
    <article class="article">
    <?php 
     echo  "" . "<h3>" .  $row['titel']. "</h3>" ;
     echo  "<p class='tid'>" .  $row['tid']. "</p>";
     echo  "<p class='text'> " .  substr($innehall, 0,  500,  ) . "...." . "</p>"; 
    ?> 
    <p class='radera'>  <a href= "details.php?id=<?= $row['id']; ?> ">läsa mer</a> </p> </article>
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
    <?php
}

?>


</article> 
<?php
include("includes/footer.php");
?>

