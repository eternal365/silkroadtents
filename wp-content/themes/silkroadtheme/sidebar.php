<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<?php endif; ?>
<div class="sidebar">
<?php

// Sidebar menu

$refid = url_to_postid( wp_get_referer());
$refancestors = get_ancestors( $refid, 'page' );
$ancestors = get_ancestors( $post->ID, 'page' );
//var_dump($ancestors);

$menuname ="";

if ( ( in_array('18', $refancestors) ) || ( in_array('18', $ancestors) ) || (is_page('18')) )   {
      $menuname =  "default"; 
        
}

  wp_nav_menu(array('menu'=>$menuname,'menu_class'=> 'nav nav-tabs nav-stacked', 'walker'  => new wp_sidebar_navwalker() )); 

?>	

</div><!-- /sidebar -->
