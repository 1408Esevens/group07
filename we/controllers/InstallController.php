<?php
namespace app\controllers;
use Yii;
use yii\db\mssql\PDO;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\login;
class InstallController extends Controller
{
    public function actionIndex()
    {
        $path = dirname(dirname(__FILE__));
        $path = $path . "\\" . "web\\install.lock";
        if ($path) {
            header("location:index.php?r=login/login");
        }
        $this->actionIndexs();

    }

    public function actionIndexs()
    {
        return $this->renderPartial("install");
    }

    public function actionCheck_deploy()
    {
        //操作系统
        $system = php_uname('s');
        $system = isset($system) ? $system : "不支持";
        //php版本
        $php_edition = phpversion();
        $php_detection = substr($php_edition, 0, 3);
        if ($php_detection >= "5.5" || $php_detection <= "5.4") {
            $php_edition = phpversion();
        } else {
            $php_edition = "PHP版本必须在5.4以上";
        }
        //检测是否支持GD库
        $gd = function_exists('gd_info');
        if (get_extension_funcs("gd") != "") {
            $gd = "支持";
        } else {
            $gd = "不支持";
        }
        //判断mysql数据库是否存在
        //检测目录位置
        $path = dirname(dirname(__FILE__));
        //检测文件大小
        $path_max = filesize($path);
        //判断是否pdo操作
        if (get_extension_funcs("PDO") != "") {
            $PDO = "支持";
        } else {
            $PDO = "不支持";
        }
        //判断是否支持curl操作
        if (get_extension_funcs("curl") != "") {
            $curl = "支持";
        } else {
            $curl = "不支持";
        }
        //判断是否支持数据库
        if (get_extension_funcs("mysqli") != "") {
            $mysqli = "支持";
        } else {
            $mysqli = "不支持";
        }
        //判断支持是否支持session
        if (get_extension_funcs("session") != "") {
            $session = "支持";
        } else {
            $session = "不支持";
        }
        $arp = $path . "＼" . "jiac.lo";
        if (mkdir("$arp", 0700)) {
            $privileges = "整目录可写";
            rmdir($arp);
        } else {
            $privileges = "<font color='red'>目录不可写,求修改/目录权限</font>";
        }
        $data = array(
            'php_edition' => $php_edition,
            'system' => $system,
            'jpg' => $gd,
            'png' => $gd,
            'gif' => $gd,
            'path' => $path,
            'mysql' => $mysqli,
            'curl' => $curl,
            'session' => $session,
            'path_max' => $path_max,
            'privilege' => $privileges
        );
        return $this->renderPartial("check_deploy", ['arr' => $data]);
    }

    public $enableCsrfValidation = false;

    public function actionDb_deploy()
    {
        //echo 1;die;
        $requestQ = \Yii::$app->request->method;
        if ($requestQ == "POST") {
            $login = new Login();
            $request = \Yii::$app->request->post();
            @$link = mysql_connect("$request[db_host]", "$request[db_user]", "$request[db_pwd]");
            if ($link) {
                mysql_query("create database $request[db_name]", $link);
                mysql_query("set names utf8");
                $sql = file_get_contents("we.sql");
                mysql_select_db($request['db_name']);
                $a = explode(";", $sql);
                foreach ($a as $v) {
                    mysql_query($v . ';');
                }
                $dsn = "mysql:host=$request[db_host];dbname=$request[db_name];";
                $pdo = new PDO($dsn, "$request[db_user]", "$request[db_pwd]");
                if (gettype($pdo) == "object") {
                    $path = dirname(dirname(__FILE__));
                    $path = $path . "/" . "config/db.php";
                    $myfile = fopen($path, "w");
                    $txt = "<?php
return [
    'class' => 'yii\\db\\Connection',
    'dsn' => '$dsn',
    'username' => '$request[db_user]',
    'password' => '$request[db_pwd]',
    'charset' => 'utf8',
];";
                    $str1 = "<?php
                  \$pdo=new PDO('mysql:host=$dsn;port=3306;dbname=$request[db_name]','$request[db_user]','$request[db_pwd]',array(PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8'));
                     ?>";
                        file_put_contents('./assets/abc.php', $str1);
                        $fiel = fwrite($myfile, $txt);
                        if ($fiel) {
                            $login->register_first($request);
                            $path = dirname(dirname(__FILE__));
                            $path = $path . "/" . "web/install.lock";
                            $myfiles = fopen($path, "w");
                            $test = "WE install lock";
                            $fiels = fwrite($myfiles, $test);
                            if ($fiels) {
                                echo "1";
                            }
                        }
                    }
                } else {
                    echo "数据库链接失败请重新填写";
                };
            } else {
                return $this->renderPartial('db_deploy');
            }

        }

}
