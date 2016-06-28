<?php

/* @var $this yii\web\View */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<!--    <h1>
        <?php
/*        $arr = $name;
        for($i=0;$i<count($arr)-1;$i++){
            for($j=0;$j<count($arr)-$i-1;$j++){
                if($arr[$j]>$arr[$j+1]){
                    $test=$arr[$j+1];
                    $arr[$j+1]=$arr[$j];
                    $arr[$j]=$test;
                }
            }
        }
        print_r($arr);
         */?>
    </h1>-->
<table align="center" border="1" cellpadding="2" cellspacing="2">
    <?php
    //print_r($name);die;
    foreach($name['page'] as $k=>$v){
        ?>
        <tr>
            <td height="15"><?php echo $v['region_id']?></td>
            <td height="15"><?php echo $v['region_name']?></td>
            <td height="15"><?php echo $v['parent_id']?></td>
            <td height="15"><?php echo $v['region_type']?></td>
            <td height="15"><?php echo $v['agency_id']?></td>
        </tr>
    <?php }?>
</table>
<p align="center">
    <a href="index.php?r=index/page&page=<?php echo 1?>">首页</a>
    <a href="index.php?r=index/page&page=<?php echo $name['page_ye']-1?>">上一页</a>
    <a href="index.php?r=index/page&page=<?php echo $name['page_ye']+1?>">下一页</a>
    <a href="index.php?r=index/page&page=<?php echo $name['page_num']?>">尾页</a>
</p>
</body>
</html>