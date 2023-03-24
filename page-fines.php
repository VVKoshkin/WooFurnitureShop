<?php
/*
Template Name: Fines Page 
*/
?>
<?php get_header(); ?>

<div class="layout_padding fines_section">
    <div class="container">
        <div class="row justify-content-between">
        <?php
        $query = new WP_Query( [ 'post_type' => 'product' ] );
        while ( $query->have_posts() ) {
            $query->the_post();
            $product = wc_get_product();
            ?>
                <div class="card col-4">
                    <div class="product-card-prices">
                        <?php 
                          echo '<span class="product-card__price">'.$product->get_price_html().'</span>';
                        ?>
                    </div>
                    <div class="product-card-categories d-flex align-items-center justify-content-start flex-wrap w-100">
                      <?php
                        foreach($product->get_category_ids() as $catId) {
                          echo '<p class="product-card-categories__item">'.get_the_category_by_ID($catId).'</p>';
                        }
                      ?>
                    </div>
                    <div class="carousel slide product-card-slider product-card-slider--<?php echo $product->get_id(); ?>" data-ride="carousel">
                      <div class="carousel-inner">
                        
                        <?php $doOnce = true;
                        foreach($product->get_gallery_image_ids() as $imageId) {
                          $sourceUrl = wp_get_attachment_image_url($imageId, size:'full');
                        ?>
                        <div class="carousel-item <?php echo $doOnce ? 'active':''; ?>">
                          <img class="d-block w-100" src="<?php echo $sourceUrl;  ?>" alt="slide">
                        </div>
                        
                        <?php $doOnce = false;                      
                        } ?>
                        </div>
                      <a class="carousel-control-prev" href=".product-card-slider--<?php echo $product->get_id(); ?>" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href=".product-card-slider--<?php echo $product->get_id(); ?>" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->get_name(); ?></h4>
                        <p class="card-text"><?php echo $product->get_short_description(); ?></p>
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <a class="btn btn-primary" href="#" role="button">В корзину</a>
                            <a class="btn btn-success" href="<?php echo $product->get_permalink(); ?>" role="button">Посмотреть</a>
                        </div>
                    </div>
                </div>
            
            <?php
        }
        wp_reset_postdata(); // сброс
        ?>
            </div>
    </div>
</div>

<?php get_footer(); ?>