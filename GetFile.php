<?php
    $data = base64_decode($_POST["file"]);
    $file = fopen("file.txt",'a');
    fwrite($file,$data);
    fclose($file);
?>