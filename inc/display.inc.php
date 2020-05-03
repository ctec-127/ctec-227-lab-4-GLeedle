<?php 
$dir = "uploads";
if (is_dir($dir)) {
    if ($dir_handle = opendir($dir)) {
        while ($filename = readdir($dir_handle)) {
            if (!is_dir($filename)) {
                $filename = urlencode($filename);
                echo "<div><img src=\"uploads/$filename\" alt=\"A photo\">";
                echo "<div class=\"btn-sm btn-danger\"><a href=\"nuke.php?file=$filename\">Delete<a/></div></div>";                
            } 
        } // end while
        // close the directory now that we are done with it
        closedir($dir_handle);
    } // end if
} // end if
