<div id="blog" class="our-blog section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                <div class="section-heading">
                    <h2><?php echo get_theme_mod('section_blog_title'); ?>
                       </h2>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                <div class="top-dec">
                    <img src="<?php echo get_theme_mod('section_blog_image'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 wow fadeInUp mb-5" data-wow-duration="1s" data-wow-delay="0.25s">
            <?php 
                $the_query = new WP_Query( array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
                    'offset' => 0
                )); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="left-image">
                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="Post '<?php the_title(); ?>' thumbnail"></a>
                    <div class="info">
                        <div class="inner-content">
                            <ul>
                                <li><i class="fa fa-calendar"></i>  <?php echo get_the_date('d/m/Y') .' '.get_the_time( 'H:i:s' ); ?></li>
                                <li><i class="fa fa-users"></i> <?php echo ucwords(get_the_author()); ?></li>
                                <li><i class="fa fa-folder"></i> <?php echo ucwords(get_post_type($post->ID)); ?></li>
                            </ul>
                            <a href="<?php the_permalink(); ?>">
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <p><?php the_excerpt(); ?></p>
                            <div class="main-blue-button">
                                <a href="<?php the_permalink(); ?>">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            </div>
           
            <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                <div class="right-list">
                    <ul>
                        <?php 
                            $the_query = new WP_Query( array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'offset' => 1
                            )); 
                        ?>
                        <?php if ( $the_query->have_posts()  ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <li>
                            <div class="left-content align-self-center">
                                <span>
                                    <i class="fa fa-calendar"></i> <?php echo get_the_date('d/m/Y') .' '.get_the_time( 'H:i:s' );?>
                                </span>
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

