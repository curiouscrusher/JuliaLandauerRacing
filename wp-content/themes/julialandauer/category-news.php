<?php
/**
 *
 * This is the template for the articles page. 
 *
 * @package julialandauer
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="articles-page">

        <?php
        query_posts('cat=3');
        ?>

        <?php if (have_posts()) : ?>

          <?php while (have_posts()) : the_post(); ?> 

            <div class="articles-page-wrapper">

                <div class="articles-page__post">

                <a href="<?php the_permalink(); ?>" class="articles-page__post--title"><?php the_title(); ?></a>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="articles-page__post--button">Read More</a>

                </div>

                <div class="articles-page__image">
                  <?php the_post_thumbnail('articles-featured'); ?>
                </div>

            </div>

          <?php endwhile ?>

        <?php endif ?>
        
      </div><!-- /articles-page -->

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
