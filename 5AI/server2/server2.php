<?php
//server 


function conversione($lunghezza, $scala){

    $fileXML="conversione.xml";
    $xml = simplexml_load_file($fileXML); //caricamento del file xml dal percorso specificato sopra

    foreach($xml->conversioni[0]->conversione as $a){ //entri nel primo contenitore e iteri tutti i suoi elementi
        
        if($scala==$a['from']){ //valuta che il $scala sia uguale all'attributo from dell'xml
            $conversione= $lunghezza* $a['factor']; //moltiplica la lunghezza per il fattore di conversione trovato col ciclo
        }
    }
    return $conversione;
}

$server= new SoapServer("prova.wsdl"); //creazione server con file prova.wsdl, il file definisce i metodi che il server può usare
$server->addFunction("conversione"); //aggiunta della funzione conversione al server
$server->handle(); //gestisce la richiesta

?>
