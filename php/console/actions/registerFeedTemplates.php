<div class="yui-g">
<h1>Register Feed Templates</h1>
<?php 
	global $init;
	include_once PATH_FACEBOOK.'/lib/facebook.php';
	$facebook = new Facebook($init['fbAPIKey'], $init['fbSecretKey']);
	echo PATH_TEMPLATES;
	require_once (PATH_FACEBOOK.'/classes/profileBoxes.class.php');
	$proObj=new profileBoxes($db);
	$proObj->loadFacebook($facebook);
	$proObj->registerFeedTemplates();
?>
<div class="spacer"></div><br /><br />
</div>
