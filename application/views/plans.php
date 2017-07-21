<div class="topSpacingHeight"></div>
<div class="BottomTopSpacing" id="plans">

<section class="contentPart">
 <div class="containerFIx-80">
   <div class="aMazingStore">
    <em>Welcome</em>
	<h1>Plans you cannot resist yourself 
from starting eCommerce business</h1>
</div>

<div class="TabsTheme">
 <ul class="nav nav-tabs borderNone">
 <span class="or">OR</span>
    <li class="active" style="border-right:1px solid #e8242c;"><a data-toggle="tab" href="#home">mONTHLY</a></li>
    <li><a data-toggle="tab" href="#menu1">YEARLY</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="row">
	  <?php foreach($plans_m as $plan) { ?>
	   <div class="col-md-3 col-sm-6 col-xs-12">
	    <div class="planTable">
		 <em><?php echo $plan->plan_name;?> </em>
		 <?php if($plan->plan_price=='Free') { ?>
		 <h3><?php echo $plan->plan_price;?></h3>
		 <?php  } elseif(!empty($plan->plan_price)) { ?>
		 <h3><i>$</i><?php echo $plan->plan_price;?><i class="timeM-Y">/mo</i></h3>
		 <?php } ?>
		 
		 <p><?php echo $plan->plan_desc;?></p>
		  <?php if($plan->id==4)  { ?>
		 <a href="<?php echo base_url();?>custom_design">BUY NOW!</a>

		<?php } else { ?>
<a href="plans/buynow?p=<?php echo $plan->id;?>&pr=<?php echo $plan->plan_price;?>">BUY NOW!</a>
		<?php } ?>
		</div>
	   </div>
	  <?php } ?>
	
	  </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="row">
	  <?php foreach($plans_y as $plan) { ?>
	   <div class="col-md-3 col-sm-6 col-xs-12">
	    <div class="planTable">
		 <em><?php echo $plan->plan_name;?> </em>
		 <h3><i>$</i><?php echo $plan->plan_price;?><i class="timeM-Y">/yearly</i></h3>
		 <p><?php echo $plan->plan_desc;?></p>
		  <?php if($plan->id==4)  { ?>
		 <a href="<?php echo base_url();?>custom_design">BUY NOW!</a>

		<?php } else { ?>
<a href="plans/buynow?p=<?php echo $plan->id;?>&pr=<?php echo $plan->plan_price;?>">BUY NOW!</a>	
		<?php } ?>
		</div>
	   </div>
	  <?php } ?>
	   
	   
	   
	  </div>
    </div>
  </div>
</div>

</div>

</section>
 
 <section class="payAnually">
  <div class="container">
    <h3>Save up to 10% when you pay annually. All prices in US Dollars. Billed monthly.</h3>
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  </div>
 </section>
  <section class="faqListing">
  <div class="containerFIx-80">
  
   <div class="plansTable">
    <table align="left" border="0" cellpadding="0" cellspacing="0" class="PTable" width="100%">
	 <tbody>
	  <tr class="td-right-border">
	   <td>Included in all plans</td>
	   <td>Essential</td>
	   <td>Starter</td>
	   <td>Advanced</td>
	   <td>Robust</td>
	   <td>Custom</td>
	  </tr>
	  <tr class="td-right-border">
	   <td>Unlimited Products</td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	  <tr class="td-right-border" style="background:#f6f6f6;">
	   <td>Store Design Using Template</td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	  <tr class="td-right-border">
	   <td>Payment Gateway Integration ( Paypal)</td>
	   <td>Paypal</td>
	   <td>Paypal  Shopify Stripe</td>
	   <td>Paypal  Shopify Stripe</td>
	   <td>Paypal  Shopify Stripe</td>
	   <td>Paypal  Shopify Stripe</td>
	  </tr>
	  <tr class="td-right-border" style="background:#f6f6f6;">
	   <td>24x7 Support</td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	  <tr class="td-right-border">
	   <td>Unlimited Products</td>
	   <td>Paypal  Shopify Stripe</td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	  <tr class="td-right-border" style="background:#f6f6f6;">
	   <td>Custom Theme Design</td>
	   <td></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	  <tr class="td-right-border">
	   <td>Social Media Account Setup</td>
	   <td>Available Up to $10</td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	  <tr class="td-right-border" style="background:#f6f6f6;">
	   <td>Preliminary</td>
	   <td>Available Up to $10</td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	  <tr class="td-right-border">
	   <td>Fulfilment Services</td>
	   <td></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	  <tr class="td-right-border" style="background:#f6f6f6;">
	   <td>Subscription Products</td>
	   <td></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	  <tr class="td-right-border">
	   <td>SEO</td>
	   <td>Available Up to $10</td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	  <tr class="td-right-border" style="background:#f6f6f6;">
	   <td>Subscription Products</td>
	   <td></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	   <td><span class="checkTableIcon"></span></td>
	  </tr>
	 </tbody> 
	</table>
   </div>
  
  </div>
</section>

  <!--<section class="designComponent">
  <div class="container">
   <div class="CenterTXT"><h2>Regular Design Components</h2>
   <p>Mix and match a variety of Regular Design Components to create a consistent look and feel across your ecommerce website.</p></div>
  </div>
  <div class="containerFIx-80">
   <ul>
    <li><span class="email"></span>
	<h4>Communications Kit</h4>
	<em>A $500 value</em>
	<p>Our standard feedback form or contact form & thank you page give you more opportunities to communicate with customers.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
	<li><span class="email"></span>
	<h4>Pop-Up Window</h4>
	<em>A $500 value</em>
	<p>An automatically appearing newsletter subscription form, age verification or promotional alert on your website.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
	<li><span class="email"></span>
	<h4>Social Media Kit</h4>
	<em>A $500 value</em>
	<p>Let our Design Team start your social marketing out on the right foot with a cohesive look across your networks.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
	<li class="noBG"><span class="email"></span>
	<h4>Store Locator Map</h4>
	<em>A $500 value</em>
	<p>OHave multiple brick-and-mortar locations or resellers? A store locator map is a great way for customers to find all your locations.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
	<li><span class="email"></span>
	<h4>Graphic 5 Pack</h4>
	<em>A $500 value</em>
	<p>Receive five individual graphic designs to be used for slide images, category graphics, social media or anything else needed for your business.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
	<li><span class="email"></span>
	<h4>Technical SEO</h4>
	<em>A $500 value</em>
	<p>Ensure your website is structured for search engine crawlability! Our in-house SEO experts will optimize your website for technical performance.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
	<li><span class="email"></span>
	<h4>Newsletter Design</h4>
	<em>A $500 value</em>
	<p>Use email marketing to reach your customer base with a custom design to be used with Volusion’s newsletter feature and/or MailChimp.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
	<li class="noBG"><span class="email"></span>
	<h4>Blogger Template</h4>
	<em>A $500 value</em>
	<p>Extend your brand across channels with a custom blog design that’s consistent with the appearance of your store.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
	<li class="noBG border-bottom-none"><span class="email"></span>
	<h4>Featured Product Scroll</h4>
	<em>A $500 value</em>
	<p>The featured product scroll allows you to insert products into a scroller to allow merchants easy browsing.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
	<li class="noBG border-bottom-none"><span class="email"></span>
	<h4>Quickview</h4>
	<em>A $500 value</em>
	<p>Allow customers to view individual product information directly on the category page.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
	<li class="noBG border-bottom-none"><span class="email"></span>
	<h4>Mega Menu</h4>
	<em>A $500 value</em>
	<p>Our standard mega menu enables more direct access to product categories and sub-categories.</p>
	<label><input type="checkbox" />Add This Feature</label>
	</li>
   </ul>
  </div>
  <div class="containerFIx-80">
   <div class="CenterTXT CenterTXTBottom m-b-0"><h3>Try 15 days and see which plan is right for you</h3>
   <p>*Pro plan: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p> 

<p>*Pricing terms: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p></div>
  </div>
  </section>-->
</div>
