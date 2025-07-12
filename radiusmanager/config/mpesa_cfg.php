<?php

  // MPESA merchant credentials

  define('MPESA_KEY',          'key');
  define('MPESA_SECRET',       'secret');
  define('MPESA_BUSINESSCODE', 'businesscode');
  define('MPESA_PASSKEY',      'passkey');

  // test or live mode

  define('MPESA_TEST_MODE', true);

  // default URLs

  define('MPESA_TOKENURL_TEST',   'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
  define('MPESA_PAYMENTURL_TEST', 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
  define('MPESA_TOKENURL_LIVE',   'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');
  define('MPESA_PAYMENTURL_LIVE', 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest');
  define('MPESA_CALLBACK_URL',    'https://radius.mycompany.com/mpesa_callback.php');	// worldwide reachable URL is required
?>
