<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\filters\Cors;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\login;
class LoginController extends Controller{
    public $enableCsrfValidation = false;
    //注册页面
    public function actionRegister(){
        $Login = new login();
        $requestQ = \Yii::$app->request;
        $data = $Login->register($requestQ->post());
        echo $data;
    }
    //默认登录页面
    public function actionLogin(){
        $path = dirname(dirname(__FILE__));
        $path = $path."\\"."web\\install.lock";
        if(!file_exists($path)){
            $this->redirect("index.php?r=install/indexs");
        }else{
            //判断用户以什么方式提交
            //** 如果是post验证用户名密码 */
            //如果没有登录显示页面
            $request = \Yii::$app->request->method;
            $requestQ = \Yii::$app->request;
            //echo $request;
            if($request=="POST"){
                //接收用户提交数据判断验证
                $Login = new login();
                $name = $requestQ->post('username');
                $pwd  = $requestQ->post('password');
                $data = $Login->login($name,$pwd);
                echo $data;
            }else{
                return $this->renderAjax('login');
            }
        }
    }
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'maxLength' => 5,
                'minLength' => 5
            ],
        ];
    }
}