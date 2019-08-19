<?php  
 include_once("DBConnection.php");
 $query ="SELECT * FROM transport WHERE type='rikshaw' ORDER BY ID DESC ";  
 $result = mysqli_query($db, $query);  
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
    
      <!-- Header --> <!-- Main Content -->
      <div class="adminx-content">
		<div class="pb-3" align="center">
              <h1>Rikshaw</h1>
        </div>        
			
            <div class="row">
              <div class="col">
                <div class="card mb-grid">
					<form  align="center" method="post" action="addtransport.php"> 
					 <h3>Add New Rikshaw</h3>
						<button type="Submit" name="add" id="add" class="btn btn-info" >Add</button>
					</form>
				</div>
				<div class="card mb-grid">
                  
                    <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
							
                               <tr>  
                                    <td>Type</td>  
                                    <td>Name</td>  
                                    <td>Contact</td>  
                                    <td>Location</td> 
									<td>Edit / Delete</td>
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
							?> 
                                
                               <tr>  
                                    <td><?php echo $row["type"]?></td>  
                                    <td><?php echo $row["name"]?></td>  
                                    <td><?php echo $row["contact"]?></td>  
                                    <td><?php echo $row["route"]?></td>   
									<td align="center">
										<a href="inserttransport.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
										<a href="inserttransport.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
									</td>
                               </tr>  
                        <?php
						  }
						?>      
                     </table>  
                  </div>
                </div>
              </div>
            </div>
          
      <!-- // Main Content -->


    <!-- If you prefer jQuery these are the required scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 
 function my_function1(){
		$(document).ready(function(){
		   
		   $('#adminx-content').load("addtransport.php");

		});
		}
		
 </script>
	
    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
  </body>
</html>