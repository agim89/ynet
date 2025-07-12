<?php

  // API credentials for PayPal Express Checkout and PayPal Website Payments Pro
  
  define('PAYPAL_API_USERNAME', "username");
  define('PAYPAL_API_PASSWORD', "password");
  define('PAYPAL_API_SIGNATURE', "signature");
  
  // API credentials for PayPal Website Payments Standard
  
  define("PAYPAL_USER_NAME", "username");
  define("PAYPAL_PASSWORD", "password");
  define("PAYPAL_IDENTITY_TOKEN", "token");
  define("PAYPAL_EMAIL_ADDRESS", "info@mycompany.com");
  define("PAYPAL_EWP_CERT", "certs/ewp-cert.pem");
  define("PAYPAL_EWP_KEY", "certs/ewp-key.pem");
  define("PAYPAL_EWP_CERT_ID", "cert_id");
  define("PAYPAL_CERT", "certs/paypal-cert.pem");
  define("PAYPAL_RETURN_URL", "paypal_std_return.php");

  // enable sandbox test mode
 
  define("PAYPAL_TEST_MODE", true);

  // proxy
  
  define('PAYPAL_USE_PROXY', false);		// use proxy
  define('PAYPAL_PROXY_HOST', "127.0.0.1");	// proxy host
  define('PAYPAL_PROXY_PORT', "8080");		// proxy port
  
  // other
  
  define("PAYPAL_LOCALECODE", "US");		// locale code for PayPal Express Checkout language
  define("PAYPAL_CC_MERCHANT_COUNTRY", "US");	// PayPal Website Payments Pro merchant country (US / UK)
  
  // currencies supported by PayPal Website Payments Standard and Express Checkout

  $currency_paypal_std_exp = array("AUD",
  				   "CAD",
  				   "CHF",
  				   "CZK",
  				   "DKK",
  				   "EUR",
  	                   	   "GBP",
  		    	           "HKD",
  		    	           "HUF",
  		    	           "JPY",
  		    	           "NOK",
  		    	           "NZD",
  		    	           "PLN",
  		    	           "SEK",
  		    	           "SGD",
  		    	           "USD"
   		                  );
?>
