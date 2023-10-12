<?php 

function get_baidu_nlp($APP_ID = '',$API_KEY = '',$SECRET_KEY = ''){
	$APP_ID     = $APP_ID?:get_config("baidu_nlp_app_id");
	$API_KEY    = $APP_ID?:get_config("baidu_nlp_app_key");
	$SECRET_KEY = $APP_ID?:get_config("baidu_nlp_app_secret");
	$client = new AipNlp($APP_ID, $API_KEY, $SECRET_KEY); 
	return $client;
}
