<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Target Material Design Bootstrap Admin Template</title> 
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="admin/assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="admin/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="admin/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="admin/assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
          @include('admin.pertials.nav-top')
	    <!--/. NAV TOP  -->

          @include('admin.pertials.nav-side')
          <!--/. NAV SIDE  -->

          <div id="page-wrapper">
               <div class="header"> 
                    <h1 class="page-header">
                         Donors
                    </h1>
                    <ol class="breadcrumb">
                         <li><a href="#">Admin</a></li>
                         <li class="active">Donors</li>
                    </ol>                                      
               </div>
  
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             Advanced Tables
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeA">
                                            <td>Presto</td>
                                            <td>Opera 7.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">-</td>
                                            <td class="center">A</td>
                                        </tr>
                                       
                                        <tr class="gradeU">
                                            <td>Other browsers</td>
                                            <td>All others</td>
                                            <td>-</td>
                                            <td class="center">-</td>
                                            <td class="center">U</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
           
       </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="admin/assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="admin/assets/js/bootstrap.min.js"></script>
	
	<script src="admin/assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="admin/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="admin/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="admin/assets/js/morris/morris.js"></script>
	
	
	<script src="admin/assets/js/easypiechart.js"></script>
	<script src="admin/assets/js/easypiechart-data.js"></script>
	
	 <script src="admin/assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="admin/assets/js/custom-scripts.js"></script> 
 

</body>

</html>
