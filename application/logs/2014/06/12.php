<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-06-12 11:25:00 --- EMERGENCY: WePayRequestException [ 7002 ]: This access_token is already approved. ~ APPPATH/vendor/wepay.php [ 266 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 11:25:00 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('user/resend_con...', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(54): WePay->request('user/resend_con...', Array)
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Wepayapi->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wepayapi))
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 12:38:58 --- EMERGENCY: Exception [ 6 ]: cURL error while making API call to WePay: name lookup timed out ~ APPPATH/vendor/wepay.php [ 253 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 12:38:58 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('checkout/create...', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(84): WePay->request('checkout/create...', Array)
#2 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/User.php(91): Controller_Wepayapi::create_checkout(Object(Model_farmer))
#3 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#4 [internal function]: Kohana_Controller->execute()
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 13:54:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factor() ~ APPPATH/classes/Controller/User.php [ 112 ] in :
2014-06-12 13:54:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-12 13:55:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factor() ~ APPPATH/classes/Controller/User.php [ 113 ] in :
2014-06-12 13:55:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-12 13:56:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method View::factor() ~ APPPATH/classes/Controller/User.php [ 113 ] in :
2014-06-12 13:56:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-12 13:56:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/user/manage.php [ 39 ] in :
2014-06-12 13:56:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-12 14:45:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH/views/user/manage.php [ 5 ] in :
2014-06-12 14:45:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-12 14:45:16 --- EMERGENCY: WePayPermissionException [ 1002 ]: could not parse authorization header, a valid access_token is required ~ APPPATH/vendor/wepay.php [ 269 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 14:45:16 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('account/get_upd...', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php(7): WePay->request('account/get_upd...', Array)
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
2014-06-12 14:45:45 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant DEV_5a96bc4015736503af8afa58d21644648b165db0c2090821d9c33a63798c6fbc - assumed 'DEV_5a96bc4015736503af8afa58d21644648b165db0c2090821d9c33a63798c6fbc' ~ APPPATH/views/user/manage.php [ 2 ] in /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php:2
2014-06-12 14:45:45 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', '/mnt/hgfs/dev/w...', 2, Array)
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
#14 {main} in /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php:2
2014-06-12 14:46:02 --- EMERGENCY: WePayPermissionException [ 7002 ]: pending account cannot be updated; account owner must confirm WePay registration ~ APPPATH/vendor/wepay.php [ 269 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 14:46:02 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('account/get_upd...', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php(7): WePay->request('account/get_upd...', Array)
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
2014-06-12 15:12:11 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/user/manage.php [ 9 ] in :
2014-06-12 15:12:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-12 15:13:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/user/manage.php [ 9 ] in :
2014-06-12 15:13:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-12 15:13:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/user/manage.php [ 9 ] in :
2014-06-12 15:13:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-12 17:26:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/user/manage.php [ 10 ] in /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php:10
2014-06-12 17:26:30 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/dev/w...', 10, Array)
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
#14 {main} in /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php:10
2014-06-12 17:34:17 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/user/manage.php [ 10 ] in /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php:10
2014-06-12 17:34:17 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/dev/w...', 10, Array)
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
#14 {main} in /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php:10
2014-06-12 17:35:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$redirect_uri ~ APPPATH/classes/Controller/Wepayapi.php [ 42 ] in /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php:42
2014-06-12 17:35:29 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/dev/w...', 42, Array)
#1 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Wepayapi->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wepayapi))
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php:42
2014-06-12 17:36:17 --- EMERGENCY: WePayRequestException [ 1003 ]: redirect_uri must be a full uri (ex https://www.wepay.com ) ~ APPPATH/vendor/wepay.php [ 266 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:36:17 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('user/register/', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(40): WePay->request('user/register/', Array)
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Wepayapi->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wepayapi))
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:36:18 --- EMERGENCY: WePayRequestException [ 1003 ]: redirect_uri must be a full uri (ex https://www.wepay.com ) ~ APPPATH/vendor/wepay.php [ 266 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:36:18 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('user/register/', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(40): WePay->request('user/register/', Array)
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Wepayapi->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wepayapi))
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:37:12 --- EMERGENCY: WePayRequestException [ 1003 ]: redirect_uri must be a full uri (ex https://www.wepay.com ) ~ APPPATH/vendor/wepay.php [ 266 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:37:12 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('user/register/', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(40): WePay->request('user/register/', Array)
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Wepayapi->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wepayapi))
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:37:27 --- EMERGENCY: WePayRequestException [ 1003 ]: redirect_uri must be a full uri (ex https://www.wepay.com ) ~ APPPATH/vendor/wepay.php [ 266 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:37:27 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('user/register/', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(40): WePay->request('user/register/', Array)
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Wepayapi->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wepayapi))
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:37:33 --- EMERGENCY: WePayRequestException [ 1003 ]: redirect_uri must be a full uri (ex https://www.wepay.com ) ~ APPPATH/vendor/wepay.php [ 266 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:37:33 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('user/register/', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(40): WePay->request('user/register/', Array)
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Wepayapi->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wepayapi))
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:41:10 --- EMERGENCY: WePayRequestException [ 1003 ]: redirect_uri must be a full uri (ex https://www.wepay.com ) ~ APPPATH/vendor/wepay.php [ 266 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:41:10 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('user/register/', Array, Array)
#1 /mnt/hgfs/dev/wefarm_php/application/classes/Controller/Wepayapi.php(40): WePay->request('user/register/', Array)
#2 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_Wepayapi->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Wepayapi))
#5 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /mnt/hgfs/dev/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/dev/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:45:13 --- EMERGENCY: WePayPermissionException [ 7002 ]: pending account cannot be updated; account owner must confirm WePay registration ~ APPPATH/vendor/wepay.php [ 269 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:45:13 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('account/get_upd...', Array, Array)
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
2014-06-12 17:45:58 --- EMERGENCY: WePayPermissionException [ 7002 ]: pending account cannot be updated; account owner must confirm WePay registration ~ APPPATH/vendor/wepay.php [ 269 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:45:58 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('account/get_upd...', Array, Array)
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
2014-06-12 17:49:01 --- EMERGENCY: WePayPermissionException [ 7002 ]: pending account cannot be updated; account owner must confirm WePay registration ~ APPPATH/vendor/wepay.php [ 269 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:49:01 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('account/get_upd...', Array, Array)
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
2014-06-12 17:50:05 --- EMERGENCY: WePayPermissionException [ 7002 ]: pending account cannot be updated; account owner must confirm WePay registration ~ APPPATH/vendor/wepay.php [ 269 ] in /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php:291
2014-06-12 17:50:05 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/vendor/wepay.php(291): WePay::make_request('account/get_upd...', Array, Array)
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
2014-06-12 17:56:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: farmer ~ APPPATH/views/user/manage.php [ 9 ] in /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php:9
2014-06-12 17:56:20 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/dev/w...', 9, Array)
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
#14 {main} in /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php:9
2014-06-12 17:56:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/user/manage.php [ 18 ] in :
2014-06-12 17:56:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2014-06-12 17:56:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: farmer ~ APPPATH/views/user/manage.php [ 9 ] in /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php:9
2014-06-12 17:56:38 --- DEBUG: #0 /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/dev/w...', 9, Array)
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
#14 {main} in /mnt/hgfs/dev/wefarm_php/application/views/user/manage.php:9