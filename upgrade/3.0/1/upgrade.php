<?php
//+----------------------------------------------------------------------
// | wuzhicms [ ��ָ������վ���ݹ���ϵͳ ]
// | Copyright (c) 2014-2015 http://www.wuzhicms.com All rights reserved.
// | Licensed ( http://www.wuzhicms.com/licenses/ )
// | Author: wangcanjia <phpip@qq.com>
//+----------------------------------------------------------------------
defined('IN_WZ') or exit('No direct script access allowed');
//���²˵�����
load_class('cache_menu');
//  ���û�Ա��Ȩ�ޣ����˻�Ա ��Ҫ���� ���οͻ�Ա����Ҫ�ж��Ƿ���Ȩ��

ALTER TABLE `wz_content_share` ADD `push` TINYINT(1) NOT NULL DEFAULT '0';
ALTER TABLE `wz_content_share` ADD `old_id` INT(10) UNSIGNED NOT NULL DEFAULT '0';