<div id="post-<?php echo $post->ID; ?>" class="our-services section">
    <div class="container page">
        <div class="row page-content">
            <div style="background-color: black; z-index: 10; padding-top: 800px !important;" class="col-12 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="section-heading">
                    <h2>
                        <!-- Grow your website with our <em>SEO</em> service &amp; <span>Project</span> Ideas -->
                        <?php  echo get_post_type($post->ID);  ?> |
                        <em> <?php  echo the_title(); ?> </em>
                    </h2>
                    <div class="left-image">
                        <img  src="<?php the_post_thumbnail_url(); ?>" alt="<?php  echo ucwords(get_post_type($post->ID)); echo ' '; echo the_title(); ?>' thumbnail">
                    </div>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>