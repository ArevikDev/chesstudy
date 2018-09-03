<div class="header-banner row">
    <div class="col-sm-6">
        <img src="<?php header_image(); ?>"
    </div>
</div>
<div class="header-post row col-sm-6">
    <div class="col-sm-1"></div>
    <div class="col-sm-8">
        <h3>
            <?php
            $post_id = 61;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
            echo $title;
            ?>
        </h3>
        <p>
            <?php
            $queried_post = preg_split( '/<!--more(.*?)?-->/', $queried_post->post_content );
            echo $queried_post[0];
            ?>
        </p><br/>
        <a href="<?php get_permalink($post_id)?>">READ MORE ></a>
    </div>
</div>
</div>
</div>