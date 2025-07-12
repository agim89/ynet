<?php
/*****************************************************************************
**        Name: sendsms
**    Function: This function is used to send SMS message to a mobile phone
**		using probasesms.com gateway
**      Inputs: $recp - Mobile number
**		$body - Message body
**		$errmsg - Pointer to error message returned by the gateway
**      Result: TRUE if API succeeded or FALSE
*****************************************************************************/
function sendsms($recp, $body, &$errmsg)
{
  // enter your probaesms.com credentials here

  $senderid = 'senderid';
  $username = 'username';
  $password = 'password';

  // clean up HTML entities

  $body = html_entity_decode($body, ENT_COMPAT, "UTF-8");

  // no recipient set, return FALSE
  if (!$recp)
  {
    $errmsg = "Invalid cell number";
    return FALSE;
  }

  // implement your own SMS gateway here
  
  $url = "http://probasesms.com/api/json/multi/res/bulk/sms";
  $fields = json_encode(array(
    "message"   => $body,
    "recipient" => array($recp),
    "senderid"  => $senderid,
    "username"  => $username,
    "password"  => $password
  ));

//  var_dump($fields);

  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => 'http://probasesms.com/api/json/multi/res/bulk/sms',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $fields,

    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json'
    ),
  ));

  $result = curl_exec($ch);
  $errorCode = curl_errno($ch);

  // process results

  if ($errorCode != 0)
  {
    $errmsg = $errorCode;
    return FALSE;
  }

  $resarr =json_decode($result);

  if ($resarr->response[0]->messagestatus == "SUCCESS")
    $res_str = "OK";
  else
    $res_str = $resarr->response;

  // log results

  syslog(LOG_INFO, "[radiusmanager] Sending SMS to " . $recp . " (" . $res_str . ")");

  // error has occured, return FALSE

  if ($res_str != "OK")
  {
    $errmsg = $res_str;
    return FALSE;
  }

  // no error, return TRUE

  return TRUE;
}
?>
