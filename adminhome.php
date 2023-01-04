<?php
include("include/protect.php");
include("include/dbconnect.php");
extract($_REQUEST);
$rdate=date("d-m-Y");
if(isset($btn))
{
$mq=mysqli_query($connect,"select max(id) from vt_status");
$mr=mysqli_fetch_array($mq);
$id=$mr['max(id)']+1;
$qry=mysqli_query($connect,"insert into vt_status(id,bcode,uname,pass,log_st) values($id,'$bcode','$uname','$pass','1')");
	if($qry)
	{
	?>
	<script language="javascript">
	window.location.href="adminhome.php?act=success";
	</script>
	<?php
	}
	else
	{
	?>
	<script language="javascript">
	window.location.href="adminhome.php?act=wrong";
	</script>
	<?php
	}

}
//////////////
if($act=="del")
{
mysqli_query($connect,"delete from vt_status where id=$did");
?>
	<script language="javascript">
	window.location.href="adminhome.php";
	</script>
	<?php
}
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
                
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>-->
                        <li><a href="logout2.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                <?php include("include/link_web.php"); ?>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             User Information <small></small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  
					</ol> 
									
		</div>
		
              <div class="row">
                        <div class="col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Add New User</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" name="form3" method="post">
                   						<?php
									if($act=="success")
									{
									?>
									<div class="alert-success">Added Success..</div>
									<?php
									}
									if($act=="wrong")
									{
									?>
									<div class="alert-danger">Already Exist!</div>
									<?php
									}
									?>
									<div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">B.Code</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="bcode" required>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="uname" required>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="pass" required>
                                            </div>
                                        </div>
										
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <input type="submit" name="btn" class="btn btn-default" value="Add">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    
					
					
					
					 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Returning Officer
                        </div>
                        <div class="panel-body">
						<?php
						$qry=mysqli_query($connect,"select * from vt_status where log_st=1");
						$num=mysqli_num_rows($qry);
						if($num>0)
						{
						?>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
											<th>B.Code</th>
                                            <th>Username</th>
											<th>Password</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										while($row=mysqli_fetch_array($qry))
										{
										$i++;
										?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $i; ?></td>
											<td><?php echo $row['bcode']; ?></td>
                                            <td><?php echo $row['uname']; ?></td>
                                            <td><?php echo $row['pass']; ?></td>
											<td><?php echo '<a href="adminhome.php?act=del&did='.$row['id'].'">Delete</a>'; ?></td>
                                        </tr>
                                     	<?php
										}
										?>
										</tbody>
                                </table>
                            </div>
							<?php
							}
							?>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
               
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
