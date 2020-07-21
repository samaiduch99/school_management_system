<!-- Detail Model -->
<div class="modal fade" id="detail<?php echo $row['tea_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-left:-150px; color:red">&times;</button>
                <h3 style="margin-left:20px; margin-top:10px"> Profile Details </h3>
            </div>
            <div class="modal-body">
                <?php
$edit=$mysqli->query("select * from teacher where tea_id=".$row['tea_id']);
$erow=$edit->fetch_assoc();
?>
                <div class="container-fluid">
                    <form method="POST" action="update.php?tea_id=<?php echo $erow['tea_id']; ?>" enctype="multipart/form-data">

                        <!-- <div class="row">
                            <div class="col-lg-12" align="center">
                                <php $img = "http://localhost/php-crud-student/profile_images/".$row['tea_id']. ".jpg";?>
                                <img src='<php echo $img ?>' height="150px" width="170px" />

                            </div>

                        </div> -->
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Name:</label>
                            </div>
                            <div class="col-lg-8" align="left">
                                <?php echo $erow['tea_name']; ?>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Gender:</label>
                            </div>
                            <div class="col-lg-8" align="left">
                                <?php echo $erow['gender']; ?>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label style="position:relative; top:7px;">Age:</label>
                            </div>
                            <div class="col-lg-8" align="left">
                                <?php echo $erow['age']; ?>
                            </div>
                        </div>
                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Phone:</label>
                            </div>
                            <div class="col-lg-8" align="left">
                                <?php echo $erow['phone']; ?>
                            </div>
                        </div>


                        <div style="height:10px;"></div>
                        <div class="row">
                            <div class="col-lg-4" align="left">
                                <label class="control-label" style="position:relative; top:7px;">Email:</label>
                            </div>
                            <div class="col-lg-8" align="left">
                                <?php echo $erow['tea_email']; ?>
                            </div>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    Close</button>

            </div>
            </form>
        </div>
    </div>
</div>
<!-- /.modal -->