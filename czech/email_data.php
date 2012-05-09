<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

function admin_notify_mailinglist_title()
{
return <<<EOF
Admin: Nový odběratel mailing listu
EOF;
}

function admin_notify_mailinglist()
{
return <<<EOF
Někdo se přihlásil k odběru mailing listu.

Emailová adresa: {email}
Mailing list: {mailing_list}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

function admin_notify_entry_title()
{
return <<<EOF
Admin: Vytvořen nový článek
EOF;
}

function admin_notify_entry()
{
return <<<EOF
{name} vytvořil(a) nový článek na: {weblog_name}

Nadpis článku: {entry_title}

Autor: {name}
Email: {email}

Článek najdeš na adrese:
{entry_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

function admin_notify_reg_title()
{
return <<<EOF
Admin: Registrace nového uživatele [{site_name}]
EOF;
}

function admin_notify_reg()
{
return <<<EOF
Následující osoba se zaregistrovala jako nový uživatel: {name}

Ovládací panel: {control_panel_url}

---------------------------------
{site_name}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

function admin_notify_comment_title()
{
return <<<EOF
Admin: Nový komentář v diskuzi
EOF;
}

function admin_notify_comment()
{
return <<<EOF
Někdo zaslal příspěvek do diskuze k článku na weblogu: {weblog_name}

Nadpis článku: {entry_title}

Text komentáře:
{comment}

Autor: {name}
Email: {email}
URL: {url}
Bydlisko: {location}

Komentář najdeš na adrese:
{comment_url}

---------------------------------
Smazání diskuzního příspěvku
{unwrap}{delete_link}{/unwrap}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Trackback
//--------------------------------------------------

function admin_notify_trackback_title()
{
return <<<EOF
Admin: Přijat nový trackback
EOF;
}

function admin_notify_trackback()
{
return <<<EOF
Byl přijat nový trackback k článku:
{entry_title}

Adresa článku: 
{comment_url}

Trackback byl odeslán z následujícího weblogu:
{sending_weblog_name}

ID trackbacku: {trackback_id}

-----------

Název článku:
{sending_entry_title}

URL weblogu:
{sending_weblog_url}

Zmazať:
{unwrap}{delete_link}{/unwrap}
EOF;
}
/* END */


//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

function mbr_activation_instructions_title()
{
return <<<EOF
Aktivace uživatelského účtu [{site_name}]
EOF;
}

function mbr_activation_instructions()
{
return <<<EOF
Děkujeme za registraci na webu {site_name}.

Proto, aby byl Váš uživatelský účet funkční, je zapotřebí jej aktivovat kliknutím na odkaz:
{unwrap}{activation_url}{/unwrap}

Děkujeme!


---------------------------------
{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

function forgot_password_instructions_title()
{
return <<<EOF
Resetování hesla [{site_name}]
EOF;
}

function forgot_password_instructions()
{
return <<<EOF
{name},

pokud si přeješ resetovat své původní heslo, klikni na níže uvedený odkaz:
{reset_url}

Tvé heslo bude automaticky resetováno a nové bude zasláno na Tvůj email. 
V případě, že si nepřeješ resetovat své heslo, ignoruj tento email.
Tento požadavek automaticky vyprší v průběhu 24 hodin.


---------------------------------
{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

function reset_password_notification_title()
{
return <<<EOF
Nové přihlašovací údaje [{site_name}]
EOF;
}

function reset_password_notification()
{
return <<<EOF
{name},

Tvé původní heslo bylo resetováno. Tady jsou Tvé nové přihlašovací údaje:

Přihlašovací jméno: {username}
Heslo: {password}


---------------------------------
{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

function validated_member_notify_title()
{
return <<<EOF
Uživatelský účet byl aktivován [{site_name}]
EOF;
}

function validated_member_notify()
{
return <<<EOF
{name},

Tvůj uživatelský účet byl aktivován a je připraven k používání.

Děkujeme!


---------------------------------
{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

function decline_member_validation_title()
{
return <<<EOF
Zamítnutí registrace [{site_name}]
EOF;
}

function decline_member_validation()
{
return <<<EOF
{name},

litujeme, ale registrace Vašeho uživatelského účtu na webu {site_name} byla zamítnuta.


---------------------------------
{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

function mailinglist_activation_instructions_title()
{
return <<<EOF
Aktivace mailing listu [{site_name}]
EOF;
}

function mailinglist_activation_instructions()
{
return <<<EOF
Děkujeme za přihlášení se do mailing listu "{mailing_list}"!

Prosím klikněte na následující odkaz, pokud si přeješ zařadit svou emailovou adresu do mailing listu:
{unwrap}{activation_url}{/unwrap}

Pokud si nepřeješ zařadit tvou emailovou adresu do mailing listu, ignoruj prosím tento email.

Děkujeme!


---------------------------------
{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

function comment_notification_title()
{
return <<<EOF
Nový komentář v diskuzi [{site_name}]
EOF;
}

function comment_notification()
{
return <<<EOF
Někdo zaslal příspěvek do diskuze k článku, u kterého máš nastaven odběr notifikace.

Nadpis článku: {entry_title}

Komentář najdeš na adrese:
{comment_url}

Text komentáře:
{comment}


------------

Pokud si už nepřeješ přijímat notifikace o nových komentářích, klikni na:
{notification_removal_url}


---------------------------------
{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

function admin_notify_gallery_comment_title()
{
return <<<EOF
Admin: Nový komentář v galerii
EOF;
}

function admin_notify_gallery_comment()
{
return <<<EOF
Někdo zaslal příspěvek do diskuze v galerii:
{gallery_name}

Autor: {name_of_commenter}

Nadpis článku: {entry_title}

Text komentáře:
{comment}


Komentář najdeš na adrese:
{comment_url}
EOF;
}
/* END */

//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

function gallery_comment_notification_title()
{
return <<<EOF
Nový komentář v galerii [{site_name}]
EOF;
}

function gallery_comment_notification()
{
return <<<EOF
Někdo zaslal příspěvek do diskuze k fotografii, u které odebíráš notifikace.
	
Název galerie: {gallery_name}

Komentář najdeš na adrese:
{comment_url}

Text komentáře: {comment}


------------

Pokud si už nepřeješ přijímat notifikace o nových komentářích, klikni na:
{notification_removal_url}


---------------------------------
{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

function admin_notify_forum_post_title()
{
return <<<EOF
Admin: Nový příspěvek v témě [{forum_name}]
EOF;
}

function admin_notify_forum_post()
{
return <<<EOF
{name_of_poster} zaslal příspěvek v témě v diskuzním fóru.

Název diskuzního fóra: {forum_name}

Název témy: {title}

Příspěvek najdeš na adrese:
{post_url}

------------

Informace o příspěvku:

Autor: {name_of_poster}
Nadpis: {title}
Text:
{body}


---------------------------------
{forum_name}
EOF;
}
/* END */


//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

function forum_post_notification_title()
{
return <<<EOF
Nový příspěvek v témě [{forum_name}]
EOF;
}

function forum_post_notification()
{
return <<<EOF
Někdo zaslal příspěvek do diskuze k tématu, u kterého odebíráš notifikace.

Název diskuzního fóra: {forum_name}

Název témy: {title}

Příspěvek najdeš na adrese:
{post_url}

Žádné další notifikace nebudou doručovány, pokud nenavštívíš téma.

------------

Pokud si už nepřeješ přijímat notifikace o nových příspěvcích k tomuto tématu, klikni na:
{notification_removal_url}

Informace o příspěvku:

Nadpis: {title}
Text:
{body}

---------------------------------
{forum_name}
EOF;
}
/* END */


//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

function private_message_notification_title()
{
return <<<EOF
Nový soukromý vzkaz [{site_name}]
EOF;
}

function private_message_notification()
{
return <<<EOF
{recipient_name},

{sender_name} Ti zaslal soukromý vzkaz nazvaný '{message_subject}'.

Vzkaz si můžeš přečíst po přihlášení na stránce: {site_url}


------------

Pokud si už nepřeješ přijímat notifikace o nových soukromých odkazech, vypni tuto volbu ve svém profilu.


---------------------------------
{site_name}
{site_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/

function pm_inbox_full_title()
{
return <<<EOF
Tvá soukromá schránka je plná [{site_name}]
EOF;
}

function pm_inbox_full()
{
return <<<EOF
{recipient_name},

{sender_name} se Ti pokouší zaslat soukromý vzkaz, ale bohužel Tvá schránka je přeplněná a přesahuje povolený počet zpráv.

Prosím, přihlas se k svému uživatelskému účtu a smaž zbytečné soukromé odkazy, pokud si přeješ přijímat nové.


---------------------------------
{site_name}
{site_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/

function forum_moderation_notification_title()
{
return <<<EOF
Notifikace od moderátora [{forum_name}]
EOF;
}

function forum_moderation_notification()
{
return <<<EOF
{name_of_recipient}, moderátor diskuze {moderation_action} moderoval tvoje téma.

Název témy: {title}

Téma najdeš na adrese:
{thread_url}

---------------------------------
{forum_name}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/

function forum_report_notification_title()
{
return <<<EOF
Upozornění na příspěvek [{forum_name}]
EOF;
}

function forum_report_notification()
{
return <<<EOF
{reporter_name} Tě upozorňuje na příspěvek ve fóru od autora {author}.
	
Diskuzní fórum: {forum_name}

Důvod(y), proč bylo upozornění zasláno:
{reasons}

Dodatečné poznámky od {reporter_name}:
{notes}

Příspěvek najdeš na:
{post_url}

Obsah upozorňovaného příspěvku:
{body}

---------------------------------
{forum_name}

EOF;
}
/* END */

/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/

function offline_template()
{
return <<<EOF
<html>
<head>
<title>Stránky jsou dočasně mimo provoz</title>
<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>
</head>

<body>
<div id="content">
<h1>Stránky jsou dočasně mimo provoz.</h1>
<p>Zkuste se prosím vrátit později.</p>
</div>
</body>
</html>
EOF;
}
/* END */


/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/

function message_template()
{
return <<<EOF
<html>
<head>
<meta http-equiv='content-type' content='text/html; charset={charset}' />
<title>{title}</title>
{meta_refresh}
<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>
</head>

<body>
<div id="content">
<h1>{heading}</h1>
{content}
<p>{link}</p>
</div>
</body>
</html>
EOF;
}
/* END */


/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/

function mailinglist_template()
{
return <<<EOF
{message_text}

Pokud si už nepřeješ přijímat informační zprávy, klikni prosím pro odhlášení na níže uvedený odkaz: 
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
}
/* END */

?>
