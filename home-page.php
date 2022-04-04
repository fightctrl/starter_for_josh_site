<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>
    <section class="container-fluid aboutbg text-center">
        <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2>
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
            <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>
            <div class="blocker"></div>
        </div> <!-- container -->
    </section>
    <section class="container-fluid articlesbg">
        <div class="container">
            <h3 class="text-center"><?php the_field('titleforarticles'); ?></h3>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('articleimage1'); ?>">
                    <h4 class="article-title"><?php the_field('articletitle1'); ?></h4>
                    <p class="date"><?php the_field('articledate1'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt1'); ?></p>
                    <a class="readmore" href="<?php the_field('readmore1'); ?>">CONTINUE READING</a>
                </div> <!-- col-md-4 -->
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('articleimage2'); ?>">
                    <h4 class="article-title"><?php the_field('articletitle2'); ?></h4>
                    <p class="date"><?php the_field('articledate2'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt2'); ?></p>
                    <a class="readmore" href="<?php the_field('readmore2'); ?>">CONTINUE READING</a>
                </div> <!-- col-md-4 -->
                <div class="col-md-4">
                    <img class="img-fluid" src="<?php the_field('articleimage3'); ?>">
                    <h4 class="article-title"><?php the_field('articletitle3'); ?></h4>
                    <p class="date"><?php the_field('articledate3'); ?></p>
                    <p class="article-p"><?php the_field('articleexcerpt3'); ?></p>
                    <a class="readmore" href="<?php the_field('readmore3'); ?>">CONTINUE READING</a>
                </div> <!-- col-md-4 -->
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
<?php get_footer();?>