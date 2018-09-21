<?php
/**
 * Created by PhpStorm.
 * User: hasaki
 * Date: 2018/9/20
 * Time: 9:19
 */
// 类的自动加载
spl_autoload_register(function($className){
    // 将带空间的类名，转成真实的类文件路径
    // 传递过来的类名为：\Frame\Libs\Db
    // 类文件真实路径为：./Frame/Libs/Db.class.php
    $filename = __DIR__.str_replace('\\','/', $className).".class.php";
    // 如果类文件存在，则包含
    if(file_exists($filename)) {
        require_once($filename);
    }
});