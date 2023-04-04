
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



<h1> <?= $details["titel"]; ?> </h1> 
<p>  <?= $details["tid"]; ?></p> 
<p>  <?= $details["innehall"]; ?></p> 




<?php
include("includes/footer.php");
?>

