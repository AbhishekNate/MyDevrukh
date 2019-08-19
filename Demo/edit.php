 <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rikshaw</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!-- Loader -->
    <link rel="stylesheet" href="css/loader.css">
    <script src="js/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="dashboard/vendor/font-awesome/css/font-awesome.min.css">
  </head>
  <body>
 <div id="edit<?php echo $id; ?>" class="modal fade" role="dialog">
                        <form method="post" class="form-horizontal" role="form">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Item</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="edit_item_id" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_name">Item Name:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="item_name" name="item_name" value="<?php echo $item_name; ?>" placeholder="Item Name" required autofocus> </div>
                                            <label class="control-label col-sm-2" for="item_code">Item Code:</label>
                                            <div class="col-sm-4">
                                                <input type="text" readonly class="form-control" id="item_code" name="item_code" value="<?php echo $item_code; ?>" placeholder="Item Code" required> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="item_description">Description:</label>
                                            <div class="col-sm-4">
                                                <textarea cclass="form-control" id="item_description" name="item_description" placeholder="Description" required style="width: 100%;">
                                                            <?php echo $item_description; ?>
                                                        </textarea>
                                            </div>
                                            <label class="control-label col-sm-2" for="item_category">Category:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="item_category" name="item_category" value="<?php echo $item_category; ?>" placeholder="Category" required> </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" name="update_item"><span class="glyphicon glyphicon-edit"></span> Edit</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </form>
	</body>
</html>