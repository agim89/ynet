<?php

  // bKash merchant credentials
  
  define('BKASH_USERNAME',  'username');
  define('BKASH_PASSWORD',  'password');
  define('BKASH_APPKEY',    'appkey');
  define('BKASH_APPSECRET', 'appsecret');

  // test or live mode

  define('BKASH_TEST_MODE', true);

  // default URLs

  define('BKASH_URL_TEST', 'https://checkout.sandbox.bka.sh/v1.2.0-beta');
  define('BKASH_URL_LIVE', 'https://checkout.pay.bka.sh/v1.2.0-beta');
  define('BKASH_JS_TEST',  'https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js');
  define('BKASH_JS_LIVE',  'https://scripts.pay.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout.js');
?>
