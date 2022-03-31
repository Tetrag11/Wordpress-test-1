<?php

/**
 * Template Name: Front Page
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>home</title>
</head>

<body>
    <div class="container" style="height: 100vh;">
        <div class="row w-100 h-100 justify-content-center align-items-center">
            <div class="col-12 card " style="width: 60%;">
                <div class="row w-100 h-100" style="padding: 30px;">
                    <div class="col-12 text-center">
                        <h2><?php the_field('heading'); ?></h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6">
                        <?php $image = get_field('image'); ?>
                        <?php if ($image) { ?>
                            <img style="width: 100%; height:100%" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php } ?>

                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="row">
                            <p class="col-12 "><?php the_field('paragraph'); ?></p>
                            <?php $button = get_field('button'); ?>
                            <?php if ($button) { ?>
                                <a style="margin-left: 15px; margin-right: 15px;" class=" btn btn-danger btn-lg" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>