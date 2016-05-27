<?php
/**
 * Created by PhpStorm.
 * User: quinnpan
 * Date: 2016/5/27
 * Time: 16:36
 */
//print_r($_FILES);
//echo dirname(__FILE__);
$fileName = "";
$fileName .= date("YmdHis",time());
$fileName .= rand(10000,99999).".png";

//$data .= $_SERVER['HTTP_USER_AGENT'];
//$data .= $_SERVER['LOCAL_ADDR'];
//$data .= $_SERVER['LOCAL_PORT'];
//$data .= $_SERVER['REMOTE_ADDR'];
//$data .= $_SERVER['REMOTE_PORT'];
$fileUploadDir ="uploads";
$fileUrl = $fileUploadDir.'/'.$fileName;
if(!is_dir($fileUploadDir)){
    mkdir($fileUploadDir);
}
if(isset($_FILES["file"]))
{
    move_uploaded_file($_FILES["file"]["tmp_name"],$fileUploadDir.$fileName);
}

print json_encode(['url'=>$fileUrl,'name'=>$fileName]);