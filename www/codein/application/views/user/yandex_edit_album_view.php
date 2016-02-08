<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование альбома Яндекс-фото</title>
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
	<h1>Редактирование альбома Яндекс-фото</h1>


<div class="jumbotron">
    <?php echo $alert;?>
<?php echo form_open('user/yandex/update_album'); ?>
 <?php foreach ($edit_album->result()  as $item):?>
    <input type="hidden" name="yandex_id" value="<?php echo $item->ID;?>">
<div class="row">
<div class="col-sm-5">
<h4>Яндекс-логин</h4>
<input type="text" name="yandex_login" value="<?php echo $item->yandex_login;?>" size="50" class="form-control"/>
</div>
    </div>
    <div class="row">
<div class="col-sm-5">
<h4>Название альбома</h4>
<input type="text" name="yandex_name" value="<?php echo $item->yandex_name;?>" size="50" class="form-control"/>
</div>
    </div>
<div class="row">
<div class="col-sm-3">
<h4>Размер фото *<small>Параметр может быть XXS, XXL, XL, L, M, S</small></h4>
<input type="text" name="yandex_size" value="<?php echo $item->yandex_size;?>" size="10" class="form-control"/>
    </div></div>
    <div class="row">
<div class="col-sm-5">
<h4>Ссылка на заглавную фотографию альбома *<small></small></h4>
<input type="text" name="yandex_icon" value="<?php echo $item->yandex_icon;?>" size="70" class="form-control"/>
</div></div>

    <div class="row">
<div class="col-sm-4">
<h4>Кол-во выводимых фотографи на страницу</h4>
<input type="text" name="yandex_qty" value="<?php echo $item->yandex_qty;?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-5">
    <h4>Альбом, <small>из которого будут браться фотографии</small></h4>
<textarea  name="yandex_album" rows="1" class="form-control"><?php echo $item->yandex_album;?></textarea>
</div></div>
<?php endforeach;?>
<br/>
<br/>
<div class="row">
<div class="col-md-4 col-md-offset-6">

<input type="submit" class="btn btn-lg btn-primary btn-block" value="Изменить" />
</div>
</div>
</form><br/>
	<?php if (validation_errors()==TRUE){ echo '<div class="alert alert-danger">';
	echo validation_errors(); 
	echo '</div>';
	}?>
	<?php 
	echo $alert;
	
	
	?>
	<br/>
		<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/yandex/list_albums" class="btn btn-warning" type="button">Все альбомы</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	</div>
    
</div>

</body>
</html>