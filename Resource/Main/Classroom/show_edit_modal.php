<!-- Edit Model -->

<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-left:-150px; color:red">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel"style="margin-left:20px; margin-top:10px" >Edit</h4>
                </center>
            </div>
            <div class="modal-body">
                <?php
$edit=$mysqli->query("select * from classroom where id=".$row['id']);
$erow=$edit->fetch_assoc();
?>
                <div class="container-fluid">
                    <form method="POST" action="update.php?id=<?php echo $erow['id']; ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Class-Name:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="class_name" class="form-control" value="<?php echo $erow['class_name']; ?>"
                                    required>
                            </div>
                        </div>
                        
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Floor:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="floor" class="form-control" value="<?php echo $erow['floor']; ?>" required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Description:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="description" value="<?php echo $erow['description']; ?>" required>
                            </div>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <span
                        class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" class="btn btn-success"> <span class="glyphicon glyphicon-check"></span>
                    Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->