<?php print_r($variables['header']);?>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Mail <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mail</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 col-md-10">
            <div class="btn-group">
                <button type="button" class="btn btn-default">
                    <div class="checkbox" style="margin-top: -10px;">
                        <label>
                            <input type="checkbox">
                        </label>
                    </div>
                </button>
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">All</a></li>
                    <li><a href="#">None</a></li>
                    <li><a href="#">Read</a></li>
                    <li><a href="#">Unread</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                &nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;</button>
            <div class="pull-right">
                <i class="text-muted"><b>1</b>–<b>50</b> of <b>160</b></i>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default">
                        <i class="fa fa-chevron-left"></i>
                    </button>
                    <button type="button" class="btn btn-default">
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <a href="#" class="btn btn-danger btn-sm btn-block" role="button"><i class="fa fa-edit"></i> Compose</a>
            <hr>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i style="margin-top: 5px;" class="badge pull-right">32</i> Inbox </a>
                </li>
                <li><a href="#">Sent Mail</a></li>
                <li><a href="#"><i style="margin-top: 5px;" class="badge pull-right">3</i>Drafts</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa -inbox">
              </i>Primary</a></li>
            <li><a href="#messages" data-toggle="tab"><i class="fa fa-tags"></i>
                    Promotions</a></li>
                <li><a href="#settings" data-toggle="tab"><i class="fa fa-plus no-margin">
                </i></a></li>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" style="margin-top: -8px;">
                                </label>
                            </div>
                            <i class="fa fa-star-empty"></i><i class="name" style="min-width: 120px;
                                display: inline-block;">&nbsp;&nbsp;&nbsp;Mark Otto</i> <i class="">Nice work on the lastest version</i>
                            <i class="text-muted" style="font-size: 11px;">- More content here</i> <i class="badge">12:10 AM</i> <i class="pull-right"><i class="fa fa-paperclip">
                                </i></i></a><a href="#" class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" style="margin-top: -8px;">
                                        </label>
                                    </div>
                                    <i class="fa fa-star-empty"></i><i class="name" style="min-width: 120px;
                                        display: inline-block;">&nbsp;&nbsp;&nbsp;Jason Markus</i> <i class="">This is big title</i>
                                    <i class="text-muted" style="font-size: 11px;">- I saw that you had..</i> <i class="badge">12:09 AM</i> <i class="pull-right"><i class="fa fa-paperclip">
                                        </i></i></a><a href="#" class="list-group-item read">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" style="margin-top: -8px;">
                                                </label>
                                            </div>
                                         <i class="name" style="min-width: 120px;
                                                display: inline-block;">&nbsp;&nbsp;&nbsp;Jane Patel</i> <i class="">This is big title</i>
                                            <i class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</i> <i class="badge">11:30 PM</i> <i class="pull-right"><i class="fa fa-paperclip">
                                                </i></i></a>
                    </div>
                </div>
                <div class="tab-pane fade in" id="profile">
                    <div class="list-group">
                        <div class="list-group-item">
                            <i class="text-center">This tab is empty.</i>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="messages">
                    ...</div>
                <div class="tab-pane fade in" id="settings">
                    This tab is empty.</div>
            </div>
        </div>
    </div>

<div class="col-md-8">
    
</div>

</div>


<?php print_r($variables['footer']); ?>
<?php print_r($variables['scriptfiles']); ?>