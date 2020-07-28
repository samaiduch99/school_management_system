<!-- Edit Model -->

<div class="modal fade" id="edit<?php echo $row['tea_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-left:-150px; color:red">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel" style="margin-left:20px; margin-top:10px">Edit</h4>
                </center>
            </div>
            <div class="modal-body">
                <?php
$edit=$mysqli->query("select * from teacher where tea_id=".$row['tea_id']);
$erow=$edit->fetch_assoc();
?>
                <div class="container-fluid">
                    <form method="POST" action="update.php?tea_id=<?php echo $erow['tea_id']; ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Name:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="tea_name" class="form-control" value="<?php echo $erow['tea_name']; ?>"
                                    required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Gender:</label>
                            </div>
                            <div class="col-lg-8" align="left">
                                <select name="gender">
                                    <?php if ($erow['gender']=="Male") {?>
                                    <option selected>Male</option>
                                    <option>Female</option>
                                    <?php }else{ ?>
                                    <option>Male</option>
                                    <option selected>Female</option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Address:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="age" class="form-control"
                                    value="<?php echo $erow['age']; ?>" required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Phone:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="phone"
                                    value="<?php echo $erow['phone']; ?>" required>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Email:</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="tea_email" value="<?php echo $erow['tea_email']; ?>"
                                    required>
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