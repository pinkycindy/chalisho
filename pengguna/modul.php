<?php
if (isset($_GET['mod'])){
	if (file_exists($_GET['mod'].".php")){
		require_once($_GET['mod'].".php");
	}else{
		require_once("404.php");
	}
}else{
	require_once("content.php");
}
?>