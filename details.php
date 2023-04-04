
<?php include_once("includes/config.php"); ?>
<?php include("includes/Nyhet.class.php"); ?>
<?php
//kontoll om id send
if(isset($_GET['id'])){
    $id= intval($_GET['id']);
    $nyheter = new Nyhet();
    $details = $nyheter-> getnyhetbyid($id);
}else{
 header ("Location: index.php");
}
?>



<?php
$page_title = $details["titel"];
include("includes/header.php");
?>

<<<<<<< HEAD


<h1> <?= $details["titel"]; ?> </h1> 
<p>  <?= $details["tid"]; ?></p> 
<p>  <?= $details["innehall"]; ?></p> 



=======
<div class= "detalj">
    <h1>Läsa mer infromation om <?= $details["titel"]; ?> </h1>
<article class="article">  
<h2> <?= $details["titel"]; ?> </h2> 
<p class='tid'>  <?= $details["tid"]; ?></p> 
<p class='text'>  <?= $details["innehall"]; ?></p> 
<p class='bakåt'>  <a href= "nyheter.php">Tillbaka till nyheter</a> </p> </article>
</article> 

</div>
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf

<?php
include("includes/footer.php");
?>

