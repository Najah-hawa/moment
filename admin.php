<?php include("includes/config.php"); ?>

<?php
//kontroll om användare är inloggas 
if(!isset($_SESSION["username"])){
    header("Location: login.php?message=Inloggning krävs för denna sida!");
}

?>
<?php include("includes/header.php"); ?>

<h1> Asministration </h1> 
<h2> Skapa nyhet </h2> 



<p> <a href= "logout.php"> logga out </a> </p>
<?php inculde("includes/footer.php"); ?>