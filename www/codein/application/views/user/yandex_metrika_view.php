<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Настройка Яндекс-метрики</title>
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
<div class="col-sm-10">
	<h1>Настройки Яндекс-метрики</h1>


<div class="jumbotron">
    <?php echo $alert;?>
<?php echo form_open('user/yandex/update'); ?>
<input type="hidden" name="option_id" value="<?php echo $edit_options['yandex_service'];?>">

<div class="row">
<div class="col-sm-12">
<h4>Код счетчика</h4>
<textarea  name="yandex_parametr" rows="28" class="form-control"><?php echo $edit_options['yandex_parametr'];?></textarea>
</div></div>

<br/>
<br/>
<div class="row">
<div class="col-md-4 col-md-offset-6">

<input type="submit" class="btn btn-lg btn-primary btn-block" value="Перезаписать" />
</div>
</div>
</form><br/>
	
	<br/>
		<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/yandex/foto" class="btn btn-warning" type="button">Яндекс-фото</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	</div>
    
</div>

</body>
</html>