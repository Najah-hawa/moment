<p> <a href= "index.php"> komma tillbaka till startsidan </a> </p>

<?php
/* Anslut med nytt konto för varor */
$db = new mysqli("localhost", "nyheter", "password", "nyheter");
if($db->connect_errno > 0){
    die('Fel vid anslutning [' . $db->connect_error . ']');
} 

/* SQL-fråga för att skapa tabell */
$sql = "DROP TABLE IF EXISTS artikel;
    CREATE TABLE artikel(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    titel VARCHAR(64) NOT NULL,
    innehall text,
    tid timestamp NOT NULL
);";

/* SQL-fråga för att lägga in data 
$sql .= "INSERT INTO artikel (titel, innehall) VALUES
('index1', 'skriva'),
('index2', 'läsa data'),
('index3', 'test');"
;

echo "<pre>$sql</pre>"; // Skriv ut SQL-frågan till skärm
*/
/* Skicka SQL-frågan till DB */
if($db->multi_query($sql)) {
    echo "Tabell installerad.";
} else {
    echo "Fel vid installation av Tabell.";
}

