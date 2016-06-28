<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Index;
class IndexController extends Controller{
    public $layout='nav2.php';
    public $enableCsrfValidation = false;
    public function actionIndex(){
        $model = new Index();
        $arr = "我是主页";
        return $this->render('index',['name'=>$arr]);
    }
}
