<?php
/*****************************************************************************
**        Name: sendpod_custom_nas
**    Function: Send POD packet to custom NAS type
**      Inputs: $radclient - radclient executable
**		$nasip - NAS ip addess
**		$nasport - NAS POD port
**		$nassecret - NAS shared secret
**		$username - username to disconnect
**		$framedip - IP address of user
**		$acctsessionid - session id to disconnect
**      Result: None
*****************************************************************************/
function sendpod_custom_nas($radclient, $nasip, $nasport, $nassecret, $username, $framedip, $acctsessionid)
{
  $res = shell_exec("echo User-Name=$username,Framed-IP-Address=$framedip | $radclient $nasip:$nasport disconnect '$nassecret'");
}
?>
