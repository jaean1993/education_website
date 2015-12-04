<?php require_once('Connections/connect.php'); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://thechoose.phpnet.us/hushi2014070801.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
</head>
<?php
mysqli_query($connect,"set names 'gbk'");
if (!isset($_SESSION)) {
  session_start();
}

mysqli_query($connect,"set names 'gbk'");
mysqli_select_db( $connect,$database_connect);
$query_Recordset1 = sprintf("SELECT news_id,news_title FROM newsreview WHERE user_id = %s", $_SESSION['MM_UserGroup']['id']);
$Recordset1 = mysqli_query($connect,$query_Recordset1 ) or die(mysql_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?>
<body>
 <table width="231" border="0" align="left" cellpadding="0" cellspacing="0">
          <?php do { ?>
             
             
        <tbody><tr>
          <td width="17" height="32" align="center"><img src="../images1/left.gif" tppabs="images/left.gif" width="5" height="9"></td>
          <td width="231"><a href="newfang_news.php?news_id=<?php echo $row_Recordset1['news_id']; ?>"> <?php echo $row_Recordset1['news_title']; ?>
              <?php } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?></a></td>
        </tr>
</tbody></table>
</body></html>