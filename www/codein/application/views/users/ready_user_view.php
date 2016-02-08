<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Создание раздела</title>
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
	<h1>Удаление пользователя </h1>
<div class="row">
<div class="col-sm-4">



<h3>Вы уверены?</h3>
<?php foreach ($user_info->result()  as $item):?>
<h4>Что хотите удалить пользователя <b><?php echo $item->login; ?></b><br /> с именем <b><?php echo $item->firstname; ?> <?php echo $item->lastname; ?></b></h4>

</div>
<div class="col-sm-4">
<br />

<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>users/edit/delete/<?php echo $item->ID; ?>" class="btn btn-lg btn-danger" type="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> удалить</a> <a href="<?php echo base_url();?>users/edit/" class="btn btn-lg btn-warning" type="button">отмена</a></div>
	</div>
	</div>
<?php endforeach;?>	
</div>

</body>
</html>