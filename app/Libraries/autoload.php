<?php
/**
 * 公共方法自动加载文件.
 */
use App\Libraries\Helper;

/**
 * 实例化助手函数类.
 *
 * @return \App\Libraries\Helper
 */
function helper()
{
    return new Helper();
}
