<?php
/*****************************************************************************
**        Name: sendsms
**    Function: This function is used to send SMS message to a mobile phone.
**		This is the old style clickatell API glue code
**      Inputs: $recp - Mobile number
**		$body - Message body
**		$errmsg - Pointer to error message returned by the gateway
**      Result: TRUE if API succeeded or FALSE
*****************************************************************************/
function sendsms($recp, $body, &$errmsg)
{
  // enter your clickatell.com credentials here

  $api_user     = "clickatell_username";
  $api_password = "clickatell_password";
  $api_id       = "clickatell_api_id";

  // clean up HTML entities

  $body = html_entity_decode($body, ENT_COMPAT, "UTF-8");

  // uncomment the following lines to see the SMS details

//  print $recp . "<br>";
//  print $body . "<br>";
//  return true;

  // implement your own SMS gateway here
  
  $body = rawurlencode($body);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://api.clickatell.com/http/sendmsg?user=$api_user&password=$api_password&api_id=$api_id&to=$recp&text=$body");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  $res = curl_exec($ch);
  curl_close($ch);

  // uncomment the following line to see the result from the SMS gateway

//  print $res;

  // log result

  if (substr($res, 0 , 4) == "ERR:")
    $res_str = $res;
  else
    $res_str = "OK";

  syslog(LOG_INFO, "[radiusmanager] Sending SMS to " . $recp . " (" . $res_str . ")");

  // error has occured, return FALSE

  if (substr($res, 0 , 4) == "ERR:")
  {
    $errmsg = $res;
    return FALSE;
  }

  // no error, return TRUE

  return TRUE;
}
?>
