<?php
define('PHPFETCHER_PATH', dirname(__FILE__));//定义当前路径为路径常量，确定了以后路径引用的参考点。
//常量是一个简单值的标识符（名字）。如同其名称所暗示的，在脚本执行期间该值不能改变;
//dirname():返回所给文件的所在目录；
//__FILE__:魔法变量(预定义常量)，返回其所在的原生文件的路径，即使原生文件被包含在其他文件中，依然返回的是原生路径。

function __phpfetcher_autoload($strClassName) {
    if (substr($strClassName, 0, strlen('Phpfetcher_')) === 'Phpfetcher_') {//如果参数的前缀是Phpfetcher_
        require_once PHPFETCHER_PATH . '/' . str_replace('_', '/', $strClassName) . '.php';
    }
}
spl_autoload_register('__phpfetcher_autoload');
//__autoload():尝试加载未定义的类,参数为类名；
//spl_autoload_register(): 注册给定的函数作为 __autoload 的实现,可注册多个函数的队列。
?>
