<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'chatbox');

$result1 = mysqli_query($con,"SELECT * FROM logs ORDER BY id DESC");

while($extract = mysqli_fetch_array($result1)) {
	echo  $extract['username'] . " : " . $extract['msg'] ."<br /> <a href='#'>reply</a> <br />";
}
?>