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
<<<<<<< HEAD
        echo "nyhet raderad ";
    }else{
        echo "fel vid radering ";
=======
        echo "<p class='error'> Nyhet raderad</p> ";
    }else{
        echo "<p class='error'> Fel vid radering </p>";
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
    }
}


//defult värde
<<<<<<< HEAD

=======
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
$innehall= "";


//lägg till nyhet 
 if (isset($_POST["name"])){
    $name =$_POST["name"];
    $innehall =$_POST["innehall"];
    $success = true;

    if (!$nyhet-> setname($name)){
        $success = false;
<<<<<<< HEAD
        echo "<p> Du måste ange en titel! </P>";
    }
    if (!$nyhet-> setname($innehall)){
        $success = false;
        echo "<p> Du måste ange en innehålls-text! </P>";
    }
    if($success){
        if($nyhet->addnyhet($name, $innehall)){
            echo "<p> Nyhet tillagd! </P>";
            $name="";
            $innehall= "";
        }else{
            echo "<p> Fel vid lagring </P>";
        } }else {  
            echo "<p> Nyhet ej tillagd, försök igen senare. </P>";

        

=======
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

        
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
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
<<<<<<< HEAD
    <textarea  class="innehall"  name="innehall" id= "innehall"> <?= $innehall; ?> </textarea> 
=======
    <textarea  class="innehall"  name="innehall" id= "innehall">  </textarea> 
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
    <br> 
    <input class="skapa" type="submit" value="Skapa nyhet"> 
</form> 


<h2> Befintliga inlägg  </h2>

<?php

//SQL-fråga för att läsa ut inlaggda nyheter från tabellen  

$list = $nyhet->getnyhet();
foreach($list as $row){
<<<<<<< HEAD
    ?> 
    <article>
    <?php 
     echo  "" . "<h3>" .  $row['titel']. "</h3>" ;
     echo  "<p class='tid'>" .  $row['tid']. "</p>";
    echo"<p class='text'>" .  $row['innehall'] . "</p>"; 
    ?> 
    <p>  <a href= "admin.php?deleteid=<?= $row['id']; ?> ">Radera</a> </p> </article>
=======
       $innehall = $row['innehall'];
       
    ?> 
    <article class="article">
    <?php 
     echo  "" . "<h3>" .  $row['titel']. "</h3>" ;
     echo  "<p class='tid'>" .  $row['tid']. "</p>";
     echo  "<p class='text'> " .  substr($innehall, 0,  500 ) . "...." . "</p>"; 
    ?> 
    <p  class='radera'>  <a href= "admin.php?deleteid=<?= $row['id']; ?>">Radera</a> </p> </article>
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
    <?php
}
?>

<<<<<<< HEAD

=======
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
</div>

<?php inculde("includes/footer.php"); ?>