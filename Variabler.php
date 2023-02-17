<?php
$page_title = "Variabler";
include("includes/header.php");
?>


<?php
include("includes/sidebar.php");
?>

<h2 class= "variabler" > Variabler </h2> 

<h3>Utskrift </h3> 
<div class="output">
<?php
$name= "Najah Hawa";
$old= "27 år gammal";
$e_post= "najah.hawa@gmail.com";
echo "<p> Hej! Jag heter  $name, är $old och nås på följande e-post: <a href=$e_post > $e_post </a> .</p> ";
?>

</div>

<?php
include("includes/footer.php");
?>
