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
                                <label class="control-label" style="position:relative; top:7px;">Name:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="tea_name" placeholder="Your full name"
                                    required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Gender:</label>
                            </div>
                            <div class="col-lg-8">
                                <select name="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Age:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="number" class="form-control" name="age" placeholder="Age"
                                    required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Phone:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="phone" placeholder="Your phone number"
                                    required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Email:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="tea_email" placeholder="Your Email"
                                    required>
                            </div>
                        </div>
                        <!-- <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="control-label" style="position:relative; top:7px;">Profile Image:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="file" class="filestyle" name="pimage" placeholder="Your Picture" />
                            </div>
                        </div> -->
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