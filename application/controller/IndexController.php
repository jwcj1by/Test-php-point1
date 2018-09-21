<?php
/**
 * Created by PhpStorm.
 * User: hasaki
 * Date: 2018/9/21
 * Time: 17:01
 */

class IndexController
{
    public function index()
    {
        return json_encode([
            [
                'name' => 'li',
                'sex'  => 1,
            ],
            [
                'name' => 'ning',
                'sex'  => 0,
            ]
        ]);
    }
}