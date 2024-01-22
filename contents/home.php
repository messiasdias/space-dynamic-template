<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <h6><?php echo get_theme_mod('section_top_welcome'); ?></h6>
                            <h2><?php echo get_theme_mod('section_top_title'); ?></h2>
                            <p><?php echo get_theme_mod('section_top_text'); ?></p>
                            <!-- <form id="search" action="#" method="GET">
                                <fieldset>
                                    <input type="address" name="address" class="email" placeholder="URL do seu Site..." autocomplete="on" required>
                                </fieldset>
                                <fieldset>
                                    <button type="submit" class="main-button">Analisar Agora!</button>
                                </fieldset>
                            </form> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?php echo get_theme_mod('section_top_image'); ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <img src="<?php echo get_theme_mod('section_about_image'); ?>">
                </div>
            </div>
            <div class="col-lg-8 align-self-center">
                <div class="services">
                    <div class="row">
                        <?php 
                            $the_query = new WP_Query( array(
                                'post_type' => 'about-us',
                                'post_status' => 'publish',
                                'posts_per_page' => 4, 
                                'offset' => 0,
                                'orderby' => 'title', 
                                'order' => 'ASC'
                            )); 
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                    <div class="icon">
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                    <div class="right-text">
                                        <h4><?php echo the_title(); ?></h4>
                                        <p><?php echo get_the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="services" class="our-services section">
    <!-- portfolio -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="left-image">
                    <img src="<?php echo get_theme_mod('section_services_image'); ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="section-heading">
                    <h2><?php echo get_theme_mod('section_services_title'); ?></h2>
                    <p><?php echo get_theme_mod('section_services_text'); ?></p>
                </div>
                <div class="row">
                    <?php 
                        $the_query = new WP_Query( array(
                            'post_type' => 'services',
                            'post_status' => 'publish',
                            'posts_per_page' => 4, 
                            'offset' => 0,
                            'orderby' => 'title', 
                            'order' => 'ASC'
                        )); 
                    ?>
                    <?php if ( $the_query->have_posts()) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-lg-12">
                            <div class="progress-skill-bar">
                                <h4><?php echo the_title(); ?></h4>
                                <span style="left: 100% !important;"><?php echo get_the_excerpt() . "%"; ?></span>
                                <div class="filled-bar" style="width: <?php echo get_the_excerpt() . "%"; ?> !important;"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h2><?php echo get_theme_mod('section_portifolio_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                $the_query = new WP_Query( array(
                    'post_type' => 'portfolio',
                    'post_status' => 'publish',
                    'posts_per_page' => 4, 
                    'offset' => 0,
                    'orderby' => 'title', 
                    'order' => 'ASC'
                )); 
            ?>
            <?php if ( $the_query->have_posts()) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-lg-3 col-sm-6">
                <a href="<?php echo the_permalink(); ?>">
                    <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="hidden-content">
                            <h4><?php echo the_title(); ?></h4>
                            <p><?php echo the_excerpt(); ?></p>
                        </div>
                        <div class="showed-content">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<div id="blog" class="our-blog section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                <div class="section-heading">
                    <h2><?php echo get_theme_mod('section_blog_title'); ?></h2>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInDown mb-5" data-wow-duration="1s" data-wow-delay="0.25s">
                <div class="top-dec">
                    <img src="<?php echo get_theme_mod('section_blog_image'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                $the_query = new WP_Query( array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    'offset' => 0
                )); 
            ?>
            <?php if ( $the_query->have_posts()) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                <div class="left-image">
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="Post '<?php the_title(); ?>' thumbnail"></a>
                    <div class="info">
                        <div class="inner-content">
                            <ul>
                                <li><i class="fa fa-calendar"></i> <?php echo get_the_date('d/m/Y').' '.get_the_time( 'H:i:s' ); ?></li>
                                <li><i class="fa fa-users"></i> <?php echo ucwords(get_the_author()); ?></li>
                                <li><i class="fa fa-folder"></i> <?php echo ucwords(get_post_type($post->ID)); ?></li>
                            </ul>
                            <a href="<?php the_permalink(); ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <p><?php the_excerpt(); ?></p>
                            <div class="main-blue-button">
                                <a href="<?php echo "/".date("Y"); ?>">Últimos posts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
           
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                <div class="right-list">
                    <ul>
                        <?php 
                            $the_query = new WP_Query( array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 2,
                                'offset' => 1
                            )); 
                        ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li>
                            <div class="left-content align-self-center">
                                <span><i class="fa fa-calendar"></i> <?php echo get_the_date('d/m/Y').' '.get_the_time( 'H:i:s' ); ?></span>
                                <a href="<?php the_permalink(); ?>">
                                    <h4><?php $title = the_title(); ?></h4>
                                </a>
                                <p><?php the_excerpt(); ?></p>
                                <div class="main-red-button">
                                    <a href="<?php the_permalink(); ?>">Saiba Mais</a>
                                </div>
                            </div>
                            <div class="right-image">
                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="Post '<?php echo $title; ?>' thumbnail"></a>
                            </div>
                        </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> <?php echo date('d/m/Y'); ?></span>
                                    <a href="/#top">
                                        <h4>Nenhum post Encontrado</h4>
                                    </a>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="contact-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <div class="section-heading">
                    <h2><?php echo get_theme_mod('section_contact_title'); ?></h2>
                    <p><?php echo get_theme_mod('section_contact_text'); ?></p>
                    <div class="phone-info">
                        <h4><?php echo get_theme_mod('section_contact_subtitle'); ?>
                            <span>
                                <?php 
                                    $phone = get_theme_mod('section_contact_wpphone');
                                    $text =  get_theme_mod('section_contact_wpmessage'); 
                                    $url = "https://api.whatsapp.com/send?phone=55$phone&text=".urlencode($text);
                                    if (get_theme_mod('section_contact_wpimage')) : 
                                ?>
                                    &nbsp;
                                    <img style="max-width:30px;" src="<?php echo get_theme_mod('section_contact_wpimage'); ?>" alt="">
                                <?php endif; ?>
                                <a href="<?php echo $url; ?>" target="_blank"> <b><?php echo $phone; ?></b></a>
                            </span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <form id="form-contact" action="" method="post" class="form-contact">
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="name" name="name" id="name" placeholder="Nome" autocomplete="on" required value="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="surname" name="surname" id="surname" placeholder="Sobrenome" autocomplete="on" required value="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="seu@email.com" required value="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="text" name="phone" id="phone" placeholder="(000)-00000000" required value="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Mensagem" required=""></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button ">Enviar Mensagem</button>
                            </fieldset>
                        </div>
                    </div>
                    <div class="contact-dec">
                        <img src="<?php echo get_theme_mod('section_contact_image'); ?>" alt="">
                    </div>
                </form>

                <script>
                    setTimeout(() => {
                        var form_contact = document.getElementById('form-contact');
                        form_contact.addEventListener('submit', (event) => {  
                            event.preventDefault();

                            let body = {}
                            Object
                                .values(Array.from(new FormData(form_contact)))
                                .forEach(value => body[value[0]] = value[1])

                            fetch("/wp-json/simple-send-mail/send",{
                                method: "POST",
                                headers: {
                                    'Accept': 'application/json',
                                    'Content-Type': 'application/json',
                                },
                                body: JSON.stringify(body)
                            })
                            .then(function(res){ console.log(res) })
                            .catch(function(err){ console.error(err) })
                        });
                    }, 10)
                </script>
            </div>
        </div>
    </div>
</div>