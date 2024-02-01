<!DOCTYPE html>
<html lang="nl">
<head>
<title>cursus</title>
<!-- De volgende lijn zorgt ervoor dat we de tekencodering kunnen gebruiken die bijna alle speciale tekens omvat die we in europa gebruiken  -->
<meta charset="UTF-8">
<!-- De naam van de auteur van deze pagina -->
<meta name="author" content="Erwin Leemans">
<!-- De korte uitleg over deze pagina -->
<meta name="description" content=" cursus php">
<!-- Deze regel zorgt er voor dat onze pagina zich automatisch aanpast aan eender welke breedte van scherm -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h3>Aanmelden</h3>

<form action="includes/formhandler.inc.php" method="post">
    <input type="text" name="username" placeholder="Gebruikersnaam">
    <input type="password" name="pwd" placeholder="Paswoord">  
    <input type="text" name="email" placeholder="Email">   
    <button>Aanmelden</button>     
</form>

</body>
</html>