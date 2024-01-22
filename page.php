<?php
    get_header();
    if (is_page()) {
        the_post();
        include get_parent_theme_file_path("contents/page.php");
    } else {
        header('location: /404');
    }
    get_footer();
?>
