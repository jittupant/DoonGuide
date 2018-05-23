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
                                <form id="frmAddGym">
                                    <div class="widget-content">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Gym Name:</label>
                                                <input type="text" name="GymName" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Full Address:</label>
                                                <textarea class="form-control" name="FullAddress"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Remarks:</label>
                                                <textarea class="form-control" name="Remark"></textarea>
                                            </div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="typeahead__container">
                                                    <div class="typeahead__field">

                                                        <span class="typeahead__query">
                                                            <input class="js-typeahead-french_v1" name="french_v1[query]" type="search" placeholder="Search" autocomplete="off">
                                                        </span>
                                                        <span class="typeahead__button">
                                                            <button type="submit">
                                                                <i class="typeahead__search-icon"></i>
                                                            </button>
                                                        </span>

                                                    </div>
                                                </div>
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
                                                <label class="control-label">Virtual Tour:</label>
                                                <input type="" name="VirtualTour" class="form-control" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Description:<em style="color: #c13628;font-size: 10px;font-weight: 600;margin-left: 63em;">Select Word to Change color or Change Font Size </em></label>
                                                <div class="editor" name="Description" contenteditable="true"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">Profile Picture:</label>
                                            <div class="file-loading form-group"> 

                                                <input class="imageupload" name="ProfilePicture" type="file">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">Gallery:</label>
                                            <div class="file-loading form-group"> 

                                                <input class="imageupload" name="Gallery[]" type="file" multiple>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <p class="btnmain">
                                                <input type="submit" id="btn-load btnmain" class="btn btn-primary" value="Submit"/>
                                            </p>
                                        </div>
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
