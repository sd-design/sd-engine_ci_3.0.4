<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Медиафайлы</title>
	
<link rel="stylesheet" href="<?php echo base_url();?>css-back/bootstrap.min.css">
<!-- Generic page styles -->
<link rel="stylesheet" href="<?php echo base_url();?>css-back/style.css">
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="<?php echo base_url();?>css-back/jquery.fileupload.css">
<link rel="stylesheet" href="<?php echo base_url();?>css-back/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="<?php echo base_url();?>css-back/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="<?php echo base_url();?>css-back/jquery.fileupload-ui-noscript.css"></noscript>
</head>
<body>

<div class="container">
<div class="jumbotron col-sm-11">
	<h2>Загрузка медиафайлов</h2>
    <br>
    <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Select files...</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
    <br>
    <br>
    <!-- The global progress bar -->
    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    <!-- The container for the uploaded files -->
    <div id="files" class="files"></div>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Примечания</h3>
        </div>
    <div class="panel-body">
            <ul>
                <li>Максимальный размер файлов <strong>5 MB</strong>.</li>
                <li>Только такие типы файлов (<strong>JPG, GIF, PNG</strong>).</li>
             </li>
            </ul>
        </div>
    </div>

        
        
  
    <br/>
	<div class="btn-group" role="group" aria-label="Small button group"><a href="<?php echo base_url();?>user/media/edit_files" class="btn btn-warning" type="button">редактировать файлы</a><a href="<?php echo base_url();?>user/panel" class="btn btn-info" type="button">панель управления</a></div>

  </div>


</div>
</div>
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo base_url();?>js/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo base_url();?>js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url();?>js/jquery.fileupload.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script>
/*jslint unparam: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'blueimp.github.io' ?
                '//jquery-file-upload.appspot.com/' : '/user/media/uploader/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>



</body>
</html>