<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Index extends Model{
    public function page($page=1,$num=5){
        $db = \Yii::$app->db;
        $D=$db->createCommand("SELECT * from ecs_region ");
        $page_count=count($D->queryAll());
        $page_num=ceil($page_count/$num);
        if($page<=0){
            $page=1;
        }
        if($page>$page_num){
            $page=$page_num;
        }
        $start = ($page-1)*$num;
        $ar=$db->createCommand("SELECT * from ecs_region limit $start,$num");
        $data=$ar->queryAll();
        $arr['page']=$data;
        $arr['page_ye']=$page;
        $arr['page_num']=$page_num;
        return $arr;
    }

    public function ddd($data){
        $db = \Yii::$app->db;
        $data=$db->createCommand("SELECT * from ecs_region where region_name = '$data'");
        $datas=$data->queryONE();
        $d=$db->createCommand("SELECT * from ecs_region where parent_id = '$datas[region_id]'");
        $da=$d->queryAll();
        return $da;
    }
    public function form(){

    }
}