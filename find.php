<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<body>
<?php 


   echo "<li>用户上传的所有文件如下：<li>";
   if ($handle = opendir("download/"))
   {
      while (1)
      {
            $ufile = readdir($handle);
            if ($ufile == "") break;
            if (($ufile!=".")&($ufile!= ".."))
            {
                  $tfile=iconv('GB2312', 'UTF-8', $ufile);
				  
				  
                  echo  "<li><a href='download.php?name=$tfile'>".$tfile."</a></li>";
            }
      }
}
?>
</body>
</html>