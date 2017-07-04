<link rel="stylesheet" href="http://webdesignagencynewyork.com/dev/cgcolors-store/css/bootstrap.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,700,700i,900" rel="stylesheet"> 
<style>
/*---CartCss---*/
*{padding:0; margin:0; }
body{padding:0; margin:0; line-height: 1.71429; font-family: 'Lato', sans-serif; letter-spacing:.5px;}
p{color: #656565;    word-spacing: 1.3px; font-size:18px; font-weight:400; }
ul{margin:0; padding:0; list-style:none;}
.breadcrumb{background:none; }
.breadcrumb > li > a{color:#f7333b;}
.breadcrumb > li{color:#9c9c9c;}
.breadcrumb > li + li::before{content: ">"; font-size:17px; margin:-4px 0 0; float:left;}
.breadcrumb h3{color:#f7333b;}
.breadcrumb > li{font-size:13px;}
.breadcrumb{padding-left:0; padding-right:0;}
.marginArearight label{width:100%; margin-bottom:8px; float:left; font-size:15px;	}
.marginArearight label.halfArea{width:49%; float:left; margin-right:2%; }
.customerInformation label.halfArea:last-child{margin-right:0;}
.customerInformation input{border:1px solid #ccc; border-radius:5px; padding:10px; height:48px; width:100%; box-shadow:0px 0px 2px #e2e2e2; font-size:15px;}
.customerInformation input[type="checkbox"]{width:20px; height:auto;}
.customerInformation h3{font-size:18px; color:#464646; padding-bottom:10px; }
.marginArearight label.Area100{width:100%}
.marginArearight label.Area70{width:67%}
.marginArearight label.Area31{width:31%}
.marginArearight label.Area32{width:32%}
.marginArearight select{border:1px solid #ccc; height:48px; border-radius:5px; padding:10px; width:100%; box-shadow:0px 0px 2px #e2e2e2; font-size:15px;}
.marginArearight a.returnShop{display:inline-block; background:url(../images/leftarrow.png) no-repeat 4px center; transition:all .1s ease-in-out; color:#f7333b; font-size:16px; float:left; padding:15px 0; padding-left:18px;}
.marginArearight a.returnShop:hover{background:url(../images/leftarrow.png) no-repeat left center}
.marginArearight button{background: #f7333b; border-radius:4px; color: #fff; float: right; border:none; padding: 14px 20px; color:#fff; font-size:16px;}
.m-20{margin:20px 0; float:left; width:100%;}
.innercartBorder{border-right:1px solid #ccc; padding-right:70px;}
.innercartBorderRight{padding:30px 0px 30px 40px; max-width:450px; float:right;}
.imsgeCTContent{text-align:right; padding:23px 0;}
.imsgeCT span{width:80px; height:80px; margin-right:10px; border:1px solid #9c9c9c; display:inline-block;}
.imsgeCT span img{width:100%;}
.imsgeCT em{font-size:16px; font-style:normal;}
.discountCode{margin:40px 0;}
.discountCode input{width:300px; border:1px solid #ccc; border-radius:5px; margin-bottom:5px; padding:10px; height:48px; box-shadow:0px 0px 2px #e2e2e2; font-size:15px;}
.discountCode button{background: #f7333b; color: #fff; float: right; border:none; padding:10px 22px; border-radius:4px; color:#fff; font-size:16px;}
ul.subTotal-Final{border-top:1px solid #ccc; border-bottom:1px solid #ccc; padding:20px; margin:5px 0; float:left; width:100%;}
ul.subTotal-Final li{width:50%; text-align:left; float:left; color:#9a9a9a; font-size:16px; line-height:30px;}
ul.subTotal-Final li:nth-child(2n){text-align:right; color:#383737;}
ul.totalUSD{border:none;}
option{padding:5px;}
ul.totalUSD li{color:#f7333b !important;}
ul.totalUSD li:nth-child(2n){font-size:23px;}
ul.totalUSD li:nth-child(2n) em{font-size:13px; font-style:normal; padding-right:5px; color:#ff7c84 !important;}
.reservedCSS{border-top:1px solid #ccc; padding:10px 0; margin:20px 0 0 0; }
.reservedCSS p{font-size:13px; color:#999;}
@media screen and (max-width:767px){
	.innercartBorder{padding:0; border:none;}
	.innercartBorderRight{border-top:2px solid #ccc; border-radius:20px 0 0 0;}
	.marginArearight label.halfArea{width:100% !important;}
	
} 
@media screen and (min-width:768px) and (max-width:991px){
	.innercartBorder{padding-right:15px;}
}
/*---CartCssEND---*/
</style>
<?php
/**
 * Stripe - Payment Gateway integration example
 * ==============================================================================
 * 
 * @version v1.0: stripe_pay_demo.php 2016/09/29
 * You are free to use, distribute, and modify this software
 * ==============================================================================
 *
 */

// Stripe library
require APPPATH.'stripe/Stripe.php';

$params = array(
	"testmode"   => "on",
	"private_live_key" => "sk_live_xxxxxxxxxxxxxxxxxxxxx",
	"public_live_key"  => "pk_live_xxxxxxxxxxxxxxxxxxxxx",
	"private_test_key" => "sk_test_CcchYXRlEKh21JZZjlnKksMM",
	"public_test_key"  => "pk_test_aHaQRbKSUc5QaFZp7CmCcW8A"
);

if ($params['testmode'] == "on") {
	Stripe::setApiKey($params['private_test_key']);
	$pubkey = $params['public_test_key'];
} else {
	Stripe::setApiKey($params['private_live_key']);
	$pubkey = $params['public_live_key'];
}

if(isset($_POST['stripeToken']))
{
	$amount_cents = str_replace(".","","10.52");  // Chargeble amount
	$invoiceid = "14526321";                      // Invoice ID
	$description = "Invoice #" . $invoiceid . " - " . $invoiceid;
	
	try {

		$charge = Stripe_Charge::create(array(		 
			  "amount" => $amount_cents,
			  "currency" => "usd",
			  "source" => $_POST['stripeToken'],
			  "description" => $description)			  
		);

		if ($charge->card->address_zip_check == "fail") {
			throw new Exception("zip_check_invalid");
		} else if ($charge->card->address_line1_check == "fail") {
			throw new Exception("address_check_invalid");
		} else if ($charge->card->cvc_check == "fail") {
			throw new Exception("cvc_check_invalid");
		}
		// Payment has succeeded, no exceptions were thrown or otherwise caught				

		$result = "success";

	} catch(Stripe_CardError $e) {			

	$error = $e->getMessage();
		$result = "declined";

	} catch (Stripe_InvalidRequestError $e) {
		$result = "declined";		  
	} catch (Stripe_AuthenticationError $e) {
		$result = "declined";
	} catch (Stripe_ApiConnectionError $e) {
		$result = "declined";
	} catch (Stripe_Error $e) {
		$result = "declined";
	} catch (Exception $e) {

		if ($e->getMessage() == "zip_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "address_check_invalid") {
			$result = "declined";
		} else if ($e->getMessage() == "cvc_check_invalid") {
			$result = "declined";
		} else {
			$result = "declined";
		}		  
	}
	
	echo "<BR>Stripe Payment Status : ".$result;
	
	echo "<BR>Stripe Response : ";
	
	print_r($charge); exit;
} ?>
<div class="topSpacingHeight"></div>
<div class="BottomTopSpacing" id="cart">
  <section class="checkoutPage">
  <div class="container">
  <div class="row">
  <div class="col-md-7 col-sm-7 col-xs-12">
  <div class="innercartBorder">
<ul class="breadcrumb">
<h3>E-commerce</h3>
 <li><a href="faq.php">Cart</a></li>        <li>Customer information</li>         <li>Shipping method</li>         <li>Payment method</li>
</ul>
<div class="customerInformation">
  <form action="<?php echo base_url();?>checkout/pay" class="checoutForm" method="POST" id="payment-form">
  <h3>Payment Method</h3>
    <span class="payment-errors"></span>

  <div class="marginArearight">
   <label class="Area100"><input type="text" size="20" data-stripe="number" placeholder="Card Number" /></label>
  </div>
  <div class="marginArearight">
   <label class="halfArea Area70"><input type="text" size="2" data-stripe="exp_month" placeholder="Exp Month" /></label>
   <label class="halfArea Area31"><input type="text" size="2" data-stripe="exp_year" placeholder="Exp Year" /></label>
  </div>
  <div class="marginArearight"><label class="Area100"><input type="text" size="4" data-stripe="cvc"  placeholder="CVC" /></label></div>
 
<input type="hidden" name="total" value="<?php echo $this->session->userdata('plan_price'); ?>" />
  <div class="marginArearight m-20">
   <a href="" class="returnShop">Return to cart</a><button name="submit" class="submit" type="submit">Pay</button>
  </div>
 </form>
</div>
</div>
</div>
<div class="col-md-5 col-sm-5 col-xs-12">
 <div class="innercartBorderRight">
  <div class="row">
   <div class="col-md-8">
    <div class="imsgeCT">
	 <span><img src="images/plush-icon.png" /></span> <em><?php echo $this->session->userdata('plan_name');?></em>
	</div>
   </div>
   <div class="col-md-4">
    <div class="imsgeCTContent">
	$<?php echo $this->session->userdata('plan_price'); ?>
	</div>
   </div>
  </div>
  <div class="discountCode">
   <input type="text" placeholder="Enter Discount code" />
   <button type="submit">Apply</button>
  </div>
  <ul class="subTotal-Final">
   <li>Subtotal</li><li>$<?php echo $this->session->userdata('plan_price'); ?></li>
  </ul>
  <ul class="subTotal-Final totalUSD">
   <li>Total</li><li><em>USD</em>$<?php echo $this->session->userdata('plan_price'); ?></li>
  </ul>
  </div>
 </div>
</div>  
<div class="row">
 <div class="col-md-12">
  <div class="reservedCSS"><p>All rights reserved E-commerce</p></div>
 </div>
</div> 
  </div>
</section>




</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<!-- TO DO : Place below JS code in js file and include that JS file -->
<script type="text/javascript">
	Stripe.setPublishableKey('<?php echo $params['public_test_key']; ?>');
  
	$(function() {
	  var $form = $('#payment-form');
	  $form.submit(function(event) {
		// Disable the submit button to prevent repeated clicks:
		$form.find('.submit').prop('disabled', true);
	
		// Request a token from Stripe:
		Stripe.card.createToken($form, stripeResponseHandler);
	
		// Prevent the form from being submitted:
		return false;
	  });
	});

	function stripeResponseHandler(status, response) {
	  // Grab the form:
	  var $form = $('#payment-form');
	
	  if (response.error) { // Problem!
	
		// Show the errors on the form:
		$form.find('.payment-errors').text(response.error.message);
		$form.find('.submit').prop('disabled', false); // Re-enable submission
	
	  } else { // Token was created!
	
		// Get the token ID:
		var token = response.id;
		alert(token);
		// Insert the token ID into the form so it gets submitted to the server:
		$form.append($('<input type="hidden" name="stripeToken">').val(token));
	
		// Submit the form:
		$form.get(0).submit();
	  }
	};
</script>