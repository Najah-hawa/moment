<?php

class Nyhet {
private $db;
private $name;
private $innehall;



//construktor
function __construct(){
//connect to db 
<<<<<<< HEAD
$this -> db =new mysqli('localhost', 'nyheter', 'password', 'nyheter');

if($this -> db->connect_errno > 0){
    die('Fel vid anslutning [' . $db->connect_error . ']');
=======
$this -> db =new mysqli('studentmysql.miun.se', 'naha2204', '6337PJNrZr', 'naha2204');

if($this -> db->connect_errno > 0){
    die('Fel vid anslutning försök igen [' . $db->connect_error . ']');
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
}
}

//lägga nyheter
public function addnyhet(string $name, string $innehall) : bool{
    if (!$this->setname($name)) return false; 
    if (!$this->setinnehall($innehall)) return false; 
    //sql query 
 $sql = "INSERT INTO artikel(titel, innehall)VALUES('" .$this-> name . "', '" . $this-> innehall . "');";
  return mysqli_query ($this->db, $sql);

}


// set- metoder
public function setname (string $name): bool {
<<<<<<< HEAD
    if (mb_strlen($name) > 0 ) {
=======
    if (mb_strlen($name) > 5) {
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
        $this-> name = $name;
        return true;
    } else {
        return false;
    }
}
public function setinnehall (string $innehall): bool {
<<<<<<< HEAD
    if (mb_strlen($innehall) > 0 ) {
=======
    if (mb_strlen($innehall) > 5 ) {
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
        $this-> innehall = $innehall;
        return true;
    } else {
        return false;
    }
}

//läsa ut nyheter 
public function getnyhet(): array{
    $sql = "SELECT * FROM  artikel ORDER BY tid DESC ;";
    $result = mysqli_query ($this->db, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);

}

public function getnyheter(): array{
<<<<<<< HEAD
    $numrows = 999; //Maxvärde
=======
    $numrows = 2; //Maxvärde
>>>>>>> 9aeac0768df73d2fbb76af91c04dc9a3ca5a39cf
    if(isset($_GET['numrows'])) {
        $numrows = intval($_GET['numrows']);
    }
    $sql = "SELECT * FROM  artikel ORDER BY tid DESC LIMIT $numrows ;";
    $result = mysqli_query ($this->db, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);

}

//läsa specific nyhet
public function getnyhetbyid(int $id): array{
    $id= intval ($id);
    $sql = "SELECT * FROM  artikel WHERE id= $id;";
    $result = mysqli_query ($this->db, $sql);
    return $result-> fetch_assoc();

}

//radera nyheter
public function deletenyhet(int $id) : bool {
    $id = intval($id);
    $sql = "DELETE FROM artikel WHERE id =$id";
    return  mysqli_query($this->db, $sql);
}


//destructor 
function __destruct(){
    $this->db-> close();
}
}






