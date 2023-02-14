<?php

if(isset($_REQUEST["submit"]))
{
	 $file=$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path="uploader/".$file;
	$file1=explode(".",$file);
	$ext=$file1[1];
	$allowed=array("pdf");
	if(in_array($ext,$allowed))
	{
 move_uploaded_file($tmp_name,$path);	
}
}