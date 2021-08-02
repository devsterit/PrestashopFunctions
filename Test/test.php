<?php

use Devster\Prestaservice\PrestashopFunctions;

require( 'PrestashopFunctions.php' );

$id_order   = //'ORDER ID TO UPDATE ';
$orderState = //'ORDER STATE TO UPDATE ';




$prestashopParameter = array(
          "prestashop_ws_url" => "PRESTASHOP ECOMMERCE URL" ,
          "prestashop_ws_key" => "PRESTASHOP AUTH KEY",
          "debug" => "ACTIVATE/DEACTIVATE DEBUG"
);





PrestashopFunctions::updateOrderOnPrestashopWebSite(
                      $prestashopParameter[ 'prestashop_ws_url' ],
                      $prestashopParameter[ 'webServiceKey' ],
                      $prestashopParameter[ 'debug' ],
                      $id_order,
                      $orderState
);
