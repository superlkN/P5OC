<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="<?php echo ASSETS;?>bootstrap.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin="" />
        <link type="text/css" rel="stylesheet" href="<?php echo ASSETS;?>lightGallery.css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="assets/lib/lightgallery.min.js"></script>
        <script src="assets/lib/lg-thumbnail.min.js"></script>
        <script src="assets/lib/lg-fullscreen.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/p1632rvcw2rh9bc125ms6z0r3orl6lk9okglbsymh0bsgt6y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <link href="<?php echo ASSETS;?>style.css" rel="stylesheet" />
        <link rel="shortcut icon" href="assets/img/logo.png" />
        <meta name="viewport" content="width=768" />
        <meta name="viewport" content="width=479" />
        <meta name="viewport" content="width=1024" />
         
    </head>
        
    <body>
        <?= $content ?>
    </body>
</html>