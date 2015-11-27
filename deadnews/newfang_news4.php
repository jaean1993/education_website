<?php require_once('../Connections/connect.php'); ?>
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

$colname_Recordset1 = "-1";
if (isset($_GET['news_id'])) {
  $colname_Recordset1 = $_GET['news_id'];
}
mysql_select_db($database_connect, $connect);
$query_Recordset1 = sprintf("SELECT * FROM news WHERE news_id = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $connect) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
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

     <li class="nav-item"><a href="../newfang.php" tppabs="index.php">首页</a></li>

      <li class="nav-item"><a href="newfang_userhome.php" tppabs="xhdt.php">会员之家</a></li>

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











<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tbody><tr>

    <td height="15"></td>

  </tr>

</tbody></table>

<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0">

  <tbody><tr>

    <td width="225" valign="top"><table width="190" border="0" align="center" cellpadding="0" cellspacing="0">

      <tbody><tr>

        

        <td width="185" background="../images1/a_003.gif" 

            tppabs="http://www.wasa-china.com/images/a_003.gif"><span class="STYLE101">公告</span></td>

        <td width="47"><img src="../images1/a_004.gif" 

                           tppabs="http://www.wasa-china.com/images/a_004.gif" width="6" height="28"></td>

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



               <table width="232" border="0" align="center" cellpadding="0" cellspacing="0" >

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/fuzhishi20150401301.php">.</a></td>

        </tr>

</tbody></table>



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0">

        <tbody><tr>

          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>

          <td width="215"><a href="../addnews/hushi2014112901.php">.</a></td>

        </tr>

</tbody></table>



<table width="232" border="0" align="center" cellpadding="0" cellspacing="0" >

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

            <td width="93" align="center" bgcolor="#4893D4"><strong>新闻动态</strong></td>

            <td width="10"><img src="../images1/a_013.gif" tppabs="http://www.wasa-china.com/images/a_013.gif" width="9" height="28"></td>

            <td width="622" background="../images1/a_014.gif" tppabs="http://www.wasa-china.com/images/a_014.gif">&nbsp;</td>

          </tr>

        </tbody></table></td>

      </tr>

      <tr>

        <td>&nbsp;</td>

      </tr>

      <tr>

        <td align="center">

        

        <table width="96%" border="0" cellspacing="0" cellpadding="0">

  <tbody><tr>

    <td align="center" height="30">亚太地区质量保障组织2014年会</td>

  </tr>

  

 <!-- if rs("ok")=1 then%>

  <tr>

    <td><img src="=rs("picurl")%>"></a></td>

  </tr>

  end if%> -->

  <tr>

    <td align="center" height="30">涉外办学质量保障部&nbsp;&nbsp;俎媛媛&nbsp;&nbsp;2015.4.23</td>
  </tr>

  <tr>

    <td align="left"><p><br>





       <div> 2014年3月7日至8日，亚太地区质量保障组织（APQN）年会在越南河内举行。此次APQN年会主题为“变革世界中的高等教育质量保障——展望亚太地区的未来”，来自近40个国家的200多名成员参加了会议。与会嘉宾分别就跨境教育质量保障的不同模式、亚欧对话与合作、质量保障机构的本土、区域及全球化合作、质量保障的成果、创新与发展等进行讨论。期间，APQN会员单位还就亚太地区的质量保障框架、亚太地区质量信息网络平台建设、地区间合作等问题进行了深入探讨。此次APQN年会显示出以下几个发展趋势：<br>
      <br> 1.亚太地区质量保障组织（APQN）发展迅速
      <br> 亚太地区教育质量保障组织（APQN）是一个由亚太地区教育评估专业机构、教育评估科研单位和高等院校组成的区域性的、非营利的非政府国际组织，2003年1月成立于中国香港。在过去的2年，APQN增加了约50多名会员，其会员规模已由最初的20个左右发展到目前的135个，这些会员分布在33个国家和地区。目前APQN已发展成为权威性的亚太地区教育质量保障国际合作与交流的平台。
      <br> 2.国家和地区间质量保障国际交流与合作更加紧密
      <br> 会议显示，在高等教育全球化、跨境教育飞速发展的今天，国家和地区间质量保障领域的合作趋势日益明显。这些合作不仅包括质量保障机构之间的合作，也包括国家与国家、地区与地区、国家与地区之间的合作。APQN今年年会重点探讨了亚太地区质量注册（Asia Pacific Quality Register, APQR）、亚太地区质量信息网络平台建设，以及与欧洲质量保障组织开展合作等项目。澳大利亚高等教育质量与标准署（TEQSA）与英国高等教育质量保障机构（QAA）目前也正在共同探讨合作方式，优化质量保障的程序，减轻高等教育机构的评估负担。双方机构还通过共享经验，共同推进跨境教育质量保障合作。
      <br> 3.加强能力建设，聚焦跨境教育质量保障热点问题
      <br> 随着教育全球化以及质量保障机构区域化和次区域化趋势的加强，如何促进区域和国家间的对话，确保合作共赢？开放教育资源（OERs）、大规模开放在线课程（MOOCs）的出现，推动高等教育迅速发展，质量保障是否相应地跟上了这样的发展趋势？欧洲立交桥（Crossroads of Europe）和亚太地区质量信息网络平台建设能否为市场化导向中的跨境教育质量增加一些透明度，为学生和利益相关者提供一些参考？在当今世界通过建立地区性联盟和网络组织、强调联合共同发展的时候，如何通过努力来为亚洲争取最大的价值利益？以上伴随跨境教育发展而出现在质量保障领域的新情况、新问题，呼唤各国质量保障机构加强能力建设，加强合作共建。
      <br><br> 从APQN此次年会的内容和亚太地区各国质量保障的发展趋势来看，随着跨境教育以及教育信息技术的飞速发展，教育已不再是各国关起门来单打独斗的“家事”。在区域一体化的进程中，各国需要相互合作，共同促进国际人才流动。目前亚太地区质量保障组织（APQN）、国际高等教育质量保障机构网络组织（INQAAHE）等地区性和国际性质量保障组织为国家和地区间交流合作搭建了平台。我们应积极参与到这些组织的全球性、区域性合作当中，参与和推动国际组织教育政策、规则、标准的研究和制定，促进跨境教育质量提升、提高我国教育的影响力和竞争力。</div><br>



      </p>

    </td>

  </tr>

  <tr>

    <td align="right">&nbsp;</td>

  </tr>

  <tr>

    <td align="left"><h2>&nbsp;</h2>      
    </a></td>

  </tr>

   <tr>

    <td align="left" height="30"><table width="97%" border="0" cellspacing="0" cellpadding="0">

  <tbody><tr>

  <td colspan="4" align="right">&nbsp;</td>

    </tr>
</tbody></table>

</td>

  </tr>

  <tr>

    <td align="left"><h2><br>
    <br>

    </h2>

      <div>

        <script id="editor" type="text/plain" style="width:600px;height:500px;"></script>

</div>





      </table>



</td>

      </tr>

    </table></td>

 







  </tr>

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
mysql_free_result($Recordset1);
?>
<script src="/ueditor/ueditor.parse.js"></script>
<script>
setTimeout(function(){uParse('div',
{
 'highlightJsUrl':'/ueditor/third-party/SyntaxHighlighter/shCore.js',
 'highlightCssUrl':'/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css'})
},300);
</script>