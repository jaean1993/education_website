<?php require_once('Connections/connect.php'); ?>
<?php
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



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://thechoose.phpnet.us/hushi2014070801.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">

<title>��������Э��</title>
<meta name="keywords" content="������ѧֱͨ��,�����˲Ž���Ԯ��ƽ̨,��������ѧ�����գ��˲Ž�����Ԯ��ƽ̨����ѵ��IPA�����⺺��">
<meta name="MSSmartTagsPreventParsing" content="TRUE">
<meta name="description" content="������ѧֱͨ��,�����˲Ž���Ԯ��ƽ̨,��������ѧ�����գ��˲Ž�����Ԯ��ƽ̨����ѵ��IPA">
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
      <li class="nav-item"><a href="../index.php" tppabs="index.php">��ҳ</a></li>
      <li class="nav-item"><a href="../news.php" tppabs="xhdt.php">��Ա֮��</a></li>
      <li class="nav-item"><a href="../notice.php" tppabs="huiyuan.php">��Ŀ����</a></li>
      <li class="nav-item"><a href="./success.php" tppabs="report.php">���Ľ���</a></li>
      <li class="nav-item"></li>
      <li class="nav-item"><a href="../dsj.php" tppabs="dsj.php">����Э��</a></li>
      <li class="nav-item"></li>
      <li class="nav-item"></li>
      <li class="nav-item"></li>
      <li class="nav-item"></li>
      <li class="nav-item"><a href="../contect.php" tppabs="../contect.php">��ϵ����</a></li>
    </ul>
  </td>
</tr>

</tbody></table>
    


<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" background="../images1/index_zhenx_net_wasa_32.jpg" tppabs="images/index_zhenx_net_wasa_32.jpg">
<form name="Search" method="post" action="javascript:if(confirm('search.asp  \n\n���ļ�δ�� Teleport Pro ���أ���Ϊ ���������� - ���ڳ���һ������������޷����ء�  \n\n����Ҫ�ӷ�����������?'))window.location='search.asp'" tppabs="search.asp"></form>
<tbody><tr>
<td width="38" height="32" valign="middle">&nbsp;</td>
<td valign="middle" width="760">
            
<marquee border="0" align="middle" scrolldelay="120" width="760">
�𾴵��������ã�

<a href="./index.php" target="_blank">��ӭ����</a>&nbsp;&nbsp;&nbsp;&nbsp;

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
            tppabs="http://www.wasa-china.com/images/a_003.gif">��Ա����</td>
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
          <td width="226"><a href="../addnews/fuzhishi20150401301.php">.�޸ĸ�������</a></td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0"  >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215"><a href="../addnews/hushi2014112901.php">.�ҵ��ղ�</a></td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0"  tppabs="images/line.gif">
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215"><a href="../addnews/hushi2014112902.php">.������¼</a></td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215"><a href="../addnews/hushi2014112903.php">.�ҵĺ���</a></td>
        </tr>
</tbody></table>

<table width="232" border="0" align="center" cellpadding="0" cellspacing="0">
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215">�ҵ�����</td>
        </tr>
</tbody></table>


<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="215">ע���˻�</td>
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
            <td width="93" align="center" bgcolor="#4893D4"><strong>��Ա֮��</strong></td>
            <td width="10"><img src="../images1/a_013.gif" tppabs="http://www.wasa-china.com/images/a_013.gif" width="9" height="28"></td>
            <td width="622" background="../images1/a_014.gif" tppabs="http://www.wasa-china.com/images/a_014.gif">&nbsp;</td>
          </tr>
        </tbody></table></td>
      </tr>
      <tr>
        <td align="center">������
          <form id="form1" name="form1" method="post" action="">
            <p>�޸����룺����
              <input type="text" name="textfield" id="textfield" />
              <br />
              <br />
              �ٴ����룺����
              <input type="text" name="textfield2" id="textfield2" />
              <label for="textfield2"></label>
            </p>
            <p>�����ʼ�������
              <input type="text" name="textfield3" id="textfield3" />
            </p>
            <p>
              <label for="textfield4">��������������</label>
              <input type="text" name="textfield4" id="textfield4" />
            </p>
            <p>
              <label for="textfield5">��ϵ�绰������</label>
              <input type="text" name="textfield5" id="textfield5" />
            </p>
            <p>
              <label for="textfield6">�����һ����⣺</label>
              <input type="text" name="textfield6" id="textfield6" />
            </p>
            <p>
              <input type="submit" name="button" id="button" value="�ύ" />����
              <input type="reset" name="button2" id="button2" value="����" />
            </p>
          </form></td>
      <tr>
        <td align="center"></td>
         <tr>
        <td align="center"></td>
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


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td height="15"></td>
  </tr>
</tbody></table>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039)http://thechoose.phpnet.us/xhdt.asp.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">

<title>������ѧֱͨ��</title>
<meta name="keywords" content="�����˲Ž���Ԯ��ƽ̨">
<meta name="MSSmartTagsPreventParsing" content="TRUE">
<meta name="description" content="�����˲Ž���Ԯ��ƽ̨">
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
    <td width="858" valign="middle"><span class="STYLE101">�������� </span> | Links </td>
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
            <td width="114" align="center"><a class="flink" href="http://www.jllx.cn/">�л����񹲺͹�������</a></td>
          </tr>
        </tbody></table></td>
                            
        <td><table width="128" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td width="114" align="center"><a class="flink" href="http://ddzyzg.neu.edu.cn/">�л����񹲺͹��⽻��</a></td>
          </tr>
        </tbody></table></td>
                            
        <td><table width="128" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td width="114" align="center"><a class = "flink" href="http://shop115478731.taobao.com/">�л����񹲺͹�������</a></td>
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
    <td height="75" valign="middle" style="text-align:center;">��Ȩ���� &#169;����ѧ��<br>        
      <br>
 </td>
  </tr>
</tbody></table>
</body></html>
<?php
mysql_free_result($Recordset1);
?>
