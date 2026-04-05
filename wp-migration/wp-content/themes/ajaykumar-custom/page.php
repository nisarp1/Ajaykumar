<?php
/**
 * The template for displaying all pages
 */
get_header(); ?>

<section class="page-title-section bg-royal-blue pt-150px pb-100px overflow-hidden position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="alt-font text-white fw-700 ls-minus-1px mb-0"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="page-content-section py-100px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
