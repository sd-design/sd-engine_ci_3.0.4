<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Создание группы элементов</title>
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
	<h1>Создание группы элементов</h1>

<div class="jumbotron col-sm-6">

<?php echo form_open('user/create/new_group'); ?>

<h4>Название группы * <small>Название - это фактическое отображение на сайте</small></h4>
<input type="text" name="group_title" value="<?php echo set_value('group_title'); ?>" size="66" class="form-control"/>
<h4>Псевдоним группы * <small>!Псевдоним не путать с названием. Псевдоним используется в создании структуры</small></h4>
<input type="text" name="group_name" value="<?php echo set_value('group_name'); ?>" size="66" class="form-control"/>
<h4>Описание группы</h4>
<textarea  name="group_descript" rows="9" class="form-control"><?php echo set_value('group_descript'); ?></textarea>
<br/>
<div><input type="submit" class="btn btn-lg btn-primary btn-block" value="Создать группу" /></div>

</form><br/>
<?php if (validation_errors()==TRUE){ echo '<div class="alert alert-danger">';
	echo validation_errors(); 
	echo '</div>';
	}?>
	<?php 
	echo $alert;
	
	
	?>
	
	<br/>
	<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	
</div>

</body>
</html>