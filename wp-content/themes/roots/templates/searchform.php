<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'roots'); ?></label>
  <div class="input-group">
    <input id="searchword" type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field" placeholder="Search...">
    <button type="submit" class="search-submit buttonsearch-block"></button>
  </div>
</form>
