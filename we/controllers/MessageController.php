<?php
/*********
@消息回复
 *=消息表(we_message)
 *message_id	message_title	message_img	message_content	message_this
 * 消息id      	消息标题	         图片消息	  文字消息	       关键字
 *责任编辑人
 * summer
 *************/
namespace app\controllers;
use yii\web\Controller;
use yii\web\Cookie;
use yii;
use yii\web\Request;
use yii\data\Pagination;
use app\models\Message;
header('content-type:text/html;charset=utf-8');
Class MessageController extends Controller{
    public $layout='nav2.php';
    public $enableCsrfValidation = false;
//文字回复
    public function actionWen(){
        $request = Yii::$app->request->method;
        $requests = Yii::$app->request;
        $connection = \Yii::$app->db;
        //调用session
        $session = Yii::$app->session;
        $session->open();
        //echo $verify;die;
        if($request!="POST"){
            return $this->render("wen");
        }else{
            $message_title=$requests->post('message_title');
            $message_this=$requests->post('message_this');
            $message_content=$requests->post('message_content');
            // print_r($message_content);die;
            $number_id=$session->get('number_id');
            //echo $number_id;die;
            //进行单条的加入数据
            $arr = $connection->createCommand()->insert('message', [
                'message_title' => $message_title,
                'message_this' => $message_this,
                'message_content' => $message_content,
                'number_id'=>$number_id,
            ])->execute();
            if($arr){
                $this->redirect("index.php?r=message/show");
            }
        }
    }
     public function actionShow(){
           $connection = \Yii::$app->db;
           $command ['list'] =  $connection->createCommand("select * from message")->queryAll();
            return $this->render('show',$command );
       }
    //删除
    public function actionDel(){
        $request = Yii::$app->request;
        $connection = \Yii::$app->db;
        $id =  $request->get("id");
        $connection->createCommand()->delete('message', ['message_id'=>$id])->execute();
        return $this->redirect("index.php?r=message/show");
    }

    //修改
    public function actionUp(){
        $request = Yii::$app->request;
        $connection = \Yii::$app->db;
        $id =  $request->get("id");
        $re=$connection->createCommand("SELECT * FROM message WHERE message_id=$id")->queryOne();
        //print_r($re);die;
        return $this->render("inserts",['arr'=>$re]);
    }

    public function actionUpdate(){
        $request = Yii::$app->request;
        $connection = \Yii::$app->db;
        $message_title=$request->post('message_title');
        //print_r($number_name);
        $message_this=$request->post('message_this');
        $message_content=$request->post('message_content');
        $id=$request->post('id');
        $connection->createCommand()->update('message', ['message_title'=>$message_title,'message_this'=>$message_this,'message_content'=>$message_content],['message_id'=>$id])->execute();
        return $this->redirect("index.php?r=message/show");
    }


}