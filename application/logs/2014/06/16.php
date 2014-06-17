<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-16 11:27:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/user/account.php [ 31 ] in :
2014-06-16 11:27:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-16 17:48:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH/views/user/register.php [ 30 ] in :
2014-06-16 17:48:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-16 17:48:49 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant account_type - assumed 'account_type' ~ APPPATH/views/user/register.php [ 30 ] in /mnt/hgfs/dev/wefarm_php/application/views/user/register.php:30
2014-06-16 17:48:49 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/views/user/register.php(30): Kohana_Core::error_handler(8, 'Use of undefine...', '/mnt/hgfs/dev/w...', 30, Array)
#1 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(61): include('/mnt/hgfs/dev/w...')
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/mnt/hgfs/dev/w...', Array)
#3 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /mnt/hgfs/dev/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(61): include('/mnt/hgfs/dev/w...')
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/mnt/hgfs/dev/w...', Array)
#7 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /mnt/hgfs/dev/wefarm_php/application/views/user/register.php:30
2014-06-16 17:49:45 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant account_type - assumed 'account_type' ~ APPPATH/views/user/register.php [ 30 ] in /mnt/hgfs/dev/wefarm_php/application/views/user/register.php:30
2014-06-16 17:49:45 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/views/user/register.php(30): Kohana_Core::error_handler(8, 'Use of undefine...', '/mnt/hgfs/dev/w...', 30, Array)
#1 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(61): include('/mnt/hgfs/dev/w...')
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/mnt/hgfs/dev/w...', Array)
#3 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /mnt/hgfs/dev/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(61): include('/mnt/hgfs/dev/w...')
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/mnt/hgfs/dev/w...', Array)
#7 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /mnt/hgfs/dev/wefarm_php/application/views/user/register.php:30