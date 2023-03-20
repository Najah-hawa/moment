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


/* SQL-fråga för att lägga in data */
$sql .= "INSERT INTO artikel (titel, innehall) VALUES

('Webbutveckling med php', 'Vad är PHP? PHP programmering är en form av dataspråk. PHP står för Hypertext Preprocessor. Det är genom PHP, och genom andra språk såsom HTML, som vi kan skapa hemsidor på internet. PHP, Hypertext Preprocessor är dessutom en så kallad opensource. Det betyder att det är gratis för alla att använda det. 

En hemsida som skapas genom HTML kallas för en statisk hemsida. Har man en statisk hemsida kommer den visa samma innehåll hela tiden. HTML är den mest grundläggande kodningen som hemsidor kan ha. Även om det många fortfarande använder HTML så har teknologin gått framåt och det är där PHP programmering kommer i bilden.

Så, vad är PHP? Genom PHP programmering kan du skapa en dynamisk hemsida. En dynamisk hemsida gör att en besökare kan interagera med innehållet på ett helt annat sätt än om hemsidan enbart använde HTML. Det går exempelvis att köpa en produkt eller skriva ett meddelande på en dynamisk hemsida. Något värt att veta är att alla hemsidor har en del som är ren HTML kodning. Detta för att besökarnas webbläsare ska få relevant information om hur den ska tolka kodningen.'),


('Webbutveckling med JavaScript', 'Javascript, i marknadsföringssyfte skrivet JavaScript och förkortat JS, är ett prototyp-baserat skriptspråk som är dynamiskt, svagt typat och hanterar funktioner som första-klass-objekt. Javascript används främst på klientsidan i webbtillämpningar, det vill säga exekveras i en webbläsares Javascriptmotor.[1] Då Javascript används i webbläsare arbetar det mot ett gränssnitt som kallas Document Object Model (DOM).[2] Vanligtvis inbäddas Javascript i, eller inkluderas från, HTML-sidor. Exempel på användningsområden är kontroll av ifyllda fält innan formulär skickas till en server, funktioner för att visa eller dölja delar av en sida och växling av annonsbilder med visst intervall. Javascript kan även användas för mer avancerade funktioner i en webbläsare såsom spel och bildbehandling.

Skriptspråket kan implementeras i andra program än webbläsare. Ett numera vanligt exempel av implementation utanför webbläsaren är Node.js, som tillåter utvecklaren att använda Javascript på serversidan för att kunna arbeta med anslutningar till databaser, skicka e-post-meddelanden och så vidare.[1]

En Javascriptmotor är en specialiserad programvara som exekverar Javascript, särskilt för webbläsare.');"
;

echo "<pre>$sql</pre>"; // Skriv ut SQL-frågan till skärm

/* Skicka SQL-frågan till DB */
if($db->multi_query($sql)) {
    echo "Tabell installerad.";
} else {
    echo "Fel vid installation av Tabell.";
}

