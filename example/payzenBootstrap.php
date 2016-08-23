<?php
require "../lib/payzenSoapV5ToolBox.php";

/**
 * Toolbox initialisation, using PayZen account informations
 *
 * Shop ID (shopID)
 * 8-digit shop ID provided in your Back Office (Menu: Settings > Shop > Certificates).
 *
 * Certificate (certTest || certProd)
 * provided in your Back Office (Menu: Settings > Shop > Certificates).
 *
 * Mode (ctxMode)
 * Allows to indicate the operating mode of the module (TEST or PRODUCTION)
 *
 * wsdl (platform URL)
 * the platform URL needs to be changed according to your needs (COUNTRY)
 * DEMO: https://demo.payzen.eu/vads-ws/v5?wsdl
 * France: https://secure.payzen.eu/vads-ws/v5?wsdl
 *
 * Ask support at payzen.io for your platform URL if you don't know it
 *
 * ns (body response)
 * http://v5.ws.vads.lyra.com/Header
 */

//An array of options,this parameter is optional
$soap_options = array();
$args = array(
    'shopID'       => '[***CHANGE-ME***]', // shopId
    'certTest'     => '[***CHANGE-ME***]', // certificate, TEST-version
    'certProd'     => '[***CHANGE-ME***]', // certificate, PRODUCTION-version
    'ctxMode'          => 'TEST',              // PRODUCTION || TEST
    'wsdl'          => 'https://demo.payzen.eu/vads-ws/v5?wsdl', // URL of PayZen SOAP V5 WSDL
    'ns'            => 'http://v5.ws.vads.lyra.com/Header', //ns,
);
// Toolbox initialisation, using PayZen account informations
$toolbox = new payzenSoapV5ToolBox( $args, $soap_options );

return $toolbox;