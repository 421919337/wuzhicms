<?php
// +----------------------------------------------------------------------
// | wuzhicms [ ��ָ������վ���ݹ���ϵͳ ]
// | Copyright (c) 2014-2015 http://www.wuzhicms.com All rights reserved.
// | Licensed ( http://www.wuzhicms.com/licenses/ )
// | Author: wangcanjia <phpip@qq.com>
// +----------------------------------------------------------------------
/**
 * ��������ļ�
 */

//���PHP����
if(PHP_VERSION < '5.2.0') die('Require PHP > 5.2.0 ');
//���嵱ǰ����վ����·��
define('WWW_ROOT',dirname(__FILE__).'/');

require './configs/web_config.php';
require COREFRAME_ROOT.'core.php';

$app = load_class('application');
$app->run();
?>