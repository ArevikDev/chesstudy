<?php
/**
 * Displays Site info
 */
?>

<div class="copyright-wrapper" style="background: url(<?php echo wp_get_attachment_url(145);?>);">
	<div class="inner">
        <div class="row copyright">
       <div class="col-sm-3">
           <img class='img-responsive' style='width: 70px' src="<?php echo wp_get_attachment_url(74);?>"><br>
           <span>Tigran Mets 17</span><br>
           <span>Yerevan, Armenia</span><br>
           <i class="fas fa-phone" style="margin-right: 5px;"></i><span>+374 (010) 597 022</span><br>
           <i class="fa fa-envelope"  style="margin-right: 5px"></i><span>chess@aspu.am</span><br>
           <div class="header-social">
               <?php if( get_theme_mod( 'academic_education_facebook_url','' ) != '') { ?>
                   <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'academic_education_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
               <?php } ?>
           </div>
           <div class="header-social">
               <?php if( get_theme_mod( 'academic_education_google_url','' ) != '') { ?>
                   <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'academic_education_google_url','' ) ); ?>"><i class="fab fa-google-plus-g"></i></a>
               <?php } ?>
           </div>
           <div class="header-social">
               <?php if( get_theme_mod( 'academic_education_google_url','' ) != '') { ?>
                   <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'academic_education_google_url','' ) ); ?>"><i class="fas fa-rss"></i></a>
               <?php } ?>
           </div>
           <div class="header-social">
               <?php if( get_theme_mod( 'academic_education_youtube_url','' ) != '') { ?>
                   <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'academic_education_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
               <?php } ?>
           </div>
       </div>
       <div class="col-sm-6" style="padding-top: 30px;">
           <label style="text-transform: uppercase">Subscribe to our newsletter</label>
           <div style="padding-left: 25%;" class="input-group mb-3">
               <input type="email" class="form-control col-sm-5" placeholder="Enter email">
               <div class="input-group-append">
                   <button class="btn btn-outline-secondary subscribe-btn">Subscribe</button>
               </div><br>
           </div>
           <small>You'll get an email once a month. We'll never share it.</small>
       </div>
       <div class="col-sm-3 collaborate" style="padding-top: 30px;">
           <p>COLLABORATE WITH US</p>
           <button class="btn" style="margin-top: 20px">Collaborate</button>
       </div>
        </div>
        <div class="clear"></div>
    </div>
</div>