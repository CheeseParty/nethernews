<?php 

# Inclusion du header
get_header();

# Inclusion des différents modèles de pages
if ( is_front_page() && is_home() ) {
    include('content-home.php');
} elseif ( is_category() ) {
    include('content-category.php');
} else {
    echo '<div class="single-bshadow">';
        include('content-single.php');
    echo '</div>';
}

# Inclusion du sidebar
get_sidebar();

# Inclusion du footer
get_footer();