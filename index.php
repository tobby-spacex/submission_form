<?php

$server = [
  // 'Host Server Name' => $_SERVER['SERVER_NAME'],
  // 'Host Header' => $_SERVER['HTTP_HOST'],
  // 'Server Software' => $_SERVER['SERVER_SOFTWARE']
];


$client = [
  'Client System info' => $_SERVER['HTTP_USER_AGENT'],
  'Client IP' => $_SERVER['REMOTE_ADDR']
];

print_r($client);
