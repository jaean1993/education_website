
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
