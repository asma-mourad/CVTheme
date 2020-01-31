<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CVTheme
 */

get_header();
?>
  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
		<?php if (has_header_image()) {  echo get_header_image_tag(array(
		'width'  => '100%',
         'height' => 'auto')); ?>
          <div class="w3-display-bottomleft w3-container w3-text-black">
		<?php } else { ?>
		  <div class="w3-display-bottomleft w3-container w3-text-black w3-display-bottomleft-noimage">
		<?php } ?>
            <h2 id="bloginfo"><?php bloginfo( 'name' );?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo get_theme_mod('job_title', cvtheme_get_customiser_default( 'facebook-link'));?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo get_theme_mod('location', cvtheme_get_customiser_default( 'location'));?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo get_theme_mod('email', cvtheme_get_customiser_default( 'email'));?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo get_theme_mod('phone', cvtheme_get_customiser_default( 'phone'));?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
		   <?php
			$loop = new WP_Query(
			array(
				'post_type' => 'skills',
				'orderby' => 'meta_value_num',
				'meta_key' => 'Percentage',
				'order' => 'desc',
							)
		);
		while ( $loop->have_posts() ) : $loop->the_post(); 
		the_title('<p>','</p>');
		?>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo get_post_custom_values('Percentage')[0] .'%'; ?>"><?php echo get_post_custom_values('Percentage')[0] .'%'; ?></div>
          </div>
		<?php
		endwhile;
		wp_reset_postdata();
		?>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
		  <?php
			$loop = new WP_Query(
			array(
				'post_type' => 'languages',
				'orderby' => 'meta_value_num',
				'meta_key' => 'Percentage',
				'order' => 'desc',
							)
		);
		while ( $loop->have_posts() ) : $loop->the_post(); 
		the_title('<p>','</p>');
			?>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?php echo get_post_custom_values('Percentage')[0] .'%'; ?>;"></div>
          </div>
		  <?php
		endwhile;
		wp_reset_postdata();
		?>

          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
	  <!-- Work experience part -->
	 <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
	 
	  <?php
		$loop = new WP_Query(
			array(
				'post_type' => 'work-experience',
				'orderby' => 'meta_value_num',
				'meta_key' => 'Order',
				'order' => 'asc',
							)
		);
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
 
		<div class="w3-container">
		<?php the_title('<h5 class="w3-opacity"><b>', '</b></h5>'); ?>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo get_post_custom_values('From Date')[0]; ?> - 
		  <?php if (strtolower(get_post_custom_values('To Date')[0]) == 'current')
		  {?><span class="w3-tag w3-teal w3-round"><?php echo get_post_custom_values('To Date')[0]; ?></span>	
		  <?php } else { 
		  echo get_post_custom_values('To Date')[0];?>
		  	  
		  <?php } ?>
		  </h6>	
			  
		<?php the_content(); ?>
		<hr>
		</div>		 
		<?php endwhile;
		wp_reset_postdata();
		?>

       
      </div>

 <!-- Education part -->
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
		<?php
		$loop = new WP_Query(
			array(
				'post_type' => 'education' ,
				'orderby' => 'meta_value_num',
				'meta_key' => 'Order',
				'order' => 'asc',
							)
		);
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="w3-container">
		<?php the_title('<h5 class="w3-opacity"><b>', '</b></h5>'); ?>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo get_post_custom_values('From Date')[0]; ?> <?php
			if (get_post_custom_values('To Date')[0] <> ''){ echo '- ' . get_post_custom_values('To Date')[0]; }?></h6>
          <?php the_content(); ?>
          <hr>
		  </div>
		  <?php endwhile;
		wp_reset_postdata();
		?>

      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>


<?php

get_footer();
