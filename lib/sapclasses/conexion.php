<?php
    include_once ("lib/sapclasses/sap.php");

    $sap = new SAPConnection();
    // Params:                        hostname   sysnr
    $sap->ConnectToApplicationServer ("server", "15");
    // Params:  client username  password  language
    $sap->Open ("8001", "tuuser","passs","ES"); 
?>