<?php
include("include/dbconnect.php");
extract($_REQUEST);
$rdate=date("d-m-Y");
$ch1=mktime(date('h')+5,date('i')+30,date('s'));
$rtime=date('h:i:s A',$ch1);

$mq=mysqli_query($connect,"select max(id) from vt_det");
$mr=mysqli_fetch_array($mq);
$id=$mr['max(id)']+1;

mysqli_query($connect,"update vt_status set status=1 where id=1");

$ss=explode("/",$status);
$bc=$ss[0];
$qq=mysqli_query($connect,"select * from vt_status where bcode='$bc'");
$rr=mysqli_fetch_array($qq);
$user=$rr['uname'];

$qry=mysqli_query($connect,"insert into vt_det(id,details,rdate,rtime,user) values($id,'$status','$rdate','$rtime','$user')");
if($qry)
{
echo "stored";
}
else
{
echo "failed";
}

?>