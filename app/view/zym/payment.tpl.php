 <?php print_r($variables['header']);?>

<div id="content">
    <div class="container">
        <div class="row row-bg dashboard-services">
            <div class="tabbable tabbable-custom">
                <div class="tab-content">
                    <div class="tab-pane active" id="AllGym">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i>Gym Management</h4>
                                <div class="toolbar no-padding">
                                    <div class="btn-group">
                                        <span class="btn btn-xs widget-collapse">
                                            <i class="icon-angle-down"></i>
                                        </span>
                                        <span class="btn btn-xs tblallsociety-refresh">
                                            <i class="icon-refresh"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th >Member Name</th>
                                      <th >Payment</th>
                                      <th >Address</th>
                                      <th >Locality</th>
                                      <th >Action</th>
                                    </tr>
                                  </thead>
                                  
                                </table>

                            </div>

                        </div>

                    </div>

                   
    <style type="text/css">
        table.solid {border-style: solid;}
    </style>                            
<?php print_r($variables['footer']); ?>
<?php print_r($variables['scriptfiles']); ?>
