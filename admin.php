<?php 
 include_once("DBConnection.php"); 
 
 session_start();
 if(isset($_SESSION["user_id"]))
 {
	/* continue with session no code needed*/
 }
 else
 {
	 
	session_destroy();
	$url = "index.php";
	header("Location:$url");
 }
 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="./dist/css/adminx.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="./dist/css/admin.css" media="screen" />
	

  </head>
  <body>
    <div class="adminx-container">
      <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.php">
          <!--Fetch admin name from server  --><b>Admin</b>
        </a>


        <div class="d-flex flex-1 d-block d-md-none">
          <a href="#" class="sidebar-toggle ml-3">
            <i data-feather="menu"></i>
          </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
          <li class="nav-item dropdown">
            <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" class="d-inline-block align-top" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="./logout.php">Logout
			  
			  </a>
            </div>
          </li>
        </ul>
      </nav>

      <!-- expand-hover push -->
      <!-- Sidebar -->
      <div class="adminx-sidebar expand-hover push" id="source">
        <ul class="sidebar-nav">
          <li class="sidebar-nav-item">
            <a href="admin.php" class="sidebar-nav-link active">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
            </a>
			</li>
			<li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTransport" aria-expanded="false" aria-controls="navTransport">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
                Transport
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navTransport">
              <li class="sidebar-nav-item">
                <a href="#" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    BS
                  </span>
                  <span class="sidebar-nav-name">
                    Bus Schedule
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    TS
                  </span>
                  <span class="sidebar-nav-name">
                    Train Booking
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
				<a id="rikshaw" href="#" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    RS
                  </span>
                  <span class="sidebar-nav-name">
                    Rikshaw
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
                <a id="privatebus" href="#" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    PB
                  </span>
                  <span class="sidebar-nav-name">
                    Private Bus
                  </span>
                </a>
              </li>
            </ul>
          </li>
					<li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navEducation" aria-expanded="false" aria-controls="navEducation">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
                Education
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navEducation">
              <li class="sidebar-nav-item">
                <a id="training_institute" href="#" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    TI
                  </span>
                  <span class="sidebar-nav-name">
                    Training Institute
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    CO
                  </span>
                  <span class="sidebar-nav-name">
                    Colleges
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    SC
                  </span>
                  <span class="sidebar-nav-name">
                    Schools
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    CC
                  </span>
                  <span class="sidebar-nav-name">
                    Coaching Classes
                  </span>
                </a>
              </li>
            </ul>
          </li>
		  
		  <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navShopping" aria-expanded="false" aria-controls="navShopping">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
                Stores
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navShopping">
              <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    FA
                  </span>
                  <span class="sidebar-nav-name">
                    Fashion
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    EL
                  </span>
                  <span class="sidebar-nav-name">
                    Electronics
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    HW
                  </span>
                  <span class="sidebar-nav-name">
                    Hardware
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    AM
                  </span>
                  <span class="sidebar-nav-name">
                   Automobile
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    GS
                  </span>
                  <span class="sidebar-nav-name">
                   General Stores
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    SM
                  </span>
                  <span class="sidebar-nav-name">
                   Super Markets
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    ST
                  </span>
                  <span class="sidebar-nav-name">
                   Stationary
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    JW
                  </span>
                  <span class="sidebar-nav-name">
                   Jewellers
                  </span>
                </a>
              </li>
			  <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    RE
                  </span>
                  <span class="sidebar-nav-name">
                   Real Estate
                  </span>
                </a>
              </li>
			  
			  <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    PS
                  </span>
                  <span class="sidebar-nav-name">
                   Photo Studio
                  </span>
                </a>
              </li>
            </ul>
          </li>
		  <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTourist" aria-expanded="false" aria-controls="navTourist">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
                Tourist Guide
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navTourist">
              <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    TP
                  </span>
                  <span class="sidebar-nav-name">
                    Tourist Places
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    TA
                  </span>
                  <span class="sidebar-nav-name">
                    Tourist Agencies
                  </span>
                </a>
              </li>
			  
			 
            </ul>
          </li>
         </ul>
         
       </ul>
      </div><!-- Sidebar End -->

      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content" id="content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Dashboard</h1>
            </div>
				<a href="#" class="button">
				  <figure><img src="./images/transport.jpg" height="250px" width="250px"></figure>
				  <div class="text">
					Transport
				  </div>
				</a>
				&emsp; &emsp;  
				<a href="#" class="button">
				  <figure><img src="./images/education.jpg" height="250px" width="250px"></figure>
				  <div class="text">
					Education
				  </div>
				</a>
				&emsp; &emsp; 
				<a href="#" class="button">
				  <figure><img src="./images/stores.jpg" height="250px" width="250px"></figure>
				  <div class="text">
					Stores
				  </div>
				</a>
				&emsp; &emsp; 
				<a href="#" class="button">
				  <figure><img src="./images/tourist.png" height="250px" width="250px"></figure>
				  <div class="text">
					Tourist Guide
				  </div>
				</a>
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
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
   
	<script>
		function my_function1(){
		$(document).ready(function(){
		   
		   $('#content').load("rikshaw.php");

		});
		}
		function my_function2(){
		$(document).ready(function(){
		   
		   $('#content').load("privatebus.php");

		});
		}
		function my_function3(){
		$(document).ready(function(){
		   
		   $('#content').load("training_institute.php");

		});
		}
		$('#rikshaw').click(my_function1);
		$('#privatebus').click(my_function2);
		$('#training_institute').click(my_function3);
		//$('#anchorlist > a').click(yourfunction);
	</script>

    <!-- If you prefer vanilla JS these are the only required scripts -->
    <!-- script src="./dist/js/vendor.js"></script>
    <script src="./dist/js/adminx.vanilla.js"></script-->
  </body>
</html>
