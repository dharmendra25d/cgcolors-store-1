<div class="topSpacingHeight"></div>
<div class="BottomTopSpacing" id="cart">
  <section class="faqListing">
  <div class="container m-top-80">
     <div class="themeDesignAdded">
    <div class="row">
	 <div class="col-md-9 col-sm-9"><p>"Theme design" has been added to your cart</p></div>
	 <div class="col-md-3 col-sm-3"><a href="#">Continue shopping</a></div>
	</div>
   </div>
   <div class="plansTable plansTableCart">
    <table align="left" border="0" cellpadding="0" cellspacing="0" class="plansTableFeature designDiffrent cartTable" width="100%">
	 <tbody>
	  <tr class="td-right-border">
	   <td style="width:10%" width="10%"></td>
	   <td style="width:15%;"></td>
	   <td style="text-align:left;">PRODUCT</td>
	   <td style="width:10%;">PRICE</td>
	  </tr>
	  
	  <?php $amt=0; if(empty($this->session->userdata('theme')) && empty($this->session->userdata('addons'))) {    $price = (float)($this->session->userdata('plan_price'));  $amt=$this->session->userdata('plan_price');?>
	  <tr class="td-right-border bgPlus-relative">
	   <td><a href="#" class="delete-plan" data-plan="<?php echo $this->session->userdata('plan_name');?>" >x</a></td>
	   <td style="width:15%;"><a href=""><img src="images/them.jpg" alt="" /></a></td>
	   <td style="text-align:left;"><a href=""> <?php echo $this->session->userdata('plan_name'); ?></a></td>
	   <td style="width:10%;">$<?php echo $this->session->userdata('plan_price'); ?></td>
	  </tr>
	  <?php } ?>

	  <?php if(!empty($this->session->userdata('theme'))) {   $price = (float)($this->session->userdata('theme_price')); $amt=$amt+$price; ?>
	  <tr class="td-right-border bgPlus-relative">
	   <td><a class="delete-theme" data-plan="<?php echo $this->session->userdata('theme');?>" href="#">x</a></td>
	   <td style="width:15%;"><a href=""><img src="images/them.jpg" alt="" /></a></td>
	   <td style="text-align:left;"><a href=""> <?php echo $this->session->userdata('theme'); ?></a></td>
	   <td style="width:10%;">$<?php echo $this->session->userdata('theme_price'); ?></td>
	  </tr>
	  <?php } 
	   if(!empty($this->session->userdata('addons'))) {
	 
	 $addons=$this->session->userdata('addons');
	 $c=0;
	
	  foreach($addons as $addon) { if($addon->addon_price!='Free') { 
	  $price = (float)($addon->addon_price.".00");

	  $amt=$amt+$price; }?>
	  <tr class="td-right-border bgPlus-relative">
	   <td><a class="delete-addons" data-plan="<?php echo $c; ?>" href="#">x</a></td>
	   <td style="width:15%;"><a href=""><img src="images/them.jpg" alt="" /></a></td>
	   <td style="text-align:left;"><a href=""> <?php echo $addon->addon_name; ?></a></td>
	   <td style="width:10%;"><?php if($addon->addon_price=='Free') echo "Free"; else echo "$".$addon->addon_price; ?></td>
	  </tr>
	  
	  <?php $c++; }
	  }		  
	  ?>
	  
	    

	 </tbody> 
	</table>
   </div>
  <div class="checkOut-went">
    <ul class="subtotalList">
	 <li>Subtotal</li>
	 
	 <li>$<?php echo $amt; $this->session->set_userdata('total',$amt); ?></li>
	</ul>
	<p>Shipping & calculated at checkout</p>
	<ul class="update-checkout">
	 <li><a href="#">Update</a></li>
	 <li><a href="<?php echo base_url();?>checkout">CHECK OUT</a></li>
	</ul>
	<img src="images/Paypal.jpg" alt="" class="paypalImg" />
  </div>
  </div>
</section>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
$(".delete-plan").on('click', function() {
	var base_url = "<?php echo base_url();?>";
if(confirm("Are You sure want to remove it?")) {
 $.ajax({
         type: "POST",
         url: base_url + "index.php/cart/remove_plan", 
         data: {plan: $(this).data('plan')},
         dataType: "text",  
         cache:false,
         success: 
              function(data){
            location.reload();
				
              }
          });
} 
});

$(".delete-theme").on('click', function() {
	var base_url = "<?php echo base_url();?>";
if(confirm("Are You sure want to remove it?")) {
 $.ajax({
         type: "POST",
         url: base_url + "index.php/cart/remove_theme", 
         data: {plan: $(this).data('plan')},
         dataType: "text",  
         cache:false,
         success: 
              function(data){
            location.reload();
				
              }
          });
} 
});

$(".delete-addons").on('click', function() {
	var base_url = "<?php echo base_url();?>";
if(confirm("Are You sure want to remove it?")) {
 $.ajax({
         type: "POST",
         url: base_url + "index.php/cart/remove_addons", 
         data: {plan: $(this).data('plan')},
         dataType: "text",  
         cache:false,
         success: 
              function(data){
            location.reload();
				
              }
          });
} 
});
</script>