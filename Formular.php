<?php
$page_title = "Variabler";
include("includes/header.php");
?>


<?php
include("includes/sidebar.php");
?>

<h2 class= "variabler" > Formulär </h2> 

<h3>Del 1 - Skicka data med GET </h3> 

<div class="output">

<?php
  
if (isset ($_POST["ange"])){
    $ange=  $_POST["ange"]; }
if (isset ($_POST["name"])){
    $name=  $_POST["name"];
    $aftername=  $_POST["aftername"];
  $hej = "Hej "; 
    $svar  =  $hej . $name  . " ". $aftername ;
    if ($name === "") {
        echo "Båda fälten måste fyllas i!" ;
    }   elseif ($aftername === "") {
            echo "Båda fälten måste fyllas i!";
    } 
    else { 
        echo  $svar ;
} 

    } 

?>

<form action="Formular.php" method="POST" name ="ange">
Förnamn: <input type="text" name="name"><br>
Förnamn: <input type="text" name="aftername"><br>
<input  class= "input" type="submit" name="submit" value="Skicka" >
</form>

</div>

<h3>Del 2 - Skicka data med POST</h3> 

<div class="output">

<form  action="calculate.php" method="post" name ="count" >
<p class="info"> Beräkna arean på en yta genom att ange längd och bredd.</p>
Längd: <input name="langd" type="number"><br>
Bredd: <input name="bredd" type="number"> <br>
<input class= "input" name="Hidden" type="submit" value="Beräkna">
</form>

</div>

<?php
include("includes/footer.php");
?>
