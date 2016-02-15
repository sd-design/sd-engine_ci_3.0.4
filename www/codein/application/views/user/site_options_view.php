<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Опции сайта</title>
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap-theme.min.css">
<link href='<?php echo base_url();?>css-back/style.css' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->

</head>
<body>

<div class="container theme-showcase">
<div class="col-sm-10">
	<h2 class="text-center">Настройки сайта <a href="<?php echo base_url();?>" target="_blank" class="btn alert-success"><?php echo base_url();?></a></h2>


<div class="jumbotron">
    <?php echo $alert;?>
 <?php foreach ($list_options->result()  as $item):?>   
<?php echo form_open('user/options/update'); ?>
<input type="hidden" name="option_id" value="<?php echo $item->part;?>">
<div class="row">
<div class="col-sm-10">
<h4>Название сайта</h4>
<input type="text" name="site_name" value="<?php echo $item->site_name;?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-10">
<h4>Описание сайта</h4>
<textarea  name="site_description" rows="2" class="form-control"><?php echo $item->site_description;?></textarea>
</div></div>
<div class="row">
<div class="col-sm-3">
<h4>Золотой ключик</h4>
<input type="text" name="key_logger" value="<?php echo $item->key_logger;?>" size="50" class="form-control"/>
</div></div>

 <div class="row">
<div class="col-sm-5">
<h4>IP-адрес администратора <small>(если нужно - в это поле вписываете адрес и ставите галочку ниже)</small></h4>
<input type="text" name="ip_access" value="<?php echo $item->ip_access;?>" size="50" class="form-control"/>
</div>
<div class="checkbox">
    <label>
      <input type="checkbox" name="access_on" <?php if ($item->access_on === "on") echo "checked='".$item->access_on."'";?>> Включить вход по IP-адресу
    </label>
  </div>
</div>
<div class="row">
<div class="col-sm-3">
<h4>Количество вывода записей на страницу <small>(для формата блога или новостей)</small></h4>
<input type="text" name="q_posts" value="<?php echo $item->q_posts;?>" size="50" class="form-control"/>
</div></div><br/>
<div class="well">
<h3 class="well">Контактная информация</h3>
 <div class="row">
 
<div class="col-sm-4">
<h4>Телефон</h4>
<input type="text" name="phone" value="<?php echo $item->phone;?>" size="50" class="form-control"/>
</div>
<div class="col-sm-4">
<h4>Twitter</h4>
<input type="text" name="twitter" value="<?php echo $item->twitter;?>" size="50" class="form-control" placeholder="https://twitter.com/account"/>
	</div>
<div class="col-sm-4">
<h4>Вконтакте</h4>
<input type="text" name="vk" value="<?php echo $item->vk;?>" size="50" class="form-control" placeholder="https://vk.com/address"/>
	</div>
</div>
<div class="row">
 
<div class="col-sm-6">
<h4>Facebook</h4>
<input type="text" name="facebook" value="<?php echo $item->facebook;?>" size="50" class="form-control" placeholder="https://www.facebook.com/account_name/"/>
</div>
<div class="col-sm-6">
<h4>Google+</h4>
<input type="text" name="google" value="<?php echo $item->google;?>" size="50" class="form-control" placeholder="https://plus.google.com/u/0/@" />
</div>
</div>
<div class="row">
 
	<div class="col-sm-6">
<h4>Youtube</h4>
<input type="text" name="youtube" value="<?php echo $item->youtube;?>" size="50" class="form-control" placeholder="https://www.youtube.com/user/@"/>
	</div>
	<div class="col-sm-6">
<h4>Vimeo</h4>
<input type="text" name="vimeo" value="<?php echo $item->vimeo;?>" size="50" class="form-control" placeholder="https://vimeo.com/@"/>
	</div>
</div>

</div>

<?php endforeach;?>
<br/>
<br/>
<div class="row">
<div class="col-md-4 col-md-offset-6">

<input type="submit" class="btn btn-lg btn-primary btn-block" value="Перезаписать" />
</div>
</div>
</form><br/>
	
	<br/>
		<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/options/feedback" class="btn btn-warning" type="button">опции обратной связи</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	</div>
    
</div>

</body>
</html>