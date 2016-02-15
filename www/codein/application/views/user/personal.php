<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Panel</title>
	
		<!-- Latest compiled and minified CSS -->
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
	<h1>Персональные данные</h1>
	
<div class="row">
		<div class="panel panel-primary">
				<div class="panel-heading">
	
	<h2 class="panel-title">Логин: <?php echo $login; ?></h2>
				</div>
				<div class="panel-body">
				<div class="col-md-4">
<table class="table">
<tr>
<td>Имя:</td><td> <b><?php echo $firstname; ?></b></td></tr>
<tr>
<td>Фамилия:</td><td> <b><?php echo $lastname; ?></b></td></tr>
<tr>
<td>email:</td><td> <b><?php echo $email; ?></b></td></tr>
<tr>
<td>дата регистрации:</td><td> <b><?php echo $reg_date; ?></b></td></tr>
<tr>
<td>Роль:</td><td> <?php echo $user_role; ?></td></tr>
<tr>
<td>
<a href="<?php echo base_url();?>user/panel" class="btn btn-info">главная панель</a></td><td></td></tr>
</table>
</div>

				</div>
			</div>
</div>


</div>

</body>
</html>