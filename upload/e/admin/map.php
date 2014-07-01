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
db_close();
$empire=null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>后台地图</title>
<link href="adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script>
function GoToUrl(url,totarget){
	if(totarget=='')
	{
		totarget='main';
	}
	opener.document.getElementById(totarget).src=url;
	window.close();
}
</script>
</head>

<body leftmargin="0" topmargin="0">
<table width="100%" height="100%" border="0" cellspacing="1" cellpadding="3" class="tableborder">
  <tr class="header">
    <td width="9%" height="25">系统设置</td>
    <td width="6%">信息管理</td>
    <td width="21%">栏目管理</td>
    <td width="34%">模板管理</td>
    <td width="9%">用户面板</td>
    <td width="11%">插件管理</td>
    <td width="10%">其他管理</td>
  </tr>
  <tr> 
    <td valign="top" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#EBF3FC'"> 
      <table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><strong>系统设置</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('SetEnews.php','');">系统参数设置</a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('pub/SetRewrite.php','');">伪静态参数设置</a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('pub/ListPubVar.php','');">扩展变量</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('pub/SetSafe.php','');">安全参数配置</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('pub/SetFirewall.php','');">网站防火墙</a></td>
        </tr>
        <tr> 
          <td><strong>数据更新</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('ReHtml/ChangeData.php','');">数据更新中心</a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('ReHtml/ReInfoUrl.php','');">更新信息页地址</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('PostUrlData.php','');">远程发布</a></td>
        </tr>
        <tr> 
          <td><strong>数据表与模型</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('db/AddTable.php?enews=AddTable','');">新建数据表</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('db/ListTable.php','');">管理数据表</a></td>
        </tr>
        <tr> 
          <td><strong>计划任务</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('ListDo.php','');">管理刷新任务</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('other/ListTask.php','');">管理计划任务</a></td>
        </tr>
        <tr> 
          <td><strong>工作流</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('workflow/AddWf.php?enews=AddWorkflow','');">增加工作流</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('workflow/ListWf.php','');">管理工作流</a></td>
        </tr>
        <tr> 
          <td><strong>优化方案</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('db/ListYh.php','');">管理优化方案</a></td>
        </tr>
		<tr> 
          <td><strong>扩展菜单</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('other/MenuClass.php','');">管理菜单</a></td>
        </tr>
        <tr> 
          <td><strong>备份/恢复数据</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('ebak/ChangeDb.php','');">备份数据</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('ebak/ReData.php','');">恢复数据</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('ebak/ChangePath.php','');">管理备份目录</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('db/DoSql.php','');">执行SQL语句</a></td>
        </tr>
      </table></td>
    <td valign="top" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#EBF3FC'"><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><a href="#ecms" onclick="GoToUrl('AddInfoChClass.php','');">增加信息</a></td>
        </tr>
        <tr> 
          <td><a href="#ecms" onclick="GoToUrl('ListAllInfo.php','');">管理信息</a></td>
        </tr>
        <tr> 
          <td><a href="#ecms" onclick="GoToUrl('ListAllInfo.php?ecmscheck=1','');">审核信息</a></td>
        </tr>
        <tr> 
          <td><a href="#ecms" onclick="GoToUrl('workflow/ListWfInfo.php','');">签发信息</a></td>
        </tr>
        <tr>
          <td><a href="#ecms" onclick="GoToUrl('sp/UpdateSp.php','');">更新碎片</a></td>
        </tr>
        <tr>
          <td><a href="#ecms" onclick="GoToUrl('special/UpdateZt.php','');">更新专题</a></td>
        </tr>
        <tr> 
          <td><a href="#ecms" onclick="GoToUrl('openpage/AdminPage.php?leftfile=<?=urlencode('../pl/PlNav.php')?>&mainfile=<?=urlencode('../pl/PlMain.php')?>&title=<?=urlencode('管理评论')?>','');">管理评论</a></td>
        </tr>
        <tr>
          <td><a href="#ecms" onclick="GoToUrl('info/InfoMain.php','');">数据统计</a></td>
        </tr>
        <tr>
          <td><a href="#ecms" onclick="GoToUrl('infotop.php','');">排行统计</a></td>
        </tr>
      </table></td>
    <td valign="top" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#EBF3FC'"><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td width="50%"><strong>栏目管理</strong></td>
          <td><strong>自定义页面</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('ListClass.php','');">管理栏目</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/PageClass.php?gid=<?=$gid?>','');">管理自定义页面分类</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('ListPageClass.php','');">管理栏目(分页)</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListPage.php?gid=<?=$gid?>','');">管理自定义页面</a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms">栏目访问排行</a></td>
          <td><strong>自定义列表</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms">设置访问统计参数</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('other/UserlistClass.php?gid=<?=$gid?>','');">管理自定义列表分类 </a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('info/ListClassF.php','');">栏目自定义字段</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('other/ListUserlist.php?gid=<?=$gid?>','');">管理自定义列表</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('SetMoreClass.php','');">批量设置栏目属性</a></td>
          <td><strong>自定义JS</strong></td>
        </tr>
        <tr> 
          <td><strong>专题管理</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('other/UserjsClass.php?gid=<?=$gid?>','');">管理自定义JS分类</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('special/ListZtClass.php','');">管理专题分类</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('other/ListUserjs.php?gid=<?=$gid?>','');">管理自定义JS</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('special/ListZt.php','');">管理专题</a></td>
          <td><strong>采集管理</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('special/ListZtF.php','');">专题自定义字段 
            </a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('AddInfoC.php','');">增加采集节点</a></td>
        </tr>
        <tr>
          <td><strong>标题分类管理</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('ListInfoClass.php','');">管理采集节点</a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('info/InfoType.php','');">管理标题分类</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('ListPageInfoClass.php','');">管理采集节点(分页)</a></td>
        </tr>
        <tr> 
          <td><strong>碎片管理</strong></td>
          <td><strong>WAP管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('sp/ListSpClass.php','');">管理碎片分类</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('other/SetWap.php','');">WAP设置</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('sp/ListSp.php','');">管理碎片</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('other/WapStyle.php','');">管理WAP模板</a></td>
        </tr>
        <tr> 
          <td><strong>TAGS管理</strong></td>
          <td><strong>其他管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tags/SetTags.php','');">设置TAGS参数</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('TotalData.php','');">统计信息数据</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tags/TagsClass.php','');">管理TAGS分类</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('user/UserTotal.php','');">用户发布统计</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tags/ListTags.php','');">管理TAGS</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('SearchKey.php','');">管理搜索关键字</a></td>
        </tr>
        <tr> 
          <td><strong>附件管理</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('db/RepNewstext.php','');">批量替换字段值</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('openpage/AdminPage.php?leftfile=<?=urlencode('../file/FileNav.php')?>&title=<?=urlencode('管理附件')?>','');">管理附件</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('MoveClassNews.php','');">批量转移信息</a></td>
        </tr>
        <tr> 
          <td><strong>全站全文搜索</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('InfoDoc.php','');">信息批量归档</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('searchall/SetSearchAll.php','');">全站搜索设置</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('db/DelData.php','');">批量删除信息</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('searchall/ListSearchLoadTb.php','');">管理搜索数据源</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('other/ListVoteMod.php','');">管理预设投票</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('searchall/ClearSearchAll.php','');">清理搜索数据</a></td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    <td valign="top" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#EBF3FC'"><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td width="32%"><a href="#ecms" onclick="window.open('template/EnewsBq.php','','width=600,height=600,scrollbars=yes,resizable=yes');window.close();"><strong>查看标签语法</strong></a></td>
          <td width="36%"><strong>公共模板</strong></td>
          <td width="32%"><strong>自定义页面模板</strong></td>
        </tr>
        <tr> 
          <td><a href="#ecms" onclick="window.open('template/MakeBq.php','','width=600,height=600,scrollbars=yes,resizable=yes');window.close();"><strong>自动生成标签</strong></a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=indextemp&gid=<?=$gid?>','');">修改首页模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/AddPagetemp.php?enews=AddPagetemp&gid=<?=$gid?>','');">增加自定义页面模板</a></td>
        </tr>
        <tr>
          <td><a href="#ecms" onclick="window.open('openpage/AdminPage.php?leftfile=<?=urlencode('../template/dttemppageleft.php')?>&title=<?=urlencode('动态页面模板管理')?>','dttemppage','');window.close();"><strong>动态页面模板管理</strong></a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=cptemp&gid=<?=$gid?>','');">修改控制面板模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListPagetemp.php?gid=<?=$gid?>','');">管理自定义页面模板</a></td>
        </tr>
        <tr> 
          <td><strong>栏目封面模板</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=schalltemp&gid=<?=$gid?>','');">修改全站搜索模板</a></td>
          <td><strong>投票模板</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ClassTempClass.php?gid=<?=$gid?>','');">管理封面模板分类</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=searchformtemp&gid=<?=$gid?>','');">修改高级搜索表单模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/AddVotetemp.php?enews=AddVoteTemp&gid=<?=$gid?>','');">增加投票模板</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListClasstemp.php?gid=<?=$gid?>','');">管理封面模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=searchformjs&gid=<?=$gid?>','');">修改横向搜索JS模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListVotetemp.php?gid=<?=$gid?>','');">管理投票模板</a></td>
        </tr>
        <tr> 
          <td><strong>列表模板</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=searchformjs1&gid=<?=$gid?>','');">修改纵向搜索JS模板</a></td>
          <td><strong>标签管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListtempClass.php?gid=<?=$gid?>','');">管理列表模板分类</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=otherlinktemp&gid=<?=$gid?>','');">修改相关信息模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/BqClass.php?gid=<?=$gid?>','');">管理标签分类</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListListtemp.php?gid=<?=$gid?>','');">管理列表模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=gbooktemp&gid=<?=$gid?>','');">修改留言板模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListBq.php?gid=<?=$gid?>','');">管理标签</a></td>
        </tr>
        <tr> 
          <td><strong>内容模板</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=pljstemp&gid=<?=$gid?>','');">修改评论JS调用模板</a></td>
          <td><strong>其他管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/NewstempClass.php?gid=<?=$gid?>','');">管理内容模板分类</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=downpagetemp&gid=<?=$gid?>','');">修改最终下载页模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/LoadTemp.php?gid=<?=$gid?>','');">批量导入栏目模板</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListNewstemp.php?gid=<?=$gid?>','');">管理内容模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=downsofttemp&gid=<?=$gid?>','');">修改下载地址模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ChangeListTemp.php?gid=<?=$gid?>','');">批量更换列表模板</a></td>
        </tr>
        <tr> 
          <td><strong>标签模板</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=onlinemovietemp&gid=<?=$gid?>','');">修改在线播放地址模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/RepTemp.php?gid=<?=$gid?>','');">批量替换模板字符</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/BqtempClass.php?gid=<?=$gid?>','');">管理标签模板分类</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=listpagetemp&gid=<?=$gid?>','');">修改列表分页模板</a></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListBqtemp.php?gid=<?=$gid?>','');">管理标签模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=loginiframe&gid=<?=$gid?>','');">修改登陆状态模板</a></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td><strong>公共模板变量</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/EditPublicTemp.php?tname=loginjstemp&gid=<?=$gid?>','');">修改JS调用登陆模板</a></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/TempvarClass.php?gid=<?=$gid?>','');">管理模板变量分类</a></td>
          <td><strong>打印模板</strong></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListTempvar.php?gid=<?=$gid?>','');">管理模板变量</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/AddPrinttemp.php?enews=AddPrintTemp&gid=<?=$gid?>','');">增加打印模板</a></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td><strong>JS模板</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListPrinttemp.php?gid=<?=$gid?>','');">管理打印模板</a></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/JsTempClass.php?gid=<?=$gid?>','');">管理JS模板分类</a></td>
          <td><strong>搜索模板</strong></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListJstemp.php?gid=<?=$gid?>','');">管理JS模板</a></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/SearchtempClass.php?gid=<?=$gid?>','');">管理搜索模板分类</a></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td><strong>评论列表模板</strong></td>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListSearchtemp.php?gid=<?=$gid?>','');">管理搜索模板</a></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/AddPltemp.php?enews=AddPlTemp&gid=<?=$gid?>','');">增加评论模板</a></td>
          <td><a href="#ecms" onclick="GoToUrl('template/TempGroup.php','');"><strong>模板组管理</strong></a></td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/ListPltemp.php?gid=<?=$gid?>','');">管理评论模板</a></td>
          <td><a href="#ecms" onclick="GoToUrl('template/TempGroup.php','');"></a></td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    <td valign="top" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#EBF3FC'"><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><strong>用户管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('user/EditPassword.php','');">修改个人资料</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('user/ListGroup.php','');">管理用户组</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('user/UserClass.php','');">管理部门</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('user/ListUser.php','');">管理用户</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('user/ListLog.php','');">管理登陆日志</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('user/ListDolog.php','');">管理操作日志</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('template/AdminStyle.php','');">管理后台风格</a></td>
        </tr>
        <tr> 
          <td><strong>会员管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/ListMemberGroup.php','');">管理会员组</a></td>
        </tr>
        <tr> 
          <td> &nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/ListMember.php','');">管理会员</a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/ClearMember.php','');">批量清理会员</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/ListMemberF.php','');">管理会员字段</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/ListMemberForm.php','');">管理会员表单</a></td>
        </tr>
        <tr> 
          <td><strong>会员空间管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/ListSpaceStyle.php','');">管理空间模板</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/MemberGbook.php','');">管理空间留言</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/MemberFeedback.php','');">管理空间反馈</a></td>
        </tr>
        <tr>
          <td><strong>外部接口</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/MemberConnect.php','');">外部登录接口</a></td>
        </tr>
        <tr> 
          <td><strong>其他管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/ListBuyGroup.php','');">管理充值类型</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/ListCard.php','');">管理点卡</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/GetFen.php','');">批量赠送点数</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/SendEmail.php','');">批量发送邮件</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/SendMsg.php','');">批量发送短消息</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('member/DelMoreMsg.php','');">批量删除短消息</a></td>
        </tr>
      </table></td>
    <td valign="top" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#EBF3FC'"><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><strong>广告系统</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/AdClass.php','');">管理广告分类</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/ListAd.php','');">管理广告</a></td>
        </tr>
        <tr> 
          <td><strong>投票系统</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/AddVote.php?enews=AddVote','');">增加投票</a></td>
        </tr>
        <tr> 
          <td> &nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/ListVote.php','');">管理投票</a></td>
        </tr>
        <tr> 
          <td><strong>友情链接管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/LinkClass.php','');">管理友情链接分类</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/ListLink.php','');">管理友情链接</a></td>
        </tr>
        <tr> 
          <td><strong>留言板管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/GbookClass.php','');">管理留言分类</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/gbook.php','');">管理留言</a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/DelMoreGbook.php','');">批量删除留言</a></td>
        </tr>
        <tr> 
          <td><strong>信息反馈管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/FeedbackClass.php','');">管理反馈分类</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/ListFeedbackF.php','');">管理反馈字段</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('tool/feedback.php','');">管理信息反馈</a></td>
        </tr>
        <tr> 
          <td><a href="#ecms" onclick="GoToUrl('template/NotCj.php','');"><strong>管理防采集随机字符</strong></a></td>
        </tr>
      </table></td>
    <td valign="top" bgcolor="#FFFFFF" onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#EBF3FC'"><table width="100%" border="0" cellspacing="1" cellpadding="3">
        <tr> 
          <td><strong>新闻模型相关</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('NewsSys/BeFrom.php','');">管理信息来源</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('NewsSys/writer.php','');">管理作者</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('NewsSys/key.php','');">管理内容关键字</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('NewsSys/word.php','');">管理过滤字符</a></td>
        </tr>
        <tr> 
          <td><strong>下载模型相关</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('DownSys/url.php','');">管理地址前缀</a></td>
        </tr>
        <tr> 
          <td> &nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('DownSys/DelDownRecord.php','');">删除下载记录</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('DownSys/ListError.php','');">管理错误报告</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('DownSys/RepDownLevel.php','');">批量替换地址权限</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('DownSys/player.php','');">播放器管理</a></td>
        </tr>
        <tr> 
          <td><strong>商城模型相关</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="window.open('openpage/AdminPage.php?leftfile=<?=urlencode('../ShopSys/pageleft.php')?>&mainfile=<?=urlencode('../other/OtherMain.php')?>&title=<?=urlencode('商城系统管理')?>','AdminShopSys','');window.close();">管理商城</a></td>
        </tr>
        <tr> 
          <td><strong>在线支付</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('pay/SetPayFen.php','');">支付参数配置</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('pay/PayApi.php','');">管理支付接口</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('pay/ListPayRecord.php','');">管理支付记录</a></td>
        </tr>
        <tr> 
          <td><strong>图片信息管理</strong></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('NewsSys/PicClass.php','');">管理图片信息分类</a></td>
        </tr>
        <tr> 
          <td>&nbsp;&nbsp;<a href="#ecms" onclick="GoToUrl('NewsSys/ListPicNews.php','');">管理图片信息</a></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>
