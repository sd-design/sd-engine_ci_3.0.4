<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование элемента</title>
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
	<h1>Редактирование элемента</h1>
<?php foreach ($edit_posts->result()  as $item):?>

<div class="jumbotron">
<?php echo form_open('user/update/item'); ?>
<input type="hidden" name="item_id" value="<?php echo $item->ID;?>" />
<div class="row">
<div class="col-sm-10">
<h5>Название</h5>
<input type="text" name="item_name" value="<?php echo $item->item_name;?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-6">
<h5>URL (ЧПУ)</h5>
<input type="text" name="item_url" value="<?php echo $item->item_url;?>" size="50" class="form-control"/>
</div></div>
    
    <div class="row">
 <div class="col-sm-4">   
     <h4>Дата * <small></small></h4>
        </div> </div>
          <div class="row alert alert-success">
              <div class="col-sm-4  left"> День 
<input type="text" name="post_day" value="<?php echo $day;?>" size="50" class="form-control" placeholder="время"/>

        </div>
              <div class="col-sm-4  left">Время  
<input type="text" name="post_time" value="<?php echo $time;?>" size="50" class="form-control" placeholder="время"/>

        </div>
 </div>
<div class="row">
<div class="col-sm-3">
<h4>Тип * <small>Важно привязать к типу, иначе он будет привязан к основному типу инфо-элементы</small></h4>
<select class="form-control" name="item_type">
<option value="<?php echo $item->item_type;?>" class="selected"><?php foreach ($still_type->result()  as $ty):?>
<?php echo $ty->name_type;?>
<?php endforeach;?></option>
<?php foreach ($list_types->result()  as $type):?>
<option value="<?php echo $type->id;?>"><?php echo $type->name_type;?></option>
<?php endforeach;?>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-4 left">

<h4>Группа элементов * <small>Не выбирайте, если не хотите изменять группу</small></h4>
<select class="form-control" name="group_id">
<option value="<?php echo $item->item_group;?>" class="selected"><?php foreach ($still_group->result()  as $cat):?>
<?php echo $cat->group_title;?>
<?php endforeach;?></option>
<?php foreach ($list_group->result()  as $item2):?>
<option value="<?php echo $item2->ID;?>"><?php echo $item2->group_title;?></option>
<?php endforeach;?>
</select>
</div> 

</div>

<br/>
<div class="row">
<div class="col-sm-12">
<h5>Текст элемента</h5>
<textarea  name="item_text" rows="22" class="form-control"><?php echo $item->item_text;?></textarea>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4 col-md-offset-8">
<?php endforeach;?>
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Перезаписать" />
</div>
</div>
</form><br/>

	
	<br/>
			<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/edit/items" class="btn btn-warning" type="button">к списку элементов</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	</div>
</div>

</body>
</html>