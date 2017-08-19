<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/8/17
 * Time: 10:16
 */
class Request
{
	public static function uri()
	{
		return trim($_SERVER['REQUEST_URI'], '/');
	}
}