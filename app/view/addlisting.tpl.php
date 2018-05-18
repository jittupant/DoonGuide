<?php print_r($variables['header']); ?>

<div id="content">
    <div class="container">
         <form id="AddGym">
                    <div class="col-md-12">
                            <div class="col-md-6">
                            <div class="form-group">
                                 <label class="control-label">Business:</label>
                                 <select name= "Business" class="form-control">
                                     <option>Gym</option>
                                     <option>Yoga</option>

                                 </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Gym Name:</label>
                                <input type="text" name="GymName" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                 <label class="control-label">Description:</label>
                                 <textarea class="editor" name="Description"></textarea>                              </div>
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
                               <textarea class="form-control" name="FullAddress"></textarea>
                           </div>                     
                           </div>
                            <div class="col-md-6">
                            
                           <div class="form-group">
                               <label class="control-label">Gallery:</label>
                               <input type="file" name="Gallery" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Locality:</label>
                                 <select name= "Locality" class="select2-select-00 full-width-fix selectddl LocalityID" style="width: 100%;">
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
                             <textarea class="form-control" name="Remark"></textarea>
                            </div>
                        </div>
                      <div class="col-md-12">
                           
                                <input type="submit" id="btn-load btnmain" class="btn btn-primary pull-right" value="Submit"/>
                                </div>
                           
                        </div>
                    </form>
    </div>
</div>
<style type="text/css">
    .selectddl option {
    display: none;
}

</style>
<?php print_r($variables['footer']); ?>
<?php print_r($variables['scriptfiles']); ?>
