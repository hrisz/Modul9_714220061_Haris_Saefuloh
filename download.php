<?php
header("Content-Type:application/zip");
header("Content-Lenght:".filesize($file));
header("Content-Disposition:attachments;filename=$file");
readfile($file);
?>