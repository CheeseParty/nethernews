<?php the_post(); ?>

<div class="single-header" style="background:url(<?= wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>) 50%">
    <div class="single-header-cover" >
        <div class="single-header-content">
            <h1 class="single-header-title"><?php the_title(); ?></h1><br>
            <span class="single-header-author">Par <?php the_author(); ?></span>
        </div>
    </div>
</div>
<div class="single-content">
    <?php the_content(); ?>
</div>

<?php /*
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
        <h2 class="post-title"><a class="post-title-link" href="<?php the_permalink(); ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?= remove_accents( c_the_category() . ': ' . the_title('', '', false) ); ?></a></h2>
    </div><!--.post-header-->

    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

    <div class="post-footer">
        Posté le <?php the_time( 'j/m/y' ); ?> 
        par <?php the_author(); ?> 
        dans <?php the_category('&nbsp;') ?> | 
        <?php comments_popup_link( 'Poster un commentaire', '1 commentaire', '% commentaires' ); ?>
    </div>
</div><!-- .post-->

*/