        <?php get_header(); ?>

        <?php get_sidebar(); ?>

        <!-- WRAPPER -->
        <div class="wrapper">
            
            <?php if (!is_front_page()) { ?>

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <!-- HERO -->
            <section id="hero" class="module-hero bg-dark-30" data-background="<?php the_post_thumbnail_url('full'); ?>">

                <!-- HERO TEXT -->
                <div class="hero-caption">
                    <div class="hero-text">
                        <h1 class="hero-title font-alt"><?php the_title(); ?></h1>
                        <?php 
                            $subtitle = get_post_meta(get_the_ID(), 'subtitle', true);

                            if (!empty($subtitle)) { 
                        ?>
                        <p class="hero-subtitle font-serif"><?php echo $subtitle ?></p>                        
                        <?php } ?>                        
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

                                <?php
                                    $categories = get_the_category(); 
                                    $category = $categories[0]->cat_name;                                    
                                ?>
                            </article>
                            <!-- end article -->
                            <?php endwhile; ?>
                            <?php endif; ?>

                            <?php 

                                $args = array(
                                    'category_name' => $category,
                                    'orderby' => 'date'
                                );
                               
                                $posts = get_posts($args);

                                if ($posts) {
                                    foreach ($posts as $post) : setup_postdata($post) 
                            ?>

                            <!-- POST -->
                            <article class="post">
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail('full'); ?>
                                </div>
                                <div class="post-header">
                                    <h2 class="post-title font-alt">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="post-meta">
                                        By <a href="#"><?php the_author(); ?></a> on <?php the_date(); ?>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <a class="post-more" href="<?php the_permalink(); ?>">Read more →</a>
                                </div>
                            </article>
                            <!-- POST -->
                                    
                            <?php
                                    endforeach; 
                                    wp_reset_postdata();
                                }
                            ?>
                        </div><!-- end column -->
                    </div> <!-- end row -->
                </div>
            </section>
            <!-- end single -->

            <?php } else { ?>
            
            <!-- HERO -->
            <section id="hero" class="module-hero bg-dark-30 js-fullheight" data-background="<?php bloginfo('template_url') ?>/assets/images/homepage-hero.jpg">
            </section>
	        <!-- /HERO -->
            
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <!-- section -->
            <section class="module">
                <div class="container-fluid container-custom">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">                               
                        <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end section -->
            <?php endwhile; ?>
            <?php endif; ?>

            <?php } ?>

        <?php get_footer(); ?>