<?php
/*
 * `createPayment` example, using PayZen SOAP V5 webservices
 *
 * @version 0.5
 *
 */


require_once 'payzenBootstrap.php';


try {

    $args = array(
        'amount'    => '1299', //The amount of the transaction presented in the smallest unit of the currency (cents for Euro).
        'currency'  => '978', // An ISO 4217 numerical code of the payment currency.
        'cardNumber'    => '4970100000780000',  // customer payment or credit card number
        'expiryMonth'   => '06', // customer card expiry month
        'expiryYear'    => '2020', // customer card expiry yea
        'csc'           => '123', // customer card CSC
        'scheme'          => 'VISA', // customer card scheme
        'orderId'       => '123456789', // your order identifier
        'insuranceAmount'   => ''
    );
    // `createPayment` request sending
    $response = $toolbox->simpleCreatePayment($args);


    $responseInfo = $response->createPaymentResult->commonResponse;
    echo "<pre>Response code: {$responseInfo->responseCode}\n";
    echo "Payment status: {$response->createPaymentResult->commonResponse->transactionStatusLabel}\n";
    var_dump($response->createPaymentResult);
    echo "</pre>";


} catch (Exception $e) {

    echo '<pre>';
    echo "\n ### ERROR - Something's wrong, an exception raised during process:\n";
    echo $e;
    echo '</pre>';
}
