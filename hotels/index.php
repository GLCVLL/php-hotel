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