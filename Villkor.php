<?php
$page_title = "Variabler";
include("includes/header.php");
?>


<?php
include("includes/sidebar.php");
?>

<h2 class= "variabler" > Villkor </h2> 

<h3>Del 1 </h3> 
<div class="output">
<?php 
echo "Datum/klockslag: " . date("Y/m/d") . ":" .  date("h:i");
?>
</div>

<h3>Del 2 </h3> 
<div  class="output">
<?php
$dag = date("w");

if ( $dag == 0 ) {print "idag är det söndag";
} else {
  echo "idag är det inte söndag!";
}
?>
</div>
<h3>Del 3 </h3> 
<div class="output">
<?php
$t = date("H");

if ($t < "06.00 - 09.00") {
  echo "Det är morgon";
}elseif ($t < "09.00 - 12.00")
    echo "Det är förmiddag";
 elseif ($t < "12.00-18.00")
    echo "Det är eftermiddag!";
else {
  echo "Det är kväll/natt";

}
?>
</div>
<h3>Del 4 </h3> 
<div class="output">
<?php
echo "Idag är det " . date("l");
?>
</div>

<?php
include("includes/footer.php");
?>
