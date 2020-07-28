<!-- Add New employee-->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-left:-150px; color:red">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel" style="margin-left:20px; margin-top:10px">Add New</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="insert.php" class="form-horizontal" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Class-Name:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="class_name" placeholder="Your full name"
                                    required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Floor:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="floor" placeholder="Your address"
                                    required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Description:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="description" placeholder="Description"
                                    required>
                            </div>
                        </div>
                       
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

                    </form>
            </div>
        </div>
    </div>
</div>