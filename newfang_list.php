<?php require_once('Connections/connect.php'); ?>
<?php

mysqli_query($connect,"set names 'utf8'");
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

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
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
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
if (!isset($_SESSION)) {
  session_start();
}

//用户登出
if(isset($_GET['action'])){
  if($_GET['action']=='logout'){
    session_unset();
  }
}
$colname_Recordset1 = "-1";
if (isset($_GET['news_id'])) {
  $colname_Recordset1 = $_GET['news_type'];
}
mysqli_select_db( $connect,$database_connect);
$query_Recordset1="SELECT * FROM news WHERE news_type= '".$_GET['news_type']."' ORDER BY news_id DESC ";
 
$Recordset1 = mysqli_query($connect,$query_Recordset1) or die(mysql_error());

$query_Recordset2=sprintf("SELECT * FROM news WHERE news_type='common' ORDER BY news_id DESC");
$Recordset2 = mysqli_query($connect,$query_Recordset2) or die(mysql_error());

$row_Recordset1=mysqli_fetch_assoc($Recordset1);

$row_Recordset2=mysqli_fetch_assoc($Recordset2);

$totalRows_Recordset2 = mysqli_num_rows($Recordset2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://thechoose.phpnet.us/hushi2014070801.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>教育交流协会</title>

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
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script language="javascript" src="js/jquery.Sonline.js"></script>
<script type="text/javascript">
$(function(){
  $("body").Sonline({
    Position:"right",//left或right
    Top:200,//顶部距离，默认200px
    Effect:true, //滚动或者固定两种方式，布尔值：true或false
    DefaultsOpen:true, //默认展开：true,默认收缩：false
    Qqlist:"282821521|客服01,435027|客服02,435027|客服03,435027|客服04,435027|客服05" //多个QQ用','隔开，QQ和客服名用'|'隔开
  });
})  
</script>


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
     <?php
    if(!empty($_SESSION)){
      echo '<a href="newfang_userhome.php">';
      echo "您好".$_SESSION['MM_Username']."</a>";
      echo '&nbsp;&nbsp;&nbsp;<a href="" onclick="logout()" id="log_out" name="log_out">退出登录</a>';
    }else{
      echo '<a href="newfang_user_admin.php">点此登录</a>';
    }
?>
     
  
    
    
    </td>
      </tr>
  </tbody></table>  </td>
</tr>
<tr>

  <td height="65" colspan="2" align="left" valign="middle">
    <ul class="nav clearfix">
      <li class="nav-item"><a href="../index.php" tppabs="index.php">首页</a></li>
      <li class="nav-item"><a href="newfang_user_admin.php" tppabs="xhdt.php">会员之家</a></li>
      <li class="nav-item"><a href="newfang_list.php?news_type=news" >新闻动态</a></li>

      <li class="nav-item"><a href="newfang_list.php?news_type=academic" >学术活动</a></li>
      <li class="nav-item"><a href="newfang_list.php?news_type=members">会员动态</a></li>
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





<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="15"></td>
  </tr>
</tbody></table>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td width="183" valign="top"><table width="231" border="0" align="center" cellpadding="0" cellspacing="0">
      <tbody><tr>
        
        <td width="230" background="../images1/a_003.gif" 
            tppabs="http://www.wasa-china.com/images/a_003.gif"><span class="STYLE101">公告</span></td>
        <td width="3"><img src="../images1/a_004.gif" 
                           tppabs="http://www.wasa-china.com/images/a_004.gif" width="6" height="28"></td>
        
      </tr>
      <tr>
        <td colspan="3" valign="top" 
            tppabs="http://www.wasa-china.com/images/a_006.gif">
            <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody><tr>
                  <td height="10"></td>
                </tr>

                <tr>
                  <td height="26" class="h25">


 <table width="231" border="0" align="center" cellpadding="0" cellspacing="0">
          <?php do { ?>
             
             
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="231"><a href="newfang_news.php?news_id=<?php echo $row_Recordset2['news_id']; ?>"> <?php echo $row_Recordset2['news_title']; ?>
              <?php } while ($row_Recordset2 = mysqli_fetch_assoc($Recordset2)); ?></a></td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0"  >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215"><a href="../addnews/hushi2014112901.php">.</a></td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0"  tppabs="images/line.gif">
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215"><a href="../addnews/hushi2014112902.php">.</a></td>
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

    </td>
    <td width="646" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td></td>
      </tr>

      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td width="14"><img src="../images1/a_012.gif" tppabs="http://www.wasa-china.com/images/a_012.gif" width="14" height="28"></td>
            <td width="93" align="center" bgcolor="#4893D4"><strong><?php switch ($_GET['news_type']) {
              case 'news':
                echo "新闻动态";
                break;
              case 'members':
                echo "会员动态";
                break;
                case 'academic':
                echo "学术活动";
                break;
                case 'common';
                echo "公告";
                break;
              default:
                echo "";
                break;
            } ;?></strong></td>
            <td width="10"><img src="../images1/a_013.gif" tppabs="http://www.wasa-china.com/images/a_013.gif" width="9" height="28"></td>
            <td width="622" background="../images1/a_014.gif" tppabs="http://www.wasa-china.com/images/a_014.gif">&nbsp;</td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td><table width="100%" border="0">
          <?php do { ?>
              <table width="232" border="0" align="left" cellpadding="0" cellspacing="0" background="../images1/line.gif" tppabs="images/line.gif">
            <tbody>
              <tr>
                <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
                <td width="215"><a href="newfang_news.php?news_id=<?php echo $row_Recordset1['news_id']; ?>"><?php echo $row_Recordset1['news_title']; ?></a></td>
              </tr>
            </tbody>
                      </table>
              <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center">
        
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


<script type="text/javascript">
function logout(){

  alert("已退出登录!");
    window.location.href=<?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'&action=logout"'; ?>;
}
//注意有的页面有多个_GET参数
</script>

</body></html>
<?php
mysqli_free_result($Recordset2);
?>
