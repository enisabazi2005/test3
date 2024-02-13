<div class="container">
    <?php 
    the_content();
    ?>
     <div class="post">
        <div class="media">
            <img src="<?php the_post_thumbnail_url('thumbnail') ?>" alt="image">
            <div class="media-body">
                <h3 class="title"><?php the_title(); ?></h3>
                <h3 class="date"><?php the_date(); ?></h3>
                <span class="comments"><?php comments_number(); ?></span>
            </div>
            <div class="intro">
                <?php 
                the_excerpt();
                ?>
            </div>
            <div class="link-a">
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div>
        </div>
     </div>
</div>