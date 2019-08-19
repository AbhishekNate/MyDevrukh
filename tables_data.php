<?php  
 include_once("DBConnection.php");
 $query ="SELECT * FROM transport WHERE type='rikshaw' ORDER BY ID DESC ";  
 $result = mysqli_query($db, $query);  
 ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AdminX - Data Tables</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../dist/css/adminx.css" media="screen" />
	
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