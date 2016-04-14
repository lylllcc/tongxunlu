<?php
/**
 * Created by PhpStorm.
 * User: yyljj
 * Date: 2016/4/14
 * Time: 22:53
 */
function mb_str_split($str){
    return preg_split('/(?<!^)(?!$)/u', $str );
}