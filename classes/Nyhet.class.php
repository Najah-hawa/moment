<?php

class Nyhet {
private $db;
private $name;
private $innehall;



//construktor
function __construct(){
//connect to db 
$this -> db =new mysqli('studentmysql.miun.se', 'naha2204', '6337PJNrZr', 'naha2204');

if($this -> db->connect_errno > 0){
    die('Fel vid anslutning försök igen [' . $db->connect_error . ']');
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
    if (mb_strlen($name) > 5) {
        $this-> name = $name;
        return true;
    } else {
        return false;
    }
}
public function setinnehall (string $innehall): bool {
    if (mb_strlen($innehall) > 5 ) {
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
    $numrows = 2; //Maxvärde
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






