<?php include("includes/config.php"); ?>
<?php include("includes/Nyhet.class.php"); ?>
<?php
$page_title = "Startsida";
include("includes/header.php");
?>


<h1> startsidan </h1> 
<article id = "postHolder"> 



<?php

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
    <?php
}

?>


</article> 
<?php
include("includes/footer.php");
?>

