<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Новый пользователь</title>
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap-theme.min.css">
<link href='<?php echo base_url();?>css-back/style.css' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</head>
<body>
<?php echo form_open('users/create/new_user'); ?>
<div class="container theme-showcase">
	<h2>Новый пользователь системы</h2>
	<div class="col-md-5">

<div class="row">
<div class="jumbotron">

<div class="row">
<h4>[ Логин ]</h4>
<input type="text" class="form-control" name="login" value="<?php echo set_value('login'); ?>" />
		</div>
			
<div class="row">
<h4>[ Имя ]</h4>
<input type="text" class="form-control" name="firstname" value="<?php echo set_value('firstname'); ?>"/>
	</div>


<div class="row">
<h4>[ Фамилия ]</h4>
<input type="text" class="form-control" name="lastname" value="<?php echo set_value('lastname'); ?>"/>
</div>


<div class="row">
<h4>[ Представление пользователя ]</h4>
<input type="text" class="form-control" name="display_name" value="<?php echo set_value('display_name'); ?>"/>
</div>

<br/>

<div class="row">
<div class="col-md-10">
<h4>[ Роль пользователя ]</h4>

<select class="form-control" name="role">
<option value=""> - - выбрать</option>

<option value="administrator">Администратор</option>
<option value="user">Пользователь</option>
</select>
</div>
</div>

<div class="row">		
<h4>[ E-mail ]</h4>
<input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>" />
</div>

<div class="row">	
<h4>[ Пароль ]</h4>
<input type="password" class="form-control" name="password"/>
</div>

<div class="row">	
<h4>[ Подтверждение пароля ]</h4>
<input type="password" class="form-control" name="password2"/>
</div>


<br/>
<div class="row">

<input class="btn btn-lg btn-primary" value="Создать" type="submit">
</form>
<br/><br/>
<?php if (validation_errors()==TRUE){ echo '<div class="alert alert-danger">';
	echo validation_errors(); 
	echo '</div>';
	}?>
	<?php 
	echo $alert;
	
	
	?>
<a href="<?php echo base_url();?>user/panel" class="btn btn-info">назад в панель управления</a>
<br/>
	</div>
</div>
</div>
</body>
</html>