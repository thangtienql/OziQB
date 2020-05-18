<!-- About -->
    <div id="about" class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>About The Team</h2>
                    <p class="p-heading p-large"></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <?php 
                        $arg = array(
                            'post_type' => 'about_team',
                        );
                        $get_team = new WP_Query($arg);
                    ?>
                    <?php while($get_team->have_posts()) : $get_team->the_post(); ?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID()); ?>
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="<?php echo $featured_img_url; ?>" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><strong><?php the_title() ?></strong></p>
                        <p class="job-title"><?php the_content() ?></p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="https://www.facebook.com/tienfptpoly" target="_blank">
                                    <i class="fas fa-circle fa-stack-2x facebook"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <i class="fas fa-circle fa-stack-2x twitter"></i>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> <!-- end of social-icons -->
                    </div> <!-- end of team-member -->
                    <?php endwhile; wp_reset_postdata();?>
                    <!-- end of team member -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of about -->