<?php

$datum_s = $_POST["datum_s"];
$datum_e = $_POST["datum_e"];
$naam = $_POST["naam"];
$kamer = filter_input(INPUT_POST, "kamer", FILTER_VALIDATE_INT);
$mail = filter_input(INPUT_POST, "kamer", FILTER_VALIDATE_EMAIL);
$ebike = filter_input(INPUT_POST, "ebike", FILTER_VALIDATE_INT);
$h_fiets = filter_input(INPUT_POST, "h_fiets", FILTER_VALIDATE_INT);
$d_fiets = filter_input(INPUT_POST, "d_fiets", FILTER_VALIDATE_INT);

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

$sql = "INSERT INTO verhuur (datum_s, datum_e, naam, kamer, mail, ebike, h_fiets, d_fiets)

        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param( $stmt, "sssisiii",
                        $datum_s,
                        $datum_e,
                        $naam,
                        $kamer,
                        $mail,
                        $ebike,
                        $h_fiets,
                        $d_fiets);

mysqli_stmt_execute($stmt);

echo "Gegevens opgeslagen.";

