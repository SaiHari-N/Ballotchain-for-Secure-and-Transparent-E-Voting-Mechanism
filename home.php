<?php
session_start();
include("include/dbconnect.php");
extract($_REQUEST);
//$rdate=date("d-m-Y");
$uname=$_SESSION['uname'];
$user=$_SESSION['user'];
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
	<style type="text/css">
	.bg-success
	{
	background-color:#009900;
	}
	.bg-warning
	{
	background-color:#0099CC;
	}
	.bg-danger
	{
	background-color:#FF0000;
	}
	</style>
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
                <?php include("include/link_officer1.php"); ?>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Returning Officer <small> Tamilnadu </small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="home.php">Home</a></li>
					
					</ol> 
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
				<?php
				$aq1=mysqli_query($connect,"select * from vt_status where uname='$user'");
				$ar1=mysqli_fetch_array($aq1);
				$est=$ar1['election_st'];
				if($est=="1")
				{
					$q1=mysqli_query($connect,"select * from vt_division where user='$user'");
					while($r1=mysqli_fetch_array($q1))
					{
						$cap=array();
						$cn=array();
						$vv=array();
						
						$cn1=array();
						$cn2=array();
						$vv1=array();
						$vv2=array();
						
						$q2=mysqli_query($connect,"select distinct(caption) from vt_candidate where user='$uname'");
						while($r2=mysqli_fetch_array($q2))
						{
						$cap[]=$r2['caption'];
						$cn[]=rand(100,500);
						$cn1[]=rand(5,50);
						$cn2[]=rand(51,100);
						
						}
						$g=0;
						$bg=0;
						$bg1=0;
						$bg2=0;
						for($g=0;$g<count($cn);$g++)
						{
							if($cn[$g]>$bg)
							{
							$bg=$cn[$g];
							}
							if($cn1[$g]>$bg1)
							{
							$bg1=$cn1[$g];
							}
							if($cn2[$g]>$bg2)
							{
							$bg2=$cn2[$g];
							}
						}	
						for($k=0;$k<count($cap);$k++)
							{
								if($bg==$cn[$k])
								{
								$capt=$cap[$k];
								break;
								}
							}
						for($k=0;$k<count($cap);$k++)
							{	
							
								if($bg1==$cn1[$k])
								{
								$capt1=$cap[$k];
								break;
								}
							}
						for($k=0;$k<count($cap);$k++)
							{
								if($bg2==$cn2[$k])
								{
								$capt2=$cap[$k];
								break;
								}
							}
							
						$j=0;
						foreach($cap as $cp)
						{
							$vv[]=$cp."-".$cn[$j];
							$vv1[]=$cp."-".$cn1[$j];
							$vv2[]=$cp."-".$cn2[$j];
							
							
						$j++;
						}
						$rn1=rand(10,200);
						$asum=array_sum($cn);
						$vnt=$asum+$rn1;
						
						$value=implode(",",$vv);
						////
						$asum1=array_sum($cn1);
						$vnt1=$asum1;
						
						$value1=implode(",",$vv1);
						///
						$asum2=array_sum($cn2);
						$vnt2=$asum2;
						
						$value2=implode(",",$vv2);
						///
						
						
					//$rn1=rand(1500,2500);
					mysqli_query($connect,"update vt_division set vcount=0,vcount2=$vnt,detail='$value',caption='$capt',vnt1='$vnt1',vnt2='$vnt2',detail1='$value1',caption1='$capt1',detail2='$value2',caption2='$capt2' where id=".$r1['id']."");
					}
					mysqli_query($connect,"update vt_status set election_st=2 where uname='$user'");
				}
				
				if($est=="2")
				{
					$q3=mysqli_query($connect,"select * from vt_division where user='$user'");
					$k=0;
					$per_sum=0;
					while($r3=mysqli_fetch_array($q3))
					{
					$rn1=rand(20,100);
					//mysqli_query($connect,"update vt_division set vcount=vcount+$rn1 where id=".$r3['id']."");
							$q4=mysqli_query($connect,"select * from vt_division where id=".$r3['id']."");
							$r4=mysqli_fetch_array($q4);
							$vc=$r4['vcount'];
							$vc2=$r4['vcount2'];
							$per=($vc/$vc2)*100;
							$per1=ceil($per);
							$per_sum+=$per1;
							$k++;
							//mysqli_query($connect,"update vt_division set percent=$per1 where id=".$r3['id']."");
							
					}
					$all_per=$per_sum/$k;
				}
				
				
				?>
				
				<div class="row">
					<div class="col-md-12">
					
					<?php
					///overall tamilnadu##############
					echo "Overall Vote Registered in Tamilnadu ".$all_per."%";
					if($all_per>=70)
						{
					?>
					
					 <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                       <div class="progress-bar bg-success" role="progressbar" aria-valuenow="<?php echo $all_per; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $all_per; ?>%;"></div>
													   
					<?php } else if($all_per>=40) { ?>							
			   <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                       <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="<?php echo $all_per; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $all_per; ?>%;"></div>
                                                    </div>
                                                </div>
				<?php } else { ?>					
				<div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?php echo $all_per; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $all_per; ?>%;"></div>
                                                    </div>
                                                </div>
					<?php } ?>	
					</div>
				</div>	
				
				<div class="row">
					<div class="col-md-4">
					<table class="table" style="background-color:#FFFFFF">
					<tr bgcolor="#FF0033" style="color:#FFFFFF">
					<th>Districts - Vote Registered</th>
					</tr>
					<?php
					$q2=mysqli_query($connect,"select distinct(district) from vt_division where user='$user' order by district");
					while($r2=mysqli_fetch_array($q2))
					{
					?>
					<tr>
					<td><?php echo $r2['district']; 
					
					
					$q22=mysqli_query($connect,"select * from vt_division where district='".$r2['district']."' && user='$user'");
					$vx1=0;
					$vx2=0;
					while($r22=mysqli_fetch_array($q22))
						{
						$vx1+=$r22['vcount'];
						$vx2+=$r22['vcount2'];
						}
						$perr=($vx1/$vx2)*100;
						$perr1=floor($perr);
						echo " ".$perr1."%"; 
						if($perr1>=70)
						{
					?>
					
					 <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                       <div class="progress-bar bg-success" role="progressbar" aria-valuenow="<?php echo $perr1; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perr1; ?>%;"></div>
													   
					<?php } else if($perr1>=40) { ?>							
			   <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                       <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="<?php echo $perr1; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perr1; ?>%;"></div>
                                                    </div>
                                                </div>
				<?php } else { ?>					
				<div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="<?php echo $perr1; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perr1; ?>%;"></div>
                                                    </div>
                                                </div>
					<?php } ?>	
					
					</td>
					</tr>
					<?php
					}
					?>
					</table>
					</div><!--col 1-->
					
					<?php
					$q31=mysqli_query($connect,"select * from vt_division where user='$user' order by rand() limit 0,1");
					$r31=mysqli_fetch_array($q31);
					$dist=$r31['district'];
					
					?>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div style="color:#FFFFFF; background-color:#FF6666; height:30px; line-height:30px;">
								<h3>District:  <?php echo $dist; ?></h3>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
							<table class="table" style="background-color:#FFFFFF">
							<?php
							$q32=mysqli_query($connect,"select * from vt_division where district='$dist' && user='$user'");
							$vy1=0;
							$vy2=0;
							$j=0;
							while($r32=mysqli_fetch_array($q32))
								{
								$j++;
								$vy1=$r32['vcount'];
								$vy2=$r32['vcount2'];
								
								$perx=($vy1/$vy2)*100;
								$perx1=floor($perx);
								$gn[]="'".$r32['division']."'";
								$gv[]=$perx1;
							?>
								<tr>
								<td><?php echo $j.". ".$r32['division']; ?></td>
								<td>Count: <?php echo $vy1; ?></td>
								<td><?php echo $perx1; ?>%</td>
								</tr>
								
							
							<?php
							}
							?>
							</table>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-default chartJs">
										<div class="panel-heading">
											<div class="card-title">
												<div class="title">Division - Vote Registered</div>
											</div>
										</div>
										<div class="panel-body">
											
											<canvas id="bar-chart" class="chart"></canvas>
										</div>
									</div>
								</div>
								</div>
							
							
							
							
						</div><!--row-->
					
					
					</div><!--col-6-->
					
				</div>
				
				
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3><?php echo $c1[0]; ?></h3>
								<small><?php echo $b1[0]."<br>".$a1[0]; ?></small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-eye fa-5x red"></i>
						</div>
		 
                        </div>
						</div>
                    </div>
					
					       <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3><?php echo $c1[1]; ?></h3>
								<small><?php echo $b1[1]."<br>".$a1[1]; ?></small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-shopping-cart fa-5x blue"></i>
						</div>
		 
                        </div>
						</div>
                    </div>
					
					       <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3><?php echo $c1[2]; ?></h3>
								<small><?php echo $b1[2]."<br>".$a1[2]; ?></small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-comments fa-5x green"></i>
						</div>
		 
                        </div>
						</div>
                    </div>
					
					       <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board">
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3><?php echo $c1[3]; ?></h3>
								<small><?php echo $b1[3]."<br>".$a1[3]; ?></small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-user fa-5x yellow"></i>
						</div>
		 
                        </div>
						</div>
                    </div>
				   
                </div>
				     <div class="row">
                        <div class="col-sm-6 col-xs-12">  
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Line Chart</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="line-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="panel panel-default chartJs">
                                <div class="panel-heading">
                                    <div class="card-title">
                                        <div class="title">Bar Chart</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <canvas id="bar-chart" class="chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
				
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Caption1</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="25" ><span class="percent">25%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Caption2</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="5" ><span class="percent">5%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Caption3</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="15" ><span class="percent">15%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Caption4</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="55" ><span class="percent">55%</span>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
			
		
				<div class="row">
				<div class="col-md-5">
						<div class="panel panel-default">
						<div class="panel-heading">
							Line Chart
						</div>
						<div class="panel-body">
							<div id="morris-line-chart"></div>
						</div>						
					</div>   
					</div>		
					
						<div class="col-md-7">
					<div class="panel panel-default">
					<div class="panel-heading">
                                Bar Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
						
					</div>  
					</div>
					
				</div> 
			 
				
				
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="panel panel-default">                            
							<div class="panel-heading">
							Area Chart
						</div>
						<div class="panel-body">
							<div id="morris-area-chart"></div>
						</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Donut Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>

                </div>
				<div class="row">
				<div class="col-md-12">
				
					</div>		
				</div> 	
                <!-- /. ROW  -->

	   
				
				
				
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              
                            </div>
                            <div class="panel-body">
                                <div class="list-group">

                                  
                                </div>
                                
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Responsive Table Example
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                  
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /. ROW  -->
			<iframe src="vote_process.php" frameborder="0" width="50" height="50"></iframe>
	<script language="javascript">
	setTimeout(function () {
   //Redirect with JavaScript
 window.location.href="home.php";
  
}, 15000);
	</script>
				<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p>
				
        
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
    <!--<script type="text/javascript" src="assets/js/chartjs.js"></script> -->
	<?php
	$gnn=implode(",",$gn);
	$gvv=implode(",",$gv);
	?>
	<script>
											$(function() {
  var ctx, data, myBarChart, option_bars;
  Chart.defaults.global.responsive = true;
  ctx = $('#bar-chart').get(0).getContext('2d');
  option_bars = {
    scaleBeginAtZero: true,
    scaleShowGridLines: true,
    scaleGridLineColor: "rgba(0,0,0,.05)",
    scaleGridLineWidth: 1,
    scaleShowHorizontalLines: true,
    scaleShowVerticalLines: false,
    barShowStroke: true,
    barStrokeWidth: 1,
    barValueSpacing: 5,
    barDatasetSpacing: 3,
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
  };
  data = {
    labels: [<?php echo $gnn; ?>],
    datasets: [
      {
        label: "My First dataset",
        fillColor: "rgba(26, 188, 156,0.6)",
        strokeColor: "#1ABC9C",
        pointColor: "#1ABC9C",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "#1ABC9C",
        data: [<?php echo $gvv; ?>]
      }/*, {
        label: "My Second dataset",
        fillColor: "rgba(34, 167, 240,0.6)",
        strokeColor: "#22A7F0",
        pointColor: "#22A7F0",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "#22A7F0",
        data: [28, 48, 40, 19, 86, 27, 90]
      }*/
    ]
  };
  myBarChart = new Chart(ctx).Bar(data, option_bars);
});
											</script>

</body>

</html>