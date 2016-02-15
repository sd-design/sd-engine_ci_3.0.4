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
	<h1>Панель управления</h1>

<?php echo $panel; ?><br/>

<div class="row">
<div class="col-md-4">
		<div class="panel panel-primary">
				<div class="panel-heading">

<h3 class="panel-title">[ раздел, запись, элемент ]</h3>
				</div>
				<div class="panel-body">
<a href="<?php echo base_url();?>user/create">создать</a> 
<br/>
<a href="<?php echo base_url();?>user/edit">редактировать</a>
<br/>
<a href="<?php echo base_url();?>user/delete">удалить</a>
				</div>

</div>

<div class="panel panel-primary">
				<div class="panel-heading">
<h3 class="panel-title">[ Персональный раздел ]</h3>
				</div>
				<div class="panel-body">
<a href="<?php echo base_url();?>user/panel/personal">данные пользователя</a>
<br/>
<a href="<?php echo base_url();?>user/logout">выйти</a>
				</div>
</div>

</div>
</div>
</div>

</body>
</html>