<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Создать</title>
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
	<h1>Что хотим создать</h1>

<div class="row">
<div class="col-md-4">
	<div class="panel panel-primary">
				<div class="panel-heading">

<h3 class="panel-title">[ раздел, запись, элемент ]</h3>

				</div>
				<div class="panel-body">
<p><a href="<?php echo base_url();?>user/create/category" class="btn btn-success">создать раздел</a> 
</p>
<p><a href="<?php echo base_url();?>user/create/post" class="btn btn-success">создать запись</a> 
</p>
<p><a href="<?php echo base_url();?>user/create/item" class="btn btn-success">создать элемент</a> 
</p>
			

<br/>
<a href="<?php echo base_url();?>user/panel" class="btn btn-info">назад</a>
				</div>
			</div>
</div>


</div>
</div>
</body>
</html>