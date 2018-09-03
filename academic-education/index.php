<?php
/**
 * Displaying home page.
 *
 * This template display post by default.
 * @package Academic Education
 */

get_header(); ?>

<?php do_action( 'academic_education_index_header' ); ?>

<?php /** post section **/ ?>
<div class="container">
    <div class="home-research col-sm-12">
        <h3>
            <?php
            $post_id = 8;
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
        </p>
    </div>
    <div class="row research-blocks">
        <div class="col-sm-4">
            <img class='background-img-col img-responsive' src="<?php echo wp_get_attachment_url(136);?>">
            <div class="research-text">
                <img class='img-responsive' src="<?php echo wp_get_attachment_url(78);?>">
                <h5><?php
                    $queried_post = get_post(88);
                    $title = $queried_post->post_title;
                    echo $title;
                    ?></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et</p>
            </div>
        </div>
        <div class="col-sm-4">
            <img class='background-img-col img-responsive' src="<?php echo wp_get_attachment_url(138);?>">
            <div class="research-text">
                <img class='img-responsive' src="<?php echo wp_get_attachment_url(69);?>">
                <h5><?php
                    $queried_post = get_post(86);
                    $title = $queried_post->post_title;
                    echo $title;
                    ?></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et</p>
            </div>
        </div>
        <div class="col-sm-4">
            <img class='background-img-col img-responsive' style='position: absolute;z-index: -1;width: calc(100% - 20px)' src="<?php echo wp_get_attachment_url(137);?>">
            <div class="research-text" style="text-align: center;">
                <img class='img-responsive' src="<?php echo wp_get_attachment_url(70);?>">
                <h5 style="text-transform: uppercase;"><?php
                    $queried_post = get_post(87);
                    $title = $queried_post->post_title;
                    echo $title;
                    ?></h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et</p>
            </div>
            </div>
    </div>
  <?php
    $layout = get_theme_mod( 'academic_education_theme_options','Right Sidebar');
    if($layout == 'One Column'){?>
      <div id="firstbox" class="mainbox">
        <?php if ( have_posts() ) :
          /* Start the Loop */
            
            while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/post/content',get_post_format() ); 
            
            endwhile;

            else :

              get_template_part( 'no-results' ); 

            endif; 
        ?>
        <div class="navigation">
          <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                  'prev_text'          => __( 'Previous page', 'academic-education' ),
                  'next_text'          => __( 'Next page', 'academic-education' ),
                  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'academic-education' ) . ' </span>',
              ) );
          ?>
            <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"></div>
    <?php }else if($layout == 'Three Columns'){?>
      <div class="row">
        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        <div id="firstbox" class="col-md-6 col-sm-6 mainbox">
          <?php if ( have_posts() ) :
            /* Start the Loop */
              
              while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/post/content',get_post_format() ); 
              
              endwhile;

              else :

                get_template_part( 'no-results' ); 

              endif; 
          ?>
          <div class="navigation">
            <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'academic-education' ),
                    'next_text'          => __( 'Next page', 'academic-education' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'academic-education' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
      </div>
    <?php }else if($layout == 'Four Columns'){?>
      <div class="row">
        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        <div id="firstbox" class="col-md-3 col-sm-3 mainbox">
          <?php if ( have_posts() ) :
            /* Start the Loop */
              
              while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/post/content',get_post_format() ); 
              
              endwhile;

              else :

                get_template_part( 'no-results' ); 

              endif; 
          ?>
          <div class="navigation">
            <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'academic-education' ),
                    'next_text'          => __( 'Next page', 'academic-education' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'academic-education' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2'); ?></div>
        <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-3'); ?></div>
      </div>
    <?php }else if($layout == 'Right Sidebar'){?>
      <div class="row">
        <div id="firstbox" class="col-md-8 col-sm-8 mainbox">
          <?php if ( have_posts() ) :
            /* Start the Loop */
              
              while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/post/content',get_post_format() ); 
              
              endwhile;

              else :

                get_template_part( 'no-results' ); 

              endif; 
          ?>
          <div class="navigation">
            <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'academic-education' ),
                    'next_text'          => __( 'Next page', 'academic-education' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'academic-education' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
      </div>
    <?php }else if($layout == 'Left Sidebar'){?>
      <div class="row">
        <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
        <div id="firstbox" class="col-md-8 col-sm-8 mainbox">
          <?php if ( have_posts() ) :
            /* Start the Loop */
              
              while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/post/content',get_post_format() ); 
              
              endwhile;

              else :

                get_template_part( 'no-results' ); 

              endif; 
          ?>
          <div class="navigation">
            <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'academic-education' ),
                    'next_text'          => __( 'Next page', 'academic-education' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'academic-education' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
    <?php }else if($layout == 'Grid Layout'){?>
      <div class="row">
        <div id="firstbox" class=" mainbox">
          <div class="row">
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/post/grid-layout' ); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
          </div>
          <div class="navigation">
            <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'academic-education' ),
                    'next_text'          => __( 'Next page', 'academic-education' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'academic-education' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
    <?php } ?>
</div>

<?php do_action( 'academic_education_index_footer' ); ?>

<?php get_footer(); ?>