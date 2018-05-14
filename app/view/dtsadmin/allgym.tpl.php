<?php print_r($variables['header']); ?>

<div id="content">
    <div class="container">
        <div class="crumbs">
            <ul id="breadcrumbs" class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="home">Dashboard</a>
                </li>
                <li class="current">Gym</li>
            </ul>
        </div>
        <div class="row row-bg dashboard-services">
            <div class="tabbable tabbable-custom">
                <ul class="nav nav-tabs">
                   <li class="active">
                       <a href="#AllGym" data-toggle="tab">All Gym</a>
                    </li>
                    <li>
                        <a href="#AddGym" data-toggle="tab">Add Gym</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="AllGym">
                      <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Basic Details</h4>
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
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tblallgym" style="width: 100%;">

                                    <thead>

                                        <tr>

                                            <th>Gym Name</th>

                                            <th>Description</th>

                                            <th>Profile Picture</th>

                                            <th>Video</th>

                                            <th>Full Address</th>

                                            <th>Locality</th>

                                            <th>Gallery</th>

                                        </tr>

                                    </thead>

                                    <tbody> 

                                    </tbody> 

                                </table> 

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane " id="AddGym">

                        <div class="widget box">

                            <div class="widget-header">

                                <h4><i class="icon-reorder"></i> Add Gym</h4>

                                <div class="toolbar no-padding">

                                    <div class="btn-group">

                                        <span class="btn btn-xs widget-collapse">

                                            <i class="icon-angle-down"></i>

                                        </span>

                                        <span class="btn btn-xs tbltax-refresh">

                                            <i class="icon-refresh"></i>

                                        </span>

                                    </div>

                                </div>

                            </div>



                            <div class="widget-content">



                                <form id="AddGym">
                       
                        <div class="widget-content">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">Gym Name:</label>
                                <input type="text" name="GymName" class="form-control" required="">
                            </div>
                              <div class="form-group">
                                 <label class="control-label">Description:</label>
                                <div class="editor" name="Description" contenteditable="true"></div>
                                    </div>
                             <div class="form-group">
                               <label class="control-label">Profile Picture:</label>
                               <input type="file" name="ProfilePicture" class="form-control" required="">
                            </div>
                            <div class="form-group">
                               <label class="control-label">Video:</label>
                               <input type="file" name="Video" class="form-control" required="">
                            </div>
                            <div class="form-group">
                               <label class="control-label">Virtual Tour:</label>
                               <input type="" name="VirtualTour" class="form-control" required="">
                            </div>
                           <div class="form-group">
                               <label class="control-label">Full Address:</label>
                               <div class="editor" name="FullAddress" contenteditable="true"></div>
                            </div>
                           
                            </div>

                            <div class="col-md-6">
                           <div class="form-group">
                               <label class="control-label">Gallery:</label>
                               <input type="file" name="Gallery" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Locality:</label>
                                 <select name= "Locality" class="select2-select-00 full-width-fix selectddl LocalityID">
                                        <option>Select Locality</option>  
                                 </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Payment:</label>
                                <input type="currency" name="Payment" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Payment By:</label>
                                <input type="text" name="PaymentBy" class="form-control" required="">
                            </div>
                             <div class="form-group">
                                <label class="control-label">Remarks:</label>
                                <div class="editor" contenteditable="true"></div>
                            </div>
                        </div>
                        <div class="widget-footer">
                            <p class="btnmain">
                                <input type="submit" id="btn-load btnmain" class="btn btn-primary" value="Submit"/>
                            </p>
                        </div>
                    </form>



                            </div>

                        </div>

                    </div>



                </div>

            </div>







        </div>





    </div>



</div>

<style>

   /* option {

    display: none;

}

</style>

<?php

print_r($variables['scriptfiles']);

print_r($variables['script']);

?>
