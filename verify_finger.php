<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
$rdate=date("d-m-Y");
$m=date("m");
$y=date("y");
$user=$_SESSION['user'];
$booth=$_SESSION['booth'];
$q1=mysqli_query($connect,"select * from vt_voter where id=$id");
$r1=mysqli_fetch_array($q1);





/*if(isset($btn))
{
$finger="yes";

	if($finger=="yes")
	{
mysqli_query($connect,"update vt_booth set voterid=$id,status=1 where uname='$booth'");

//mysqli_query($connect,"update vt_voter set finger_st=1 where id=$id");


//header("location:process.php?id=".$id);
?>
<embed src="assets/img/a1.wav" autostart="true" width="200" height="40"></embed>
<script language="javascript">
	setTimeout(function () {
   //Redirect with JavaScript
 window.location.href="process.php?id=<?php echo $id; ?>";
  
}, 5000);
	</script>
<?php

	}
	else
	{
	$msg="Fingerprint not Match!";
	}
}*/
?>
<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
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
	
    <link href="assets/css/select2.min.css" rel="stylesheet" >
	<link href="assets/css/checkbox3.min.css" rel="stylesheet" >
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                <a class="navbar-brand" href=""><strong><!--<i class="icon fa fa-plane"></i>--> <?php include("include/title1.php"); ?></strong></a>
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
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
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
                <?php include("include/link_home.php"); ?>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Fingerprint Verification <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  
					</ol> 
									
		</div>
		<?php
		
		
$q12=mysqli_query($connect,"select * from vt_det2 where sms_st=0 && user='$user' order by id desc");
$r12=mysqli_fetch_array($q12);
$det=$r12['details'];
$rid=$r12['id'];
$ss=explode("/",$det);
$getid=$ss[1];
$uu=$ss[0];

$q14=mysqli_query($connect,"select * from vt_status where bcode='$uu'");
$r14=mysqli_fetch_array($q14);
$urr=$r14['uname'];


if($urr==$user)
{
	if($getid==$id)
	{
	$act="1";
	$msg="Fingerprint Matched";
	}
	else
	{
	
	$act="2";
	$msg="Fingerprint not Match!";
	}
}
else
{
$act="";
}
	
		?>
		<div class="row">
                        <div class="col-sm-6 col-xs-12">  
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Voter Information</div>
										<?php 
										
										//echo "select * from vt_status where bcode='$uu'";
										//echo $uu." ".$user." ".$urr; 
										?>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" method="post">
									<?php
									if($urr==$user)
									{
										if($act=="1")
										{
									?>
									<table width="444" height="263" border="0" cellpadding="5">
									<tr>
									<td width="111">Name</td>
									<td width="186">: <?php echo $r1['name']; ?></td>
									</tr>
									<tr>
									<td>Gender</td>
									<td>: <?php echo $r1['gender']; ?></td>
									</tr>
									<tr>
									<td>Date of Birth</td>
									<td>: <?php echo $r1['dob']; ?></td>
									</tr>
									<tr>
									<td>Aadhar No.</td>
									<td>: <?php echo $r1['aadhar']; ?></td>
									</tr>
									<tr>
									<td>Voter ID</td>
									<td>: <?php echo $r1['voterid']; ?></td>
									</tr>
									<tr>
									<td>Contact No.</td>
									<td>: <?php echo $r1['contact']; ?></td>
									</tr>
									<tr>
									<td>E-mail</td>
									<td>: <?php echo $r1['email']; ?></td>
									</tr>
									<tr>
									<td>Address</td>
									<td>: <?php echo $r1['address'].", ".$r1['area']; ?></td>
									</tr>
									<tr>
									<td>Division</td>
									<td>: <?php echo $r1['division'].", ".$r1['city']; ?></td>
									</tr>
									</table>
									<?php
									mysqli_query($connect,"update vt_booth set voterid=$id,status=1 where uname='$booth'");
									mysqli_query($connect,"update vt_det2 set sms_st=1 where id=$rid");
									
									?>
									<div class="alert-danger"><?php echo $msg; ?></div>
									<embed src="assets/img/a1.wav" autostart="true" width="200" height="40"></embed>
									<script>
//Using setTimeout to execute a function after 5 seconds.
setTimeout(function () {
   //Redirect with JavaScript
   window.location.href= 'process.php?id=<?php echo $id; ?>';
}, 6000);
</script>  
									
									
									<?php
										}
										else
										{
										mysqli_query($connect,"update vt_det2 set sms_st=1 where id=$rid");
										?><div class="alert-danger">Fingerprint not Match!</div><?php
										$act="";
										?>
										<script>
//Using setTimeout to execute a function after 5 seconds.
setTimeout(function () {
   //Redirect with JavaScript
   window.location.href= 'verify_finger.php?id=<?php echo $id; ?>';
}, 6000);
</script>  <?php
										}
									
									}
									else
									{
									
									?><h3 style="color:#FF6600">Verify Fingerprint...............</h3><?php
									}
									?>
									
                                    <br>
									<!--<input type="submit" name="btn" class="btn btn-default" value="Verify Fingerprint">-->
									</form>
									
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Your Fingerprint</div>
                                    </div>
                                </div>
                                <div class="panel-body" align="center">
                                    <img src="assets/img/fing3.jpeg" class="img-responsive" width="380" height="380">
						
                                </div>
                            </div>
                        </div>
                    </div>
		

<?php

if($act=="")
{
?>           
<script>
//Using setTimeout to execute a function after 5 seconds.
setTimeout(function () {
   //Redirect with JavaScript
   window.location.href= 'verify_finger.php?id=<?php echo $id; ?>';
}, 6000);
</script>                
<?php
}
?>                   
			<footer><p align="center">All right reserved. Voting System <a href="http://webthemez.com"></a></p></footer>
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
	<script src="assets/js/select2.full.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	  $(".selectbox").select2();
	});
	</script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
	
		
   
</body>
</html>
