<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-11 17:50:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'API' (T_STRING) ~ APPPATH/classes/Controller/Wepayapi.php [ 72 ] in :
2014-06-11 17:50:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-11 17:54:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/User.php [ 120 ] in :
2014-06-11 17:54:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-11 17:54:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/User.php [ 120 ] in :
2014-06-11 17:54:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-11 17:54:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/User.php [ 120 ] in :
2014-06-11 17:54:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-11 18:19:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'API' (T_STRING) ~ APPPATH/classes/Controller/Wepayapi.php [ 73 ] in :
2014-06-11 18:19:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-11 18:35:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The getAccessToken property does not exist in the Model_farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /mnt/hgfs/dev/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2014-06-11 18:35:33 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('getAccessToken')
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(71): Kohana_ORM->__get('getAccessToken')
#2 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/User.php(91): Controller_Wepayapi::create_checkout(Object(Model_farmer))
#3 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#4 [internal function]: Kohana_Controller->execute()
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /mnt/hgfs/dev/wefarm_php/modules/orm/classes/Kohana/ORM.php:600