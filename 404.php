<?php get_header(); ?>
	
<!-- ***** Preloader Start ***** -->
<?php //include get_parent_theme_file_path("contents/preload.php"); ?>

<!-- ***** Header Area Start ***** -->
<?php include get_parent_theme_file_path("contents/menu.php"); ?>


<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <h6>Welcome to Space Dynamic</h6>
                            <h2>Desculpe, essa <em>página</em>  <span>NÃO</span> foi encontrada!</h2>
                            <p>Space Dynamic is a professional looking HTML template using a Bootstrap 5 (beta 2). This CSS template is free for you provided by <a rel="nofollow" href="/" target="_parent">TemplateMo</a>.</p>
                            <form id="search" action="#" method="GET">
                                <fieldset>
                                    <input type="address" name="address" class="email" placeholder="Your website URL..." autocomplete="on" required>
                                </fieldset>
                                <fieldset>
                                    <button type="submit" class="main-button">Analyze Site</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?php echo get_parent_theme_file_uri('template/assets/images/404.png'); ?>" alt="team meeting">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();  ?>