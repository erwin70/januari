<?php
/* DEZE CODE KAN GEBRUIKT WORDEN OM GEWOON DE GEVENS IN WEBPAGINA TE LEZEN

$name = $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if (!$terms){
    die("De algemene voorwaarden moeten worden aanvaard.");
}

var_dump($name, $message, $priority, $type, $terms)

*/

$nr = $_POST["nr"];
$km = $_POST["km"];
/* de volgende regel kan aangepast worden, ofwel gewoon zoals hierboven of 'FILTER_VALIDATE_INT' voor een (Intreger) of bool of float enz... */
$soort = filter_input(INPUT_POST, "soort", FILTER_VALIDATE_INT);

$host = "localhost";
$username = "root";
$password = "";
$dbname = "fietsen";

$conn = mysqli_connect( hostname: $host,
                        username: $username,
                        password: $password,
                        database: $dbname);

if (mysqli_connect_errno()) {
    die("connectie fout: ".mysqli_connect_error());
}

/* 

In de volgende zin gebruiken voor het testen of connectie goed is

echo "connectie gelukt.";
 */
/* in de volgende code vervangen we 
VALUES ('$name', '$message', $priority, $type)
door 
VALUES (?, ?, ?, ?)
de eerste wordt niet gebruikt omdat deze kwetsbaar is voor SQL-injectie

*/
/* in de volgende code vervangen we 'message' door de naam van onze nieuwe database en (name, body, priority, type) door de tabelnamen van onze nieuwe database  */
$sql = "INSERT INTO stok (nr, soort, km)

        VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}
/* in de volgende zin staat nu 'ssii' wat staat voor 'string, string, int, int' dus deze moeten aangepast worden en ook onze variabelen namen van formulier moeten aangepast worden */
mysqli_stmt_bind_param( $stmt, "iii",
                        $nr,
                        $soort,
                        $km);

mysqli_stmt_execute($stmt);

echo "Gegevens opgeslagen.";

