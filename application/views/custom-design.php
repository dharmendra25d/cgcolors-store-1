
<div class="topSpacingHeight"></div>
<div class="BottomTopSpacing" id="support">



 <section class="title">
  <div class="containerFIx-80 max-width900"><h1>Custom Design Questionnaire</h1>

  <?php echo $this->session->flashdata('question_success'); 
  echo $this->session->flashdata('question_error'); ?>
  <form method="post" action="<?php echo base_url();?>custom_design/add">
  <div class="helpfulStore selectHelp"><i>Do you have domain?</i>
   <textarea name="question1"></textarea>
  </div>
   <div class="helpfulStore selectHelp"><i>Do you have any preferred color scheme?</i>
    <textarea name="question2"></textarea>
  </div>
   <div class="helpfulStore selectHelp"><i>Have professional product pictures or need our help?</i>
   <textarea name="question3"></textarea>
  </div>
   <div class="helpfulStore selectHelp"><i>How would you ship your products - UPS, USPS or through any other Fulfillment company?</i>
    <textarea name="question4"></textarea>
  </div>
   <div class="helpfulStore selectHelp"><i>Will there be any subscription content?</i>
   <textarea name="question5"></textarea>
  </div>
  <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id');?>">
   <div class="helpfulStore selectHelp"><i></i>
   <input type="submit" name="submit">
  </div>
</form>
  </div>
 </section>
 
  
 
 
 </div>
