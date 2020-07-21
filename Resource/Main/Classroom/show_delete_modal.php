<!-- Delete -->
<div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-left:-150px; color:red">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel" style="margin-left:20px; margin-top:10px">Delete</h4>
                </center>
            </div>
            <div class="modal-body">

                <div class="container-fluid">
                    <h5>
                        <center>Do you want to delete <strong><?php echo $row['class_name']; ?>?
                            </strong></center>
                    </h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span> Delete</a>
            </div>

        </div>
    </div>
</div>
<!-- /.modal -->