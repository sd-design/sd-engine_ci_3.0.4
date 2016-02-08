<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование пользователя</title>
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
	<h1>Редактирование пользователя</h1>

<div class="col-sm-4">



<h4>Пользователь <b><?php echo $first_name;?> <?php echo $last_name;?></b> изменен.</h4>
<h5>Логин <b><?php echo $user_login;?></b></h5>
<h5>Электронная почта <b><?php echo $user_email;?></b></h5>

	<br/>
		<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>users/edit/" class="btn btn-warning" type="button">к списку пользователей</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	
</div>

</body>
</html>