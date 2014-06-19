
<html>
<head>
	<h1><font size="6"><center>Welcome to FreshCook! Please manage your payment account. </center></font></h1>
	<br>
	<style>
	</style>
</head>	
<?php

	$user = Auth::instance()->get_user();
	$chef = ORM::factory('chef')->where('email', '=', $user->email)->find();
	$wepay = new WePay($chef->wepay_access_token);
    $response = $wepay->request('account/get_update_uri/', array(
            'account_id' => $chef->wepay_account_id,
            'mode' => 'iframe'
        )); 

        ?>
        <body>
        	<center>
        	<div id="kyc_div"><div>
				<script type="text/javascript" src="https://www.wepay.com/min/js/iframe.wepay.js">
				</script>

			    <iframe src="<?=$response->uri?>" width="800" height="450" border="5" frameborder="1"></iframe>
			</center>



		</body>
</html>