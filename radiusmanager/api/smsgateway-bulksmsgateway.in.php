<?php
/*****************************************************************************
**        Name: sendsms
**    Function: This function is used to send SMS message to a mobile phone.
**      Inputs: $recp - Mobile number
**		$body - Message body
**		$errmsg - Pointer to error message returned by the gateway
**      Result: TRUE if API succeeded or FALSE
*****************************************************************************/
function sendsms($recp, $body, &$errmsg)
{
  // enter your BulkSMS credentials here

  $api_host     = 'www.login.bulksmsgateway.in'; // regional BulkSMS.com site: bulksms.2way.co.za, bulksms.vsms.net etc.
  $api_user     = "api_username";
  $api_password = "api_password";
  $sender       = "sender_id";

  // clean up HTML entities

  $body = html_entity_decode($body, ENT_COMPAT, "UTF-8");

  // uncomment the following lines to see the SMS details

//  print $recp . "<br>";
//  print $body . "<br>";
//  return true;
  
  // implement your own SMS gateway here
  
  $body = rawurlencode($body);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://$api_host/sendmessage.php?user=$api_user&password=$api_password&mobile=$recp&sender=$sender&message=$body&type=3");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  $res = curl_exec($ch);

  // uncomment the following line to see the result from the SMS gateway

//  print $res;
//  exit;

  $curl_info = curl_getinfo($ch);
  
  // detailed error logging (httpd error log)
  
  if ($res == FALSE)
  {
    $errmsg = "sendsms cURL error: " . curl_error($ch);
    syslog(LOG_INFO, "[radiusmanager] " . $errmsg );
    return FALSE;
  }
  elseif ($curl_info['http_code'] != 200)
  {
    $errmsg = "sendsms HTTP error code: " . $curl_info['http_code'];
    syslog(LOG_INFO, "[radiusmanager] " . $errmsg );
    return FALSE;
  }
  else
  {
    $res = str_replace(str_split('{}"'), "", $res);
    $tokens = explode(",", $res);
    $errmsg = "ERR: " . $tokens[0] . ", " . $tokens[1];
  }

  curl_close($ch);

  // log result

  if ($tokens[0] == "status:failed")
    $res_str = $errmsg;
  else
    $res_str = "OK";

  syslog(LOG_INFO, "[radiusmanager] Sending SMS to " . $recp . " (" . $res_str . ")");

  // error has occured, return FALSE

  if ($tokens[0] == "status:failed")
    return FALSE;

  // no error, return TRUE

  return TRUE;
}
?>
