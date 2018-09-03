
<div class="header row">
    <div class="row">
        <div class="logo col-sm-1">
            <?php if( has_custom_logo() ){ academic_education_the_custom_logo();
            }else{ ?>
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo esc_html($description); ?></p>
                <?php endif; }?>
        </div>


            <div class="nav col-sm-11">
                <div style="display: flex">
                    <div class="col-sm-4 header-search">
                        <?php dynamic_sidebar('header-widget');?>
                        <i class="fas fa-times"></i>
                        <i class="fas fa-search search-toggle"></i>
                    </div>
                    <div class="header-social">
                        <?php if( get_theme_mod( 'academic_education_facebook_url','' ) != '') { ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'academic_education_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
                        <?php } ?>
                    </div>
                    <div class="header-social">
                        <?php if( get_theme_mod( 'academic_education_google_url','' ) != '') { ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'academic_education_google_url','' ) ); ?>"><i class="fab fa-google-plus-g"></i></a>
                        <?php } ?>
                    </div>
                    <div class="header-social">
                        <?php if( get_theme_mod( 'academic_education_google_url','' ) != '') { ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'academic_education_google_url','' ) ); ?>"><i class="fas fa-rss"></i></a>
                        <?php } ?>
                    </div>
                    <div class="header-social">
                        <?php if( get_theme_mod( 'academic_education_youtube_url','' ) != '') { ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'academic_education_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
                        <?php } ?>
                    </div>
                </div>


                <div class="col-sm-12">
                    <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                </div>
            </div>
        </div>
</div>