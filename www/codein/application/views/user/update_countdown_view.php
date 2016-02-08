<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование Countdown</title>
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
	<h1>Редактирование Countdown</h1>

<div class="col-sm-4">



<h5>Страница Countdown <b><?php echo $countdown_title;?></b> перезаписана</h5>
<h5><b><?php echo $countdown_descript;?></b></h5>

	<br/>
	<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/edit/countdowns" class="btn btn-warning" type="button">к списку countdown</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	
</div>

</body>
</html>