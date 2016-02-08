<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Создание новой записи</title>
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
	<h1>Создание новой записи</h1>


<div class="jumbotron">
<?php echo form_open('user/create/new_post'); ?>
<div class="row">
<div class="col-sm-10">
<h5>Название</h5>
<input type="text" name="post_name" value="<?php echo set_value('post_name'); ?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-6">
<h5>URL (ЧПУ)</h5>
<input type="text" name="post_url" value="<?php echo set_value('post_url'); ?>" size="50" class="form-control"/>
</div></div>
<br/>
<div class="row">
<div class="col-sm-3">
<h4>Раздел * <small>Важно привязать к тематическому разделу, иначе он будет привязан к основному</small></h4>
<select class="form-control" name="category_id">
<option value="1"> - - по умолчанию </option>
<?php foreach ($category_arr->result()  as $item):?>
<option value="<?php echo $item->id;?>"><?php echo $item->category_name;?></option>
<?php endforeach;?>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-5">
<h5>Картинка</h5>
<input type="text" name="post_image" size="60" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-10">
<h5>Анонс записи</h5>
<textarea  name="post_anons" size="50" class="form-control"><?php echo set_value('post_anons'); ?></textarea>
</div></div>
<div class="row">
<div class="col-sm-12">
<h5>Текст записи</h5>
<textarea  name="post_text" rows="20" class="form-control"><?php echo set_value('post_text'); ?></textarea>
</div>
</div>
<br/>
<div class="row">
<div class="col-sm-4">

<input type="submit" class="btn btn-lg btn-primary btn-block" value="Создать" />
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
	
	<br/><a href="<?php echo base_url();?>user/panel" class="btn btn-info">назад</a>
	</div>

	</div>
</div>

</body>
</html>