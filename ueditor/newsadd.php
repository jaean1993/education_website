<?php require_once('../Connections/connect.php'); ?>
<?php
mysqli_query($connect,"set names 'UTF8'");
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {

  $insertSQL = sprintf("INSERT INTO news (news_title, news_content, news_author,news_type) VALUES (%s, %s, %s,%s)",
                       GetSQLValueString($_POST['title'], "text",$connect),
                       GetSQLValueString($_POST['content'], "text",$connect),
                       GetSQLValueString($_POST['author'], "text",$connect),
                       GetSQLValueString($_POST['type'],"text"),$connect);

  mysqli_select_db($connect,$database_connect);
  $Result1 = mysqli_query($connect,$insertSQL) or die(mysql_error());

  $insertGoTo = "../newfang_guanliyuandenglu.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?><!DOCTYPE HTML>
<html >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">     <title>上传文件</title>
</head>

<body>
    <!-- 加载编辑器的容器 -->
<form action="<?php echo $editFormAction; ?>" name="form" method="POST">
	<textarea name="content" id="container">这里写你的初始化内容</textarea>
标题
<input type="text" name="title" id="title">
作者
<input type="text" name="author" id="author">
  <input type="radio" name="type" id="type" value="common">公告</input>
  <input type="radio" name="type" id="type" value="academic">学术活动</input>
  <input type="radio" name="type" id="type" value="news">新闻动态</input>
  <input type="radio" name="type" id="type" value="members">会员动态</input>
<input type="submit" name="button" id="button" value="提交">
<input type="hidden" name="MM_insert" value="form">
</form>
<!-- 配置文件 -->
    <script type="text/javascript" src="ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="ueditor.all.js"></script>
<!-- 实例化编辑器 -->

   
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
</body>

</html>