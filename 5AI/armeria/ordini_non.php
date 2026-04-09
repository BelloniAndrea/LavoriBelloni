<?php 
$conn = new mysqli("localhost", "root", "", "armeria");
if ($conn->connect_error) {
die("Errore di connessione: " . $conn->connect_error);
}
$sql = "SELECT * FROM ordini WHERE data_consegna IS NULL";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) { //stampa i campi inseriti qui
    echo "id arma: " . $row["id_arma"] . "<br>";
    echo "id cliente: " . $row["id_cliente"] . "<br>";
    echo "data ordine: " . $row["data ordine"] . "<br><hr>"; 
}
} else {
echo "Nessun risultato.";
}
$conn->close();
?>