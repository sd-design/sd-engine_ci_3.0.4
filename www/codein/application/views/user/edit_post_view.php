<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование записи</title>
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
	<h1>Редактирование записи</h1>
<?php foreach ($edit_posts->result()  as $item):?>

<div class="jumbotron">
<?php echo form_open('user/update/post'); ?>
<input type="hidden" name="post_id" value="<?php echo $item->id;?>" />
<div class="row">
<div class="col-sm-10">
<h5>Название</h5>
<input type="text" name="post_name" value="<?php echo $item->post_name;?>" size="50" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-6">
<h5>URL (ЧПУ)</h5>
<input type="text" name="post_url" value="<?php echo $item->post_url;?>" size="50" class="form-control"/>
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
<div class="col-sm-4 left">

<h4>Раздел * <small>Не выбирайте, если не хотите изменить категорию</small></h4>
<select class="form-control" name="category_id">
<option value="<?php echo $item->category_id;?>" class="selected"><?php foreach ($still_category->result()  as $cat):?>
<?php echo $cat->category_name;?>
<?php endforeach;?></option>
<?php foreach ($list_category->result()  as $item2):?>
<option value="<?php echo $item2->id;?>"><?php echo $item2->category_name;?></option>
<?php endforeach;?>
</select>
</div> 

</div>
    
<div class="row ">
<div class="col-sm-4">
<h4>Автор * <small>Не выбирайте, если не хотите изменить автора</small></h4>
<select class="form-control" name="autor_id">
<option value="<?php echo $item->autor_id;?>" class="active"> -- без изменений</option>
<?php foreach ($list_users->result()  as $item3):?>
<option value="<?php echo $item3->ID;?>"><?php echo $item3->firstname;?> <?php echo $item3->lastname;?></option>
<?php endforeach;?>
</select>
</div>
</div>
<div class="row">
<div class="col-sm-5">
<h5>Картинка</h5>
<input type="text" name="post_image" value="<?php echo $item->post_image;?>" size="60" class="form-control"/>
</div></div>
<div class="row">
<div class="col-sm-10">
<h5>Анонс записи</h5>
<textarea  name="post_anons" rows="5" class="form-control"><?php echo $item->post_anons;?></textarea>
</div></div>
<br/>
<div class="row">
<div class="col-sm-12">
<h5>Текст записи</h5>
<textarea  name="post_text" rows="22" class="form-control"><?php echo $item->post_text;?></textarea>
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
			<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/edit/posts" class="btn btn-warning" type="button">к списку записей</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	</div>
</div>

</body>
</html>