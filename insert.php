
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>INSERT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../dist/css/adminx.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../dist/css/admin.css" media="screen" />
	
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
					<form method="post" action="insert.php" align="center">
					 <h3>Add New Rikshaw</h3>
						Name <input type ="text" id="t1" name="name" placeholder="name">&emsp; &emsp; 
						Location <input type="text" id="t2" name="location" placeholder="location">&emsp; &emsp; 
						contact <input type="number" id="n1" name="contact" placeholder="contact">&emsp; &emsp; 
						
						<input type="submit" id="b1" name="store" value="Store">
					</form>
				</div>
				<div class="card mb-grid">
                  
                   
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

		<!--?php
		include_once("DBconnection.php");
		session_start();

		//print_r($_POST);
		 
		// Escape user inputs for security
		$name = $_POST['name'];
		$location = $_POST['location'];
		$contact = $_POST['contact'];
		$type = $_POST['type'];
		 
		// Attempt insert query execution
		$sql = "INSERT INTO transport (type, name, contact, route) VALUES ('rikshaw', '$name', $contact, '$location')";
		//echo $sql;
		if(mysqli_query($db, $sql)){
			echo '<script language="javascript">';
			echo 'alert("Record Inserted Successfully");';
			echo "document.location='admin.php'; </script>";
			
			
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
		}
		 
		// Close connection
		mysqli_close($db);
		?-->
		