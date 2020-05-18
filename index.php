<?php get_header() ?>
<!-- Post Service -->
<div id="services" class="cards-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
                <h2>Business Growth Services</h2>
                <p class="p-heading p-large">We serve small and medium sized companies in all tech related industries with high quality growth services which are presented below</p>
            </div> <!-- end of col -->
       	</div> <!-- end of row -->
            <div class="row">
            	<?php 
				    $the_query = new WP_Query(array(
				        'category_name' => 'service'
				    ));
				?>
            	<div class="col-lg-12">
					<?php if($the_query -> have_posts()) : ?>
						<?php while ($the_query-> have_posts()) : $the_query-> the_post();?>
							<?php get_template_part('template-parts/service', get_post_format());?>
						<?php endwhile ?>
					<?php endif ?>
            	</div>
            </div>
 	</div> <!-- end of container -->
</div> <!-- end of cards-1 -->


<!-- Details 1 -->
<div class="basic-1">
	<div class="container">
		<div class="row">
			<?php 
				$the_query_detail_1 = new WP_Query(array(
					'category_name' => 'about-detail-1'
				))
			 ?>
			 <?php if($the_query_detail_1 -> have_posts()) : ?>
			 	<?php while ( $the_query_detail_1 -> have_posts()) : $the_query_detail_1 -> the_post();?>
			 		<?php get_template_part('template-parts/detail-1', get_post_format()); ?>
			 	<?php endwhile ?>
			 <?php endif ?>
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of basic-1 -->

 <!-- Details 2 -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
	        	<?php 
					$the_query_detail_2 = new WP_Query(array(
						'category_name' => 'about-detail-2'
					))
				 ?>
				 <?php if($the_query_detail_2 -> have_posts()) : ?>
				 	<?php while ( $the_query_detail_2 -> have_posts()) : $the_query_detail_2 -> the_post();?>
				 		<?php get_template_part('template-parts/detail-2', get_post_format()); ?>
				 	<?php endwhile ?>
				 <?php endif ?>
        	</div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of details 2 -->

<?php get_template_part('template-parts/slide-customer', get_post_format());?>

<?php get_template_part('template-parts/about-team', get_post_format());?>
<?php get_template_part('template-parts/contact', get_post_format());?>


<?php get_footer() ?>