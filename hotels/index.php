<?php
// Includo il file data.php
include 'data.php';

foreach ($hotels as $hotel) {
    echo "Nome: " . $hotel['name'] . "<br>";
    echo "Descrizione: " . $hotel['description'] . "<br>";
    echo "Parcheggio disponibile: " . ($hotel['parking'] ? 'Sì' : 'No') . "<br>";
    echo "Voto: " . $hotel['vote'] . "<br>";
    echo "Distanza dal centro: " . $hotel['distance_to_center'] . " km<br><br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Hotel Information</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to Center</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</body>
</html>