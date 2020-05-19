<?php
// session_start();
// $path = $_SERVER['DOCUMENT_ROOT'];
// $path .= '"/usr/"' . $_SESSION['username'];

if (isset($_GET['file'])) {
    session_start();
    // copies files to a deleted directory
    copy('../../usr/' . $_SESSION['username'] . '/uploads' . '/' . $_GET['file'], '../../usr/' . $_SESSION['username'] . '/deleted' . '/' .$_GET['file']);

  
    if (isset($_GET['file'])) {
        if (unlink('../../usr/' . $_SESSION['username'] . '/uploads' . '/' . $_GET['file'])) {
            header('Location:../display/upload-files.php');
        } else {
            echo '<p class="alert alert-danger text-center">Failed to delete file</p>';
        }
    }
}

function display_images()
{
    $dir = '../../usr/' . $_SESSION['username'] . '/uploads'; //$_SESSION['folder']
    if (is_dir($dir)) {
        if ($dir_handle = opendir($dir)) {
            while ($filename = readdir($dir_handle)) {
                if (!is_dir($filename) && $filename != '.DS_Store') {
                    $filename = rawurlencode($filename);
                    echo "<div class=\"pics\"><a href=\"../../usr/" . $_SESSION['username'] . "/uploads/$filename\"  target=\"_blank\"><img src=\"../../usr/" . $_SESSION['username'] . "/uploads/$filename\" alt=\"A photo\"></a>";
                    echo "<a href=\"display.inc.php?file=$filename\"><div class=\"btn-sm btn-outline-danger text-center\">Delete</div></a></div>";
                }
            } // end while
            // close the directory now that we are done with it
            closedir($dir_handle);
        } // end if
    } // end if
}
