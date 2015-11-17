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


function wp_plupload_include_attachment_id( $params ) { 
	global $post_ID; 
	if ( isset( $post_ID ) ) 
        $params['post_id'] = (int) $post_ID; 
    return $params; 
} 
add_filter( 'plupload_default_params', 'wp_plupload_include_attachment_id' ); 

function wp_post_id_upload_dir( $args ) {
    $post_id = $_REQUEST['post_id'];
    if(!empty($post_id)){
       $newdir = '/' . $post_id;
	}else{
       $newdir = '/unknown_id';
	}
       $args['path']    = str_replace( $args['subdir'], '', $args['path'] );
       $args['url']     = str_replace( $args['subdir'], '', $args['url'] );      
       $args['subdir']  = $newdir;
       $args['path']   .= $newdir; 
       $args['url']    .= $newdir; 

       return $args;
}
add_filter( 'upload_dir', 'wp_post_id_upload_dir' );
