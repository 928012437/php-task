<?php
/**
 * PHP定时任务
 * @author wuquanyao <git@yeahphp.com>
 * @link http://www.yeahphp.com
 */

/**
 * 任务列表
 * 格式:[执行间隔秒数, 要执行的命令]
 */
return
[
    //每隔1秒输出当前系统日期
    [1, "/www/wdlinux/phps/56/bin/php /www/web/zhongguoyilianbao_com/public_html/addons/ewei_shopv2/core/web/qianggou/test.php"],
    //每隔5秒输出PHP-FPM运行情况
    // [5, "ps aux | grep 'php-fpm'"],
];
