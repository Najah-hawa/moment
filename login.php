<?php
$page_title = "Startsida";
include("includes/config.php");
include("includes/header.php");
?>

<h1> Inloggning </h1>
<br>


<br> 
<?php
if(isset($_GET['message'])){
    echo "<p class='message'>" . $_GET['message'] .  "</p>";
}
?>

<?php  

if(isset($_POST["username"])) {

    $username = $_POST["username"];
    $password= $_POST["password"];
    $newuser= new User();
    
    if ($newuser -> loginUser($username, $password)) {
        $_SESSION["username"] = $username;
        header("location:admin.php");
        
    }else {
        $felmeddelande = "<p class= 'error'> Felaktig användarnamn/lösenord </p>";
        echo  $felmeddelande;
    }

}
 
    


?> 

<form  method="post" action="login.php" class="form">  
     <label for="username" > Användarnamn: </label>
     <br> 
     <input class="användare" type="text" name="username" id="username"> 
     <br> 
     <label for="password"> Lösenord: </label>
     <br> 
     <input class="användare" type="password" name="password" id="password"> 
     <br> 
     <input class= "submit" type="submit" value="Logga in"> 

</form> 

<?php
include("includes/footer.php");
?>
