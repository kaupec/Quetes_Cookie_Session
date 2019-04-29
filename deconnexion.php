<?php
	/**
	 * Created by PhpStorm.
	 * User: julien
	 * Date: 2019-04-29
	 * Time: 09:45
	 */
session_start();
session_destroy();
header('location:/index.php');
exit;
?>