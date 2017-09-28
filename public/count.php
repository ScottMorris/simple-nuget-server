<?php
include(__DIR__ . '/../inc/core.php');
header('Content-Type: text/plain; charset=utf-8');
require_public_auth();
echo DB::countPackages();
