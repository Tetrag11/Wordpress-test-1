<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page home</title>
    <title>home</title>
    <?php wp_head() ?>
</head>

<body>
    <p class="text-center"> <?php the_field( 'header_name', 'option' ); ?> </p>