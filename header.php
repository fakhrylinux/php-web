<?php

header('Application: Simple Header Request');
header('Author: Fakhry Linux');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";
