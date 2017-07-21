<div class="topSpacingHeight"></div>
<div class="BottomTopSpacing" id="faq">
<form method="post" action="add_continue">
<section class="contentPart">
 <div class="containerFIx-80">
 <a href="<?php echo base_url();?>themes">Back</a>
 <input type="submit" name="submit" value="Continue">
   <div class="aMazingStore">
    <em>Welcome</em>
	<h1>Additional Extension</h1>
</div>
</div>
</section>
<section class="designComponent">
  <div class="container">
   <div class="CenterTXT"><h2>Regular Design Components</h2>
   <p>Mix and match a variety of Regular Design Components to create a consistent look and feel across your ecommerce website.</p></div>
  </div>
  <div class="containerFIx-80">
   <ul>
  <?php foreach($list as $addon) { ?> 
    <li><p><img src="<?php echo $addon->addon_image_link;?>" /></p>
	<h4><?php echo $addon->addon_name;?></h4>
	<em><?php echo $addon->addon_price;?> </em>
	<p><?php echo $addon->addon_desc;?></p>
	<label><input type="checkbox" <?php if(check_cart_addons($addon->id)) {echo "checked";};?> name="addons_items[]" value="<?php echo $addon->id;?>">Add This Feature</label>
	</li>
   <?php } ?>
	
   </ul>
  </div>
  <div class="containerFIx-80">
   <div class="CenterTXT CenterTXTBottom m-b-0"><h3>Try 15 days and see which plan is right for you</h3>
   <p>*Pro plan: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p> 

<p>*Pricing terms: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>

<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

<p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p></div>
  </div>
  </section>
  </form>
</div>