<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
//$rdate=date("d-m-Y");
$user=$_SESSION['user'];
$uname=$_SESSION['uname'];
$qry=mysqli_query($connect,"select * from vt_booth where uname='$uname' && user='$user'");
$row=mysqli_fetch_array($qry);
$name=$row['name'];
$area=$row['area'];
$booth=$row['booth'];
$city=$row['city'];
$division=$row['division'];

$qry2=mysqli_query($connect,"select * from vt_division where division='$division' && district='$city' && user='$user'");
$row2=mysqli_fetch_array($qry2);
$vcount=$row2['vcount'];
$per=$row2['percent'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title><?php include("include/title.php"); ?></title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><strong> <?php include("include/title1.php"); ?></strong></a>
				
		<div id="sideNav" href="">
		<i class="fa fa-bars icon"></i> 
		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="/ins_sem">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>                            </a>                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <?php include("include/link_officer2.php"); ?>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Presiding Officer <small>  </small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="booth_home.php">Home</a></li>
					
					</ol> 
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
				
				<div class="row">
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
							Presiding Officer: <?php echo $name." (".$uname.")"; ?>
							</div>
							<div class="panel-footer">
							Booth: <?php echo $booth; ?>
							</div>
							<div class="panel-footer">
							Division: <?php echo $division; ?>
							</div>
							<div class="panel-footer">
							District: <?php echo $city; ?>
							</div>
						</div>
					</div><!--md4-->
					<div class="col-md-4">
								<div class="board">
									<div class="panel panel-primary">
										<div class="number">
											<h3>
												<h3><?php echo $vcount; ?></h3>
												<small>Vote Count</small>
											</h3> 
										</div>
										<div class="icon">
										   <i class="fa fa-user fa-5x yellow"></i>
										</div>
					 
									</div>
								</div>
							</div><!--md3-->
					<div class="col-md-4">
							<div class="panel panel-default">
							<div class="panel-body easypiechart-panel">
								<h4>Vote Registered</h4>
								<div class="easypiechart" id="easypiechart-blue" data-percent="<?php echo $per; ?>" ><span class="percent"><?php echo $per; ?>%</span>
								</div>
							</div>
				</div>
					</div><!--md3-->
							
				</div><!--row-->
				
				
               
				     <div class="row">
                        <div class="col-sm-6 col-xs-12">  
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Voters</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>Aadhar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										$q1=mysqli_query($connect,"select * from vt_voter where division='$division' && city='$city' && vote_st=0 && user='$user'");
										$i=0;
										while($r1=mysqli_fetch_array($q1))
										{
										$i++;
										$yr=date("Y");
										$dd=explode("-",$r1['dob']);
										$age=$yr-$dd[2];
										?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $r1['name']; ?></td>
                                                <td><?php echo $r1['gender']; ?></td>
                                                <td><?php echo $age; ?></td>
                                                <td><?php echo $r1['aadhar']; ?></td>
                                            </tr>
											<?php
											}
											?>
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Vote Registered</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                   <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Name</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>Aadhar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										$q2=mysqli_query($connect,"select * from vt_voter where division='$division' && city='$city' && vote_st=1 && user='$user'");
										$i=0;
										while($r2=mysqli_fetch_array($q2))
										{
										$i++;
										$yr2=date("Y");
										$dd2=explode("-",$r2['dob']);
										$age2=$yr2-$dd2[2];
										?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php 
												echo '<img src="upload/v'.$r2['id'].'.jpg" width="100" height="100"><br>';
												echo $r2['name']; ?></td>
                                                <td><?php echo $r2['gender']; ?></td>
                                                <td><?php echo $age2; ?></td>
                                                <td><?php echo $r2['aadhar']; ?></td>
                                            </tr>
											<?php
											}
											?>
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
				
		
		<script language="javascript">
	setTimeout(function () {
   //Redirect with JavaScript
 window.location.href="booth_home.php";
  
}, 15000);
	</script>
                 
                      
                <!-- /. ROW  -->
			
		
				<footer><p>All right reserved. Voting System <a href="http://webthemez.com"></a></p>
				
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>