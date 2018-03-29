<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// Ӧ������ļ�

// ��װ��ɺ���ɾ���˴���
if(!is_file('./Application/Install/Data/install.lock')){
    header('Location: ./install.php');
    exit;
}

// ���PHP����
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// ��������ģʽ ���鿪���׶ο��� ����׶�ע�ͻ�����Ϊfalse
define('APP_DEBUG',True);

// ����Ӧ��Ŀ¼
define('APP_PATH','./Application/');

define('BIND_MODULE', 'Home');
// ���建��Ŀ¼
define('RUNTIME_PATH','./Runtime/');

// ����ThinkPHP����ļ�
require './ThinkPHP/ThinkPHP.php';

// ��^_^ ���治��Ҫ�κδ����� ������˼�