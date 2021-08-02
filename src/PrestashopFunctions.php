<?php

namespace Devster\Prestaservice;



class PrestashopFunctions
{



  public static function updateOrderOnPrestashopWebSite( $prestashopApi, $webServiceKey, $debug, $id_order, $orderState ){

      try {
          // creating webservice access
          $webService = new PrestaShopWebservice( $prestashopApi, $webServiceKey, $debug );

          // call to retrieve customer with ID 2
          $xml = $webService->get([
              'resource' => 'orders',
              'id' => $id_order, // Here we use hard coded value but of course you could get this ID from a request parameter or anywhere else
          ]);

          // print_r( $xml );

          $orderFields = $xml->order->children();
          $orderFields->current_state = $orderState;
          // print_r( $customerFields );

      	$updatedXml = $webService->edit([
      	    'resource' => 'orders',
      	    'id' => (int) $orderFields->id,
      	    'putXml' => $xml->asXML(),
      	]);
      	$orderFields = $updatedXml->order->children();
      	// echo 'order updated with ID ' . $orderFields->id . PHP_EOL;
          // $response = json_encode( array( 'response' => 'order ' . $id_order . ' updated with Status ' . $orderState ) );
          // echo $response;


      } catch ( PrestaShopWebserviceException $ex ) {
          // Shows a message related to the error
          // echo 'Other error: <br />' . $ex->getMessage();
      }

  }

































}
