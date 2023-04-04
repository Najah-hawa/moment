<?php include("includes/config.php"); ?>
<?php include("includes/Nyhet.class.php"); ?>
<?php
$page_title = "admin";
?>
<?php
//kontroll om användare är inloggas 
if(!isset($_SESSION["username"])){
    header("Location: login.php?message=Inloggning krävs för denna sida!");
}
?>
<?php include("includes/header.php"); ?>
<div class="out"> 
<p> <a href= "logout.php" > logga out </a> </p>
</div>

<h1> Asministration </h1> 
<h2> Skapa nyhet </h2> 


<?php
$nyhet = new Nyhet();

//delet 
if (isset ($_GET['deleteid'])){
    $deleteid= intval ($_GET['deleteid']);
    if ($nyhet -> deletenyhet($deleteid)){
        echo "<p class='error'> Nyhet raderad</p> ";
    }else{
        echo "<p class='error'> Fel vid radering </p>";
    }
}


//defult värde
$innehall= "";


//lägg till nyhet 
 if (isset($_POST["name"])){
    $name =$_POST["name"];
    $innehall =$_POST["innehall"];
    $success = true;

    if (!$nyhet-> setname($name)){
        $success = false;
        echo "<p class='error'> Du måste ange en titel med minst 5 bokstäver! </P>";
    }
    if (!$nyhet-> setinnehall($innehall)){
        $success = false;
        echo "<p class='error'> Du måste ange en innehålls-text med minst 5 bokstäver! </P>";
    }
    if($success){
        if($nyhet->addnyhet($name, $innehall)){
            echo "<p class='error'> Nyhet tillagd! </P>";

        }else{
            echo "<p class='error'> Fel vid lagring </P>";
        } }else {  
            echo "<p class='error'> Nyhet ej tillagd, försök igen senare. </P>";

        
    }

}
?>
<form method ="post">
    <label class="label" for="name"> Tittel </label>
    <br> 
    <input class="titel"  type="text" name="name" id= "name" >
    <br> 
    <label class="label" for="innehall"> Innehåll </label>
    <br> 
    <textarea  class="innehall"  name="innehall" id= "innehall">  </textarea> 
    <br> 
    <input class="skapa" type="submit" value="Skapa nyhet"> 
</form> 


<h2> Befintliga inlägg  </h2>

<?php

//SQL-fråga för att läsa ut inlaggda nyheter från tabellen  

$list = $nyhet->getnyhet();
foreach($list as $row){
       $innehall = $row['innehall'];
       
    ?> 
    <article class="article">
    <?php 
     echo  "" . "<h3>" .  $row['titel']. "</h3>" ;
     echo  "<p class='tid'>" .  $row['tid']. "</p>";
     echo  "<p class='text'> " .  substr($innehall, 0,  500 ) . "...." . "</p>"; 
    ?> 
    <p  class='radera'>  <a href= "admin.php?deleteid=<?= $row['id']; ?>">Radera</a> </p> </article>
    <?php
}
?>

</div>

<?php inculde("includes/footer.php"); ?>