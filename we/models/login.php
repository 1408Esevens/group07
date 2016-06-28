<?php

namespace app\models;

use Yii;
use yii\base\Model;
class Login extends Model{
    //验证码..
    public $verifyCode;
    public function rules()
    {
        return [
            ['verifyCode', 'required'],
            ['verifyCode', 'captcha'],
        ];
    }
    //验证注册信息
    public function register($post){
        //return $post;
        if($post['pwd']!=$post['repwd']){
            return "密码不一致";
        }
        if(strlen($post['tell'])!=11){
            return "手机号长度不正确";
        }
        $pwd = md5($post['pwd']);
        $db = \Yii::$app->db;
        $data = $db->createCommand("insert into we_user (user_name,user_pwd,tell,email) VALUES ('$post[name]','$pwd','$post[tell]','$post[email]')")->execute();
        if($data){
            return 1;
        }else{
            return 2;
        }
    }
    //验证登录信息
    public function login($name,$pwd){
        $db = \Yii::$app->db;
        $pwd = md5($pwd);
        $arr = $db->createCommand("select user_name from we_user WHERE user_name='$name' and user_pwd='$pwd'")->queryAll();
        if($arr){
            return 1;
        }else{
            return 2;
        }
    }
    public function register_first($data){
        $pwd = md5($data['user_pwd']);
        $db = \Yii::$app->db;
        $data = $db->createCommand("insert into we_user (user_name,user_pwd) VALUES ('$data[user_name]','$pwd')")->execute();
        if($data){
            return 1;
        }else{
            return 2;
        }
    }
}