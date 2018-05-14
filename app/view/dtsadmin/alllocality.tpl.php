<?php print_r($variables['header']); ?>
<div id="content">

    <div class="container">

        <div class="crumbs">

            <ul id="breadcrumbs" class="breadcrumb">

                <li>

                    <i class="icon-home"></i>

                    <a href="home">Dashboard</a>

                </li>

                <li class="current">Manage Locality</li>

            </ul>

        </div>

        <div class="row row-bg dashboard-services">
            <div class="tabbable tabbable-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#AllLocality" data-toggle="tab">All Locality</a>
                    </li>
                    <li>
                        <a href="#AddLocality" data-toggle="tab">Add Locality</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="AllLocality">
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
                                <table class="table table-striped table-bordered table-hover table-checkable table-tabletools display" id="tblallsociety" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Locality</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody> 

                                    </tbody> 
                                </table> 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="AddLocality">
                        <div class="widget box">
                            <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Add Locality</h4>
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

                                <form id="frmLocality">
                                    <div class="widget-content">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Country</label>
                                                <div class="col-md-10">
                                                    <select name="CountryID" class="select2-select-00 full-width-fix selectddl CountryID" onchange="GetState(this);" required="">
                                                        <option>Select Country</option>  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">State</label>
                                                <div class="col-md-10">
                                                    <select name="StateID" class="select2-select-00 full-width-fix selectddl StateID" onchange="GetCity(this);" required="">
                                                        <option>Select State</option>  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">City</label>
                                                <div class="col-md-10">
                                                    <select name="CityID" class="select2-select-00 full-width-fix selectddl CityID" required="">
                                                        <option>Select City</option>  
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" for="">Locality</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="txtLocality" class="form-control" value="" placeholder="Enter Locality Name" required=""/>
                                                </div>
                                            </div>
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
    option {
    display: none;
}
</style>
<?php
print_r($variables['scriptfiles']);
print_r($variables['script']);
?>