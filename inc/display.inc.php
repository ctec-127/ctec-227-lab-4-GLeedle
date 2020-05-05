<?php

if (isset($_GET['file'])) {

    copy('../uploads/' . $_GET['file'], '../deleted/' . $_GET['file']);


    if (isset($_GET['file'])) {
        if (unlink("../uploads/" . $_GET['file'])) {
            header('Location:../upload-files.php');
        } else {
            echo '<p class="alert alert-danger text-center">Failed to delete file</p>';
        }
    }
}

function display_images()
{
    $dir = "uploads";
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)) {
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename) && $filename != '.DS_Store') {
                    $filename = urlencode($filename);
                    echo "<div class=\"pics\"><a href=\"uploads/$filename\"><img src=\"uploads/$filename\" alt=\"A photo\"></a>";
                    echo "<a href=\"inc/display.inc.php?file=$filename\"><div class=\"btn-sm btn-outline-danger text-center\">Delete</div></a></div>";
                }
            } // end while
            // close the directory now that we are done with it
            closedir($dir_handle);
        } // end if
    } // end if
}
