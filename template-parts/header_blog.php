<?php
$site_name = get_bloginfo('name');
$tagline = get_bloginfo('description', 'display');
?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pap - blog</title>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/app.css">
</head>

<body>
   