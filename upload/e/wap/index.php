<?php
require("../class/connect.php");
require("../class/db_sql.php");
require("../data/dbcache/class.php");
$link=db_connect();
$empire=new mysqlquery();
define('WapPage','index');
$usewapstyle='';
$wapstyle=0;
$pr=array();
require("wapfun.php");
$pagetitle=$public_r['sitename'];
require('template/'.$usewapstyle.'/index.temp.php');
db_close();
$empire=null;
?>