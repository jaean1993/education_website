﻿<?php require_once('Connections/connect.php'); ?>

<?php
mysql_query("set names 'utf8'");
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_Recordset1 = 3;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_connect, $connect);
$query_Recordset1 = "SELECT * FROM news ORDER BY news_id DESC";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $connect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- saved from url=(0047)http://thechoose.phpnet.us/hushi2014070801.html -->

<html xmlns="http://www.w3.org/1999/xhtml"><head>




<title>教育交流协会</title>

<meta name="keywords" content=教育,交流,出国，协会，人才，机构，援助平台，培训，IPA，外语">

<meta name="MSSmartTagsPreventParsing" content="TRUE">

<meta name="description" content="教育,交流,出国，协会，人才，机构，援助平台，培训，IPA，外语">

<meta http-equiv="Page-Exit" content="revealTrans(Duration=1,Transition=23)">

<meta http-equiv="Page-Enter" content="revealTrans(Duration=1,Transition=23)">

<link rel="shortcut icon" href="http://thechoose.phpnet.us/images/favicon.ico" type="image/x-icon">

<link rel="Bookmark" href="http://thechoose.phpnet.us/images/favicon.ico" type="image/x-icon">

<link href="../images1/css.css" tppabs="css/css.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="../images1/swfobject.js" tppabs="fl/swfobject.js"></script><style type="text/css"></style>

<script src="../images1/js.js" tppabs="js/js.js" type="text/javascript"></script>





</head>

    



<body>

    

 

<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/index_zhenx_net_wasa_03.jpg" tppabs="images/index_zhenx_net_wasa_03.jpg">

<form name="member_login" method="post" action="http://thechoose.phpnet.us/blog/login.asp-chk=1&fromurl=.htm" tppabs="blog/login.asp?chk=1&amp;fromurl="></form>

<tbody>

    



    

<tr>

<td width="270" height="99" rowspan="2" valign="middle">

<!--<button style="width:230px;height:100px;background:transparent;border:0px;padding:0;cursor:hand" onclick="window.location.href='index.asp'">  -->

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://thechoose.phpnet.us/swflash.cab#version=5,0,0,0" tppabs="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="230" height="100">

<param name="movie" value="../swf/logo.swf" tppabs="swf/logo.swf">

<param name="quality" value="high">

<param name="wmode" value="transparent">

<embed src="../swf/logo.swf" tppabs="swf/logo.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="230" height="100" wmode="transparent">

 

</object>

<!--</button>  --> 

</td>

    



<td align="right" valign="middle">

  <table width="25%" border="0" cellspacing="0" cellpadding="0">

    <tbody><tr>     

     

     

      

   

    

    

    </td>

      </tr>

  </tbody></table>  </td>

</tr>

<tr>



  <td height="65" colspan="2" align="left" valign="middle">

    <ul class="nav clearfix">

      <li class="nav-item"><a href="../index.php" tppabs="index.php">首页</a></li>

      <li class="nav-item"><a href="newfang_user_admin.php" tppabs="xhdt.php">会员之家</a></li>

      <li class="nav-item"><a href="../newfang_newslist.php" tppabs="huiyuan.php">新闻动态</a></li>

      <li class="nav-item"><a href="../newfang_xueshulist.php" tppabs="report.php">学术活动</a></li>

      <li class="nav-item"></li>

      <li class="nav-item"><a href="newfang_huiyuandongtailist.php" tppabs="dsj.php">会员动态</a></li>

      <li class="nav-item"></li>

      <li class="nav-item"></li>

      <li class="nav-item"></li>

      <li class="nav-item"></li>

      <li class="nav-item"><a href="../contect.php" tppabs="../contect.php">联系我们</a></li>

    </ul>

  </td>

</tr>



</tbody></table>

    





<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/index_zhenx_net_wasa_32.jpg" tppabs="images/index_zhenx_net_wasa_32.jpg">

<form name="Search" method="post" action="javascript:if(confirm('search.asp  \n\n该文件未被 Teleport Pro 下载，因为 服务器报告 - 由于出现一个错误而导致无法下载。  \n\n你想要从服务器打开它吗?'))window.location='search.asp'" tppabs="search.asp"></form>

<tbody><tr>

<td width="38" height="32" valign="middle">&nbsp;</td>

<td valign="middle" width="760">

            

<marquee border="0" align="middle" scrolldelay="120" width="760">

尊敬的来宾您好：



<a href="./index.php" target="_blank">欢迎光临</a>&nbsp;&nbsp;&nbsp;&nbsp;



</marquee>

 </td>







</tr>











<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/index_zhenx_net_wasa_04.jpg" tppabs="images/index_zhenx_net_wasa_04.jpg">

<tbody><tr>

<td height="36" valign="middle">&nbsp;</td>

</tr>

</tbody></table>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/index_zhenx_net_wasa_05.jpg" tppabs="images/index_zhenx_net_wasa_05.jpg">

  <tbody><tr>

    <td width="27" height="206" valign="middle">&nbsp;</td>

    <td width="710" valign="middle" align="center">

	<!--该处屏蔽flash 连接为index_topplayswf.asp-->

	

<script type="text/javascript">



<!--





//more javascript from http://js.5x-space.cn



var pic_width=700 //图片宽度



var pic_height=430 //图片高度



var text_height=0 //文字高度



var swfpath = '/images1/index.swf' //swf文件路径地址



var swf_height = pic_height+text_height







var pics='images1/rank-pic2.jpg'/*tpa=images/activity/banner1.jpg|images/activity/activity140704-1.jpg|images/activity/banner3.jpg|images/activity/banner4.jpg|images/activity/activity140704-2.jpg*/



var links='index.php' 



var texts='||||'







document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ pic_width +'" height="'+ swf_height +'">');



document.write('<param name="allowScriptAccess" value="sameDomain"><param name="movie" value="'+swfpath+'"><param name="quality" value="high"><param name="bgcolor" value="#dddddd">');



document.write('<param name="menu" value="false"><param name=wmode value="opaque">');



document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+pic_width+'&borderheight='+pic_height+'&textheight='+text_height+'">');



document.write('<embed src="'+swfpath+'" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+pic_width+'&borderheight='+pic_height+'&textheight='+text_height+'" menu="false" bgcolor="#ffffff" quality="high" width="'+ pic_width +'" height="'+ pic_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');



document.write('</object>');







//-->



    </script><!--<img src ="images1/index_replace_flash.gif" border="0" /> --></td>

    <td width="16" valign="middle">&nbsp;</td>

    <td width="239" valign="top"><table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/index_zhenx_net_wasa_07.jpg" tppabs="images/index_zhenx_net_wasa_07.jpg">

      <tbody><tr>

        <td width="183" height="36"><span class="STYLE101"><a href="../newfang_gonggaolist.php">公告</a></span></td>

        <td width="49"><a href="newfang_gonggaolist.php"><img src="./images1/index_zhenx_net_wasa_01.jpg" tppabs="images/index_zhenx_net_wasa_01.jpg" width="37" height="12" border="0"></a></td>

      </tr>

    </tbody></table>

          



      

            <?php do { ?>
              <table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">
            <tbody>
              <tr>
                <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
                <td width="215"><a href="newfang_news.php?news_id=<?php echo $row_Recordset1['news_id']; ?>">.<?php echo $row_Recordset1['news_title']; ?></a></td>
              </tr>
            </tbody>
                      </table>
              <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?><table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/hushi2014112901.php">.新闻</a></td>

        </tr>

</tbody></table>



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/hushi2014112902.php">.</a><a href="../addnews/hushi2014112901.php">新闻</a></td>

        </tr>

</tbody></table>



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/hushi2014112903.php">.</a><a href="../addnews/hushi2014112901.php">新闻</a></td>

        </tr>

</tbody></table>



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/hushi2014112904.php">.</a><a href="../addnews/hushi2014112901.php">新闻</a></td>

        </tr>

</tbody></table>





<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/hushi2014112901.php">新闻</a><a href="../addnews/hushi2014112905.php"></a></td>

        </tr>

</tbody></table>    



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/hushi2014112901.php">新闻</a><a href="../download/护士介护留学的区别文档.doc"></a></td>

        </tr>

</tbody></table>



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/hushi2014070801.php">.</a><a href="../addnews/hushi2014112901.php">新闻</a></td>

        </tr>

</tbody></table>

          

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/hushi2014112901.php">新闻</a><a href="../addnews/hushi2014070802.php"></a></td>

        </tr>

</tbody></table>

          

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/hushi2014112901.php">新闻</a><a href="../addnews/hushi2014070803.php"></a></td>

        </tr>

</tbody></table>        

          

    </td>

    <td width="22" valign="middle">&nbsp;</td>

    

  </tr>

</tbody></table>

<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/index_zhenx_net_wasa_06.jpg" tppabs="images/index_zhenx_net_wasa_06.jpg">

  <tbody><tr>

    <td height="29" valign="middle">&nbsp;</td>

  </tr>

</tbody></table>





<table width="1000" height="45" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/wasa-column-bg.jpg" tppabs="images/wasa-column-bg.jpg">

  <tbody><tr>

    <td width="325" valign="middle"><span class="STYLE101 column-item"><a href="newfang_xueshulist.php">学术活动</a></span></td>

    <td width="70" valign="middle" style="text-align:center;"><a href="newfang_xueshulist.php"><img src="./images1/index_zhenx_net_wasa_01.jpg" tppabs="images/index_zhenx_net_wasa_01.jpg" width="37" height="12" border="0"></a></td>

    <td width="260" valign="middle"><span class="STYLE101 column-item">网站简介</span></td>

    <td width="70" valign="middle" style="text-align:center;"><a href="about.php" tppabs="about.php"></a></td>

    <td width="235" valign="middle"><span class="STYLE101 column-item"><a href="newfang_newslist.php">新闻动态</a></span><br></td>

    <td width="40" valign="middle" style="text-align:center;"><a href="newfang_newslist.php"><img src="./images1/index_zhenx_net_wasa_01.jpg" tppabs="images/index_zhenx_net_wasa_01.jpg" width="37" height="12" border="0"></a></td>

  </tr>

</tbody></table>



<table width="1000" height="24" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/index_zhenx_net_wasa_09.jpg" tppabs="images/index_zhenx_net_wasa_09.jpg">

  <tbody><tr>

    <td height="24" valign="middle">&nbsp;</td>

  </tr>

</tbody></table>

<table width="1000" height="160" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/index_zhenx_net_wasa_10.jpg">

  <tbody><tr>

    <td width="10" height="160" valign="middle">&nbsp;</td>

    <td width="388" valign="top">

<table width="365" border="0" align="center" cellpadding="0" cellspacing="0">

      <tbody><tr>

			<td width="134" align="center"><img src="./images1/rank-pic3.jpg" width="130" height="200"></td>

        <td height="32" align="left" valign="top">

        









<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/fuzhishi20150401301.php">.对外交流总则</a></td>

        </tr>

</tbody></table>

            

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/hushi2014120801.php">新闻</a></td>

        </tr>

</tbody></table>

            

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/hushi2014112901.php">新闻</a></td>

        </tr>

</tbody></table>



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/hushi2014070801.php">新闻</a></td>

        </tr>

</tbody></table>



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/hushi2014070801.php">新闻</a></td>

        </tr>

</tbody></table>



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/hushi2014070801.php">新闻</a></td>

        </tr>

</tbody></table>





<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/hushi2014070801.php">新闻</a></td>

        </tr>

</tbody></table>    



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/hushi2014070801.php">新闻</a></td>

        </tr>

</tbody></table>



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/hushi2014070801.php">新闻</a></td>

        </tr>

</tbody></table>

          

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/hushi2014070802.php">新闻</a></td>

        </tr>

</tbody></table>

          

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="addnews/hushi2014070803.php">新闻</a></td>

        </tr>

</tbody></table>

	

  </td>

      </tr>

    </tbody></table>    </td>

    <td width="25" valign="middle">&nbsp;</td>

    <td width="296" height="32" align="left" valign="top">

        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

        <tbody><tr>

          <td width="268" height="32">  <p>本网站由华东理工大学学生开发制作,旨在学习，目前并未用于商业用途

            。</p>

            <p>&nbsp;</p></td>

        </tr>

      </tbody>

        </table>     

    </td>

    

 <!-- 重要新闻  -->   

 

   



<td width="19" valign="middle">&nbsp;</td>

    <td width="234" height="32" align="left" valign="top">

        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

             <tbody><tr>

              <td width="13" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

              <td width="149"><a href="newfang_news.php">新闻</a></td>

              <td width="69">&nbsp;</td>

             </tr>

             </tbody>

        </table>

        

        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

            <tbody><tr>

              <td width="14" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

              <td width="160"><a href="addnews/hushi2014112905.php">新闻</a></td>

              <td width="80">&nbsp;</td>

            </tr>

           </tbody>

        </table>

      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

              <tbody><tr>

                <td width="14" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

                <td width="149"><a href="addnews/japan2015010601.php">新闻</a></td>

                <td width="68">&nbsp;</td>

              </tr>

            </tbody></table>

      

     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

              <tbody><tr>

                <td width="14" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

                <td width="149"><a href="addnews/japan2015010602.php">新闻</a></td>

                <td width="68">&nbsp;</td>

              </tr>

            </tbody></table>

        

        

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

              <tbody><tr>

                <td width="14" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

                <td width="149"><a href="addnews/japan2015010603.php">新闻</a></td>

                <td width="68">&nbsp;</td>

              </tr>

            </tbody></table>

    

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

              <tbody><tr>

                <td width="14" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

                <td width="149"><a href="addnews/japan2015010604.php">新闻</a></td>

                <td width="68">&nbsp;</td>

              </tr>

            </tbody></table>

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

              <tbody><tr>

                <td width="14" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

                <td width="149"><a href="addnews/japan2015010605.php">新闻</a></td>

                <td width="68">&nbsp;</td>

              </tr>

            </tbody></table>

      </td>    

 <!-- 重要新闻 end -->

    

    <td width="28" valign="middle">&nbsp;</td>

  </tr>

</tbody></table>

<table width="1000" height="26" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/index_zhenx_net_wasa_11.jpg" tppabs="images/index_zhenx_net_wasa_11.jpg">

  <tbody><tr>

    <td height="26" valign="middle">&nbsp;</td>

  </tr>

</tbody></table>



<table width="1000" height="24" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/index_zhenx_net_wasa_09.jpg" tppabs="images/index_zhenx_net_wasa_09.jpg">

  <tbody><tr>

    <td height="24" valign="middle">&nbsp;</td>

  </tr>

</tbody></table>

<table width="1000" height="26" border="0" align="center" cellpadding="0" cellspacing="0" 

       background="./images1/index_zhenx_net_wasa_11.jpg" tppabs="images/index_zhenx_net_wasa_11.jpg">

  <tbody><tr>

    <td height="26" valign="middle">&nbsp;</td>

  </tr>

</tbody></table>



<table width="1000" height="45" border="0" align="center" cellpadding="0" cellspacing="0" 

       background="./images1/wasa-column-bg3.jpg" tppabs="images/wasa-column-bg3.jpg">

  <tbody><tr>

    <td width="325" valign="middle"><span class="STYLE101 column-item"><a href="newfang_huiyuandongtailist.php">会员动态</a></span><br></td>

    <td width="70" valign="middle">

        <a href="newfang_huiyuandongtailist.php"><img src="./images1/index_zhenx_net_wasa_01.jpg" 

                                                    tppabs="images/index_zhenx_net_wasa_01.jpg" width="37" height="12" border="0"> </a>

      </td>

    <td valign="middle"><span class="STYLE101 column-item">最新照片</span><br></td>

    <td width="57" valign="middle">

        <img src="./images1/index_zhenx_net_wasa_01.jpg" 

             tppabs="images/index_zhenx_net_wasa_01.jpg" width="37" height="12" border="0"></td>

  </tr>

</tbody></table>



<table width="1000" height="128" border="0" align="center" cellpadding="0" cellspacing="0" 

       background="./images1/02.gif" tppabs="images/02.gif">

  <tbody><tr>

<!-- 大事记主要新闻内容  -->   

 

   





    <td width="18" height="128" valign="middle">&nbsp;</td>

    <td width="368" valign="top">

<table width="365" border="0" align="center" cellpadding="0" cellspacing="0">

      <tbody><tr background="./images1/index_zhenx_net_wasa_10.jpg">

        <td height="32" align="left" valign="top">

            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

                <tbody><tr>

                  <td width="13" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

                  <td width="149"><a href="addnews/hushi2014112907.php">.会员福利</a></td>

                  <td width="69">&nbsp;</td>

                </tr>

              </tbody>

            </table>

            

            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/line.gif" tppabs="images/line.gif">

                <tbody><tr>

                  <td width="14" height="32" align="center"><img src="./images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

                  <td width="149"><a href="addnews/hushi2014112905.php">.资格认证</a></td>

                  <td width="68">&nbsp;</td>

                 </tr>

                </tbody>

            </table>

          

         </td>

      </tr>

    </tbody>

</table>

    </td>

    <td width="24" valign="middle">&nbsp;</td>

	<td valign="top">



              

 <!-- 大事记主要新闻内容 end -->



 <!-- 滚动图片  -->  

  

<div align="center" id="demo" style="overflow:hidden;height:240px;width:565px;">

          <!--滚动区的高度和宽度-->

          <table align="center" cellpadding="0" cellspacing="0" border="0"> 

            <tbody><tr>

              <td id="demo1" valign="top">

              <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">

              <tbody><tr>

              <td colspan="2" height="20">&nbsp;</td>

              </tr>

                  <tr valign="top">

            

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                        <td background="../images1/a_034.gif" tppabs="images/a_034.gif"><a href="http://thechoose.com.cn" tppabs="kjxz_show.asp?id=1017"><img src="../images1/rolling/chuguo1.jpg" tppabs="uppic/2014429172147899.jpg" width="285" height="190" border="0"></a></td>

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                    <td height="20" align="center"><a href="http://thechoose.com.cn" tppabs="kjxz_show.asp?id=1017" class="lj">与外国友人交流</a></td>

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                        <td background="../images1/a_034.gif" tppabs="images/a_034.gif"><a href="http://thechoose.com.cn" tppabs="kjxz_show.asp?id=1016"><img src="../images1/rolling/chuguo2.jpg" tppabs="uppic/201442917213785.jpg" width="285" height="190" border="0"></a></td>

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                    <td height="20" align="center"><a href="http://thechoose.com.cn" tppabs="kjxz_show.asp?id=1016" class="lj">游览世界名胜</a></td>

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                        <td background="../images1/a_034.gif" tppabs="images/a_034.gif"><a href="http://thechoose.com.cn" tppabs="kjxz_show.asp?id=1015"><img src="../images1/rolling/chuguo3.jpg" tppabs="uppic/2014429171950767.jpg" width="285" height="190" border="0"></a></td>

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                    <td height="20" align="center"><a href="http://thechoose.com.cn" tppabs="kjxz_show.asp?id=1015" class="lj">收获友情</a></td>

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

    

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  </table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                      

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                    

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                     

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                   

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                       

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                    

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                        

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                    

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                        <td background="../images1/a_034.gif" tppabs="images/a_034.gif">&nbsp;</td>

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                 

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                    

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                    

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                    

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                   

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                    

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                  

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                  </tr>

                </tbody></table></td>

              <td id="demo2" valign="top">

              <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">

              <tbody><tr>

              <td colspan="2" height="20">&nbsp;</td>

              </tr>

                  <tr valign="top">

            

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                 

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

              

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">

<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                      

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                    

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                    <td align="center">



<table width="180" border="0" cellspacing="0" cellpadding="0">

                  <tbody><tr>

                    <td>

                    <table width="200" height="200" border="0" cellpadding="5" cellspacing="0">

                      <tbody><tr>

                        <td background="../images1/a_034.gif" tppabs="images/a_034.gif">&nbsp;</td>

                      </tr>

                    </tbody></table>

                    </td>

                  </tr>

                  <tr>

                   

                  </tr>

                </tbody></table>

               </td>

               <td width="10">&nbsp;&nbsp;</td>

              

                  </tr>

                </tbody></table></td>

            </tr>

          </tbody></table>

<script>

var Picspeed=30;

demo2.innerphp=demo1.innerphp

function Marquee1(){

if(demo2.offsetWidth-demo.scrollLeft<=0)

demo.scrollLeft-=demo1.offsetWidth

else{

demo.scrollLeft++

}

}

var MyMar1=setInterval(Marquee1,Picspeed)

demo.onmouseover=function() {clearInterval(MyMar1)}

demo.onmouseout=function() {MyMar1=setInterval(Marquee1,Picspeed)}

</script>



<!-- 滚动图片 end -->



</td>

 <!--   <td > <img src="images/replace_bk_02.jpg" width="180"></td>

	<td><img src="images/replace_bk_01.jpg" width="180"></td>

	<td><img src="images/replace_bk_03.jpg" width="180"></td> -->

    <td width="24" valign="middle">&nbsp;</td>

  </tr>

</tbody></table>







<table width="1000" height="26" border="0" align="center" cellpadding="0" cellspacing="0" background="./images1/04.gif" tppabs="images/04.gif">

  <tbody><tr>

    <td height="26" valign="middle">&nbsp;</td>

  </tr>

</tbody></table>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- saved from url=(0039)http://thechoose.phpnet.us/xhdt.asp.htm -->

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<title>个人留学直通车</title>

<meta name="keywords" content="中日人才交流援助平台">

<meta name="MSSmartTagsPreventParsing" content="TRUE">

<meta name="description" content="中日人才交流援助平台">

<meta http-equiv="Page-Exit" content="revealTrans(Duration=1,Transition=23)">

<meta http-equiv="Page-Enter" content="revealTrans(Duration=1,Transition=23)">

<link rel="shortcut icon" href="http://thechoose.phpnet.us/images/favicon.ico" type="image/x-icon">

<link rel="Bookmark" href="http://thechoose.phpnet.us/images/favicon.ico" type="image/x-icon">

<link href="../images1/css.css" tppabs="css/css.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="../images1/swfobject.js" tppabs="fl/swfobject.js">

</script>

    <style type="text/css"></style>

<script src="../images1/js.js" tppabs="js/js.js" type="text/javascript">

</script>





</head>

<body>





<table width="1000" height="47" border="0" align="center" cellpadding="0" cellspacing="0" 

       background="../images1/index_zhenx_net_wasa_23.jpg" 

       tppabs="http://www.wasa-china.com/images/index_zhenx_net_wasa_23.jpg">

  <tbody><tr>

    <td width="47" height="40" valign="middle">&nbsp;</td>

    <td width="858" valign="middle"><span class="STYLE101">友情链接 </span> | Links </td>

    <td width="95" align="center" valign="middle"></td>

  </tr>

</tbody></table>

<table width="1000" height="157" border="0" align="center" cellpadding="0" cellspacing="0" 

       background="../images1/index_zhenx_net_wasa_24.jpg" 

       tppabs="images/index_zhenx_net_wasa_24.jpg">

  <tbody><tr>

    <td height="82" valign="middle"><table width="1000" border="0" cellspacing="0" cellpadding="0">

      <tbody><tr>

                          

        <td><table width="128" border="0" align="center" cellpadding="0" cellspacing="0">

          <tbody><tr>

            <td width="114" align="center"><a class="flink" href="http://www.jllx.cn/">中华人民共和国教育部</a></td>

          </tr>

        </tbody></table></td>

                            

        <td><table width="128" border="0" align="center" cellpadding="0" cellspacing="0">

          <tbody><tr>

            <td width="114" align="center"><a class="flink" href="http://ddzyzg.neu.edu.cn/">中华人民共和国外交部</a></td>

          </tr>

        </tbody></table></td>

                            

        <td><table width="128" border="0" align="center" cellpadding="0" cellspacing="0">

          <tbody><tr>

            <td width="114" align="center"><a class = "flink" href="http://shop115478731.taobao.com/">中华人民共和国民政部</a></td>

          </tr>

        </tbody></table></td>

                            

        <td><table width="128" border="0" align="center" cellpadding="0" cellspacing="0">

          <tbody><tr>

            <td width="114" align="center"  ><a class = "flink" href=" http://www.yono-gakuin.co.jp/"></td>

          </tr>

        </tbody></table></td>

                            

        <td><table width="128" border="0" align="center" cellpadding="0" cellspacing="0">

          <tbody><tr>

            <td width="114" align="center"  ><a class = "flink" href="http://www.med.or.jp/"></td>

          </tr>

        </tbody></table></td>

                            

        <td><table width="128" border="0" align="center" cellpadding="0" cellspacing="0">

          <tbody><tr>

            <td width="114" align="center"  ><a class = "flink" href="www.u-tokyo.ac.jp/"></td>

          </tr>

        </tbody></table></td>

        </tr>

    </tbody></table>

    </td>

  </tr>

  <tr>

    <td height="75" valign="middle" style="text-align:center;">版权所有 &#169; 

        华理学子  <br>        

        <br>

 </td>

  </tr>

</tbody></table>









</body></html>
<?php
mysql_free_result($Recordset1);
?>