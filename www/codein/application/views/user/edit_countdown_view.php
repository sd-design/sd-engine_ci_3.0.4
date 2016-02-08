<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование Countdown страницы</title>
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
<?php foreach ($edit_countdown->result()  as $item):?>
	<h2>Редактирование <b><?php echo $item->title;?></b></h2>

<div class="jumbotron col-sm-5">

<?php echo form_open('user/update/countdown'); ?>
<input type="hidden" name="countdown_id" value="<?php echo $item->id;?>" />
<h5>Название события</h5>
<input type="text" name="countdown_title" value="<?php echo $item->title;?>" size="50" class="form-control"/>

<h5>Описание события</h5>
<textarea  name="countdown_descript" size="50" class="form-control"><?php echo $item->descript;?></textarea>
<h5>URL (ЧПУ)</h5>
<input type="text" name="countdown_url" value="<?php echo $item->url;?>" size="50" class="form-control"/>
<div class="row">
<div class="col-sm-3">
<h5>День</h5>
<input type="text" name="countdown_day" value="<?php echo $item->day;?>" size="2" class="form-control"/>
</div>
<div class="col-sm-3">
<h5>Месяц</h5>
<input type="text" name="countdown_month" value="<?php echo $item->month;?>" size="2" class="form-control"/>
</div>
<div class="col-sm-4">
<h5>Год</h5>
<input type="text" name="countdown_year" value="<?php echo $item->year;?>" size="4" class="form-control"/>
</div>
</div>

<div class="row">
<div class="col-sm-3">
<h5>Час</h5>
<input type="text" name="countdown_hour" value="<?php echo $item->hour;?>" size="2" class="form-control"/>
</div>
<div class="col-sm-3">
<h5>Минуты</h5>
<input type="text" name="countdown_minute" value="<?php echo $item->minute;?>" size="2" class="form-control"/>
</div>
</div>
<?php endforeach;?>
<br/>
<div><input type="submit" class="btn btn-lg btn-primary btn-block" value="Перезаписать" /></div>

</form><br/>
<?php if (validation_errors()==TRUE){ echo '<div class="alert alert-danger">';
	echo validation_errors(); 
	echo '</div>';
	}?>
	<?php 
	echo $alert;
	
	
	?>
	
	<br/>
	<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/edit/countdowns" class="btn btn-warning" type="button">к списку countdown</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	
</div>

</body>
</html>