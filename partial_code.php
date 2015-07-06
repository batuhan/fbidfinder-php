<?php 
/** 
*	I decided to migrate to code as Lumen route to my site.
*	So, below is the route I use. I cache every response for certain routes so that's why cache is not here.
**/

$app->get('/a/fbidfinder', function(Illuminate\Http\Request $request) use ($app){
	$username = $request->input('username', false);

	if( $username ) {
		$url = 'https://graph.facebook.com/v2.3/' . $username . '?fields=id,name&access_token=' . $config['access_token'];

		$curl = curl_init();
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => $url,
		    CURLOPT_USERAGENT => 'crawler.bt.hn version20150621'
		));
		$resp = json_decode(curl_exec($curl));
		curl_close($curl);
		if(!isset($resp->error)){
			return [
				'id' => $resp->id,
				'name' => $resp->name
			];
		} else {
			return [
				"error" => true,
				"error_text" => $resp->error->message
			];
		}
	
	} else {
		return [
			"error" => true,
			"error_text" => "username_required"
		];
	}

});
