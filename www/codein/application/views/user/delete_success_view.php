<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Удаление</title>
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
	<h1>Удаление прошло успешно</h1>

<div class="col-sm-4">



<h4>Уже не вернуть то, что вы удалили</h4>

    <h5>А удалили вы: <b><?php echo $delete_name;?></b></h5>


	<br/><a href="<?php echo base_url();?>user/panel" class="btn btn-info">панель управления</a>
	</div>

	
</div>

</body>
</html>