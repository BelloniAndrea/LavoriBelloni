<?php 
$conn = new mysqli("localhost", "root", "", "armeria");
if ($conn->connect_error) {
die("Errore di connessione: " . $conn->connect_error);
}
$sql = "SELECT * FROM armi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) { //stampa i campi inseriti qui
    echo "Modello: " . $row["modello"] . "<br>";
    echo "Produttore: " . $row["produttore"] . "<br>";
    echo "Anno di produzione: " . $row["anno_produzione"] . "<br>";
    echo "Quantità: " . $row["quantita"] . "<br><hr>"; 
}
} else {
echo "Nessun risultato.";
}

$conn->close();
?>