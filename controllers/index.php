<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/8/17
 * Time: 10:18
 */
$con = mysqli_connect("localhost","root","",'test');
if (!$con)
{
	die('Could not connect: ' . mysqli_error());
}else{
	echo '链接成功';
}
$result = mysqli_query($con,"SELECT * FROM article");

while($row = mysqli_fetch_array($result))
{
	echo '标题：'.$row['titleName'] . "	作者：" . $row['autor'];
	echo "<br />";
}
echo date('h', 1503050400);

echo date('a', 1503050400)=='pm'?'下午':'上午';

echo "当前时间是 " . date("a");
// 呈现页面
require "views/index.php";