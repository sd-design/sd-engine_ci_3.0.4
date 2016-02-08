<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Редактирование данных пользователя</title>
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap-theme.min.css">
<link href='<?php echo base_url();?>css-back/style.css' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</head>
<body>
<?php echo form_open('users/edit/update'); ?>
<div class="container theme-showcase">
	<h2>Редактирование данных пользователя</h2>
	<div class="col-md-5">

<div class="row">
<div class="jumbotron">
<?php foreach ($user_info->result()  as $item):?>
<div class="row">
<h4>[ Логин ]</h4>
<input type="text" class="form-control" name="login" value="<?php echo $item->login; ?>" />
		</div>
			
<div class="row">
<h4>[ Имя ]</h4>
<input type="text" class="form-control" name="firstname" value="<?php echo $item->firstname; ?>"/>
	</div>


<div class="row">
<h4>[ Фамилия ]</h4>
<input type="text" class="form-control" name="lastname" value="<?php echo $item->lastname; ?>"/>
</div>


<div class="row">
<h4>[ Представление пользователя ]</h4>
<input type="text" class="form-control" name="display_name" value="<?php echo $item->display_name; ?>"/>
</div>

<br/>

<div class="row">
<div class="col-md-10">
<h4>[ Роль пользователя ] * <small>* Если не выбирать, тогда сохранится старая роль</small></h4>

<select class="form-control" name="role">
<option value="<?php echo $item->user_role; ?>"> - - выбрать</option>

<option value="administrator">Администратор</option>
<option value="user">Пользователь</option>
</select>
</div>
</div>

<div class="row">		
<h4>[ E-mail ]</h4>
<input type="text" class="form-control" name="email" value="<?php echo $item->email; ?>" />
</div>
<input type="hidden" name="id" value="<?php echo $item->ID; ?>" />
<br/>
<div class="row">	
<h4>[ Новый пароль ] <small>* Если пароль пустой, тогда сохранится старый пароль</small></h4>
<input type="password" class="form-control" name="password"/>
</div>

<div class="row">	
<h4>[ Подтверждение пароля ]</h4>
<input type="password" class="form-control" name="password2"/>
</div>

<?php endforeach;?>
<br/>
<div class="row">

<input class="btn btn-lg btn-primary" value="Перезаписать" type="submit">
</form>
<br/><br/>
<?php if (validation_errors()==TRUE){ echo '<div class="alert alert-danger">';
	echo validation_errors(); 
	echo '</div>';
	}?>
	<?php 
	echo $alert;
	
	
	?>
	</div>
	
</div>
	<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>users/edit/" class="btn btn-warning" type="button">к списку пользователей</a> <a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
</div>
</body>
</html>