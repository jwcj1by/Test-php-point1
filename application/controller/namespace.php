<?php
/**
 * Created by PhpStorm.
 * User: hasaki
 * Date: 2018/9/19
 * Time: 9:49
 */
namespace FirstNameSpace;

class Student {
    public $student_var = 456464;
    private $name = '123123';
    public function __construct()
    {
        echo "dddd{$this->name}";
    }
}
