<?php 
$config = include_once('config.php');

if( isset($_POST['username']) )
    return file_get_contents('https://graph.facebook.com/v2.3/' . $_POST['username'] . '?fields=id,name&access_token=' . $config['access_token']);
} else {
	return json_encode([
		"error" => true,
		"error_text": "username_required"
	]);
}