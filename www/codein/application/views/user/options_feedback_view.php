<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Опции обратной связи</title>
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
	<h1>Настройки обратной связи</h1>


<div class="jumbotron">
    <?php echo $alert;?>
<?php echo form_open('user/options/update'); ?>
<input type="hidden" name="option_id" value="<?php echo $edit_options['part'];?>">
<div class="row">
<div class="col-sm-10">
<h4>SMTP-сервер</h4>
<input type="text" name="smtp_host" value="<?php echo $edit_options['smtp_host'];?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-2">
<h4>Порт</h4>
<input type="text" name="smtp_port" value="<?php echo $edit_options['smtp_port'];?>" size="50" class="form-control"/>
</div></div>

    <div class="row">
<div class="col-sm-5">
<h4>Логин</h4>
<input type="text" name="smtp_user" value="<?php echo $edit_options['smtp_user'];?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-5">
<h4>Пароль</h4>
<input type="password" name="smtp_pass" value="<?php echo $smtp_pass;?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-10">
<h4>Подпись</h4>
<textarea  name="subscribe" rows="2" class="form-control"><?php echo $edit_options['subscribe'];?></textarea>
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
		<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/options/change" class="btn btn-warning" type="button">опции сайта</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	</div>
    
</div>

</body>
</html>