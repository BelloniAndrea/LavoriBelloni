<?php
//server 


function conversione($lunghezza, $scala){

    $fileXML="conversione.xml"
    $xml = simplexml_load_file($fileXML); //caricamento del file xml dal percorso specificato sopra
}

$server= new SoapServer("prova.wsdl"); //creazione server con file prova.wsdl, il file definisce i metodi che il server può usare
$server->addFunction("conversione"); //aggiunta della funzione conversione al server
$server->handle(); //gestisce la richiesta

?>