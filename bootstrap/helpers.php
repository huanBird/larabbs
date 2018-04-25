<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/25 0025
 * Time: 19:20
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}