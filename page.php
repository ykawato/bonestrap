<?php get_header(); ?>



      <div class="row ">

        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


          <div class="jumbotron">
            <h1><?php the_title(); ?></h1>
            <p class="byline vcard"><?php
                printf( __( '<time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.  %4$s', 'bonestheme' ), get_the_time( 'Y-m-j' ), get_the_time( get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', ') );
            ?></p>

          </div>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <!-- end article section -->



<!-- コメント -->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseComment">
          コメント ( <?php comments_number( '0', '1', '%' ); ?> 件)
        </a>
      </h4>
    </div>
    <div id="collapseComment" class="panel-collapse collapse">
      <div class="panel-body">
        <?php comments_template(); ?>


      </div>
    </div>
  </div>



<?php 

?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>


        </div><!--/span-->
						<?php get_sidebar(); ?>


    </div><!--/row-->
<?php get_footer(); ?>