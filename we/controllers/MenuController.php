<?php
namespace app\controllers;
use yii\caching\MemCache;
use yii\web\Controller;

class MenuController extends Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex(){
        return $this->renderPartial("form");
    }

   //接受json菜单字符串，请求微信服务器接口
    public function actionAddll(){
        //echo 1;die;
        //接受前台的json串
        $json=$_POST['json'];
        //print_r($json);die;
        $memcache = \Yii::$app->cache;
        // print_r($memcache);die;
        //$memcache->flush();die;
        $memcache['a']='This is first value';
        // $cache->set('key1', 'This is first value',60); die;
        //获取到当前操作的公众号的主键ID
        $connection = \Yii::$app->db;
        $command = $connection->createCommand('SELECT number_id FROM numbers where we_status=1');
        $post = $command->queryOne();
          //print_r($post);die;
        $ids=$post['number_id'];
        //echo $ids;die;
        //如果这个post查不出来，说明用户根本第一次使用，没有添加公众号，停止操作
        if(!$post){
            echo 1;
            exit;
        }
        //去memcache查出这个公众号所属的access_token
        //$memcache = new MemCache;
        //得到access_token
        $access_token=$memcache->get($ids);
        if($access_token==''){
            $command = $connection->createCommand('SELECT we_appid,we_appsecret FROM numbers WHERE we_status=1');
            //获取到用户正在操作中的we_AppID,p_AppSecret
            $post = $command->queryOne();
            //var_dump($post);die;
            //通过p_AppID,p_AppSecret去获取access_token

            $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$post[we_appid]&secret=$post[we_appsecret]";
            //echo $url;die;
            //https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APPID&secret=APPSECRET
            //我们的$arr是一个json字符串
            $json=file_get_contents($url);
            //我们将json字符串转换成数组
            $arr=json_decode($json,true)['access_token'];
            //echo $arr['access_token'];die;
            //如果这个数组中不是我们想要的数据，说明这个返回失败，接口调用失败，这里其实可以做的更加详细一点，不过为了省事，先简单的做
            if($arr==''){
                echo 2;
                exit;
            }
            $memcache->set($ids,$arr,3600);
            $access_token=$memcache->get($ids);
        }
        //这个url是设置菜单的微信url
        $url="https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
        $data=$json;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'post');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);1;
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);
        curl_close($ch);
        var_dump($tmpInfo);
    }
}