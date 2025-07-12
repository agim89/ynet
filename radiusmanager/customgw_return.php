<?php
require_once "config/system_cfg.php";
require_once "paymentgw.php";

/*****************************************************************************
**        Name: customgw_return.php
**    Function: Custom payment gateway callback
**      Inputs: Result from gateway
**      Result: 
*****************************************************************************/
  session_start();

  // the following session variables are required by pmgw_complete() function

  $_SESSION['pm_result'] = "ok";		// result code from payment gateway
  $_SESSION['pm_ref']    = "324390djlk424";	// payment reference
  $_SESSION['pm_descr']  = "No error";		// error message (optional); it will be shown only if error occured

  // check the transaction result and call the payment completion function

  if ($_SESSION['pm_result'] == "ok")
    pmgw_complete(TRUE, paymode_custom); // success
  else
    pmgw_complete(FALSE, paymode_custom); // failure
?>
