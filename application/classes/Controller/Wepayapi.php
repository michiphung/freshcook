<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Wepayapi extends Controller_Base {

    public function action_index() {

        if (Auth::instance()->logged_in()) {
            $config = Kohana::$config->load('wepay');
            // set API Version. Change this to the API Version you want to use.
            $API_VERSION = "2014-01-08";
            //WePay::useStaging('242', 'b5df4504c9', $API_VERSION);
            WePay::useStaging($config->get('client_id'), $config->get('client_secret'), $API_VERSION);
            $base_url = URL::site(NULL, TRUE);
            // $redirect_uri = $base_url . 'wepayapi';
            // $scope = WePay::$all_scopes;

            // $user = Auth::instance()->get_user();
            // $farmer = ORM::factory('farmer')->where('email', '=', $user->email)->find();

            //$scope = WePay::$all_scopes;

            $user = Auth::instance()->get_user();
            $chef = ORM::factory('chef')->where('email', '=', $user->email)->find();

            // if (empty($_GET['code'])) {
            //     $uri = WePay::getAuthorizationUri($scope, $redirect_uri);
            //     HTTP::redirect($uri);

            $wepay = new WePay(NULL);

            $response = $wepay->request('user/register/', array(
                    'client_id' => $config->get('client_id'),
                    'client_secret' =>   $config->get('client_secret'),
                    'email'       => $chef->email,
                    'scope'         => "manage_accounts,collect_payments,view_user,preapprove_payments,manage_subscriptions,send_money",
                    'first_name'        => $chef->name,
                    'last_name'         => $chef->name,
                    'original_ip'       => "74.125.224.84",
                    'original_device'   => "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; en-US) AppleWebKit/534.13 (KHTML, like Gecko) Chrome/9.0.597.102 Safari/534.13",
                    'redirect_uri' => $base_url.'user/manage'
                ));

             $a_token = $response->access_token;
            // if (empty($_GET['code'])) {
            //     $uri = WePay::getAuthorizationUri($scope, $redirect_uri);
            //     HTTP::redirect($uri);
            // } 
            // else {
                // $info = WePay::getToken($_GET['code'], $redirect_uri);
                // if ($info) {
            if ($chef->createAccount($a_token)) {
                $this->template->content = "Thank you! Check your email to finish registering! <a href=\"" . URL::base() . "\">Back</a>";
                $resend_email = new WePay($a_token);    
                $resend_email->request('user/resend_confirmation/', array());
                } else {
                        $this->template->content = "FreshCook Account Failed! <a href=\"" . URL::base() . "\">Back</a>";
                    }
            // else {
            //         // Unable to obtain access token
            //         $this->template->content = "WePay Account Failed! <a href=\"" . URL::base() . "\">Back</a>";
            //     }
                }
        else {
            $this->template->content = "Not Logged In";
        }
    }


    public static function create_checkout($merchant) {

        $config = Kohana::$config->load('wepay');
        //set API Version. Change this to the API Version you want to use.
        $API_VERSION = "2014-01-08";
        WePay::useStaging($config->get('client_id'), $config->get('client_secret'), $API_VERSION);
        $wepay = new WePay($merchant->getAccessToken());
        $response = $wepay->request('checkout/create/', array(
                    'account_id'          => $merchant->getAccountId(),
                    'short_description'   => "Purchasing ".$merchant->food." from ".$merchant->name.".",
                    'type'                => 'goods',
                    'amount'              => $merchant->price,
                    'payment_method_id'   => $credit_card_id
                    ));
    }
}
