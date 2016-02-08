<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Создание Countdown страницы</title>
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap-theme.min.css">
<link href='<?php echo base_url();?>css-back/style.css' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</head>
<body>

<div class="container theme-showcase">
	<h1>Создание Countdown страницы</h1>

<div class="col-sm-4">



<h5>Страница <b><?php echo $countdown_title;?></b> создана</h5>

	<br/><a href="<?php echo base_url();?>user/panel" class="btn btn-info">Панель управления</a>
	</div>

	
</div>

</body>
</html>