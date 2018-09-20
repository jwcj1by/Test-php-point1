<?php
//声明页面字符集
header("content-type:text/html;charset=utf-8");
////(1)类的自动加载
spl_autoload_register(function($className){
    //将带空间的类名，转成真实的类文件路径
    //传递过来的类名为：\Frame\Libs\Db
    //类文件真实路径为：./Frame/Libs/Db.class.php
    $filename = "./".str_replace('\\','/',$className).".class.php";
    //如果类文件存在，则包含
    if(file_exists($filename)) {
        require_once($filename);
    }
});

//(2)创建数据库类的对象
//$arr = array(
//    'db_host' => 'localhost',
//    'db_user' => 'root',
//    'db_pass' => 'root',
//    'db_name' => 'itcast',
//    'charset' => 'utf8',
//);
//$db = \Frame\Libs\Db::getInstance($arr);
require_once './public/Smarty-3.1.16/libs/Smarty.class.php';
$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=php_admin;charset=utf8';
$username = 'root';
$password = 'root';
$pdo = new PDO($dsn, $username, $password);
$sql = "SELECT * FROM user";
$PDOStatement = $pdo->query($sql);
$sql_val = $PDOStatement->fetchAll(PDO::FETCH_ASSOC);

$smarty = new Smarty();
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';
$smarty->assign('sql_val', $sql_val);
$smarty->display('./application/views/home.php');
//include './application/views/home.php';


