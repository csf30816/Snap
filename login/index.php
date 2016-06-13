<?php // index.php
require_once 'openid.php';
$openid = new LightOpenID("csf30816.github.io/Snapmod/login");

$openid->identity = 'https://www.google.com/accounts/o8/id';
$openid->required = array(
  'namePerson/first',
  'namePerson/last',
  'contact/email',
);
$openid->returnUrl = 'http://csf30816.github.io/Snapmod/login/login.php'
?>

<a href="<?php echo $openid->authUrl() ?>">Login with Google</a>
