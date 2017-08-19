<?php
$database = require 'core/RouteRequireMap.php';
require Router::load('routes.php')->direct(Request::uri());
?>