<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Список групп элементов</title>
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

<h1>Список групп элементов</h1>
<div class="col-md-10">
	<div class="panel panel-default">
				<div class="panel-heading">

<h2 class="panel-title">Все группы</h2>

				</div>

<ul class="list-group">

<?php foreach (array_reverse($list_groups->result()) as $item):?>

  <li class="list-group-item"><div class="btn-group" role="group" aria-label="Small button group"><div class="btn"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div><div  class="btn btn-default"> <b><?php echo $item->group_name;?></b> | <?php echo $item->group_descript;?>  | </div> <a href="<?php echo base_url();?>user/edit/group/<?php echo $item->ID;?>" class="btn btn-success">редактировать</a> <a href="<?php echo base_url();?>user/edit/ready_delete_group/<?php echo $item->ID;?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></div></li>

<?php endforeach;?>
</ul>
		

<br/>


			</div>
			<a href="<?php echo base_url();?>user/panel" class="btn btn-info">назад в панель управления</a>
</div>


</div>
</div>
</body>
</html>