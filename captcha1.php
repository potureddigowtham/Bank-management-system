<?php
session_start();
header("content-type:image/png");
if(isset($_SESSION['my_captcha']))
{
unset($_SESSION['my_captcha']);
}
$str1="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$str2="0123456789";
$str=$str1.$str2;
$str=str_shuffle($str);
$random_text=substr($str,0,7);
$_SESSION['my_captcha']=$random_text;
$im=@imageCreate(80,20)
or die("could not create");
$background_color=ImageColorAllocate($im,204,204,204);
$text_color=ImageColorAllocate($im,51,51,255);
ImageString($im,5,5,2,$_SESSION['my_captcha'],$text_color);
ImagePng($im);
imagedestory($im);
?>