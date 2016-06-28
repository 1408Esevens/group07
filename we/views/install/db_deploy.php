<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>数据库配置</title>
    <link rel="stylesheet" href="./css/stile.css"/>
</head>
<body>
    <div id="imgg">
        <p align="center">
            <img src="./common/img/56.bmp" style="float: left;margin-top: 23px; margin-left: 260px;" alt=""/>
        </p>
    </div>
    <div id="lim">
        <div class="sss">
            <h3 style="line-height: 30px; margin-left: 20px;">安装数据库</h3>
        </div>
        <div class="lkk">
            <table class="skk">
                <tr class="trs">
                    <td>数据库主机</td>
                    <td><input type="text" name="db_host" id="db_host" value="127.0.0.1"/></td>
                </tr>
                <tr class="trs">
                    <td>数据库用户</td>
                    <td><input type="text" name="db_user" id="db_user" value="root"/></td>
                </tr>
                <tr class="trs">
                    <td>数据库密码</td>
                    <td><input type="password" name="db_pwd" id="db_pwd"/></td>
                </tr>
                <tr class="trs">
                    <td>表前缀</td>
                    <td><input type="text" name="tb_prefix" id="tb_prefix"/></td>
                </tr>
                <tr class="trs">
                    <td>数据库名称</td>
                    <td><input type="text" name="db_name" id="db_name"/></td>
                </tr>
            </table>
        </div>
        <div class="sss1">
            <h3 style="line-height: 30px; margin-left: 20px;">管理选项</h3>
        </div>
        <div class="butttt">
            <table class="skk">
                <tr class="trs">
                </tr>
                <tr class="trs">
                    <td>管理员账号</td>
                    <td><input type="text" name="user_name" id="user_name" value="admin"/></td>
                </tr>
                <tr class="trs">
                    <td>管理员密码</td>
                    <td><input type="password" name="user_pwd"  id="user_pwd"/></td>
                </tr>
                <tr class="trs">
                    <td>确认密码</td>
                    <td><input type="password" name="re_pwd" id="re_pwd"/></td>
                </tr>
            </table>
        </div>
        <div class="bq">
            <p align="center" class="ass">
                <a href="javascript:void(0)" id="click"><img src="./common/img/1aa_05.jpg" alt=""/></a>
            <p>
        </div>
    </div>
</body>
</html>
<script src="./common/js/jq.js"></script>
<script>
    $("#click").click(function(){
        var db_host = $("#db_host").val()
        var db_user = $("#db_user").val()
        var db_pwd = $("#db_pwd").val()
        var tb_prefix = $("#tb_prefix").val()
        var db_name = $("#db_name").val()
        var user_name = $("#user_name").val()
        var user_pwd = $("#user_pwd").val()
        var re_pwd = $("#re_pwd").val()
        var reg_dbhost = /^(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])\.(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])\.(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])\.(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])$/;
        if(!reg_dbhost.test(db_host)){
            alert("ip地址格式不正确");//请将“日期”改成你需要验证的属性名称!
        }
        $.ajax({
            url:"index.php?r=install/db_deploy",
            type:"post",
            data:{
                db_host:db_host,
                db_user:db_user,
                db_pwd:db_pwd,
                tb_prefix:tb_prefix,
                db_name:db_name,
                user_name:user_name,
                user_pwd:user_pwd,
                re_pwd:re_pwd
            },
            success:function(data){
                if(data==1){
                    alert("安装成功")
                    location.href="index.php?r=login/login"
                }
            }
        })
    })
</script>