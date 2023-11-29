# 安装

在composer.json中添加
~~~
"thefunpower/baidu_nlp": "dev-main" 
~~~

# 配置
~~~
baidu_nlp_app_id
baidu_nlp_app_key
baidu_nlp_app_secret
~~~

# 使用

[查看更多功能](https://ai.baidu.com/ai-doc/NLP/Mk6z52c9h#%E5%AE%89%E8%A3%85%E8%87%AA%E7%84%B6%E8%AF%AD%E8%A8%80%E5%A4%84%E7%90%86-php-sdk)

~~~
$client = get_baidu_nlp();
$text = "上海市浦东新区纳贤路701号百度上海研发中心 F4A000 张三"; 
// 调用地址识别接口
$res = $client->address($text);
~~~

# 收货地址

~~~
get_baidu_nlp_address($address)
~~~

|  字段   | 说明 |
|  ----  | ----  |
| province  | 省 |
| city  | 市 |
| region  | 区 |
| street  | 详细地址 |
| mobile  | 手机号 |
| name  | 姓名 | 

 


### 开源协议 

[Apache License 2.0](LICENSE)