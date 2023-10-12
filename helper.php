<?php 


function get_baidu_nlp($APP_ID = '',$API_KEY = '',$SECRET_KEY = ''){
	$APP_ID     = $APP_ID?:get_config("baidu_nlp_app_id");
	$API_KEY    = $APP_ID?:get_config("baidu_nlp_app_key");
	$SECRET_KEY = $APP_ID?:get_config("baidu_nlp_app_secret");
	if(!$APP_ID || !$API_KEY || !$SECRET_KEY){
		die("请正确配置 baidu_nlp_app_id  baidu_nlp_app_key  baidu_nlp_app_secret");
	}
	$client = new AipNlp(trim($APP_ID), trim($API_KEY), trim($SECRET_KEY)); 
	return $client;
}
