<?php
set_time_limit(0); 
 

 
$fileName = $_GET["fname"]; 
$targetFile = "/var/www/reg/upload/{$fileName}"; 
 
if ( ! file_exists($targetFile) ) {
  
    exit;
}
 

 
header('Content-Description: File Transfer');
header("Content-Disposition: attachment; filename=\"$fileName\"");
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($targetFile));
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Expires: 0');
 
readfile($targetFile);


?>
