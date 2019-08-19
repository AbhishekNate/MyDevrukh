<?php  
 include_once("DBConnection.php");
 $query ="SELECT * FROM transport WHERE type='privatebus' ORDER BY ID DESC ";  
 $result = mysqli_query($db, $query);  
 ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Private Buses</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../dist/css/adminx.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../dist/css/insert.css" media="screen" />
	
  </head>
  <body>
    
      <!-- Header --> <!-- Main Content -->
      <div class="adminx-content">
		<div class="pb-3" align="center">
              <h1>Private Buses</h1>
        </div>        
			<div class="pb-3" align="center">
              <h3>Add New Buses</h3>
				
			</div> 
            <div class="row">
              <div class="col">
                <div class="card mb-grid">
					<form method="post" action="insert.php" align="center">
						Name <input type ="text" id="t1" name="name" placeholder="name">&emsp; &emsp; 
						Location <input type="text" id="t2" name="location" placeholder="location">&emsp; &emsp; 
						contact <input type="number" id="n1" name="contact" placeholder="contact">&emsp; &emsp; 
						
						<input type="submit" id="b1" name="store" value="Store">
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
                               echo '  
                               <tr>  
                                    <td>'.$row["type"].'</td>  
                                    <td>'.$row["name"].'</td>  
                                    <td>'.$row["contact"].'</td>  
                                    <td>'.$row["route"].'</td>   
									<td align="center">
										<button class="btn btn-sm btn-primary">Edit</button>
										<button class="btn btn-sm btn-danger">Delete</button>
									</td>
                               </tr>  
                               ';  
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
 </script>
	
    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="../dist/js/vendor.js"></script>
    <script src="../dist/js/adminx.vanilla.js"></script-->
  </body>
</html>