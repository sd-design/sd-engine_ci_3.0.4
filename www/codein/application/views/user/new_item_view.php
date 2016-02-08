<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Создание элемента</title>
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
	<h1>Создание элемента</h1>


<div class="jumbotron">
<?php echo form_open('user/create/new_item'); ?>
<div class="row">
<div class="col-sm-10">
<h5>Название</h5>
<input type="text" name="item_name" value="<?php echo set_value('item_name'); ?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-6">
<h5>URL элемента</h5>
<input type="text" name="item_url" value="<?php echo set_value('item_url'); ?>" size="50" class="form-control"/>
</div></div>
<br/>
<div class="row">
<div class="col-sm-3">
<h4>Тип * <small>Важно привязать к типу, иначе он будет привязан к основному типу инфо-элементы</small></h4>
<select class="form-control" name="item_type">
<option value="1"> - - по умолчанию </option>
<?php foreach ($items_type_arr->result()  as $item):?>
<option value="<?php echo $item->id;?>"><?php echo $item->name_type;?></option>
<?php endforeach;?>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<h5>Группа элемента * <small>Группировка элементов по расположению на странице</small></h5>
<select class="form-control" name="item_group">
<option value="1"> - - по умолчанию </option>
<?php foreach ($items_group_arr->result()  as $item_g):?>
<option value="<?php echo $item_g->ID;?>"><?php echo $item_g->group_name;?></option>
<?php endforeach;?>
</select>
</div></div>
<div class="row">
<div class="col-sm-12">
<h5>Текст элемента</h5>
<textarea  name="item_text" rows="10" class="form-control"><?php echo set_value('item_text'); ?></textarea>
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