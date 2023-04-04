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
    echo "<p>" . $_GET['message'] .  "</p>";
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
        $felmeddelande = "felaktig användarnamn/lösenord";
        echo  $felmeddelande;
    }

}
 
    


?> 

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

</form> 

<?php
include("includes/footer.php");
?>
