<?php
header('content-type:textml;charset=utf-8');
//curl 模拟post请求
//初始化curl
$ch= curl_init();
//设置curl请求
$url="http://www.niurenqushi.com/app/simsimi/ajax.aspx";
curl_setopt($ch,CURLOPT_URL,$url);
//curl只返回结果 不输出
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//curl 模拟post提交
curl_setopt($ch,CURLOPT_POST,1);
//定义发送的参数
$data= array(
    'txt'=>"$keyword"
);
//定义要发送的参数
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
//执行curl
$outpost=curl_exec($ch);
//关闭curl
curl_close($ch);
echo $outpost;
