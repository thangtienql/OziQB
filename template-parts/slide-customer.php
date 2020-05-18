<!-- Customers -->
    <div class="slider-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h5>Đối Tác Tin Cậy</h5>
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                <?php 
                                    $arg = array(
                                        'post_type' => 'slide_swiper',
                                    );
                                    $get_slider_swiper = new WP_Query($arg);
                                ?>
                                <?php while($get_slider_swiper->have_posts()) : $get_slider_swiper->the_post(); ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'custom-size'); ?>
                                <div class="swiper-slide">
                                    <div class="image-container">
                                        <img class="img-responsive" src="<?php echo $featured_img_url; ?>" alt="alternative">
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_postdata();?>
                            </div> <!-- end of swiper-wrapper -->
                        </div> <!-- end of swiper container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of customers -->