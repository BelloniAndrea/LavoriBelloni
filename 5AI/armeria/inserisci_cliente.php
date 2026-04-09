<?php 
$conn = new mysqli("localhost", "root", "", "armeria");
if ($conn->connect_error) {
die("Errore di connessione: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO clienti (nome, cognome, porto, tipo,  residenza, telefono, ragione_sociale, P_iva) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
if (!$stmt) {
die("Errore nella preparazione dello statement: " . $conn->error);
}
$stmt->bind_param("ssssssss", $nome, $cognome, $porto, $tipo, $residenza, $telefono, $ragione_sociale, $P_iva); //associazione variabili 

//presa dati
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$porto = $_POST["porto"];
$tipo= $_POST["tipo"]
$residenza= $_POST["residenza"]
$telefono= $_POST["telefono"]
$ragione_sociale= $_POST["ragione_sociale"]
$P_iva= $_POST["P_iva"]

$stmt->execute();
echo "Cliente inserito correttamente!"
$stmt->close();
$conn->close();
?>
