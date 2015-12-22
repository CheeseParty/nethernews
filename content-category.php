<?php
# Obtention du nom de la catégorie pour le réutiliser
$cat = c_the_category();
?>

    <h1 class="cat-title">Categorie: <?= $cat ?></h1><br>

    <p class="cat-description"><?= category_description( get_cat_ID( $cat ) ); ?></p>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="post-header">
                <h2 class="post-title"><a class="post-title-link" href="<?php the_permalink(); ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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