<?php
/*****************************************************************************
**        Name: pmcall_custom
**    Function: Prepare custom payment gateway transaction
**      Inputs: dblink - db connection handle
**		$amount - total amount to pay
**		$prodname - product name (e.g. "Hours")
**		$unitprice - price per unit
**		$qty - quantity of units
**      Result: 
*****************************************************************************/
function pmcall_custom($dblink, $amount, $prodname, $unitprice, $qty)
{
/*
  Call your own gateway here and exit the PHP program
  After accepting the online payment, the gateway should redirect the browser to customgw_return.php
  where the response code should be checked and the recharge function should be called

  Available session variables if You need to pass some of them to your custom payment gateway
  Currently 3 different payment modes are available:

    0 - UCP regular
    1 - IAS
    2 - deposit  
  
  // DO N0T ALTER THE FOLLOWING SESSION VARIABLES! They are required to complete the payment in pmgw_complete() function
  
  $_SESSION['pm_firstname'] (all)
  $_SESSION['pm_lastname'] (all)
  $_SESSION['pm_address'] (all)
  $_SESSION['pm_city'] (all)
  $_SESSION['pm_zip'] (all)
  $_SESSION['pm_country'] (all)
  $_SESSION['pm_state'] (all)
  $_SESSION['pm_email'] (all)
  $_SESSION['pm_transid'] (all)
  $_SESSION['pm_source'] (all)
  $_SESSION['pm_price'] (all)
  $_SESSION['pm_mobile'] (IAS)
  $_SESSION['pm_iasid'] (IAS)
  $_SESSION['pm_credaddmode'] (UCP)
  $_SESSION['pm_srvid'] (UCP)
  $_SESSION['pm_srvname'] (UCP)
  $_SESSION['pm_unitprice'] (UCP)
  $_SESSION['pm_amount'] (UCP, deposit)
*/

  echo "===> Call your own payment gateway from customgw_init.php <===";
  exit();
}
?>
