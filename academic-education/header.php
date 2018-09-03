<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="wp-content\themes\academic-education\assets\js\custom-scripts.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

 <div class="toggle"><a class="toggleMenu" href="#">
 <?php esc_html_e('Menu','academic-education'); ?></a></div>

<?php
//  get_template_part( 'template-parts/header/top', 'bar' );

//  get_template_part( 'template-parts/header/site', 'branding' );

  get_template_part( 'template-parts/navigation/site', 'nav' );
  get_template_part( 'template-parts/header/header-banner', 'nav' );

?>
