<?php require_once('Connections/connect.php'); ?>
<?php

mysqli_query($connect,"set names 'GBK'");
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $connect,$theDefinedValue = "", $theNotDefinedValue = "") 
{

  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysqli_real_escape_string($connect,$theValue) : mysqli_escape_string($connect,$theValue);

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
if (!isset($_SESSION)) {
  session_start();
}

//�û��ǳ�
if(isset($_GET['action'])){
  if($_GET['action']=='logout'){
    session_unset();
    session_destroy();
  }
}



$Result1=false;
$warning = array();

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  //check in server

  if(strlen($_POST['password'])<6){
    $warning['pass']="���볤�Ȳ�����6���ַ���";
    
  }
  if($_POST['password']!=$_POST['password1']){
    $warning['pass']="�������벻һ�£�";
   
  }
  if(!preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|18[0-9]{9}$/",$_POST['tel'])){    
      $warning['tel']="��Ч���ֻ��Ÿ�ʽ��";
       
  }
  $regex = '/^[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+\/=?^_`{|}~-]+)*@(?:[-_a-z0-9][-_a-z0-9]*\.)*(?:[a-z0-9][-a-z0-9]{0,62})\.(?:(?:[a-z]{2}\.)?[a-z]{2,})$/i';
  if(!preg_match($regex, $_POST['email'])){
    $warning['email']="��Ч�ĵ��������ʽ��";
    
  }

  if(empty($warning)){
  $pass=base64_encode($_POST['password']);
  $insertSQL = sprintf("INSERT INTO `admin` ( password, truename, tel, email, ) VALUES (%s, %s, %s, %s)",
                       
                       GetSQLValueString($pass, "text",$connect),
                       GetSQLValueString($_POST['truename'], "text",$connect),
                       GetSQLValueString($_POST['tel'], "text",$connect),
                       GetSQLValueString($_POST['email'], "text",$connect)
                       );
 
  
  mysqli_select_db($connect,$database_connect );
  $Result1 = mysqli_query($connect,$insertSQL) or die(mysql_error());
}
}
if($Result1!=false){

}
//user_info
mysqli_select_db( $connect,$database_connect);
$info_quest=sprintf("SELECT * FROM admin  WHERE id='".$_SESSION['MM_UserGroup']['id']."'");
$info_set = mysqli_query($connect,$info_quest) or die(mysql_error());
$info=mysqli_fetch_assoc($info_set);

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
     
          <?php
    if(!empty($_SESSION)){
      echo '<a href="newfang_userhome.php">';
      echo "����".$_SESSION['MM_Username']."</a>";
      echo '&nbsp;&nbsp;&nbsp;<a href="" onclick="logout()" id="log_out" name="log_out">�˳���¼</a>';
    }else{
      echo '<a href="newfang_user_admin.php">��˵�¼</a>';
    }
?>

    
    
    </td>
      </tr>
  </tbody></table>  </td>
</tr>
<tr>

  <td height="65" colspan="2" align="left" valign="middle">
    <ul class="nav clearfix">
        <li class="nav-item"><a href="../index.php" >��ҳ</a></li>

      <li class="nav-item"><a href="newfang_user_admin.php" >��Ա֮��</a></li>

      <li class="nav-item"><a href="newfang_list.php?news_type=news" >���Ŷ�̬</a></li>

      <li class="nav-item"><a href="newfang_list.php?news_type=academic" >ѧ���</a></li>
      <li class="nav-item"><a href="newfang_list.php?news_type=members">��Ա��̬</a></li>

      <li class="nav-item"><a href="../contect.php" >��ϵ����</a></li>
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
          <form id="form1" name="form1" method="post" action="<?php echo $editFormAction; ?>" >
            <p>�޸����룺����
              <input type="password" name="password" id="password" placeholder="���볤�Ȳ�������λ" value=<?php echo $info['password']; ?> /> <span style="color:red"><?php if(isset($warning['pass'])){echo $warning['pass'];}?></span>
              <br />
              <br />
              �ٴ����룺����
              <input type="password" name="password1" id="password1" value=<?php echo $info['password']; ?> />
              <label for="textfield2"></label>
            </p>
            <p>�����ʼ�������
              <input type="text" name="email" id="email" value=<?php echo $info['email']; ?> /><span style="color:red"><?php if(isset($warning['email'])){echo $warning['email'];}?></span>
            </p>
            <p>
              <label for="textfield4">��������������</label>
              <input type="text" name="truename" id="truename" value=<?php echo $info['truename']; ?> />
            </p>
            <p>
              <label for="textfield5">��ϵ�绰������</label>
              <input type="text" name="tel" id="tel" value=<?php echo $info['tel']; ?> /><span style="color:red"><?php if(isset($warning['tel'])){echo $warning['tel'];}?></span>
            </p>
           
            <p>
               <input type="hidden" name="MM_insert" value="form1" />
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
<script type="text/javascript">
function logout(){

  alert("���˳���¼!");
    window.location.href=<?php echo '"http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'?action=logout"'; ?>;
}
</script>
</body></html>
<?php
mysql_free_result($Recordset1);
?>
