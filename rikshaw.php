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
      <div class="adminx-content" id="row">
		<div class="pb-3" align="center">
              <h1>Rikshaw</h1>
        </div>        
			
             
				
			
            <div class="row">
              <div class="col">
                <div class="card mb-grid">
					<form  align="center" method="post" > 
					 <h3>Add New Rikshaw</h3>
						<a id="add" href="#" class="btn btn-info">Add</a>
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
										<a href="addtransport.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
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
    
    <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 
 function my_function1(){
		$(document).ready(function(){
		   
		   $('#row').load("addtransport.php");

		});
		}
		$('#add').click(my_function1);
		
 </script>
	
    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
  </body>
</html>