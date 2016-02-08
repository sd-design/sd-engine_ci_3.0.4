<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование группы элементов</title>
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
	<h2>Редактирование группы элементов</h2>
<div class="jumbotron col-sm-6">
<?php echo form_open('user/update/group/'); ?>
    <?php foreach ($edit_group->result()  as $item):?>
<input type="hidden" name="group_id" value="<?php echo $item->ID;?>">
<div class="row">
<h4>Название группы элементов</h4>
<input type="text" name="group_title" value="<?php echo $item->group_title;?>" size="50" class="form-control"/>
</div>
<div class="row">
<h4>Псевдоним группы элементов</h4>
<input type="text" name="group_name" value="<?php echo $item->group_name;?>" size="60" class="form-control"/>
</div>
<div class="row">

<h4>Описание</h4>
<textarea  name="group_descript" rows="4" class="form-control"><?php echo $item->group_descript;?></textarea>
</div>
<?php endforeach;?>
<br/>
<div class="row">
<input type="submit" class="btn btn-lg btn-primary btn-block" value="Перезаписать" />
</div>
</form><br/>
	
	<br/>
		<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/edit/groups" class="btn btn-warning" type="button">к списку групп</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>


</div>

</body>
</html>