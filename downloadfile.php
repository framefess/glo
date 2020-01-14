<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> -->
<?php
// header('Content-Type: text/html; charset="UTF-8"');
$file = urldecode($_GET['file']);
echo $file;
$filename = $file;
$file = 'assets/file/'.$file;

if(!file_exists($file)){ // file does not exist
    die($file.' file not found');
} else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$filename");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");

    // read the file from disk
    readfile($file);
}
?>