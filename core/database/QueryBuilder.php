<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/8/17
 * Time: 10:20
 */
class QueryBuilder{
	function get_config($file, $ini, $type="string"){
		if(!file_exists($file)) return false;
		$str = file_get_contents($file);
		if ($type=="int"){
			$config = preg_match("/".preg_quote($ini)."=(.*);/", $str, $res);
			return $res[1];
		}
		else{
			$config = preg_match("/".preg_quote($ini)."=\"(.*)\";/", $str, $res);
			if($res[1]==null){
				$config = preg_match("/".preg_quote($ini)."='(.*)';/", $str, $res);
			}
			return $res[1];
		}
	}
	function update_config($file, $ini, $value,$type="string"){
		if(!file_exists($file)) return false;
		$str = file_get_contents($file);
		$str2="";
		if($type=="int"){
			$str2 = preg_replace("/".preg_quote($ini)."=(.*);/", $ini."=".$value.";",$str);
		}
		else{
			$str2 = preg_replace("/".preg_quote($ini)."=(.*);/",$ini."=\"".$value."\";",$str);
		}
		file_put_contents($file, $str2);
	}
}