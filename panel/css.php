<?php

require_once "islemler/db.php";

header('Content-type: text/css; charset:UTF-8');
    
?>

.sub-header {
	background-color: <?= $navbar['navbar_arka_plan_renk'] ?>;
	height: 46px;
	line-height: 46px;
}

.request-form {
	background-color: <?= $banner['banner_arka_plan_renk'] ?>;
	padding: 40px 0px;
	color: #fff;
}