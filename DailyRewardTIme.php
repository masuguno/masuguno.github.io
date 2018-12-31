<?php
$hourdiff = 7; // Replace the 0 with your timezone difference (;
$site = date("l, d F Y g:i a",time() + ($hourdiff * 3600));
echo $site;
?>