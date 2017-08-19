<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/8/17
 * Time: 18:07
 */
$base_url=constant('base_url');
$con = mysqli_connect("localhost","root","",'test');
if (!$con)
{
	die('Could not connect: ' . mysqli_error());
}else{
	echo '链接成功';
}
$result = mysqli_query($con,"SELECT * FROM article");
$task=[];

while($row = mysqli_fetch_array($result))
{
	echo '标题：'.$row['titleName'] . "	作者：" . $row['autor'];
	echo "<br />";
}
require "views/statisticChart/lairen.php";
