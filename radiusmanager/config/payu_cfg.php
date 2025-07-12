<?php

  // PayU merchant credentials

  define('PAYU_KEY',  'key');	// sandbox key 'gtKFFx'
  define('PAYU_SALT', 'salt');	// sandbox salt '4R38IvwiV57FwVpsgOvTXBdLE4tHUXFW'

  // test or live mode

  define('PAYU_TEST_MODE', true);

  // default URLs

  define('PAYU_URL_TEST',   'https://test.payu.in/_payment');
  define('PAYU_URL_LIVE',   'https://secure.payu.in/_payment');
  define('PAYU_RETURN_URL', 'payu_return.php');
?>