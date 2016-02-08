<?php
require_once __DIR__ . '/protected/bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="static/normalize.css">
    <link rel="stylesheet" href="static/main.css">
    <link rel="stylesheet" href="static/jquery.jgrowl.css">
    <meta name="robots" content="noindex,nofollow"/>
    <title>Демо Загрузка картинки без обновления страницы с помощью ajax</title>
</head>
<body>
<div class="demo">
    <a class="permalink" href="http://www.itlessons.info/php/ajax-file-upload/">← cсылка на
        статью</a>

    <h1>Демо Загрузка картинки без обновления страницы с помощью ajax</h1>

    <div id="dropzone">
        <div class="title">Перетащите файлы сюда</div>
        <div class="or">или</div>
        <div class="browser">
            <label>
                <span>Выберите файлы</span>
                <input type="file" name="file"/>
            </label>
        </div>
        <div class="reqs">Можно: png, jpg, jpeg. Максимальный размер: 256 KB</div>
    </div>

    <div id="output"></div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-jgrowl/1.2.12/jquery.jgrowl.min.js"></script>
    <script src="http://cdn.jsdelivr.net/buzz/1.1.0/buzz.min.js"></script>
    <script src="static/dmuploader.min.js"></script>
    <script type="application/javascript">

        $(document).ready(function () {

            initialize();

            $('#dropzone').dmUploader({
                url: 'upload.php',
                dataType: 'json',
                maxFileSize: 720 * 1280,
                allowedTypes: 'image/*',
                onBeforeUpload: function (id) {
                    $("div#output").html('<img src="static/loader.gif">')
                        .show();
                },
                onUploadSuccess: function (id, response) {

                    $("div#output").html('')

                    if (response.type == "message") {
                        $.jGrowl(response.data.txt, { theme: response.data.type });
                    }

                    if (response.type == "upload") {
                        $("div#output").html('<img src="' + response.data.url + '">');
                    }
                },
                onUploadError: function (id, message) {
                    $.jGrowl("Файл: " + id + " не загрузился: " + message, {theme: 'error'});
                },
                onFileTypeError: function (file) {
                    $.jGrowl("Загружать можно только png и jpeg!", {theme: 'error'});
                },
                onFileSizeError: function (file) {
                    $.jGrowl("Файл слишком большой!!", {theme: 'error'});
                },
                onFallbackMode: function (message) {
                    $.jGrowl("Ваш браузер не поддерживается 8(", {theme: 'error'});
                }
            });
        });

        function initialize() {
            //sounds
            buzz.defaults.formats = ['ogg', 'mp3'];
            buzz.defaults.preload = true;

            if (buzz.isSupported()) {
                var noticeSound = new buzz.sound("static/sounds/notice");
            }

            //messages
            $.jGrowl.defaults.position = 'top-right';
            $.jGrowl.defaults.closer = false;
            $.jGrowl.defaults.beforeOpen = function (e, m, o) {
                if (noticeSound)
                    noticeSound.play();
            };
        }
    </script>
</div>
</body>
</html>