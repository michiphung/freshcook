
<html>
<head>
	<h1><font size="6"><center>Welcome to FreshCook! Please manage your payment account. </center></font></h1>
	<br>
	<style>
	</style>
</head>	
<?php
	$config = Kohana::$config->load('wepay');
    //set API Version. Change this to the API Version you want to use.
    $API_VERSION = "2014-01-08";
    $base_url = URL::site(NULL, TRUE);
    WePay::useStaging($config->get('client_id'), $config->get('client_secret'), $API_VERSION);

	$user = Auth::instance()->get_user();
	$chef = ORM::factory('chef')->where('email', '=', $user->email)->find();
	
	$wepay = new WePay($chef->wepay_access_token);
	$wepay_link = 'https://stage.wepay.com/account/' . $chef->wepay_account_id;
    $response = $wepay->request('account/get_update_uri/', array(
            'account_id' => $chef->wepay_account_id,
            'mode' => 'iframe',
            'redirect_uri' => $base_url.'user/register_success/'
        )); 

        ?>
        <body>
        	<center>

			<a href="<?=$wepay_link?>">View your payments account</a>        		
        	<br />

        	<div id="kyc_div"><div>
				<script type="text/javascript" src="https://www.wepay.com/min/js/iframe.wepay.js">
				</script>

			    <iframe src="<?=$response->uri?>" width="800" height="450" border="5" frameborder="1"></iframe>
			</center>



		</body>
</html>