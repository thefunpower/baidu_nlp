<?php 
/**
* 识别收货地址 
*/
function get_baidu_nlp_address($address,$is_ori = false){
	$client = get_baidu_nlp();  
	$res = $client->address($address); 
	if($res['city']){
		if($is_ori){
			return $res;
		}
		$new = [];
		$province = $res['province'];
		$in = [
			'北京市',
			'天津市',
			'上海市',
			'重庆市',
		];
		if(in_array($province,$in)){
			$province = str_replace("市","",$province);
		}
		$new['province'] = $province;
		$new['city']   = $res['city'];
		$new['region'] = $res['county'];
		$new['street'] = $res['detail'];
		$new['mobile'] = $res['phonenum']; 
		$new['name'] = $res['person'];  
		return $new;	
	}else{
		return;
	}
}

/**
* 初始化
*/
function get_baidu_nlp($APP_ID = '',$API_KEY = '',$SECRET_KEY = ''){
	static $baidu_nlp_init;
	$APP_ID     = $APP_ID?:get_config("baidu_nlp_app_id");
	$API_KEY    = $API_KEY?:get_config("baidu_nlp_app_key");
	$SECRET_KEY = $SECRET_KEY?:get_config("baidu_nlp_app_secret");
	if(!$APP_ID || !$API_KEY || !$SECRET_KEY){
		return json_error(['msg'=>'请正确配置 baidu_nlp_app_id  baidu_nlp_app_key  baidu_nlp_app_secret']);
		exit;
	}
	$key = $APP_ID.$API_KEY;
	if($baidu_nlp_init[$key]){
		return $baidu_nlp_init[$key];
	}
	return $baidu_nlp_init[$key] = new AipNlp(trim($APP_ID), trim($API_KEY), trim($SECRET_KEY));  
}
