<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Файловый  v1.0</title>
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap-theme.min.css">
<link href='<?php echo base_url();?>css-back/style.css' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url();?>js/jquery-2.1.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){                            // по завершению загрузки страницы
         $.ajax({
                    url: "filer/?action=home",
                    type:"GET",
                    //force to handle it as text
                    dataType: "json",
                    success: function(result) {

	console.log(result);                      
     var images = '';
    for (var n in result.files){
    	var path = '';
path = "<?php echo base_url();?>/uploads/"+result.files[n].Filename;
    	if(result.files[n].Filetype == true) path = "<?php echo base_url();?>/img/_Open.png";
      images += '<li class="cap_select cap_download cap_rename cap_delete cap_replace"><div class="clip"><img src="'+path+'" /></div>'+ result.files[n].Filename +'</li>';
    }
    $(".grid").html(images);
  }
                });
            });

</script>
</head>
<body>

<div class="container theme-showcase">
	

<div class="jumbotron col-sm-11">
<h2>Файл-менеджер</h2>
<div class="filemanager" id="results">
<div class="file-row">
	<ul id="contents" class="grid">
		
	</ul>
</div>


</div>

	<?php 
	echo $alert;
	
	
	?>
	
	<br/>
	<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/media/upload" class="btn btn-warning" type="button">загрузка файла</a><a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>
	</div>

	
</div>

</body>
</html>