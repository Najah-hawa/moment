<?php
$page_title = "Variabler";
include("includes/header.php");
?>


<?php
include("includes/sidebar.php");
?>

<h2 class= "variabler" > Inläsning av extern textfil</h2> 

<div class="output">
    <ul class= "count"> 
<?php

$file = fopen("test.txt","r") or die("Filen kunde inte hittas!") ;
//Output lines until EOF is reached
while(! feof($file)) {
  $line = fgets($file);

  echo   "<li> $line </li>" ;

}

fclose($file);

?>
</ul>
</div>

<?php
include("includes/footer.php");
?>
