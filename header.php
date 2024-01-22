<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- PAGE settings -->
    <link rel="icon" href="<?php echo get_parent_theme_file_uri('/img/favicon.ico'); ?>">
    <title><?php bloginfo( 'title' ); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Messias Dias">

    <!-- CSS dependencies -->
    <!-- <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri('/css/fontawesome.min.css'); ?>" type="text/css"> -->
    <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri('/style.css') ?>">

    <!-- Jquery -->
    <script src="<?php echo get_parent_theme_file_uri('template/vendor/jquery/jquery.min.js') ?>" ></script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_parent_theme_file_uri('template/vendor/bootstrap/css/bootstrap.min.css'); ?>"" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri('template/assets/css/fontawesome.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri('template/assets/css/templatemo-space-dynamic.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri('template/assets/css/animated.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_parent_theme_file_uri('template/assets/css/owl.css'); ?>">

    <?php wp_head(); ?>
</head>
  
<body>
<?php wp_body_open(); ?>

<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<?php include get_parent_theme_file_path("contents/menu.php"); ?>