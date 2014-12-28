<?php
//-----------------------------------------------------------------------------------
// PARAMETRI DI CONFIGURAZIONE GENERALE
//-----------------------------------------------------------------------------------
$emailAdmin = "veennarak@hotmail.com";  // email admin where notices are sent
$urlWebSite = "http://www.devlucky.com/i_am_supat/"; //Website URL that is added to the bottom of emails sent from contact form

$headers_mail = "From: Company Name <veennarak@hotmail.com>\nReply-to:veennarak@hotmail.com";
define("OGGETTO_MAIL", "Contact from the site.");

########################################################################
/*#################		TEMPLATE MAIL		##########################*/
########################################################################
$str_contenuto_email = "
You are receiving this email because someone used the card of contacts on your website.

Here the personal information that we have contacted:

-------------------------------------------------------------
Name and Surname: {name}
E-mail: {mail}
IP Address: {ip}
-------------------------------------------------------------

This is the user's request:

-------------------------------------------------------------
Message: {corpo}
-------------------------------------------------------------

{url}";
?>