<?php
/**
 * The sidebar containing the main widget area.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Team_Kawaii
 *
 */
		
if ( is_home () || is_page() || is_single() || is_archive ){ ?> 	
				<div id="sidebar" class="widget-area side-widget-area"role="complementary">     	
					<?php if(is_active_sidebar('the_sidebar')):?> 			
						<div class="sidebar-widgets">             
							<?php dynamic_sidebar('the_sidebar');?> 		
						</div>        
					 <?php endif; ?> 
				</div> <?php } 
	
?>
	
 -<aside id="secondary" class="widget-area" role="complementary">
 -	<?php dynamic_sidebar( 'sidebar-1' ); ?>
 -</aside><!-- #secondary -->
