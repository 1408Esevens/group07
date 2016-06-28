<?php

namespace app\models;
use Yii;
use yii\base\Model;
class Exam extends Model{
    public function page($page=1,$num=10){
        $db = \Yii::$app->db;
        $data = $db->createCommand("SELECT * from ecs_region")->queryAll();
        $page_c = ceil(count($data)/$num);
        if($page<=0){
            $page = 1;
        }
        if($page>$page_c){
            $page=$page_c;
        }
        $start = ($page-1)*$num;
        $arrr  = $db->createCommand("SELECT * from ecs_region limit $start,$num")->queryAll();
        $arr['content']=$arrr;
        $arr['page']=$page;
        $arr['page_num']=$page_c;
        return $arr;
    }
}