<?php
/**
 * wechat php test
 */

//define your token
//创建token令牌
define("TOKEN", $token);
define("ID", $id);
include_once("./assets/abc.php");
//创建微信对象
$wechatObj = new wechatCallbackapiTest();
//调用valid方法
$wechatObj->valid($pdo);
//微信类
class wechatCallbackapiTest
{
    //验证接口信息
    public function valid($pdo)
    {
        $echoStr = $_GET["echostr"];
        //valid signature , option
        if($this->checkSignature()){
            echo $echoStr;
            $this->responseMsg($pdo);
            exit;
        }
    }

    public function responseMsg($pdo)
    {
        //get post data, May be due to the different environments
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        //extract post data

        if (!empty($postStr)){
            /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
               the best way is to check the validity of xml by yourself */
            libxml_disable_entity_loader(true);
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $time = time();
            $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";
            //自动回复
            if(!empty( $keyword ))
            {
                /* $msgType = "text";
                 $contentStr = "Welcome to wechat world!";
                 $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                 echo $resultStr;*/

                //$pdo=new PDO("mysql:host=w.rdc.sae.sina.com.cn;port=3307;dbname=app_allenvea","m3n50w0o42","w443mzx1zh2xl005wz5w1h2hyhz4kl03xj0m101y",array(PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8'));
                $re=$pdo->query("select message_content from message where message_this='$keyword' and number_id= ".ID)->fetchAll();
                $msgType = "text";
                $contentStr = $re[0]["message_content"];
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            }else{
                echo "Input something...";
            }

        }else {
            echo "";
            exit;
        }
    }

    //微信对接
    private function checkSignature()
    {
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }

        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $token = TOKEN;
        $tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            return true;
        }else{
            return false;
        }
    }
}

?>