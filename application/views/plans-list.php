<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plans</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
			   <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plans List</h2>
                  
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Plan </th>
                            <th class="column-title">Description </th>
                            <th class="column-title">Price </th>
                            <th class="column-title">Plan type</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                         
							<?php
							foreach($list as $plan) { ?>
							 <tr class="even pointer">
                            <td class=" "><?php echo $plan->plan_name;?></td>
							<td class=" "><?php echo $plan->plan_desc;?></td>
							<td class=" "><?php echo $plan->plan_price;?></td>
							<td class=" "><?php if($plan->plan_type=='m') echo"Monthly"; else if($plan->plan_type=='y') echo"Yearly";?></td>
                            <td class="last"><a href="../plans">Upgrade </a>
							    </tr>
							<?php }?>
                           
                           
                         
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>