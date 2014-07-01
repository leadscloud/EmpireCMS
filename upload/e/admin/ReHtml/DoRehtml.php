<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];

$add=$_GET;
$havehtml=(int)$add['havehtml'];
$tbname=$add['tbname'];
$count=count($tbname);
//刷新所有表
if(!$count)
{
	$j=0;
	$tsql=$empire->query("select tbname from {$dbtbpre}enewstable where intb=0 order by tid");
	while($tr=$empire->fetch($tsql))
	{
		$tbname[$j]=$tr[tbname];
		$j++;
	}
	$count=count($tbname);
}
esetcookie("retablenum",$count,0,1);
esetcookie("rechecktablenum",0,0,1);
$url="../ecmschtml.php?enews=ReNewsHtml&classid=$add[classid]&from=$add[from]&retype=$add[retype]&startday=$add[startday]&endday=$add[endday]&startid=$add[startid]&endid=$add[endid]&havehtml=$havehtml&reallinfotime=".time();
echo"<link href='../adminstyle/".$loginadminstyleid."/adminstyle.css' rel='stylesheet' type='text/css'><center>要刷新的表的总个数为:<font color=red>$count</font>个</center><br>";
for($i=0;$i<$count;$i++)
{
	$trueurl=$url."&tbname=".$tbname[$i];
	echo"<table width='100%' border=0 align=center cellpadding=3 cellspacing=1 class=tableborder><tr class=header><td>刷新数据表：".$tbname[$i]."</td></tr><tr><td bgcolor='#ffffff'><iframe frameborder=0 height=35 id='".$tbname[$i]."' scrolling=no 
            src=\"".$trueurl."\" 
            width=\"100%\"></iframe></td></tr></table>";
}
db_close();
$empire=null;
?>
<iframe frameborder=0 height=35 id="checkrehtml" scrolling=no 
            src="CheckRehtml.php?first=1&from=<?=$add[from]?>" 
            width="100%"></iframe>