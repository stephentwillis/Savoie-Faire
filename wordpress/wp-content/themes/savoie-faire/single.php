        <?php get_header(); ?>

        <?php get_sidebar(); ?>

        <!-- WRAPPER -->
        <div class="wrapper">
            
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <!-- HERO -->
            <section id="hero" class="module-hero bg-dark-30" data-background="<?php the_post_thumbnail_url('full'); ?>">
            
                <!-- HERO TEXT -->
                <div class="hero-caption">
                    <div class="hero-text">
                        <h1 class="hero-title font-alt"><?php the_title(); ?></h1>
                        <p class="hero-subtitle font-serif">By <?php the_author(); ?> on <?php the_date(); ?></p>                     
                    </div>
                </div>
                <!-- /HERO TEXT -->

            </section>
	    <!-- /HERO -->
            <?php endwhile; ?>
            <?php endif; ?>


            <!-- single -->
            <section class="module">
                <div class="container-fluid container-custom">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">

                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                            <!-- article -->
                            <article class="portfolio-post post">
                                <?php the_content(); ?>
                            </article>
                            <!-- end article -->
                            <?php endwhile; ?>
                            <?php endif; ?>

                        </div><!-- end column -->
                    </div> <!-- end row -->
                </div>
            </section>
            <!-- end single -->

        <?php get_footer(); ?>