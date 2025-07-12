<?php
  // database credentials

  define('db_host', 'localhost');				// database host
  define('db_base', 'radius');					// database name
  define('db_user', 'radius');					// database user
  define('db_psw', 'radius123');				// database password
  define('db_host_cts', 'localhost');				// database host
  define('db_base_cts', 'conntrack');				// database name
  define('db_user_cts', 'conntrack');				// database user
  define('db_psw_cts', 'conn123');				// database password
  
  // system paths and files

  define('radman_dir', '/var/www/html/radiusmanager');		// radius manager full path
  define('raddb_dir', '/usr/local/etc/raddb');			// raddb full path
  define('tftp_dir', 'tftpboot');				// tftp boot directory relative path
  define('docsis_keyfile', 'docsis_keyfile');			// docsis keyfile name
  define('docsis_template', 'docsis_template');			// docsis tftp boot file template
  define('clients_conf', 'clients.conf');			// clients.conf name
  define('dhcpd_conf', 'dhcpd.conf');				// DHCP server configuration file
  define('dhcpd_mutex', '/tmp/dhcpdmutex');			// DHCP mutex file
  define('leases_file', '/var/state/dhcp/dhcpd.leases');	// full path of DHCP leases file
  define('lang_dir', 'lang');					// folder for language files
  define('config_dir', 'config');				// folder for configuration files
  define('invoice_dir', 'invoice');				// folder for invoice files
  define('tmp_images', 'tmpimages');				// temporary image folder
  define('cnic_dir', 'cnic');					// CNIC images directory
  define('baseurl', 'http://192.168.0.3/radiusmanager');	// base URL of RM system

  // system definitions

  define('admin_user', 'admin');				// name of superuser
  define('selfreg_owner', 'admin');				// default owner of self registered accounts
  define('def_syslang', 'English');				// default system language (fallback)
  define('rootexec_psw', '12345');				// rootexec password
  define('httpd_user', 'apache');				// HTTPD user name
  define('nas_port_mt', 1700);					// global port for Mikrotik
  define('nas_port_chilli', 3779);				// global port for Chillispot
  define('nas_port_cisco', 1700);				// global port for Cisco
  define('nas_port_custom', 1700);				// global port for custom NAS
  define('hotspot_ip', 'http://10.5.7.1');			// URL of Hotspot login page
  define('no_limit_date', '2030-12-31');			// use this date for unlimited unix accounts
  define('max_card_quantity', 10000);				// the maximal number of generated cards at once
  define('cardsernum_integers', 12);				// card serial number length (for CSV export)
  define('cardseries_padding', 4);				// number of digits in card series
  define('card_pin_len', 8);					// default PIN length (4-16)
  define('card_psw_len', 4);					// default card password length (0-8)
  define('ias_pin_length', 8);					// IAS PIN code length
  define('ias_psw_length', 4);					// IAS and mobile number registration password length
  define('rndchars', '0123456789ABCDEFGHIJKLMNOPQRSTVWXYZ');	// default random characters
  define('rndcardpin', '0123456789');				// random characters in card PIN codes
  define('rndcardpass', '0123456789');				// random characters in card passwords
  define('rndstring_len', 4);					// length of verification code (1-10)
  define('max_smsnum', 3);					// max. number of card verification SMS
  define('max_pinfails', 3);					// max. number of wrong PIN codes
  define('max_verifyfails', 3);					// max. number of verification failures
  define('max_sameselfreg', 3);					// max. number of same self registered accounts
  define('quickjump_max_pages', 10);				// how many pages to display in quickjumps
  define('rows_per_page', 50);					// table rows per page
  define('csv_max_rows', 1000000);				// max. number of rows in CSV file
  define('cc_years', 5);					// how many years to display in CC expiration listboxes
  define('session_timeout', 30);				// PHP session timeout in minutes
  define('regexp_username', '/^[a-z0-9._@]+$/');		// regular expression for validating user names
  define('regexp_managername', '/^[a-z0-9._]+$/');		// regular expression for validating manager names
  define('regexp_email', '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,11})$/');	// regular expression for email validation
  define('regexp_mac', '/^[:a-z0-9._]+$/');			// regular expression for validating MACs
  define('regexp_psw', '/^[a-zA-Z0-9._]+$/');			// regular expression for validating passwords
  define('keep_connlog', 190);					// how many days to keep the connection log data
  define('keep_syslog', 190);					// how many days to keep the system log data
  define('keep_actsrv', 30);					// how many days to keep the actual service data
  define('keep_postauth', 30);					// how many days to keep the postauth log data
  define('keep_dailyacct', 30);					// how many days to keep in daily traffic log
  define('ping_timeout', 300);					// CM ping timeout ms
  define('pswact_len_email', 30);				// length of new password activation code sent by email
  define('pswact_len_sms', 8);					// length of new password activation code sent by sms
  define('newpsw_len', 4);					// length of generated password
  define('grp_dec_inv', true);					// enable grouping of decimals on invoice forms
  define('default_simuse', 1);					// default sim-use value for new users
  define('cmperthread', 25);					// number of CMs per thread in cmtspoller module
  define('apperthread', 10);					// number of APs per thread in wlanpoller module (signal query)
  define('cpeperthread', 25);					// number of CPEs per thread in wlanpoller module (RTT query)
  define('cm_community', 'private');				// CM community string
  define('colsel_itemperrow', 4);				// number of items per row in column selector
  define('cnic_width', 150);					// CNIC picture width
  define('cnicsalt', 'fejolmrf43^%$T');				// CNIC MD5 key

  // SMTP definitions

  define('smtp_relay', 'localhost');				// SMTP relay (smtp.gmail.com, localhost etc.)
  define('smtp_port', 25);					// SMTP port (Gmail uses port 465, localhost is 25)
  define('smtp_auth', false);					// SMTP authentication (Gmail requires TRUE)
  define('smtp_user', 'username');				// SMTP user name (Gmail account name)
  define('smtp_psw', 'password');				// SMTP password (Gmail password)
  define('smtp_secure', '');					// secure protocol (TLS, SSL or blank; Gmail requires TLS or SSL)
  define('smtp_charset', 'UTF-8');				// character enconding scheme
  define('smtp_debug', false);					// enable debugging (TRUE or FALSE)
  define('smtp_html', true);					// HTML mode (TRUE or FALSE)
  define('mail_from', 'admin@myisp.com');			// sender address
  define('mail_fromname', 'Administrator');			// sender name
  define('mail_newuser', 'admin@localhost');			// self registered new user notification
  define('mail_domain', 'localhost.localdomain');		// default domain name
  define('mail_usedomain', false);				// construct username@domain if no email address is defined

  // limits

  define('min_username_len', 4);				// minimal regular username length
  define('max_username_len', 32);				// maximal regular username length
  define('mac_username_len_mikrotik', 17);			// length of Mikrotik Hotspot MAC username
  define('mac_username_len_staros', 12);			// length of StarOS Hotspot MAC username
  define('min_psw_len', 4);					// minimal regular password length
  define('max_psw_len', 32);					// maximal regular password length
  define('min_pswhsmac_len', 4);				// minimal Hotspot MAC password length
  define('max_pswhsmac_len', 32);				// maximal Hotspot MAC password length
  define('mobile_minlen', 6);					// minimal allowed length of mobile number (verification)
  define('mobile_maxlen', 16);					// maximal allowed length of mobile number (verification)
  define('comment_maxlen', 30);					// displayed characters in comment field

  // card PDF export

  define('cards_per_page', 10);					// number of cards per A4 sheet
  define('username_x_pos', 45);					// username x position on classic prepaid card
  define('username_y_pos', 36);					// username y position on classic prepaid card
  define('pdfprint_expiration', true);				// PDF print valid till text
  define('pdfprint_price', true);				// PDF print price
  define('pdfprint_serial', true);				// PDF print serial number
  define('pdfprint_series', true);				// PDF print series
  define('pdfprint_descr', true);				// PDF print card service description
  define('psw_x_pos', 45);					// password x position on classic prepaid card
  define('psw_y_pos', 44);					// password y position on classic prepaid card
  define('pin_x_pos', 33);					// PIN x position on refill card
  define('pin_y_pos', 40);					// PIN y position on refill card
  define('price_x_pos', 75);					// price x position on card
  define('price_y_pos', 19);					// price y position on card
  define('date_x_pos', 53);					// valid till x position on card
  define('date_y_pos', 53);					// valid till y position on card
  define('serial_x_pos', 27);					// serial x position on card
  define('serial_y_pos', 61);					// serial y position on card
  define('series_x_pos', 54);					// series x position on card
  define('series_y_pos', 61);					// series y position on card
  define('descr_x_pos', 15);					// description x position on card
  define('descr_y_pos', 26);					// description y position on card
  define('user_font_type', 'Arial');				// pin / psw font typeface
  define('user_font_size', 14);					// pin / psw font size
  define('user_font_color', '000000');				// pin / psw font color
  define('date_font_type', 'Arial');				// date font typeface
  define('date_font_size', 10);					// date font size
  define('date_font_color', '000000');				// date font color
  define('price_font_type', 'Arial');				// price font typeface
  define('price_font_size', 10);				// price font size
  define('price_font_color', 'FFF7A1');				// price font color
  define('serial_font_type', 'Times');				// serial font typeface
  define('serial_font_size', 8);				// serial font size
  define('serial_font_color', 'CEDDFF');			// serial font color
  define('series_font_type', 'Times');				// series font typeface
  define('series_font_size', 8);				// series font size
  define('series_font_color', 'CEDDFF');			// series font color
  define('srvname_font_type', 'Arial');				// serial font typeface
  define('srvname_font_size', 12);				// serial font size
  define('srvname_font_color', 'DFEFF3');			// serial font color
  define('card_left_margin', 13);				// left margin
  define('card_top_margin', 13);				// top margin
  define('card_classic_bg_filename', 'classic_bg.png');		// classic prepaid card background picture file
  define('card_refill_bg_filename', 'refill_bg.png');		// refill card background picture file
  define('card_bg_width', 85);					// prepaid card background picture width
  define('card_bg_height', 50);					// prepaid card background picture height

  // unix executables

  define('cmd_rootexec',  '/usr/local/sbin/rootexec');		// rootexec executable
  define('cmd_rmlic',     '/usr/local/sbin/rmlic');		// rmlic executable
  define('cmd_radclient', '/usr/local/bin/radclient');		// radclient executable
  define('cmd_starutil',  '/usr/local/bin/starutil');		// starutil executable
  define('cmd_useradd',   '/usr/sbin/useradd');			// useradd executable
  define('cmd_userdel',   '/usr/sbin/userdel');			// userdel executable
  define('cmd_chmod',     '/usr/bin/chmod');			// chmod executable
  define('cmd_usermod',   '/usr/sbin/usermod');			// usermod executable
  define('cmd_passwd',    '/usr/bin/passwd');			// passwd executable
  define('cmd_edquota',   '/usr/sbin/edquota');			// edquota executable
  define('cmd_ping',      '/usr/sbin/fping');			// ping executable
  define('cmd_docsis',    '/usr/local/bin/docsis');		// docsis executable
  define('cmd_rrdtool',   '/usr/bin/rrdtool');			// rrdtool executable

  // gradient bars

  define('GDBAR_WIDTH',   50);					// gradient bar width
  define('GDBAR_HEIGHT',  3);					// gradient bar height
  define('GDBAR_BGCOLOR', '#000000');				// gradient bar background color
  define('GDBAR_RED',	  '#FF0000');				// gradient bar red color
  define('GDBAR_YELLOW',  '#FFFC00');				// gradient bar yellow color
  define('GDBAR_GREEN',   '#00FF00');				// gradient bar green color

  // SNMP

  define('SNMP_TIMEOUT', 1000000);				// SNMP timeout (microseconds)
  define('SNMP_RETRIES', 1);					// SNMP retries

  // CM specific

  define('CM_DSSCALE_MIN',    40);				// CM DS scale min
  define('CM_DSSCALE_MAX',    100);				// CM DS scale max
  define('CM_DSSIGNAL_MIN',   50);				// CM DS minimal usable signal level
  define('CM_DSSIGNAL_MAX',   80);				// CM DS maximal usable signal level
  define('CM_USSCALE_MIN',    70);				// CM US scale min
  define('CM_USSCALE_MAX',    120);				// CM US scale max
  define('CM_USSIGNAL_MIN',   85);				// CM US minimal usable signal level
  define('CM_USSIGNAL_MAX',   115);				// CM US maximal usable signal level
  define('CM_SNRDSSCALE_MIN', 10);				// CM DS SNR scale min
  define('CM_SNRDSSCALE_MAX', 35);				// CM DS SNR scale max
  define('CM_SNRUSSCALE_MIN', 10);				// CM US SNR scale min
  define('CM_SNRUSSCALE_MAX', 40);				// CM US SNR scale max
  define('CM_SNRDS_CRIT',     15);				// CM SNR DS critical level
  define('CM_SNRDS_GOOD',     20);				// CM SNR DS acceptable level
  define('CM_SNRUS_CRIT',     15);				// CM SNR US critical level
  define('CM_SNRUS_GOOD',     20);				// CM SNR US acceptable level
  
  // WLAN specific

  define('WLAN_USSCALE_MIN',  -90);				// WLAN US scale min
  define('WLAN_USSCALE_MAX',  -50);				// WLAN US scale max
  define('WLAN_PWRUS_CRIT',   -80);				// WLAN US PWR critical level
  define('WLAN_PWRUS_GOOD',   -70);				// WLAN US PWR acceptable level
  define('WLAN_SNRSCALE_MIN',  0);				// WLAN US SNR scale min
  define('WLAN_SNRSCALE_MAX',  40);				// WLAN US SNR scale max
  define('WLAN_SNRUS_CRIT',    10);				// WLAN US SNR critical level
  define('WLAN_SNRUS_GOOD',    20);				// WLAN US SNR acceptable level
  define('WLAN_CCQSCALE_MIN',  0);				// WLAN US CCQ scale min
  define('WLAN_CCQSCALE_MAX',  100);				// WLAN US CCQ scale max
  define('WLAN_CCQUS_CRIT',    20);				// WLAN US CCQ critical level
  define('WLAN_CCQUS_GOOD',    60);				// WLAN US CCQ acceptable level

  // captcha

  define('CAPTCHA_FONT',   'monofont.ttf');			// font typeface
  define('CAPTCHA_WIDTH',  120);				// image width
  define('CAPTCHA_HEIGHT', 40);					// image height
  define('CAPTCHA_LEN',    4);					// number of characters

  // graphs
  
  define('GRAPH_WIDTH',  280);					// graph width
  define('GRAPH_HEIGHT', 70);					// graph height
  define('GRAPH_COLDL',    '#00DD00');				// download color
  define('GRAPH_COLUL',    '#0000DD');				// upload color
  define('GRAPH_COLSNRDS', '#FF4E4E');				// SNR DS color
  define('GRAPH_COLSNRUS', '#6B6BEB');				// SNR US color
  define('GRAPH_COLSIGDS', '#FAB756');				// signal level DS color
  define('GRAPH_COLSIGUS', '#DD56FA');				// signal level US color
  define('GRAPH_COLRTT',   '#CCCCCC');				// RTT color base
  define('GRAPH_COLRTT0',  '#00DD00');				// RTT color loss 0%
  define('GRAPH_COLRTT5' , '#00B8FF');				// RTT color loss 5%
  define('GRAPH_COLRTT10', '#0057FF');				// RTT color loss 10%
  define('GRAPH_COLRTT15', '#5D00FF');				// RTT color loss 15%
  define('GRAPH_COLRTT20', '#7E00FF');				// RTT color loss 20%
  define('GRAPH_COLRTT50', '#DD00FF');				// RTT color loss 50%
  define('GRAPH_COLRTT95', '#FF0000');				// RTT color loss 95%
  define('GRAPH_COLCCQUS', '#FF4E4E');				// CCQ US color

  // PHP system API

  define('API_ENABLE', false);					// system API enabled
  define('API_USER', "api");					// system API user
  define('API_PASS', "api123");					// system API password

  // templates

  define('home_tpl', 'home_tpl.htm');
  define('bg_tpl', 'bg_tpl.htm');
  define('captcha_tpl', 'captcha_tpl.htm');
  define('confirmnetcashpayment_tpl', 'confirmnetcashpayment_tpl.htm');
  define('confirmpayfastpayment_tpl', 'confirmpayfastpayment_tpl.htm');
  define('confirmpayupayment_tpl', 'confirmpayupayment_tpl.htm');
  define('confirmmpesapayment_tpl', 'confirmmpesapayment_tpl.htm');
  define('mpesawait_tpl', 'mpesawait_tpl.htm');
  define('confirmeasypaypayment_tpl', 'confirmeasypaypayment_tpl.htm');
  define('confirmflutterwavepayment_tpl', 'confirmflutterwavepayment_tpl.htm');
  define('confirmpaytmpayment_tpl', 'confirmpaytmpayment_tpl.htm');
  define('confirmbkashpayment_tpl', 'confirmbkashpayment_tpl.php');
  define('confirm2copayment_tpl', 'confirm2copayment_tpl.htm');
  define('confirmundocsvimport_tpl', 'confirmundocsvimport_tpl.htm');
  define('listspecperacnt_tpl', 'listspecperacnt_tpl.htm');
  define('listspecperbw_tpl', 'listspecperbw_tpl.htm');
  define('newspecperacnt_tpl', 'newspecperacnt_tpl.htm');
  define('newspecperbw_tpl', 'newspecperbw_tpl.htm');
  define('editspecperacnt_tpl', 'editspecperacnt_tpl.htm');
  define('editspecperbw_tpl', 'editspecperbw_tpl.htm');
  define('bulkmail_tpl', 'bulkmail_tpl.htm');
  define('bulksms_tpl', 'bulksms_tpl.htm');
  define('newias_tpl', 'newias_tpl.htm');
  define('editias_tpl', 'editias_tpl.htm');

  define('mailaccrenewed_tpl', 'mailaccrenewed_tpl.htm');
  define('mailaccrenewfail_tpl', 'mailaccrenewfail_tpl.htm');
  define('mailaccverify_tpl', 'mailaccverify_tpl.htm');
  define('maildepositadded_tpl', 'maildepositadded_tpl.htm');
  define('mailforgotpsw_tpl', 'mailforgotpsw_tpl.htm');
  define('mailiasreg_tpl', 'mailiasreg_tpl.htm');
  define('mailnewpsw_tpl', 'mailnewpsw_tpl.htm');
  define('mailselfreg_tpl', 'mailselfreg_tpl.htm');
  define('mailsrvchg_tpl', 'mailsrvchg_tpl.htm');
  define('mailwarnexp_tpl', 'mailwarnexp_tpl.htm');
  define('mailwarntraf_tpl', 'mailwarntraf_tpl.htm');
  define('mailwelcomeuser_tpl', 'mailwelcomeuser_tpl.htm');

  define('smsaccrenewed_tpl', 'smsaccrenewed_tpl.txt');
  define('smsaccverify_tpl', 'smsaccverify_tpl.txt');
  define('smsdepositadded_tpl', 'smsdepositadded_tpl.txt');
  define('smspsw_tpl', 'smspsw_tpl.txt');
  define('smspswact_tpl', 'smspswact_tpl.txt');
  define('smsselfregact_tpl', 'smsselfregact_tpl.txt');
  define('smssrvchg_tpl', 'smssrvchg_tpl.htm');
  define('smswarnexp_tpl', 'smswarnexp_tpl.txt');
  define('smswarntraff_tpl', 'smswarntraff_tpl.txt');
  define('smswelcomeuser_tpl', 'smswelcomeuser_tpl.txt');

  define('receipt_tpl', 'receipt_tpl.htm');
  define('receipt_ias_tpl', 'receipt_ias_tpl.htm');
  define('payment_success_ucp_tpl', 'payment_success_ucp_tpl.htm');
  define('payment_success_ias_tpl', 'payment_success_ias_tpl.htm');
  define('payment_success_internal_tpl', 'payment_success_internal_tpl.htm');
  define('payment_failure_tpl', 'payment_failure_tpl.htm');
  define('paypal_getccdata_tpl', 'paypal_getccdata_tpl.htm');
  define('paypal_revieworder_tpl', 'paypal_revieworder_tpl.htm');
  define('paypal_std_redirect_tpl', 'paypal_std_redirect_tpl.htm');
  define('authorizenet_getccdata_tpl', 'authorizenet_getccdata_tpl.htm');
  define('invoice_tpl', 'invoice_tpl.htm');
  define('changesrvadm_tpl', 'changesrvadm_tpl.htm');
  define('postpaid_inv_completed_tpl', 'postpaidinvcompleted_tpl.htm');
  define('postpaid_billing_tpl', 'postpaidbilling_tpl.htm');
  define('confirmpostpaidbilling_tpl', 'confirmpostpaidbilling_tpl.htm');
  define('confirmintpayment_tpl', 'confirmintpayment_tpl.htm');
  define('confirmchangesrv_tpl', 'confirmchangesrv_tpl.htm');
  define('confirmcancelchangesrv_tpl', 'confirmcancelchangesrv_tpl.htm');
  define('changesrv_tpl', 'changesrv_tpl.htm');
  define('buyservice_tpl', 'buyservice_tpl.htm');
  define('buydeposit_tpl', 'buydeposit_tpl.htm');
  define('selectpaymode_tpl', 'selectpaymode_tpl.htm');
  define('adminlogin_tpl', 'adminlogin_tpl.htm');
  define('adminlogout_tpl', 'adminlogout_tpl.htm');
  define('userlogin_tpl', 'userlogin_tpl.htm');
  define('userlogout_tpl', 'userlogout_tpl.htm');
  define('entercardnum_tpl', 'entercardnum_tpl.htm');
  define('selfreg_entercodesms_tpl', 'selfregentercodesms_tpl.htm');
  define('selfreg_entercodeemail_tpl', 'selfregentercodeemail_tpl.htm');
  define('verifycard_entermobile_tpl', 'verifycardentermobile_tpl.htm');
  define('verifycard_entercode_tpl', 'verifycardentercode_tpl.htm');
  define('showfillupcard_tpl', 'showfillupcard_tpl.htm');
  define('listsrvhistory_tpl', 'listsrvhistory_tpl.htm');
  define('listsrvhistorysmall_tpl', 'listsrvhistorysmall_tpl.htm');
  define('listcardseries_tpl', 'listcardseries_tpl.htm');
  define('listrefillcards_tpl', 'listrefillcards_tpl.htm');
  define('iasselpaymode_tpl', 'iasselpaymode_tpl.htm');
  define('buyiasmain_tpl', 'buyiasmain_tpl.htm');
  define('listias_tpl', 'listias_tpl.htm');
  define('cardstats_tpl', 'cardstats_tpl.htm');
  define('confirmmakecards_tpl', 'confirmmakecards_tpl.htm');
  define('cardgen_tpl', 'cardgen_tpl.htm');
  define('editpassword_tpl', 'editpassword_tpl.htm');
  define('editinvoice_tpl', 'editinvoice_tpl.htm');
  define('stats_tpl', 'stats_tpl.htm');
  define('sysinfo_tpl', 'sysinfo_tpl.htm');
  define('sysstats_tpl', 'sysstats_tpl.htm');
  define('addcredits_tpl', 'addcredits_tpl.htm');
  define('addmoney_tpl', 'addmoney_tpl.htm');
  define('confirmaddcredits_tpl', 'confirmaddcredits_tpl.htm');
  define('creditsadded_tpl', 'creditsadded_tpl.htm');
  define('search_users_tpl', 'searchusers_tpl.htm');
  define('search_refillcards_tpl', 'searchrefillcards_tpl.htm');
  define('search_traffic_tpl', 'searchtraffic_tpl.htm');
  define('search_traffic_summary_tpl', 'searchtrafficsummary_tpl.htm');
  define('search_cts_tpl', 'searchcts_tpl.htm');
  define('search_postauth_tpl', 'searchpostauth_tpl.htm');
  define('editservice_tpl', 'editservice_tpl.htm');
  define('payiasmain_tpl', 'payiasmain_tpl.htm');
  define('adminmain_tpl', 'adminmain_tpl.htm');
  define('adminmainblank_tpl', 'adminmainblank_tpl.htm');
  define('reg_main_tpl', 'reg_main_tpl.htm');
  define('reg_newusernm_tpl', 'reg_newusernm_tpl.htm');
  define('reg_newusermb_tpl', 'reg_newusermb_tpl.htm');
  define('reg_usercreated_tpl', 'reg_usercreated_tpl.htm');
  define('passwd_main_tpl', 'passwd_main_tpl.htm');
  define('passwd_getdata_tpl', 'passwd_getdata_tpl.htm');
  define('passwd_entercode_tpl', 'passwd_entercode_tpl.htm');
  define('usermain_tpl', 'usermain_tpl.htm');
  define('usersdetails_tpl', 'usersdetails_tpl.htm');
  define('edituser_tpl', 'edituser_tpl.htm');
  define('ucp_edituser_tpl', 'ucp_edituser_tpl.htm');
  define('searchinvoices_tpl', 'searchinvoices_tpl.htm');
  define('editmanager_tpl', 'editmanager_tpl.htm');
  define('syserror_tpl', 'syserror_tpl.htm');
  define('sysmsg_tpl', 'sysmsg_tpl.htm');
  define('searchusers_tpl', 'searchusers_tpl.htm');
  define('listusers_tpl', 'listusers_tpl.htm');
  define('listusergroups_tpl', 'listusergroups_tpl.htm');
  define('editusergroup_tpl', 'editusergroup_tpl.htm');
  define('newusergroup_tpl', 'newusergroup_tpl.htm');
  define('listservices_tpl', 'listservices_tpl.htm');
  define('listmanagers_tpl', 'listmanagers_tpl.htm');
  define('listnases_tpl', 'listnases_tpl.htm');
  define('listap_tpl', 'listap_tpl.htm');
  define('newap_tpl', 'newap_tpl.htm');
  define('editap_tpl', 'editap_tpl.htm');
  define('listinvoices_tpl', 'listinvoices_tpl.htm');
  define('listonlineradius_tpl', 'listonlineradius_tpl.htm');
  define('listonlinecm_tpl', 'listonlinecm_tpl.htm');
  define('detailedtraffic_tpl', 'detailedtraffic_tpl.htm');
  define('detailedcts_tpl', 'detailedcts_tpl.htm');
  define('userinfo_tpl', 'userinfo_tpl.htm');
  define('trafficreport_tpl', 'trafficreport_tpl.htm');
  define('trafficreportdaily_tpl', 'trafficreportdaily_tpl.htm');
  define('trafficsummary_tpl', 'trafficsummary_tpl.htm');
  define('syslog_tpl', 'syslog_tpl.htm');
  define('postauth_tpl', 'postauth_tpl.htm');
  define('ctsreport_tpl', 'ctsreport_tpl.htm');
  define('confirmdeluser_tpl', 'confirmdeluser_tpl.htm');
  define('confirmdelusergroup_tpl', 'confirmdelusergroup_tpl.htm');
  define('confirmdelservice_tpl', 'confirmdelservice_tpl.htm');
  define('confirmdelias_tpl', 'confirmdelias_tpl.htm');
  define('confirmdelmanager_tpl', 'confirmdelmanager_tpl.htm');
  define('newuser_tpl', 'newuser_tpl.htm');
  define('newservice_tpl', 'newservice_tpl.htm');
  define('newmanager_tpl', 'newmanager_tpl.htm');
  define('newnas_tpl', 'newnas_tpl.htm');
  define('editnas_tpl', 'editnas_tpl.htm');
  define('confirmdelnas_tpl', 'confirmdelnas_tpl.htm');
  define('confirmdelap_tpl', 'confirmdelap_tpl.htm');
  define('listpools_tpl', 'listpools_tpl.htm');
  define('newpool_tpl', 'newpool_tpl.htm');
  define('editpool_tpl', 'editpool_tpl.htm');
  define('confirmdelpool_tpl', 'confirmdelpool_tpl.htm');
  define('listcmts_tpl', 'listcmts_tpl.htm');
  define('newcmts_tpl', 'newcmts_tpl.htm');
  define('editcmts_tpl', 'editcmts_tpl.htm');
  define('confirmdelcmts_tpl', 'confirmdelcmts_tpl.htm');
  define('adminmenu_tpl', 'adminmenu_tpl.htm');
  define('editsettings_tpl', 'editsettings_tpl.htm');
  define('redirect_tpl', 'redirect_tpl.htm');
  define('batchbilling_tpl', 'batchbilling_tpl.htm');
  define('confirmbatchbilling_tpl', 'confirmbatchbilling_tpl.htm');
  define('confirmlogout_tpl', 'confirmlogout_tpl.htm');
  define('info_tpl', 'info_tpl.htm');
  define('checkrefillcard_tpl', 'checkrefillcard_tpl.htm');
  define('email_tpl', 'email_tpl.htm');
  define('sms_tpl', 'sms_tpl.htm');
  define('bulkimport_tpl', 'bulkimport_tpl.htm');
  define('reg_terms', 'reg_terms.txt');

  // colors

  define('col_bgcolor', '#EAF1FF');			// template background color
  define('col_bgcolor0', '#E0E0E0');			// row background color #0
  define('col_bgcolor1', '#F0F0F0');			// row background color #1
  define('col_sess_active', '#95B8FF');			// active session color
  define('col_user_en', '#00E51B');			// user active
  define('col_user_dis', '#FF3E3E');			// user disabled
  define('col_user_exp', '#FFCC00');			// user expired
  define('col_card_act', '#00E51B');			// card active
  define('col_card_dis', '#FF3E3E');			// card disabled
  define('col_card_exp', '#FFCC00');			// card  expired
  define('col_nocap', '#DEE5F2');			// inactive cap color
  define('col_manager_en', '#00E51B');			// manager enabled
  define('col_manager_dis', '#FF3E3E');			// manager disabled
  define('col_service_en', '#00E51B');			// service enabled
  define('col_service_dis', '#FF3E3E');			// service disabled
  define('col_ap_en', '#00E51B');			// AP enabled
  define('col_ap_dis', '#FF3E3E');			// AP disabled
  define('col_ias_en', '#00E51B');			// IAS enabled
  define('col_ias_dis', '#FF3E3E');			// IAS disabled
  define('col_enstatip', '#000000');			// enable static IP
  define('col_disstatip', '#BBBBBB');			// disable static IP
  define('col_user_online', '#95B8FF');			// user is online
  define('col_invoice_notpaid', '#FFCC00');		// unpaid invoice
  define('col_invoice_deadline', '#FF0000');		// payment grace period expired
  define('col_series_active', '#00E51B');		// card series active
  define('col_series_partial', '#FFCC00');		// card series partially revoked
  define('col_series_revoked', '#FF3E3E');		// card series revoked
  define('col_not_verified', '#FF66FF');		// account not verified
  define('col_specperiod', '#73F086');			// special billing period

  // CSS

  define('css_cap', 'bold');				// active cap style
  define('css_nocap', 'normal');			// inactive cap style

  // images

  define('arrow_up', 'arrowup.gif');
  define('arrow_down', 'arrowdown.gif');
  define('arrow_none', 'arrownone.gif');
  define('img_paypalstd', 'paypalstd.gif');
  define('img_paypalpro', 'paypalpro.gif');
  define('img_paypalexp', 'paypalexp.gif');
  define('img_netcash', 'netcash.gif');
  define('img_authorizenet', 'authorizenet.gif');
  define('img_dps', 'dps.gif');
  define('img_2co', '2checkout.gif');
  define('img_payfast', 'payfast.gif');
  define('img_payu', 'payu.gif');
  define('img_paytm', 'paytm.gif');
  define('img_bkash', 'bkash.gif');
  define('img_custompm', 'custompm.gif');
  define('img_flutterwave', 'flutterwave.gif');
  define('img_easypay', 'easypay.gif');
  define('img_mpesa', 'mpesa.gif');

  // country list

  $countrylist = array(array('', ''),
                       array('Afghanistan', 'AFG'),
                       array('Albania', 'ALB'),
                       array('Algeria', 'DZA'),
                       array('American Samoa', 'ASM'),
                       array('Andorra', 'AND'),
                       array('Angola', 'AGO'),
                       array('Anguilla', 'AIA'),
                       array('Antarctica', 'ATA'),
                       array('Antigua and Barbuda', 'ATG'),
                       array('Argentina', 'ARG'),
                       array('Armenia', 'ARM'),
                       array('Aruba', 'ABW'),
                       array('Australia', 'AUS'),
                       array('Austria', 'AUT'),
                       array('Azerbaijan', 'AZE'),
                       array('Bahamas', 'BHS'),
                       array('Bahrain', 'BHR'),
                       array('Bangladesh', 'BGD'),
                       array('Barbados', 'BRB'),
                       array('Belarus', 'BLR'),
                       array('Belgium', 'BEL'),
                       array('Belize', 'BLZ'),
                       array('Benin', 'BEN'),
                       array('Bermuda', 'BMU'),
                       array('Bhutan', 'BTN'),
                       array('Bolivia', 'BOL'),
                       array('Bosnia and Herzegovina', 'BIH'),
                       array('Botswana', 'BWA'),
                       array('Bouvet Island', 'BVT'),
                       array('Brazil', 'BRA'),
                       array('British Indian Ocean Territory', 'IOT'),
                       array('Brunei Darussalam', 'BRN'),
                       array('Bulgaria', 'BGR'),
                       array('Burkina Faso', 'BFA'),
                       array('Burundi', 'BDI'),
                       array('Cambodia', 'KHM'),
                       array('Cameroon', 'CMR'),
                       array('Canada', 'CAN'),
                       array('Cape Verde', 'CPV'),
                       array('Cayman Islands', 'CYM'),
                       array('Central African Republic', 'CAF'),
                       array('Chad', 'TCD'),
                       array('Chile', 'CHL'),
                       array('China', 'CHN'),
                       array('Christmas Island', 'CXR'),
                       array('Cocos (Keeling) Islands', 'CCK'),
                       array('Colombia', 'COL'),
                       array('Comoros', 'COM'),
                       array('Congo', 'COG'),
                       array('Congo, the Democratic Republic of the', 'COD'),
                       array('Cook Islands', 'COK'),
                       array('Costa Rica', 'CRI'),
                       array('Cote D\'ivoire', 'CIV'),
                       array('Croatia (Hrvatska)', 'HRV'),
                       array('Cyprus', 'CYP'),
                       array('Czech Republic', 'CZE'),
                       array('Denmark', 'DNK'),
                       array('Djibouti', 'DJI'),
                       array('Dominica', 'DMA'),
                       array('Dominican Republic', 'DOM'),
                       array('Ecuador', 'ECU'),
                       array('Egypt', 'EGY'),
                       array('El Salvador', 'SLV'),
                       array('Equatorial Guinea', 'GNQ'),
                       array('Eritrea', 'ERI'),
                       array('Estonia', 'EST'),
                       array('Ethiopia', 'ETH'),
                       array('Falkland Islands (Malvinas)', 'FLK'),
                       array('Faroe Islands', 'FRO'),
                       array('Fiji', 'FJI'),
                       array('Finland', 'FIN'),
                       array('France', 'FRA'),
                       array('France, Metropolitan', 'FXX'),
                       array('French Guiana', 'GUF'),
                       array('French Polynesia', 'PYF'),
                       array('French Southern Territories', 'ATF'),
                       array('Gabon', 'GAB'),
                       array('Gambia', 'GMB'),
                       array('Georgia', 'GEO'),
                       array('Germany', 'DEU'),
                       array('Ghana', 'GHA'),
                       array('Gibraltar', 'GIB'),
                       array('Greece', 'GRC'),
                       array('Greenland', 'GRL'),
                       array('Grenada', 'GRD'),
                       array('Guadeloupe', 'GLP'),
                       array('Guam', 'GUM'),
                       array('Guatemala', 'GTM'),
                       array('Guinea', 'GIN'),
                       array('Guinea', 'GNB'),
                       array('Guyana', 'GUY'),
                       array('Haiti', 'HTI'),
                       array('Heard Island and Mcdonald Islands', 'HMD'),
                       array('Honduras', 'HND'),
                       array('Hong Kong', 'HKG'),
                       array('Hungary', 'HUN'),
                       array('Iceland', 'ISL'),
                       array('India', 'IND'),
                       array('Indonesia', 'IDN'),
                       array('Iraq', 'IRQ'),
                       array('Ireland', 'IRL'),
                       array('Israel', 'ISR'),
                       array('Italy', 'ITA'),
                       array('Jamaica', 'JAM'),
                       array('Japan', 'JPN'),
                       array('Jordan', 'JOR'),
                       array('Kazakhstan', 'KAZ'),
                       array('Kenya', 'KEN'),
                       array('Kiribati', 'KIR'),
                       array('Korea, Republic of', 'KOR'),
                       array('Kuwait', 'KWT'),
                       array('Kyrgyzstan', 'KGZ'),
                       array('Lao People\'s Democratic Republic', 'LAO'),
                       array('Latvia', 'LVA'),
                       array('Lebanon', 'LBN'),
                       array('Lesotho', 'LSO'),
                       array('Liberia', 'LBR'),
                       array('Libya', 'LBY'),
                       array('Liechtenstein', 'LIE'),
                       array('Lithuania', 'LTU'),
                       array('Luxembourg', 'LUX'),
                       array('Macao', 'MAC'),
                       array('Macedonia, the Former Yugoslav Republic of', 'MKD'),
                       array('Madagascar', 'MDG'),
                       array('Malawi', 'MWI'),
                       array('Malaysia', 'MYS'),
                       array('Maldives', 'MDV'),
                       array('Mali', 'MLI'),
                       array('Malta', 'MLT'),
                       array('Marshall Islands', 'MHL'),
                       array('Martinique', 'MTQ'),
                       array('Mauritania', 'MRT'),
                       array('Mauritius', 'MUS'),
                       array('Mayotte', 'MYT'),
                       array('Mexico', 'MEX'),
                       array('Micronesia, Federated States of', 'FSM'),
                       array('Moldova, Republic of', 'MDA'),
                       array('Monaco', 'MCO'),
                       array('Mongolia', 'MNG'),
                       array('Montenegro', 'MNE'),
                       array('Montserrat', 'MSR'),
                       array('Morocco', 'MAR'),
                       array('Mozambique', 'MOZ'),
                       array('Namibia', 'NAM'),
                       array('Nauru', 'NRU'),
                       array('Nepal', 'NPL'),
                       array('Netherlands', 'NLD'),
                       array('Netherlands Antilles', 'ANT'),
                       array('New Caledonia', 'NCL'),
                       array('New Zealand', 'NZL'),
                       array('Nicaragua', 'NIC'),
                       array('Niger', 'NER'),
                       array('Nigeria', 'NGA'),
                       array('Niue', 'NIU'),
                       array('Norfolk Island', 'NFK'),
                       array('Northern Mariana Islands', 'MNP'),
                       array('Norway', 'NOR'),
                       array('Oman', 'OMN'),
                       array('Pakistan', 'PAK'),
                       array('Palau', 'PLW'),
                       array('Palestinian Territory, Occupied', 'PSE'),
                       array('Panama', 'PAN'),
                       array('Papua New Guinea', 'PNG'),
                       array('Paraguay', 'PRY'),
                       array('Peru', 'PER'),
                       array('Philippines', 'PHL'),
                       array('Pitcairn', 'PCN'),
                       array('Poland', 'POL'),
                       array('Portugal', 'PRT'),
                       array('Puerto Rico', 'PRI'),
                       array('Qatar', 'QAT'),
                       array('Reunion', 'REU'),
                       array('Romania', 'ROU'),
                       array('Russian Federation', 'RUS'),
                       array('Rwanda', 'RWA'),
                       array('Saint Helena', 'SHN'),
                       array('Saint Kitts and Nevis', 'KNA'),
                       array('Saint Lucia', 'LCA'),
                       array('Saint Pierre and Miquelon', 'SPM'),
                       array('Saint Vincent and the Grenadines', 'VCT'),
                       array('Samoa', 'WSM'),
                       array('San Marino', 'SMR'),
                       array('Sao Tome and Principe', 'STP'),
                       array('Saudi Arabia', 'SAU'),
                       array('Senegal', 'SEN'),
                       array('Serbia', 'SRB'),
                       array('Seychelles', 'SYC'),
                       array('Sierra Leone', 'SLE'),
                       array('Singapore', 'SGP'),
                       array('Slovakia', 'SVK'),
                       array('Slovenia', 'SVN'),
                       array('Solomon Islands', 'SLB'),
                       array('Somalia', 'SOM'),
                       array('South Africa', 'ZAF'),
                       array('South Georgia and the South Sandwich Islands', 'SGS'),
                       array('Spain', 'ESP'),
                       array('Sri Lanka', 'LKA'),
                       array('Suriname', 'SUR'),
                       array('Svalbard and Jan Mayen Islands', 'SJM'),
                       array('Swaziland', 'SWZ'),
                       array('Sweden', 'SWE'),
                       array('Switzerland', 'CHE'),
                       array('Taiwan', 'TWN'),
                       array('Tajikistan', 'TJK'),
                       array('Tanzania, United Republic of', 'TZA'),
                       array('Thailand', 'THA'),
                       array('Timor', 'TLS'),
                       array('Togo', 'TGO'),
                       array('Tokelau', 'TKL'),
                       array('Tonga', 'TON'),
                       array('Trinidad and Tobago', 'TTO'),
                       array('Tunisia', 'TUN'),
                       array('Turkey', 'TUR'),
                       array('Turkmenistan', 'TKM'),
                       array('Turks and Caicos Islands', 'TCA'),
                       array('Tuvalu', 'TUV'),
                       array('Uganda', 'UGA'),
                       array('Ukraine', 'UKR'),
                       array('United Arab Emirates', 'ARE'),
                       array('United Kingdom', 'GBR'),
                       array('United States', 'USA'),
                       array('United States Minor Outlying Islands', 'UMI'),
                       array('Uruguay', 'URY'),
                       array('Uzbekistan', 'UZB'),
                       array('Vanuatu', 'VUT'),
                       array('Vatican City State (Holy See)', 'VAT'),
                       array('Venezuela', 'VEN'),
                       array('Viet Nam', 'VNM'),
                       array('Virgin Islands, British', 'VGB'),
                       array('Virgin Islands, U.S.', 'VIR'),
                       array('Wallis and Futuna Islands', 'WLF'),
                       array('Western Sahara', 'ESH'),
                       array('Yemen', 'YEM'),
                       array('Zaire', 'ZAR'),
                       array('Zambia', 'ZMB'),
                       array('Zimbabwe', 'ZWE')
  		       );  

  // states list

  $stateslist = array(array('', ''),
  		      array('-- UNITED STATES --', ''),
                      array('Alabama', 'AL'),
                      array('Alaska', 'AK'),
                      array('Arizona', 'AZ'),
                      array('Arkansas', 'AR'),
                      array('California', 'CA'),
                      array('Colorado', 'CO'),
                      array('Connecticut', 'CT'),
                      array('Delaware', 'DE'),
                      array('Florida', 'FL'),
                      array('Georgia', 'GA'),
                      array('Hawaii', 'HI'),
                      array('Idaho', 'ID'),
                      array('Illinois', 'IL'),
                      array('Indiana', 'IN'),
                      array('Iowa', 'IA'),
                      array('Kansas', 'KS'),
                      array('Kentucky', 'KY'),
                      array('Louisiana', 'LA'),
                      array('Maine', 'ME'),
                      array('Maryland', 'MD'),
                      array('Massachusetts', 'MA'),
                      array('Michigan', 'MI'),
                      array('Minnesota', 'MN'),
                      array('Mississippi', 'MS'),
                      array('Missouri', 'MO'),
                      array('Montana', 'MT'),
                      array('Nebraska', 'NE'),
                      array('Nevada', 'NV'),
                      array('New Hampshire', 'NH'),
                      array('New Jersey', 'NJ'),
                      array('New Mexico', 'NM'),
                      array('New York', 'NY'),
                      array('North Carolina', 'NC'),
                      array('North Dakota', 'ND'),
                      array('Ohio', 'OH'),
                      array('Oklahoma', 'OK'),
                      array('Oregon', 'OR'),
                      array('Pennsylvania', 'PA'),
                      array('Rhode Island', 'RI'),
                      array('South Carolina', 'SC'),
                      array('South Dakota', 'SD'),
                      array('Tennessee', 'TN'),
                      array('Texas', 'TX'),
                      array('Utah', 'UT'),
                      array('Vermont', 'VT'),
                      array('Virginia', 'VA'),
                      array('Washington', 'WA'),
                      array('West Virginia', 'WV'),
                      array('Wisconsin', 'WI'),
                      array('Wyoming', 'WY'),
                      array('-- REPUBLIC OF IRELAND --', ''),
                      array('Carlow', 'CW'),
                      array('Cavan', 'CN'),
                      array('Clare', 'CE'),
                      array('Cork', 'C'),
                      array('Donegal', 'DL'),
                      array('Dublin', 'D'),
                      array('Galway', 'G'),
                      array('Kerry', 'KY'),
                      array('Kildare', 'KE'),
                      array('Kilkenny', 'KK'),
                      array('Laois', 'LS'),
                      array('Leitrim', 'LM'),
                      array('Limerick', 'LK'),
                      array('Longford', 'LD'),
                      array('Louth', 'LH'),
                      array('Mayo', 'MO'),
                      array('Meath', 'MH'),
                      array('Monaghan', 'MN'),
                      array('Offaly', 'OY'),
                      array('Roscommon', 'RN'),
                      array('Sligo', 'SO'),
                      array('Tipperary', 'T'),
                      array('Waterford', 'WD'),
                      array('Westmeath', 'WH'),
                      array('Wexford', 'WX'),
                      array('Wicklow', 'WW'),
                      array('-- CANADA --', ''),
                      array('Alberta', ''),
                      array('British Columbia', ''),
                      array('Manitoba', ''),
                      array('New Brunswick', ''),
                      array('Newfoundland and Labrador', ''),
                      array('Northwest Territories', ''),
                      array('Nova Scotia', ''),
                      array('Nunavut', ''),
                      array('Ontario', ''),
                      array('Prince Edward Island', ''),
                      array('Quebec', ''),
                      array('Saskatchewan', ''),
                      array('Yukon Territory', ''),
                      array('-- AUSTRALIA --', ''),
                      array('Australian Capital Territory', ''),
                      array('New South Wales', ''),
                      array('Northern Territory', ''),
                      array('Queensland', ''),
                      array('South Australia', ''),
                      array('Tasmania', ''),
                      array('Victoria', ''),
                      array('Western Australia', ''),
                      array('-- ITALY --', ''),
                      array('Agrigento', 'AG'),
                      array('Alessandria', 'AL'),
                      array('Ancona', 'AN'),
                      array('Aosta', 'AO'),
                      array('Arezzo', 'AR'),
                      array('Ascoli Piceno', 'AP'),
                      array('Asti', 'AT'),
                      array('Avellino', 'AV'),
                      array('Bari', 'BA'),
                      array('Barletta-Andria-Trani', 'BT'),
                      array('Belluno', 'BL'),
                      array('Benevento', 'BN'),
                      array('Bergamo', 'BG'),
                      array('Biella', 'BI'),
                      array('Bologna', 'BO'),
                      array('Bolzano', 'BZ'),
                      array('Brescia', 'BS'),
                      array('Brindisi', 'BR'),
                      array('Cagliari', 'CA'),
                      array('Caltanissetta', 'CL'),
                      array('Campobasso', 'CB'),
                      array('Carbonia-Iglesias', 'CI'),
                      array('Caserta', 'CE'),
                      array('Catania', 'CT'),
                      array('Catanzaro', 'CZ'),
                      array('Chieti', 'CH'),
                      array('Como', 'CO'),
                      array('Cosenza', 'CS'),
                      array('Cremona', 'CR'),
                      array('Crotone', 'KR'),
                      array('Cuneo', 'CN'),
                      array('Enna', 'EN'),
                      array('Fermo', 'FM'),
                      array('Ferrara', 'FE'),
                      array('Firenze', 'FI'),
                      array('Foggia', 'FG'),
                      array('Forli-Cesena', 'FC'),
                      array('Frosinone', 'FR'),
                      array('Genova', 'GE'),
                      array('Gorizia', 'GO'),
                      array('Grosseto', 'GR'),
                      array('Imperia', 'IM'),
                      array('Isernia', 'IS'),
                      array('La Spezia', 'SP'),
                      array('L\'Aquila', 'AQ'),
                      array('Latina', 'LT'),
                      array('Lecce', 'LE'),
                      array('Lecco', 'LC'),
                      array('Livorno', 'LI'),
                      array('Lodi', 'LO'),
                      array('Lucca', 'LU'),
                      array('Macerata', 'MC'),
                      array('Mantova', 'MN'),
                      array('Massa-Carrara', 'MS'),
                      array('Matera', 'MT'),
                      array('Messina', 'ME'),
                      array('Milano', 'MI'),
                      array('Modena', 'MO'),
                      array('Monza e della Brianza', 'MB'),
                      array('Napoli', 'NA'),
                      array('Novara', 'NO'),
                      array('Nuoro', 'NU'),
                      array('Olbia-Tempio', 'OT'),
                      array('Oristano', 'OR'),
                      array('Padova', 'PD'),
                      array('Palermo', 'PA'),
                      array('Parma', 'PR'),
                      array('Pavia', 'PV'),
                      array('Perugia', 'PG'),
                      array('Pesaro e Urbino', 'PU'),
                      array('Pescara', 'PE'),
                      array('Piacenza', 'PC'),
                      array('Pisa', 'PI'),
                      array('Pistoia', 'PT'),
                      array('Pordenone', 'PN'),
                      array('Potenza', 'PZ'),
                      array('Prato', 'PO'),
                      array('Ragusa', 'RG'),
                      array('Ravenna', 'RA'),
                      array('Reggio Calabria', 'RC'),
                      array('Reggio Emilia', 'RE'),
                      array('Rieti', 'RI'),
                      array('Rimini', 'RN'),
                      array('Roma', 'RM'),
                      array('Rovigo', 'RO'),
                      array('Salerno', 'SA'),
                      array('Medio Campidano', 'VS'),
                      array('Sassari', 'SS'),
                      array('Savona', 'SV'),
                      array('Siena', 'SI'),
                      array('Siracusa', 'SR'),
                      array('Sondrio', 'SO'),
                      array('Taranto', 'TA'),
                      array('Teramo', 'TE'),
                      array('Terni', 'TR'),
                      array('Torino', 'TO'),
                      array('Ogliastra', 'OG'),
                      array('Trapani', 'TP'),
                      array('Trento', 'TN'),
                      array('Treviso', 'TV'),
                      array('Trieste', 'TS'),
                      array('Udine', 'UD'),
                      array('Varese', 'VA'),
                      array('Venezia', 'VE'),
                      array('Verbano-Cusio-Ossola', 'VB'),
                      array('Vercelli', 'VC'),
                      array('Verona', 'VR'),
                      array('Vibo Valentia', 'VV'),
                      array('Vicenza', 'VI'),
                      array('Viterbo', 'VT'),
                      array('-- Greece - Αττική --', ''),
                      array('Νομός Αττικής', ''),
                      array('-- Greece - Στερεά Ελλάδα --', ''),
                      array('Νομός Εύβοιας', ''),
                      array('Νομός Ευρυτανίας', ''),
                      array('Νομός Φωκίδας', ''),
                      array('Νομός Φθιώτιδας', ''),
                      array('Νομός Βοιωτίας', ''),
                      array('-- Greece - Κεντρική Μακεδονία --', ''),
                      array('Νομός Χαλκιδικής', ''),
                      array('Νομός Ημαθίας', ''),
                      array('Νομός Κιλκίς', ''),
                      array('Νομός Πέλλας', ''),
                      array('Νομός Πιερίας', ''),
                      array('Νομός Σερρών', ''),
                      array('Νομός Θεσσαλονίκης', ''),
                      array('-- Greece - Κρήτη --', ''),
                      array('Νομός Χανίων', ''),
                      array('Νομός Ηρακλείου', ''),
                      array('Νομός Λασιθίου', ''),
                      array('Νομός Ρεθύμνης', ''),
                      array('-- Greece - Κρήτη --', ''),
                      array('Νομός Δράμας', ''),
                      array('Νομός Έβρου', ''),
                      array('Νομός Καβάλας', ''),
                      array('Νομός Ροδόπης', ''),
                      array('Νομός Ξάνθης', ''),
                      array('-- Greece - Ήπειρος --', ''),
                      array('Νομός Άρτας', ''),
                      array('Νομός Ιωαννίνων', ''),
                      array('Νομός Πρέβεζας', ''),
                      array('Νομός Θεσπρωτίας', ''),
                      array('-- Greece - Ιόνιοι Νήσοι --', ''),
                      array('Νομός Κέρκυρας', ''),
                      array('Νομός Κεφαλληνίας', ''),
                      array('Νομός Λευκάδας', ''),
                      array('Νομός Ζακύνθου', ''),
                      array('-- Greece - Βόρειο Αιγαίο --', ''),
                      array('Νομός Χίου', ''),
                      array('Νομός Λέσβου', ''),
                      array('Νομός Σάμου', ''),
                      array('-- Greece - Πελοπόννησος --', ''),
                      array('Νομός Αρκαδίας', ''),
                      array('Νομός Αργολίδας', ''),
                      array('Νομός Κορινθίας', ''),
                      array('Νομός Λακωνίας', ''),
                      array('Νομός Μεσσηνίας', ''),
                      array('-- Greece - Νότιο Αιγαίο --', ''),
                      array('Νομός Κυκλάδων', ''),
                      array('Νομός Δωδεκανήσου', ''),
                      array('-- Greece - Θεσσαλία --', ''),
                      array('Νομός Καρδίτσας', ''),
                      array('Νομός Λάρισας', ''),
                      array('Νομός Μαγνησίας', ''),
                      array('Νομός Τρικάλων', ''),
                      array('-- Greece - Δυτική Ελλάδα --', ''),
                      array('Νομός Αχαΐας', ''),
                      array('Νομός Αιτωλοακαρνανίας', ''),
                      array('Νομός Ηλείας', ''),
                      array('-- Greece - Δυτική Μακεδονία --', ''),
                      array('Νομός Φλώρινας Φλώρινα', ''),
                      array('Νομός Γρεβενών Γρεβενά', ''),
                      array('Νομός Καστοριάς Καστοριά', ''),
                      array('Νομός Κοζάνης Κοζάνη', '')
  		      );
?>
