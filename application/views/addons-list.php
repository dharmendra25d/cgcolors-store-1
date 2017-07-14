<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>addons</h3>
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
                    <h2>addons List</h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Addons </th>
                            <th class="column-title">Description </th>
                            <th class="column-title">Price </th>
							
                          </tr>
                        </thead>

                        <tbody>
                         
							<?php
							foreach($list as $addon) { ?>
							 <tr class="even pointer">
                            <td class=" "><?php echo $addon->addon_name;?></td>
							<td class=" "><?php echo $addon->addon_desc;?></td>
							<td class=" "><?php echo $addon->addon_price;?></td>
							   </tr>
							<?php }?>
                           
                           
                         
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>