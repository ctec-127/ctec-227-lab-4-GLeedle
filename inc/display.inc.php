<?php

// if (isset($_GET['file'])) {
//     unlink("../uploads/" . $_GET['file']);
//     location:(header('../upload-files.php'));
// }

// function display_images()
// {
//     $dir = "uploads";
//     if (is_dir($dir)) {
//         if ($dir_handle = opendir($dir)) {
//             while ($filename = readdir($dir_handle)) {
//                 if (!is_dir($filename) && $filename != '.DS_Store') {
//                     $filename = urlencode($filename);
//                     echo "<div><img src=\"uploads/$filename\" alt=\"A photo\">";
//                     echo "<div class=\"btn-sm btn-outline-danger text-center\"><a href=\"inc/display.inc.php?file=$filename\">Delete<a/></div></div>";
//                 }
//             } // end while
//             // close the directory now that we are done with it
//             closedir($dir_handle);
//         } // end if
//     } // end if
// }
