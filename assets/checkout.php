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
 <form class="checoutForm">
  <h3>Customer information</h3>
  <div class="marginArearight"><label class="Area100"><input type="email" name="email" value="Email" placeholder="Email" /></label></div>
  <label><input type="checkbox" /> Subscribe to our newsletter</label>
  <h3>Shipping address</h3>
  <div class="marginArearight">
   <label class="halfArea"><input type="text" placeholder="First Name" /></label>
   <label class="halfArea"><input type="text" placeholder="Last Name" /></label>
  </div>
  <div class="marginArearight">
   <label class="halfArea Area70"><input type="text" placeholder="Address" /></label>
   <label class="halfArea Area31"><input type="text" placeholder="Apt, suite, etc. (optional)" /></label>
  </div>
  <div class="marginArearight"><label class="Area100"><input type="email" name="email" value="City" placeholder="City" /></label></div>
  <div class="marginArearight">
  <label class="halfArea Area32">
   <select>
    <option>A</option>
	<option>B</option>
	<option>C</option>
	<option>D</option>
   </select>
  </label>
    <label class="halfArea Area32">
   <select>
    <option>A</option>
	<option>B</option>
	<option>C</option>
	<option>D</option>
   </select>
  </label>
    <label class="halfArea Area32">
   <input type="email" name="email" value="Pincode" placeholder="Pincode" /></label>
 </div>
  <div class="marginArearight"><label class="halfArea Area100"><input type="email" name="email" value="Phone" placeholder="Phone" /></label></div>
<label style="margin:10px 0 0 0;"><input type="checkbox" /> Save this information for next time</label>
  <div class="marginArearight m-20">
   <a href="" class="returnShop">Return to cart</a><button type="submit">Continue To Shipping Method</button>
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
	 <span><img src="images/plush-icon.png" /></span> <em>E-commerce theme</em>
	</div>
   </div>
   <div class="col-md-4">
    <div class="imsgeCTContent">
	 $400.00
	</div>
   </div>
  </div>
  <div class="discountCode">
   <input type="text" placeholder="Enter Discount code" />
   <button type="submit">Apply</button>
  </div>
  <ul class="subTotal-Final">
   <li>Subtotal</li><li>$500.00</li>
   <li>Shipping</li><li>-</li>
  </ul>
  <ul class="subTotal-Final totalUSD">
   <li>Total</li><li><em>USD</em>$500.00</li>
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

