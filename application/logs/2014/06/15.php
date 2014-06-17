<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-15 14:56:49 --- EMERGENCY: WePayPermissionException [ 7002 ]: pending account cannot be updated; account owner must confirm WePay registration ~ APPPATH/vendor/wepay.php [ 269 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-15 14:56:49 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('account/get_upd...', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php(15): WePay->request('account/get_upd...', Array)
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(61): include('/mnt/hgfs/dev/w...')
#3 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/mnt/hgfs/dev/w...', Array)
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /mnt/hgfs/dev/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(61): include('/mnt/hgfs/dev/w...')
#7 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/mnt/hgfs/dev/w...', Array)
#8 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#15 {main} in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-15 16:59:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$response' (T_VARIABLE) ~ APPPATH/classes/Controller/User.php [ 55 ] in :
2014-06-15 16:59:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-15 17:00:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/classes/Controller/User.php [ 56 ] in :
2014-06-15 17:00:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-15 17:26:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The produce property does not exist in the Model_chef class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /mnt/hgfs/dev/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2014-06-15 17:26:28 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('produce')
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(79): Kohana_ORM->__get('produce')
#2 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/User.php(99): Controller_Wepayapi::create_checkout(Object(Model_chef))
#3 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#4 [internal function]: Kohana_Controller->execute()
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /mnt/hgfs/dev/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2014-06-15 17:28:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The produce property does not exist in the Model_chef class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /mnt/hgfs/dev/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2014-06-15 17:28:48 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('produce')
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(79): Kohana_ORM->__get('produce')
#2 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/User.php(99): Controller_Wepayapi::create_checkout(Object(Model_chef))
#3 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#4 [internal function]: Kohana_Controller->execute()
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /mnt/hgfs/dev/wefarm_php/modules/orm/classes/Kohana/ORM.php:600