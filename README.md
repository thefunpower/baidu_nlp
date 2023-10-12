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

~~~
$client = get_baidu_nlp();
$text = "上海市浦东新区纳贤路701号百度上海研发中心 F4A000 张三"; 
// 调用地址识别接口
$res = $client->address($text);
~~~
 

### 开源协议 

The [MIT](LICENSE) License (MIT)