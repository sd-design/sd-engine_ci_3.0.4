<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование категории</title>
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
	<h1>Редактирование категории</h1>
<?php foreach ($edit_posts->result()  as $item):?>

<div class="jumbotron">
<?php echo form_open('user/update/category'); ?>
<input type="hidden" name="category_id" value="<?php echo $item->id;?>">
<div class="row">
<div class="col-sm-10">
<h4>Название</h4>
<input type="text" name="category_name" value="<?php echo $item->category_name;?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-6">
<h4>URL (ЧПУ)</h4>
<input type="text" name="category_url" value="<?php echo $item->category_url;?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-10">
<h4>Описание категории</h4>
<textarea  name="category_descript" rows="2" class="form-control"><?php echo $item->category_descript;?></textarea>
</div></div>
<?php endforeach;?>
<br/>
<div class="row">
<div class="col-sm-3">
<h4>Владелец * <small>Оставьте без изменений, если вы не хотите менять владельца раздела</small></h4>
<select class="form-control" name="owner">
<option value="<?php echo $owner;?>"> - - </option>
<?php foreach ($name_owner->result()  as $item2):?>
<option value="<?php echo $item2->ID;?>"><?php echo $item2->firstname;?> <?php echo $item2->lastname;?></option>
<?php endforeach;?>
</select>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4 col-md-offset-6">

<input type="submit" class="btn btn-lg btn-primary btn-block" value="Перезаписать" />
</div>
</div>
</form><br/>
	
	<br/>
		<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/edit/categories" class="btn btn-warning" type="button">к списку категорий</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	</div>
</div>

</body>
</html>