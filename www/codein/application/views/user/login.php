<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>LOGIN</title>
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
	<h1>Login in system</h1>

<div class="col-sm-4">
<?php echo $alert;?>
<?php echo form_open('user/login/sign_up'); ?>

<h5>Логин</h5>
<input type="text" name="login" value="" size="50" class="form-control"/>
<input type="hidden" name="key-tmp" value="<?php echo $key_gen;?>" size="50" />
<h5>Пароль</h5>
<input type="password" name="password" value="" size="50" class="form-control"/>
<br/>
<div><input type="submit" class="btn btn-lg btn-primary btn-block" value="Войти" /></div>

</form>
<?php if (validation_errors()==TRUE){ echo '<div class="user_error">';
	echo validation_errors(); 
	echo '</div>';
	}?>
	<br/><br/>
	<p class="footer"><a href="<?php echo base_url();?>">на сайт <?php echo base_url();?></a></p>
	</div>

	
</div>


</body>
</html>