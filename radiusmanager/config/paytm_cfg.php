<?php

  // Paytm merchant credentials

  define('PAYTM_MERCHANT_MID',     'your_merchant_id');
  define('PAYTM_MERCHANT_KEY',     'your_merchant_key');
  define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING');
  define('PAYTM_INDUSTRY_TYPE_ID', 'Retail');
  define('PAYTM_CHANNELID',        'WEB');

  // test or live mode

  define('PAYTM_TEST_MODE', true);

  // default URLs

  define('PAYTM_URL_TEST',   'https://securegw-stage.paytm.in/order/process');
  define('PAYTM_URL_LIVE',   'https://securegw.paytm.in/order/process');
  define('PAYTM_RETURN_URL', 'paytm_return.php');

  // other

  define('PAYTM_CUSTID_IAS', 'IAS');	// user name used in IAS orders; space character cannot be used
?>
