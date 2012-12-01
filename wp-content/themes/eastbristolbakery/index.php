<?php // get_template_part('templates/page', 'header'); ?>
<?php // get_template_part('templates/content', get_post_format()); ?>

<div class="row">
    <div class="span4">
        <div id="home-leftbar">
            <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
            <div id="opening-times">
                <?php
                    $post_id = 1;
                    $queried_post = get_post($post_id);
                    $content = $queried_post->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>
            </div>
        </div>
    </div>
    <div class="span7">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
    </div>
    <div class="span1">
        <ul>
            <li><a href="/contact"><img src="images/home-circle-email.png" /></a></li>
            <li><a href="/"><img src="images/home-circle-flickr.png" /></a></li>
            <li><a href="/"><img src="images/home-circle-twitter.png" /></a></li>
        </ul>
    </div>
    <div class="span8">
        <div id="home-intro">
            <?php
                $post_id = 696;
                $queried_post = get_post($post_id);
                $content = $queried_post->post_content;
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
            ?>
        </div>
    </div>
</div>
