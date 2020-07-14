<?php
function child_theme_enqueue_styles() {
$parent_style = 'parent-style'; // Esta es la hoja de estilos del tema padre.

wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

/* Display Icon Links to some social networks */
if(!function_exists('cactus_social_share')){
function cactus_social_share($id=false){
	if(!$id){ $id = get_the_ID(); }
	?>
	<?php if(ot_get_option('share_facebook','on')!='off'){ ?>
	<li><a class="btn btn-default btn-lighter social-icon" title="<?php _e('Compartir en Facebook','cactusthemes');?>" href="#" target="_blank" rel="nofollow" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+'<?php echo urlencode(get_permalink($id)); ?>','facebook-share-dialog','width=626,height=436');return false;"><i class="fa fa-facebook"></i></a></li>
    <?php } ?>
    <?php if(ot_get_option('share_twitter','on')!='off'){ ?>
    <li><a class="btn btn-default btn-lighter social-icon" href="#" title="<?php _e('Compartir en Twitter','cactusthemes');?>" rel="nofollow" target="_blank" onclick="window.open('http://twitter.com/share?text=<?php echo urlencode(get_the_title($id)); ?>&url=<?php echo urlencode(get_permalink($id)); ?>','twitter-share-dialog','width=626,height=436');return false;"><i class="fa fa-twitter"></i></a></li>
    <?php } ?>
    <?php if(ot_get_option('share_linkedin','on')!='off'){ ?>
    <li><a class="btn btn-default btn-lighter social-icon" href="#" title="<?php _e('Share on LinkedIn','cactusthemes');?>" rel="nofollow" target="_blank" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink($id)); ?>&title=<?php echo urlencode(get_the_title($id)); ?>&source=<?php echo urlencode(get_bloginfo('name')); ?>','linkedin-share-dialog','width=626,height=436');return false;"><i class="fa fa-linkedin"></i></a></li>
    <?php } ?>
    <?php if(ot_get_option('share_tumblr','on')!='off'){ ?>
    <li><a class="btn btn-default btn-lighter social-icon" href="#" title="<?php _e('Share on Tumblr','cactusthemes');?>" rel="nofollow" target="_blank" onclick="window.open('http://www.tumblr.com/share/link?url=<?php echo urlencode(get_permalink($id)); ?>&name=<?php echo urlencode(get_the_title($id)); ?>','tumblr-share-dialog','width=626,height=436');return false;"><i class="fa fa-tumblr"></i></a></li>
    <?php } ?>
    <?php if(ot_get_option('share_google_plus','on')!='off'){ ?>
    <li><a class="btn btn-default btn-lighter social-icon" href="#" title="<?php _e('Share on Google Plus','cactusthemes');?>" rel="nofollow" target="_blank" onclick="window.open('https://plus.google.com/share?url=<?php echo urlencode(get_permalink($id)); ?>','googleplus-share-dialog','width=626,height=436');return false;"><i class="fa fa-google-plus"></i></a></li>
    <?php } ?>
    <?php if(ot_get_option('share_pinterest','on')!='off'){ ?>
    <li><a class="btn btn-default btn-lighter social-icon" href="#" title="<?php _e('Pin this','cactusthemes');?>" rel="nofollow" target="_blank" onclick="window.open('//pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($id)) ?>&media=<?php echo urlencode(wp_get_attachment_url( get_post_thumbnail_id($id))); ?>&description=<?php echo urlencode(get_the_title($id)) ?>','pin-share-dialog','width=626,height=436');return false;"><i class="fa fa-pinterest"></i></a></li>
    <?php } ?>
    <?php if(ot_get_option('share_vk','on')!='off'){ ?>
    <li><a class="btn btn-default btn-lighter social-icon" href="#" title="<?php _e('Share on Vk','cactusthemes'); ?>" rel="nofollow" target="_blank" onclick="window.open('http://vkontakte.ru/share.php?url=<?php echo urlencode(get_permalink(get_the_ID())); ?>','vk-share-dialog','width=626,height=436');return false;"><i class="fa fa-vk"></i></a></li>
    <?php } ?>
    <?php if(ot_get_option('share_email','on')!='off'){ ?>
    <li><a class="btn btn-default btn-lighter social-icon" href="mailto:?subject=<?php echo get_the_title($id) ?>&body=<?php echo urlencode(get_permalink($id)) ?>" title="<?php _e('Email this','cactusthemes');?>"><i class="fa fa-envelope"></i></a></li>
    <?php } ?>
    <?php if(ot_get_option('share_instagram','on')!='off'){ ?>
    <li><a class="btn btn-default btn-lighter social-icon" href="#" title="<?php _e('Compartir en Instagram','cactusthemes');?>" rel="nofollow" target="_blank" onclick="window.open('http://instagram.com/share?text=<?php echo urlencode(get_the_title($id)); ?>&url=<?php echo urlencode(get_permalink($id)); ?>','twitter-share-dialog','width=626,height=436');return false;"><i class="fa fa-instagram"></i></a></li>
    <?php } ?>
<?php }
}