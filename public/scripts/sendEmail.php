<?php
include_once(dirname(__DIR__, 2) . '/app/functions.php');
$url = getServerProtocol() . getHost() . '/page-complete';
redirect($url);
