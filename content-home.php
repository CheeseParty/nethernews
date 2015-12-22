<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="post-header">
                <h2 class="post-title"><a class="post-title-link" href="<?php the_permalink(); ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?= c_the_category() . ': ' . the_title('', '', false); ?></a></h2>
            </div><!--.post-header-->

            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

            <div class="post-footer">
                Posté le <?php the_time( 'j/m/y' ); ?> 
                par <?php the_author(); ?> 
                dans <?php the_category('&nbsp;') ?> | 
                <?php comments_popup_link( 'Poster un commentaire', '1 commentaire', '% commentaires' ); ?>
            </div>
        </div><!-- .post-->

    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
        <nav class="navigation index">
            <div class="alignleft"><?php next_posts_link( 'Article précédents' ); ?></div>
            <div class="alignright"><?php previous_posts_link( 'Articles suivants' ); ?></div>
        </nav><!--.navigation-->
    <?php else : ?>
<?php endif; ?>