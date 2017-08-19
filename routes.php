<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/8/17
 * Time: 10:17
 */
$router->define([
	'' => 'controllers/index.php',
	'lairen' => 'controllers/index.php',
	'about' => 'controllers/about.php',
	'statisticChart/index' => 'controllers/statisticChart/index.php',
	'statisticChart/lairen' => 'controllers/statisticChart/lairen.php',
	'd3/index' => 'controllers/d3/index.php',
]);
