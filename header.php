<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(); ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/base.css">
   

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?> >

   <!-- Navigation -->
   <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container-fluid"><a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" /></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-lg-flex"
                    id="navcol-1">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Item 1</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Item 2</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Item 3</a></li>
                        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Dropdown </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>