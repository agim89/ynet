<?php

  // Authorize.net API Login ID and Transaction Key 
  
  define('AUTHORIZENET_USERNAME', 'login_id');
  define('AUTHORIZENET_TRANSKEY', 'transaction_key');
  define('AUTHORIZENET_TEST_MODE', true);

  // default URL's

  define('AUTHORIZENET_URL_TEST', 'https://test.authorize.net/gateway/transact.dll');
  define('AUTHORIZENET_URL_LIVE', 'https://secure.authorize.net/gateway/transact.dll');

  // supported currency list

  $authorizenet_currencies = array("USD",
  				   "CAD",
  				   "GBP",
  				   "EUR"
  				  );
?>
