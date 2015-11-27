<?php

	$filePath = "download/";//此处给出你下载的文件在服务器的什么地方
	//$fileName = "1.txt";
	$fileName=$_GET['name'];
	
	$fileName=iconv("utf-8","gb2312",$fileName);
	
	//此处给出你下载的文件名
	$file = fopen($filePath . $fileName, "r"); //   打开文件
	//输入文件标签
	Header("Content-type:application/octet-stream ");
	Header("Accept-Ranges:bytes ");
	Header("Accept-Length:   " . filesize($filePath . $fileName));
	Header("Content-Disposition:   attachment;   filename= " . $fileName);
	
	//   输出文件内容
	echo fread($file, filesize($filePath . $fileName));
	fclose($file);
	exit;

?>