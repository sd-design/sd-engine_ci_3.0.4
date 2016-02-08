<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Список Фотоальбомов</title>
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
	

<div class="row">

<h1>Список Фотоальбомов</h1>
<div class="col-md-10">
	<div class="panel panel-default">
				<div class="panel-heading">

<h2 class="panel-title">Все записи</h2>

				</div>

<ul class="list-group">

<?php foreach (array_reverse($list_albums->result())  as $item):?>

  <li class="list-group-item"><div class="btn-group" role="group" aria-label="Small button group"><div class="btn"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>   <span class="btn btn-default"><b><?php echo $item->yandex_name;?></b> | <?php echo $item->yandex_album;?>  |  </span> <a href="<?php echo base_url();?>user/yandex/edit/<?php echo $item->ID;?>" class="btn btn-success">редактировать</a> <a href="<?php echo base_url();?>user/yandex/ready_delete_albums/<?php echo $item->ID;?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></div></li>

<?php endforeach;?>
</ul>
		

<br/>


			</div>
		<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/yandex/foto" class="btn btn-warning" type="button">Яндекс-фото</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
</div>


</div>
</div>
</body>
</html>