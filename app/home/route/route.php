<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/6/2
 * Time: 14:28
 */
use think\facade\Route;

//Route::get('add' , 'user/add');
//Route::get('add' , '\app\home\controller\user@add');

Route::get('add' , 'home/user/add');