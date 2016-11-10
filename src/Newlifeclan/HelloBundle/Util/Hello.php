<?php
/**
 * Created by PhpStorm.
 * User: napoleon
 * Date: 2016/11/10
 * Time: 17:10
 */

namespace Newlifeclan\HelloBundle\Util;


class Hello
{
    public function name($value)
    {
        return 'Hello '.$value.'!';
    }
}