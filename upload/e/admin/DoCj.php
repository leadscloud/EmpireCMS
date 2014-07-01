<?php
define('EmpireCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
$link=db_connect();
$empire=new mysqlquery();
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//验证权限
CheckLevel($logininid,$loginin,$classid,"cj");
$add=$_GET;
$classid=$add['classid'];
$count=count($classid);
if(!$count)
{
	printerror("NotChangeCjid","history.go(-1)");
}
esetcookie("recjnum",$count,0,1);
$url="ecmscj.php?enews=CjUrl";
echo"<center>采集节点的总个数为:<font color=red>$count</font>个</center><br>";
for($i=0;$i<$count;$i++)
{
	$trueurl=$url."&from=$_GET[from]&classid=".$classid[$i];
	echo"<iframe frameborder=0 height=35 name='class".$classid[$i]."' scrolling=no 
            src=\"".$trueurl."\" 
            width=\"100%\"></iframe><br>";
}
db_close();
$empire=null;
?>
<iframe frameborder=0 height=35 name="checkrecj" scrolling=no 
            src="CheckReCj.php?first=1&from=<?=$add[form]?>" 
            width="100%"></iframe>