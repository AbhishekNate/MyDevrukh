<?php 
 include_once("DBConnection.php"); 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rikshaw</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="./dist/css/adminx.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="./dist/css/admin.css" media="screen" />
	

  </head>
  <body>
    <div class="adminx-container">

      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            

            <div class="pb-3">
              <!--<h1>Rikshaw</h1>-->
            </div>
			
				<div class="row">
					<div class="col">
					<!--Add new Rikshaw-->
						<div class="card mb-grid">
						<div class="table-responsive-md">	
							<div class="table-responsive">						  
							<table id="mytable" class="table table-bordred table-striped">
                   
					<thead>
                   
					<th><input type="checkbox" id="checkall" /></th>
					<th>Name</th>
                    <th>Location</th>
                     <th>Contact</th>                     
                      <th>Edit</th>                      
                       <th>Delete</th>
					</thead>
					<tbody>
					
					<tr>
					<td><input type="checkbox" class="checkthis" /></td>
					<td>abc</td>
					<td>tamhane</td>
					<td>9785461254</td>
					
					<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
					<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
					</tr>   
					</tbody>        
				</table>
				</div>
							</div>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
    
 
    
	

    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <!--<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

	<script>
	$(document).ready(function() {
        var table = $('[data-table]').DataTable({
          "columns": [
            null,
            null,
            null,
            null,
            { "orderable": false }
          ]
        });

        /* $('.form-control-search').keyup(function(){
          table.search($(this).val()).draw() ;
        }); */
      });
	</script>

   
  </body>
</html>