<?php require_once('Connections/connect.php'); ?>
<?php
mysqli_query($connect,"set names 'utf8'");
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "1";
$MM_donotCheckaccess = "false";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized( $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 
  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserGroup)) { 
    
    if ($UserGroup['authority']==1) { 
      $isValid = true; 
    } 
   
  } 
  return $isValid; 
}

$MM_restrictGoTo = "newfang_user_admin.php";

if (!((isset($_SESSION['MM_Username'])) && (isAuthorized($MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
/*if (!function_exists("GetSQLValueString")) {
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
}*/

mysqli_select_db( $connect,$database_connect);
$query_Recordset1=sprintf("SELECT * FROM news  ORDER BY news_id DESC");
$Recordset1 = mysqli_query($connect,$query_Recordset1) or die(mysql_error());
$row_Recordset1=mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://thechoose.phpnet.us/hushi2014070801.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>教育交流协会</title>
<meta name="keywords" content="个人留学直通车,中日人才交流援助平台,出国，留学，留日，人才交流，援助平台，培训，IPA，对外汉语">
<meta name="MSSmartTagsPreventParsing" content="TRUE">
<meta name="description" content="个人留学直通车,中日人才交流援助平台,出国，留学，留日，人才交流，援助平台，培训，IPA">
<meta http-equiv="Page-Exit" content="revealTrans(Duration=1,Transition=23)">
<meta http-equiv="Page-Enter" content="revealTrans(Duration=1,Transition=23)">
<link rel="shortcut icon" href="http://thechoose.phpnet.us/images/favicon.ico" type="image/x-icon">
<link rel="Bookmark" href="http://thechoose.phpnet.us/images/favicon.ico" type="image/x-icon">
<link href="../images1/css.css" tppabs="css/css.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="../images1/swfobject.js" tppabs="fl/swfobject.js"></script><style type="text/css"></style>
<script src="../images1/js.js" tppabs="js/js.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8" src="../images1/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../images1/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="../images1/ueditor/lang/zh-cn/zh-cn.js"></script>



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

<tbody><tr>
<td width="38" height="32" valign="middle">&nbsp;</td>
<td valign="middle" width="760">
            
<marquee border="0" align="middle" scrolldelay="120" width="760">
尊敬的来宾您好：

<a href="./index.php" target="_blank">欢迎光临</a>&nbsp;&nbsp;&nbsp;&nbsp;

</marquee>
 </td>



</tr>





<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="15"></td>
  </tr>
</tbody></table>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td width="183" valign="top"><table width="231" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody><tr>
        
        <td width="186" background="../images1/a_003.gif" 
            tppabs="http://www.wasa-china.com/images/a_003.gif">管理员功能</td>
        <td width="43"><img src="../images1/a_004.gif" 
                           tppabs="http://www.wasa-china.com/images/a_004.gif" width="6" height="28"></td>
        <td width="3">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" valign="top" 
            background="../images1/a_006.gif" 
            tppabs="http://www.wasa-china.com/images/a_006.gif">
            <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody><tr>
                  <td height="10"></td>
                </tr>

                <tr>
                  <td height="26" class="h25">

               <table width="231" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="231"><a href="ueditor/newsadd.php">.增加新闻</a></td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0"  >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215"><a href="../addnews/hushi2014112901.php">.删除新闻</a></td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0"  tppabs="images/line.gif">
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215"><a href="upload_file.php">.上传附件</a></td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215"><a href="../addnews/hushi2014112903.php">.</a></td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215">&nbsp;</td>
        </tr>
</tbody></table>


<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215">&nbsp;</td>
        </tr>
</tbody></table>    

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215">&nbsp;</td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215">&nbsp;</td>
        </tr>
</tbody></table>
          
<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215">&nbsp;</td>
        </tr>
</tbody></table>
          
<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215">&nbsp;</td>
        </tr>
</tbody></table>                </td></tr>
                <tr>
                  <td height="10"></td>
                </tr>
              </tbody>
            </table></td>
        </tr>
      <tr>
        <td colspan="3"><img src="../images1/a_005.gif" 
                             tppabs="http://www.wasa-china.com/images/a_005.gif" width="190" height="6"></td>
        </tr>
    </tbody></table>
      <table width="190" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody><tr>
          <td>&nbsp;</td>
        </tr>
      </tbody></table>
    </td>
    <td width="646" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td></td>
      </tr>

      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td width="14"><img src="../images1/a_012.gif" tppabs="http://www.wasa-china.com/images/a_012.gif" width="14" height="28"></td>
            <td width="93" align="center" bgcolor="#4893D4"><strong>管理员登陆成功</strong></td>
            <td width="10"><img src="../images1/a_013.gif" tppabs="http://www.wasa-china.com/images/a_013.gif" width="9" height="28"></td>
            <td width="622" background="../images1/a_014.gif" tppabs="http://www.wasa-china.com/images/a_014.gif">&nbsp;</td>
          </tr>
        </tbody></table></td>
      </tr>
      <?php do { ?>
        <tr>
            <td><table width="737" height="29" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <th width="306" scope="row"></th>
                    <td width="189"></td>
                    <td width="242"></td>
                  </tr>
              <tr>
                <div align="left"><td><a href="newfang_news.php?news_id=<?php echo $row_Recordset1['news_id']; ?>">标题 <?php echo $row_Recordset1['news_title']; ?></a> </td><td>作者 <?php echo $row_Recordset1['news_author']; ?></td><td>时间<?php echo $row_Recordset1['news_date']; ?></td></div>
                    </tr>
              
            </table></td>
        </tr>
        <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
      <tr>
        <td height="2" align="center">
        
        <table width="96%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    
  </tr>
  <tr>






<br>
  <div>
    <script id="editor" type="text/plain" style="width:600px;height:500px;"></script>
</div>


   
        



</table>

</td>
      </tr>
    </table></td>
   





</tbody></table>


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="15"></td>
  </tr>
</tbody></table>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039)http://thechoose.phpnet.us/xhdt.asp.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">

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
            <td width="114" align="center"  >&nbsp;</td>
          </tr>
        </tbody></table></td>
        </tr>
    </tbody></table>
    </td>
  </tr>
  <tr>
    <td height="75" valign="middle" style="text-align:center;">版权所有 &#169;华理学子<br>        
      <br>
 </td>
  </tr>
</tbody></table>




</body></html>
<?php
mysqli_free_result($Recordset1);
?>