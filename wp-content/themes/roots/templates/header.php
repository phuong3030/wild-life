<div id="top-row"> 
  <div class="container"> 
    <div class="row">

      <div id="top" class="col-lg-12 col-md-12 col-xs-12">
        <div class="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
            endif;
          ?>
        </div>
      </div>

    </div>
  </div>
</div>

<div id="header-row">
  <div class="container"> 
    <div class="row">

      <div id="logo" class="col-md-3 col-lg-3 col-xs-12">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" />
        </a>
      </div>

      <div class="col-md-3 col-lg-3 col-xs-12 moduletable search-block">
        <div class="mod-search mode-search__search-block"> 
          <?php get_search_form(); ?>
        </div>
      </div>

    </div>
  </div>
</div>
