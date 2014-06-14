<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-10 10:59:40 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/template.php [ 13 ] in /mnt/hgfs/dev/wefarm_php/application/views/template.php:13
2014-06-10 10:59:40 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/views/template.php(13): Kohana_Core::error_handler(8, 'Array to string...', '/mnt/hgfs/dev/w...', 13, Array)
#1 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(61): include('/mnt/hgfs/dev/w...')
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/mnt/hgfs/dev/w...', Array)
#3 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#10 {main} in /mnt/hgfs/dev/wefarm_php/application/views/template.php:13
2014-06-10 10:59:55 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/template.php [ 13 ] in /mnt/hgfs/dev/wefarm_php/application/views/template.php:13
2014-06-10 10:59:55 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/views/template.php(13): Kohana_Core::error_handler(8, 'Array to string...', '/mnt/hgfs/dev/w...', 13, Array)
#1 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(61): include('/mnt/hgfs/dev/w...')
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/mnt/hgfs/dev/w...', Array)
#3 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#10 {main} in /mnt/hgfs/dev/wefarm_php/application/views/template.php:13