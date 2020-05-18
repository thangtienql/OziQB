<!-- Card -->
<div class="card">
    <img class="card-image" <?php the_post_thumbnail('blog-thumbnails') ?>
        <div class="card-body">
            <h4 class="card-title"><?php the_title()?></h4>
            <p><?php the_content() ?></p>
        </div>
</div>