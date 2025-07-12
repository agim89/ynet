<?php

  // PayFast merchant credentials

  define('PAYFAST_MERCHANT_ID',  'your_merchant_id');	// test merchant id:  10000103
  define('PAYFAST_MERCHANT_KEY', 'your_merchant_key');	// test merchant key: 479f49451e829
  define('PAYFAST_PDT_KEY',      'your_pdt_key');	// test pdt key:      0a1e2e10-03a7-4928-af8a-fbdfdfe31d43

  // test or live mode

  define('PAYFAST_TEST_MODE', true);

  // API URL

  define('PAYFAST_URL_TEST', 'sandbox.payfast.co.za');
  define('PAYFAST_URL_LIVE', 'www.payfast.co.za');
  
  // PayFast WEB language
  
  define('PAYFAST_LANG', 'eng');
  
  // return URL
  
  define("PAYFAST_RETURN_URL", "payfast_return.php");
?>
