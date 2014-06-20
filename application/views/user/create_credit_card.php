<h1> Thank you for registering! To proceed, please enter your credit card information </h1>
<script type="text/javascript" src="https://static.wepay.com/min/js/tokenization.v2.js">
</script>
<?php 
    $config = Kohana::$config->load('wepay');
    // set API Version. Change this to the API Version you want to use.
    $API_VERSION = "2014-01-08";
    //WePay::useStaging('242', 'b5df4504c9', $API_VERSION);
    WePay::useStaging($config->get('client_id'), $config->get('client_secret'), $API_VERSION);
    ?>

<script type="text/javascript">
    WePay.set_endpoint("stage"); // change to "production" when live

function chargeCard(){
        var response = WePay.credit_card.create( {
            "client_id":<?=$config->get('client_id')?>,
            "user_name":document.getElementById('name').value,
            "email":document.getElementById('email').value,
            "cc_number":document.getElementById('cc-number').value,
            "cvv":document.getElementById('cc-cvv').value,
            "expiration_month":document.getElementById('cc-month').value,
            "expiration_year":document.getElementById('cc-year').value,
            "address":
                {
                    "zip":document.getElementById('zip').value
                }
        }, function(data) {
            if (data.error) {
                console.log(data);
                // handle error response
            } else {
            	var account_id = document.getElementById("account_id").value;
            	window.location.href = '<?=url::base()?>/user/charge_cc/' + '?account_id=' + account_id + '&credit_card_id=' + data.credit_card_id;

                // call your own app's API to save the token inside the data;
                // show a success page

            }
        } );
    }
</script>
<table>
	<input type="hidden" id="account_id" value="<?=Request::current()->param('id')?>" />
    <tr><td>Name: </td><td><input id="name" type="text"></input></td></tr>
    <tr><td>Email: </td><td><input id="email" type="text"></input></td></tr>
    <tr><td>Credit Card Number: </td><td><input id="cc-number" type="text"></input></td></tr>
    <tr><td>Expiration Month: </td><td><input id="cc-month" type="text"></input></td></tr>
    <tr><td>Expiration Year: </td><td><input id="cc-year" type="text"></input></td></tr>
    <tr><td>CVV: </td><td><input id="cc-cvv" type="text"></input></td></tr>
    <tr><td>Zipcode: </td><td><input id="zip" type="text"></input></td></tr>
    <tr><td></td><td><input type="submit" name="Submit" value="Submit" onclick="chargeCard()"/></td></tr>
</table>