<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
  	<div class="grid-loader-container">
        <div class="grid-loader">
            <div class="loader">
              <div class="loader-inner ball-scale">
                <div></div>
              </div>
            </div>
        </div>
    </div>
    <!-- PRELOADER HOME -->
    <div class="grid-loader-container-home">
        <div class="grid-loader">
            <div class="loader">
              <div class="loader-inner ball-scale">
                <div></div>
              </div>
            </div>
        </div>
    </div>


    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php include Wrapper\template_path(); ?>
    
  </body>
</html>
