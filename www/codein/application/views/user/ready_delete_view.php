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
	<h3>Вы собираетесь удалить <b><?php echo $what_delete;?></b></h3>
<div class="row">
    
<div class="col-sm-7">

<div class="alert alert-warning">

<h3><small>Описание:</small> <?php echo $delete_descript;?> </h3>
<h5>если вы хотите совершить это действие нажмите <a href="<?php echo base_url();?><?php echo $delete_action;?><?php echo $delete_id;?>" class="btn btn-danger">удалить</a></h5>
	</div>
    	<br/><a href="<?php echo base_url();?>user/panel" class="btn btn-info">панель управления</a>
    </div>

    </div>	
</div>

</body>
</html>