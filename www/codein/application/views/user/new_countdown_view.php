<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Создание Countdown страницы</title>
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
	<h1>Создание Countdown страницы</h1>

<div class="jumbotron col-sm-5">

<?php echo form_open('user/create/new_countdown'); ?>

<h5>Название события</h5>
<input type="text" name="countdown_title" value="<?php echo set_value('countdown_title'); ?>" size="50" class="form-control"/>

<h5>Описание события</h5>
<textarea  name="countdown_descript" size="50" class="form-control"><?php echo set_value('countdown_descript'); ?></textarea>
<h5>URL (ЧПУ)</h5>
<input type="text" name="countdown_url" value="<?php echo set_value('countdown_url'); ?>" size="50" class="form-control"/>
<div class="row">
<div class="col-sm-3">
<h5>День</h5>
<input type="text" name="countdown_day" value="<?php echo set_value('countdown_day'); ?>" size="2" class="form-control"/>
</div>
<div class="col-sm-3">
<h5>Месяц</h5>
<input type="text" name="countdown_month" value="<?php echo set_value('countdown_month'); ?>" size="2" class="form-control"/>
</div>
<div class="col-sm-4">
<h5>Год</h5>
<input type="text" name="countdown_year" value="<?php echo set_value('countdown_year'); ?>" size="4" class="form-control"/>
</div>
</div>

<div class="row">
<div class="col-sm-3">
<h5>Час</h5>
<input type="text" name="countdown_hour" value="<?php echo set_value('countdown_hour'); ?>" size="2" class="form-control"/>
</div>
<div class="col-sm-3">
<h5>Минуты</h5>
<input type="text" name="countdown_minute" value="<?php echo set_value('countdown_minute'); ?>" size="2" class="form-control"/>
</div>
</div>

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
	
	<br/><a href="<?php echo base_url();?>user/panel" class="btn btn-info">панель управления</a>
	</div>

	
</div>

</body>
</html>