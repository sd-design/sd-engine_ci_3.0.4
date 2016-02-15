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
	<h1>Создание раздела</h1>

<div class="jumbotron col-sm-5">

<?php echo form_open('user/create/new_category'); ?>

<h5>Название</h5>
<input type="text" name="category_name" value="" size="50" class="form-control"/>
<h5>URL (ЧПУ)</h5>
<input type="text" name="category_url" value="" size="50" class="form-control"/>
<h5>Описание</h5>
<textarea  name="category_discript" value="" size="50" class="form-control"></textarea>
<br/>
<div><input type="submit" class="btn btn-lg btn-primary btn-block" value="Создать" /></div>

</form><br/>
<?php if (validation_errors()==TRUE){ echo '<div class="alert alert-danger">';
	echo validation_errors(); 
	echo '</div>';
	}?>
	<?php 
	echo $alert;
	
	
	?>
	
	<br/>
	<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/create" class="btn btn-warning" type="button">создать</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	
</div>

</body>
</html>