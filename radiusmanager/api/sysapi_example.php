<?php

  // call RM API

//  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=new_user&username=user1&password=abcd&dlbytes=10&ulbytes=20&totalbytes=30&expiry=2024-11-3&onlinetime=10&enabled=1&acctype=0&srvid=3&simuse=2&usemacauth=0&mac=11:22:33:44:55:66&maccm=44:33:22:11:22:33&groupid=3&custattr=abc&owner=manager1&staticipcm=1.2.3.4&staticipcpe=4.3.2.1&ipmodecm=0&ipmodecpe=0&credits=999&contractid=a233&contractvalid=2025-01-01&firstname=janos&lastname=jonas&company=mycomp&address=oak&city=pittsburg&zip=15432&country=UAS&state=FL&phone=83245313361&mobile=16213476&email=abc@gmail.com&comment=mycomment&taxid=id43&gpslong=123&gpslat=543&lang=English&cnic=cnic1321");
//  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=edit_user&username=user&password=abcd");
//  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=del_user&username=user1");
//  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=get_userdata&username=user");
//  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=send_pod&username=user");
//  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=add_credits&username=user&expiry=1&unit=day");
//  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=get_remaining&username=user");
//  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=send_sms&username=user");
//  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=send_email&recp=info@dmasoftlab.com&subj=test&body=test_msg");
  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=get_srv&srvid=3");
//  $ch = curl_init("http://192.168.0.3/radiusmanager/api/sysapi.php?apiuser=api&apipass=api123&q=get_refillcard&pin=11799406");

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  curl_setopt($ch, CURLOPT_BINARYTRANSFER, TRUE);
  $json = curl_exec($ch);

  // decode result string

  $res = json_decode($json, TRUE);
  print_r($res);

  // get result code

  if ($res[0] == 0) // 0 - SUCCESS, 1 - FAILURE
  {
    print "Success!<br>";
//    print $res[1]['expiry'];
  }
  else
    print $res[1];
?>
