<div class="topSpacingHeight"></div>
<div class="BottomTopSpacing" id="pick-theme">
<section class="contentPart m-top-0">
<div class="contactFullwd bgTheme">
 <div class="container">
   <div class="aMazingStore relative">
   <em><?php echo $this->session->flashdata('order_success'); ?></em>
    <em>Pick A Theme</em>
	<h1>Custom web Design Process</h1>

	</div>
	
</div>
<div class="containerFIx-80 text-center"><img src="<?php echo base_url();?>assets/images/banner-design-theme.png" alt="" /></div>
<div class="customeDesignStart"><a href="#" class="">Start Custom Design</a></div>
</div>
</section>
<section class="title">
  <div class="containerFIx-80"><h1>Common questions about e-commerce store</h1>
   <p>Everything you need to know before you get started</p>
  </div>
 </section>
 <section class="trending">
  <div class="containerFIx-80">
  <div class="trendRelative">
  <h3>Trending this week</h3><a href="" class="absoluteLinkK">See more</a>
   <div class="row">
   <?php foreach($list as $theme) { ?>
    <div class="col-md-3 col-sm-6">
	 <div class="trendPortfolio">
	  <div class="trendNew"><img src="<?php echo $theme->theme_screenshot_link?>" /><div class="hoverBlockDiv"><a href="#" data-toggle="modal" data-target="#<?php echo $theme->theme_name?>" class="prev left"><i  class="fa fa-eye"></i> Preview</a><a href="<?php echo base_url();?>/themes/buynow?p=<?php echo $theme->id?>&pr=<?php echo $theme->theme_price?>" class="right"><i class="fa fa-shopping-cart "></i> Buy Now</a></div></div>
	  <div class="portfolioInfo">
	   <h5><?php echo $theme->theme_name?>: <span><?php if(!empty($theme->theme_price)) echo $theme->theme_price; else echo "Free"; ?></span></h5>
	   <span>2 Styles</span>
	  </div>
	 </div>
	</div>
	<!-- Modal -->
<div class="modal fade" id="<?php echo $theme->theme_name?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>

<div class="modal-body">
        <iframe src="<?php echo $theme->theme_link?>" id="info" class="iframe" name="info" seamless="" height="600px" width="100%"></iframe>
      </div>


</div> <!-- /#myModal --></div></div>
   <?php } ?>
	<div class="col-md-3 col-sm-6">
	 <div class="trendPortfolio">
	  <div class="trendNew"><img src="<?php echo base_url();?>assets/images/templet-3.png" /><div class="hoverBlockDiv"><a href="" class="left"><i class="fa fa-eye"></i> Preview</a><a href="themes/buynow?p=Boundless&pr=200" class="right"><i class="fa fa-shopping-cart "></i> Buy Now</a></div></div>
	  <div class="portfolioInfo">
	   <h5>Boundless: <span>$60</span></h5>
	   <span>2 Styles</span>
	  </div>
	 </div>
	</div>
	
	<div class="col-md-3 col-sm-6">
	 <div class="trendPortfolio">
	  <div class="trendNew"><img src="<?php echo base_url();?>assets/images/templet-4.png" /><div class="hoverBlockDiv"><a href="" class="left"><i class="fa fa-eye"></i> Preview</a><a href="themes/buynow?p=Boundless&pr=200" class="right"><i class="fa fa-shopping-cart "></i> Buy Now</a></div></div>
	  <div class="portfolioInfo">
	   <h5>Boundless: <span>$190</span></h5>
	   <span>2 Styles</span>
	  </div>
	 </div>
	</div>
	
	<div class="col-md-3 col-sm-6">
	 <div class="trendPortfolio">
	  <div class="trendNew"><img src="<?php echo base_url();?>assets/images/templet-5.png" /><div class="hoverBlockDiv"><a href="" class="left"><i class="fa fa-eye"></i> Preview</a><a href="themes/buynow?p=Boundless&pr=200" class="right"><i class="fa fa-shopping-cart "></i> Buy Now</a></div></div>
	  <div class="portfolioInfo">
	   <h5>Boundless: <span>$80</span></h5>
	   <span>2 Styles</span>
	  </div>
	 </div>
	</div>
	
   </div> 
  </div>
  </div>
 </section>
 
 <section class="trending">
  <div class="containerFIx-80">
  <div class="trendRelative">
  <h3>Minimalist style</h3><a href="" class="absoluteLinkK">See more</a>
   <div class="row">
    <div class="col-md-3 col-sm-6">
	 <div class="trendPortfolio">
	  <div class="trendNew"><img src="<?php echo base_url();?>assets/images/templet-2.png" /><div class="hoverBlockDiv"><a href="" class="left"><i class="fa fa-eye"></i> Preview</a><a href="" class="right"><i class="fa fa-shopping-cart "></i> Buy Now</a></div></div>
	  <div class="portfolioInfo">
	   <h5>Boundless: <span>Free</span></h5>
	   <span>2 Styles</span>
	  </div>
	 </div>
	</div>
	
	<div class="col-md-3 col-sm-6">
	 <div class="trendPortfolio">
	  <div class="trendNew"><img src="<?php echo base_url();?>assets/images/templet-3.png" /><div class="hoverBlockDiv"><a href="" class="left"><i class="fa fa-eye"></i> Preview</a><a href="" class="right"><i class="fa fa-shopping-cart "></i> Buy Now</a></div></div>
	  <div class="portfolioInfo">
	   <h5>Boundless: <span>$60</span></h5>
	   <span>2 Styles</span>
	  </div>
	 </div>
	</div>
	
	<div class="col-md-3 col-sm-6">
	 <div class="trendPortfolio">
	  <div class="trendNew"><img src="<?php echo base_url();?>assets/images/templet-4.png" /><div class="hoverBlockDiv"><a href="" class="left"><i class="fa fa-eye"></i> Preview</a><a href="" class="right"><i class="fa fa-shopping-cart "></i> Buy Now</a></div></div>
	  <div class="portfolioInfo">
	   <h5>Boundless: <span>$190</span></h5>
	   <span>2 Styles</span>
	  </div>
	 </div>
	</div>
	
	<div class="col-md-3 col-sm-6">
	 <div class="trendPortfolio">
	  <div class="trendNew"><img src="<?php echo base_url();?>assets/images/templet-5.png" /><div class="hoverBlockDiv"><a href="" class="left"><i class="fa fa-eye"></i> Preview</a><a href="" class="right"><i class="fa fa-shopping-cart "></i> Buy Now</a></div></div>
	  <div class="portfolioInfo">
	   <h5>Boundless: <span>$80</span></h5>
	   <span>2 Styles</span>
	  </div>
	 </div>
	</div>
	
   </div> 
  </div>
  </div>
 </section>
 
 
 <section class="trending">
  <div class="containerFIx-80">
  <div class="trendRelative">
  <h3>Trending this week</h3><a href="" class="absoluteLinkK">See more</a>
   <div class="row">
    <div class="col-md-4 col-sm-6">
	 <a href=""><div class="trendPortfolio4">
	  <div class="trendweek"><img src="<?php echo base_url();?>assets/images/templet-1.jpg" /><div class="hoverBlockDivSpan"><span> Furniture</span></div></div>
	 </div></a>
	</div>
	<div class="col-md-4 col-sm-6">
	 <a href=""><div class="trendPortfolio4">
	  <div class="trendweek"><img src="<?php echo base_url();?>assets/images/templet-1.jpg" /><div class="hoverBlockDivSpan"><span> Clothing & Fashion</span></div></div>
	 </div></a>
	</div>
	<div class="col-md-4 col-sm-6">
	 <a href=""><div class="trendPortfolio4">
	  <div class="trendweek"><img src="<?php echo base_url();?>assets/images/templet-1.jpg" /><div class="hoverBlockDivSpan"><span> Home & Garden</span></div></div>
	 </div></a>
	</div>
	<div class="col-md-4 col-sm-6">
	 <a href=""><div class="trendPortfolio4">
	  <div class="trendweek"><img src="<?php echo base_url();?>assets/images/templet-1.jpg" /><div class="hoverBlockDivSpan"><span> Sports & Recreation</span></div></div>
	 </div></a>
	</div>
	<div class="col-md-4 col-sm-6">
	 <a href=""><div class="trendPortfolio4">
	  <div class="trendweek"><img src="<?php echo base_url();?>assets/images/templet-1.jpg" /><div class="hoverBlockDivSpan"><span> Food & Drink</span></div></div>
	 </div></a>
	</div>
	<div class="col-md-4 col-sm-6">
	 <a href=""><div class="trendPortfolio4">
	  <div class="trendweek"><img src="<?php echo base_url();?>assets/images/templet-1.jpg" /><div class="hoverBlockDivSpan"><span> Health & Beauty</span></div></div>
	 </div></a>
	</div>
	
	
	
   </div> 
  </div>
  </div>
 </section>
 
  <section class="customDesign">
  <div class="containerFIx-80">
   <div class="row">
    <div class="col-md-6 col-sm-6">
	 <h2>We'll Custom Design The Site You <span>LOVE</span></h2>
	 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
	 when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
	 <h3><i>$</i>100<i class="timeM-Y">/one-time</i></h3>
	 <a href=""><i class="fa fa-shopping-cart "></i>  Add Custom Design</a>
	</div>
	<div class="col-md-6 col-sm-6">
	 <div class="addCartMain"><img src="<?php echo base_url();?>assets/images/templet-1.jpg" alt="" /></div>
	</div>
   </div>
  </div>
  </section>
 </div>
 <!-- Button trigger modal -->

<style>
.modal-dialog {width:100% !important}
</style>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   

 <script>
     $(document).ready(function () {
    $(".popup").hide();
    $(".openpop").click(function (e) {
        e.preventDefault();
        $("iframe").attr("src", $(this).attr('href'));
        $(".links").fadeOut('slow');
        $(".popup").fadeIn('slow');
    });

    $(".close").click(function () {
        $(this).parent().fadeOut("slow");
        $(".links").fadeIn("slow");
    });
});
    </script> 