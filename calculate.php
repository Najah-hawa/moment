<?php
$page_title = "Variabler";
include("includes/header.php");
?>


<?php
include("includes/sidebar.php");
?>

<h2 class= "variabler" > Beräkna area </h2> 

<div class="output">
<?php 
        if (isset ($_POST["langd"])){
            $langd=  $_POST["langd"];} 
            if ($langd === "") {
                print "<p style='color: red; font-weight: bold; ' > Både längd och bredd måste anges! <br> </p> " ;
            } elseif (isset ($_POST["bredd"])){
                $bredd=  $_POST["bredd"];} 
                if ($bredd === ""){
                print "<p style='color: red; font-weight: bold; ' > Både längd och bredd måste anges! <br> </p> ";
        } else { 
                $langd = $_POST['langd'];
                $bredd = $_POST['bredd'];
                $area = $langd *  $bredd;
                   print "<p> Längden $langd  meter och bredden  $bredd ger en area på $area kvadratmeter<br> </p> ";
        } 
?>
</div>

<a href = "Formular.php" > Gå tillbaks till föregående sida. </a>

<?php
include("includes/footer.php");
?>

