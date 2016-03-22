<?php

$codes = [];
$codes['symfony'] = [];

$codes['symfony'][0] = "// src/AppBundle/Entity/Post.php
namespace AppBundle\Entity;

class Post
{
    const NUM_ITEMS = 10;

    // ...
}";

$codes['symfony'][1] = "<p>
    Displaying the {{ constant('NUM_ITEMS', post) }} most recent results.
</p>
";

$codes['symfony'][2] = "# app/config/config.yml
parameters:
    homepage.num_items: 10
";

$codes['symfony'][3] = "#config.yml
parameters:
    app.version: 0.1.0

twig:
    globals:
        version: %app.version%
";

$codes['html'] = [];

$codes['html'][0] = '<link rel="stylesheet" href="FILE_LOCATION">';
$codes['html'][1] = '<script src="FILE_LOCATION"></script>';

$codes['html'][2] = '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>
        <!--<link rel="stylesheet" href="FILE_LOCATION">-->
        <!--<script src="FILE_LOCATION"></script>-->
    </head>
    <body>
        <h1>Hello, world!</h1>
    </body>
</html>
';

include __DIR__ . '/index.tpl.php';
