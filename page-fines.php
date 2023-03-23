<?php
/*
Template Name: Fines Page 
*/
?>
<?php get_header(); ?>

<div class="layout_padding fines_section">
    <div class="container">
        <div class="row row-cols-3">
        <?php
        $query = new WP_Query( [ 'post_type' => 'product' ] );
        while ( $query->have_posts() ) {
            $query->the_post();
            ?>
                <div class="card col">
                    <div class="product-card-prices">
                        <span class="product-card__price striked">599 Р</span>
                        <span class="product-card__price">499 Р</span>
                    </div>
                    <div class="product-card-categories d-flex align-items-center justify-content-start flex-wrap w-100">
                        <p class="product-card-categories__item">мебель</p>
                        <p class="product-card-categories__item">товар</p>
                        <p class="product-card-categories__item">дерево</p>
                    </div>
                    <div class="carousel slide product-card-slider" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="<?php echo get_template_directory_uri(  ).'/images/test/1.jpg'; ?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="<?php echo get_template_directory_uri(  ).'/images/test/2.jpg'; ?>" alt="Second slide">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href=".product-card-slider" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href=".product-card-slider" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Стул такой</h4>
                        <p class="card-text">Бамбуковый, ой то есть дубовый</p>
                        <div class="d-flex align-items-center justify-content-between w-100">
                            <a class="btn btn-primary" href="#" role="button">В корзину</a>
                            <a class="btn btn-success" href="#" role="button">Посмотреть</a>
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