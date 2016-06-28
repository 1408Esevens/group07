<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>检测配置</title>
</head>
<link rel="stylesheet" href="./css/stile.css"/>
<body>
<div id="imgg">
    <p align="center">
        <img src="./common/img/34.bmp" style="float: left;margin-top: 23px; margin-left: 260px;" alt=""/>
    </p>
</div>
<div  id="lim">
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">服务器信息</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">参数　　　　　　　　　　　　　　值</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">服务器操作系统　　　　　　　　　<?php echo $arr['system']?></h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">web服务器环境　　　　　　　　　Apache2.4</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">php版本　　　　　　　　　　　　<?php echo $arr['php_edition']?></h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">程序安装目录　　　　　　　　　　<?php echo $arr['path']?></h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">磁盘空间　　　　　　　　　　　　<?php echo $arr['path_max']."MB";?></h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">上传限制　　　　　　　　　　　　<?php echo "2M";?></h4>
    </div>
    <div class="middle">
        <p style="margin-left: 10px;"><font color="#4ca1d4">php环境要求必须满足下列所有条件，否则系统或系统部分功能将无法使用。</font></p>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">php环境需要</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">选项　　　　　　　　　　　　　　要求　　　　　　　状态</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">php版本　　　　　　　　　　　　<?php echo $arr['php_edition']?>　　　　　　　√</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">mysql　　　　　　　　　　　　　<?php echo $arr['mysql']?>　　　　　　　　√</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">PDO_MYSQL　　　　　　　　     &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $arr['mysql']?>　　　　　　　　√</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">CURL　　　　　　　　　　　　　 <?php echo $arr['curl']?>　　　　　　　　√</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">openssl　　　　　　　　　　　　支持　　　　　　　　√</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">GD2　　　　　　　　　　　　　　<?php echo $arr['jpg'];?>　　　　　　　　√</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">目录权限监控</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">目录　　　　　　　　　　　　　　要求　　　　　　　　　　状态</h4>
    </div>
    <div class="top">
        <h4 style="margin-left: 15px; margin-bottom: 8px;">/　　　　　　　　　　　　　　　 <?php if($arr['privilege']=="整目录可写"){ echo $arr['privilege']; }else{ echo $arr['privilege']; }?>　　　　　　　　<?php if($arr['privilege']=="整目录可写"){ echo "√";}else{ echo "×";}?></h4>
    </div>
    <div class="bq">
        <p align="center" class="ass">
            <?php if($arr['privilege']=="整目录可写"){
                echo '<a href="index.php?r=install/db_deploy"><img src="./common/img/1aa_05.jpg" alt=""/></a>';
            }else{
                echo '<a href="index.php?r=install/index"><img src="./common/img/1aa_03.jpg" alt=""/></a>';
            }
            ?>
        </p>
    </div>
</div>
</body>
</html>