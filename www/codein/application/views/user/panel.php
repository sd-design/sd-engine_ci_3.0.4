<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Panel SD-ENGINE v2_ci3.0.4</title>
		<!-- Latest compiled and minified CSS -->
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
	<h1>Панель управления</h1>
<div class="well">
    <div class="logotype">
    <div class="well-logo"></div></div>
    sd-engine CMS <b><?php echo $sys_version; ?></b><br/><small><?php echo $panel; ?></small><br/>
    <a href="<?php echo base_url();?>" target="_blank" class="btn btn-warning">перейти на сайт</a><div class="col-md-offset-11">
    <a href="<?php echo base_url();?>user/logout" class="btn btn-lg btn-danger">выйти</a></div>
</div>
<div class="row">
										<div class="col-sm-4">

<div class="panel panel-primary">
		<div class="panel-heading">

<h3 class="panel-title">[ раздел, запись, элемент ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/create">создать</a> 
<br/>
<a href="<?php echo base_url();?>user/edit">редактировать</a>
		</div>
</div>
	
	
<div class="panel panel-primary">
		<div class="panel-heading">
<h3 class="panel-title">[ Countdown-страницы ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/create/countdown">создать страницу countdown</a> 
<br/>
<a href="<?php echo base_url();?>user/edit/countdowns">редактировать countdown</a>
			</div>

</div>


<div class="panel panel-primary">
			<div class="panel-heading">
<h3 class="panel-title">[ Пользователи ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>users/create">создать пользователя</a> 
<br/>
<a href="<?php echo base_url();?>users/edit">редактировать данные пользователя</a>
<br/>
		</div>
</div>

<div class="panel panel-danger">
			<div class="panel-heading">
<h3 class="panel-title">[ Персональный раздел ]</h3>
			</div>
			<div class="panel-body">
<a href="<?php echo base_url();?>user/panel/personal">данные пользователя</a>
<br/>
<a href="<?php echo base_url();?>user/logout">выйти</a>
			</div>
</div>
																</div>
																
														
	<div class="col-sm-4">
<div class="panel panel-info">
		<div class="panel-heading">
<h3 class="panel-title">[ Элементы ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/create/item">создать элемент</a> 
<br/>
<a href="<?php echo base_url();?>user/edit/items">редактировать элемент</a>
			</div>
</div>	

<div class="panel panel-info">
		<div class="panel-heading">
<h3 class="panel-title">[ Группы элементов ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/create/group">создать группу</a> 
<br/>
<a href="<?php echo base_url();?>user/edit/groups">редактировать группу</a>
			</div>
</div>

<div class="panel panel-info">
		<div class="panel-heading">
<h3 class="panel-title">[ Структура страниц ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/create/structure">создать новую структуру</a> 
<br/>
<a href="<?php echo base_url();?>user/edit/structure">редактировать структуру</a>
			</div>
</div>
        
 <div class="panel panel-default">
		<div class="panel-heading">
<h3 class="panel-title">[ Яндекс-фото и Яндекс-метрика ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/yandex/foto">Яндекс-фото</a> 
<br/>
<a href="<?php echo base_url();?>user/yandex/metrika">Яндекс-метрика</a>
			</div>
</div>       
	</div>
    
    
    
    	<div class="col-sm-4">
	
<div class="panel panel-success">
		<div class="panel-heading">
<h3 class="panel-title">[ Инфоблоки ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/infoblock/create">создать инфоблок</a> 
<br/>
<a href="<?php echo base_url();?>user/infoblock/edit">редактировать инфоблоки</a>
			</div>
</div>	

<div class="panel panel-success">
		<div class="panel-heading">

<h3 class="panel-title">[ медиафайлы ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/media/upload">загрузить медиафайл</a> 
<br/>
<a href="<?php echo base_url();?>user/media/edit_files">редактировать медиафайлы</a>
<br/>

		</div>
</div>


<div class="panel panel-success">
		<div class="panel-heading">

<h3 class="panel-title">[ загрузки ]</h3>
		</div>
		<div class="panel-body">

<a href="<?php echo base_url();?>user/download/upload">загрузить файл для скачивания</a> 
<br/>
<a href="<?php echo base_url();?>user/download/list">редактировать</a>
<br/>
		</div>
</div>
	


<div class="panel panel-warning">
			<div class="panel-heading">
<h3 class="panel-title">[ Настройки ]</h3>
		</div>
		<div class="panel-body">
<a href="<?php echo base_url();?>user/options/change">опции сайта</a> 
<br/>
<a href="<?php echo base_url();?>user/options/feedback">настройки обратной связи</a>
<br/>
		</div>
</div>


																</div>
		

	</div>
    <!-- <a href="<?php echo base_url();?>user/sys_update" class="btn btn-info"><span class="glyphicon glyphicon-refresh">  </span>  проверить обновления</a> -->
				</div>

</body>
</html>