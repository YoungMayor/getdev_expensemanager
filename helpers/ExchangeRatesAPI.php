<?php
/**
Helper function to exchange money from one currency to another,
Be sure to pass all three parameters

The error was silenced, so if your parameters are false, or your PC is
offline, the entered amount will be returned back with no error

Possible options for the second and third parameters are:
AED
ARS
AUD
BGN
BRL
BSD
CAD
CHF
CLP
CNY
COP
CZK
DKK
DOP
EGP
EUR
FJD
GBP
GTQ
HKD
HRK
HUF
IDR
ILS
INR
ISK
JPY
KRW
KZT
MXN
MYR
NOK
NZD
PAB
PEN
PHP
PKR
PLN
PYG
RON
RUB
SAR
SEK
SGD
THB
TRY
TWD
UAH
USD
UYU
VND
ZAR

(c) credits https://https://www.exchangerate-api.com/docs/php-currency-api
**/

function exchangeCurrency($amount, $baseCurrency = "USD", $targetCurrency = "EUR"){
  if (!is_numeric($amount)){
    return 0;
  }

  // Fetching JSON
  $req_url = "https://api.exchangerate-api.com/v4/latest/$baseCurrency";
  // return $req_url;
  @$response_json = file_get_contents($req_url);

  // Continuing if we got a result
  if($response_json != false) {
    // Try/catch for json_decode operation
    try {
      // Decoding
      $response_object = json_decode($response_json);

      return round(($amount * $response_object->rates->$targetCurrency), 2);
    }catch(Exception $e) {
      // Handle JSON parse error...
      // actually do nothing, the initial amount will be returned back
    }
  }
  return $amount;
}
?>
