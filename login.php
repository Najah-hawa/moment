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
<<<<<<< HEAD
    echo "<p>" . $_GET['message'] .  "</p>";
=======
    echo "<p class='message'>" . $_GET['message'] .  "</p>";
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
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
<<<<<<< HEAD
        $felmeddelande = "felaktig användarnamn/lösenord";
=======
        $felmeddelande = "<p class= 'error'> Felaktig användarnamn/lösenord </p>";
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
        echo  $felmeddelande;
    }

}
 
    


?> 

<<<<<<< HEAD
<form  method="post" action="login.php">  
     <label for="username"> Användarnamn: </label>
     <br> 
     <input type="text" name="username" id="username"> 
     <br> 
     <label for="password"> Lösenord: </label>
     <br> 
     <input type="password" name="password" id="password"> 
     <br> 
     <input type="submit" value="Logga in"> 
=======
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
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf

</form> 

<?php
include("includes/footer.php");
?>
