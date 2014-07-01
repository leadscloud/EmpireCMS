<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
$waitbaktime=(int)$_GET['waitbaktime'];
$stime=$_GET['stime'];
if(empty($stime))
{
	$stime=time();
}
$t=$_GET['t'];
if(empty($t))
{$t=0;}
$p=$_GET['p'];
if(empty($p))
{$p=1;}
$btb=explode(",",$b_table);
$tbcount=count($btb);
//最后一个文件
if($p>=$tb[$btb[$t]])
{
	$t++;
	//恢复完毕
	if($t>=$tbcount)
	{
		if($ecms_config['db']['dbname']!=$mydbname)
		{
			$use=$empire->usequery("use ".$ecms_config['db']['dbname']);
		}
		$enews="ReData";
		//操作日志
	    insert_dolog("dbname=".$mydbname."&path=".$mypath);
		$varmessage=$fun_r['ReDataSuccess']."<br><br>".$fun_r['TotalUseTime'].ToChangeUseTime($stime);
		$GLOBALS['varmessage']=$varmessage;
		printerror('VarMessage','../../ReData.php',0,1);
	}
	$nfile=$btb[$t]."_1.php";
	//进入下一个表
	//echo $btb[$t-1].$fun_r['ReOneTableSuccess']."<script>self.location.href='$nfile?t=$t&p=0&mydbname=$mydbname&mypath=$mypath&stime=$stime';</script>";

	echo"<meta http-equiv=\"refresh\" content=\"".$waitbaktime.";url=$nfile?t=$t&p=0&mydbname=$mydbname&mypath=$mypath&stime=$stime&waitbaktime=$waitbaktime\">".$btb[$t-1].$fun_r['ReOneTableSuccess'];
	exit();
}
//进入下一个文件
$p++;
$nfile=$btb[$t]."_".$p.".php";
//echo $fun_r['ReOneDataSuccess'].Ebak_EchoReDataSt($btb[$t],$tbcount,$t,$tb[$btb[$t]],$p)."<script>self.location.href='$nfile?t=$t&p=$p&mydbname=$mydbname&mypath=$mypath&stime=$stime';</script>";

echo"<meta http-equiv=\"refresh\" content=\"".$waitbaktime.";url=$nfile?t=$t&p=$p&mydbname=$mydbname&mypath=$mypath&stime=$stime&waitbaktime=$waitbaktime\">".$fun_r['ReOneDataSuccess'].Ebak_EchoReDataSt($btb[$t],$tbcount,$t,$tb[$btb[$t]],$p);
db_close();
$empire=null;
?>