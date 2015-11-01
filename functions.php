<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name'=>'サイドバー1',
'id' => 'sidebar-1',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<div class="sidebar-title">',
'after_title' => '</div>',
));
  
  
function new_excerpt_more( $more ) {
  return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">続きを読む</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
