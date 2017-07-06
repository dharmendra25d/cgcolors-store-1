<?php //nclude('header.php'); ?>
<style>
.v_errors p {font-size:12px !important;color:red}
</style>
<div class="topSpacingHeight"></div>
<div class="BottomTopSpacing" id="faq">
 <section class="">
  <div class="container"><ul class="breadcrumb">
 <li><a href="index.php">Home</a></li> <li>Create Your Account</li>
</ul>
</div>
</section>
 <section class="title  m-top-0">
  <div class="formsStore"><h1>Welcome to e-Commerce store</h1>
   <p>Let's Setup your Account!</p>
   <div class="v_errors">
   <?php echo validation_errors(); ?>
   </div>
   <form action="<?php echo base_url();?>register/add" method="post" class="registerPage">
   <div class="twoInput"> <label><input type="text" name="fname" value="<?php echo set_value('fname'); ?>" placeholder="First Name" /></label>
	  <label><input type="text" name="lname"  value="<?php echo set_value('lname'); ?>" placeholder="Last Name" /></label></div>
	<label><input type="email" name="email"  value="<?php echo set_value('email'); ?>" placeholder="Email Address" /></label>
	<div class="twoInput"><label><input  value="<?php echo set_value('address'); ?>" name="address" type="text" placeholder="Address" /></label>
	<label><input name="street_address"  value="<?php echo set_value('street_address'); ?>" type="text" placeholder="Apt,suite etc(optional)" /></label></div>
	
	<div class="twoInput"><label><input name="city"  value="<?php echo set_value('city'); ?>" type="text" placeholder="City" /></label>
	<label><input name="zip_code" type="text"  value="<?php echo set_value('zip_code'); ?>" placeholder="Zip Code" /></label></div>
	
	<div class="twoInput"><label><select name="country" class="form-control countries" id="countryId" >
<option value="">Select Country</option>
<?php foreach($countries as $country) { ?>
<option value="<?php echo $country->id;?>"><?php echo $country->name;?></option>
<?php } ?>
</select></label>
	<label> <select name="state" class="form-control countries" id="stateId" >
<option value="">Select State</option>
</select></label></div>
	
	<label><input type="text" name="phone"  value="<?php echo set_value('phone'); ?>" placeholder="Mobile Number" /></label>
	<div class="twoInput"><label><input name="password" type="password" placeholder="Password" /></label>
	<label><input type="password" name="c_password" placeholder="Confirm Password" /></label>
	<p>Must be between 8-15 alphanumeric characters</p></div>
	<div class="submitButtonForms">
	 <p>By clicking 'Create Account', you agree to e-commerce <a href="">Terms & Conditions</a></p>
	 <input type="submit" name="submit" value="Register" />
	</div>
   </form>
   <em>Already have an account? <a href="login.php">Login here</a>	</em>
  </div>
 </section>
 
</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
 <script>	
  $('#countryId').change(function () {
	var base_url="<?php echo base_url();?>";
	var country_id= $(this).val();
    $.ajax({
      url: base_url+"ajaxdata/stateList",
      async: false,
      type: "POST",
      data: "id=" + country_id,
      dataType: "html",
      success: function(data) {
        $('#stateId').html(data);
      }
    })
  });
 </script>
<?php //include('footer.php'); ?>
