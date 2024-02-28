<!-- Tableau des personnages -->

<article id="characters" class="characters__swiper">
    <h3>
        <span class="title__animation">Les</span>
        <span class="title__animation">personnages</span>
    </h3>

    <?php
    // Définition des arguments pour la requête WP_Query
    $args = array(
        'post_type' => 'characters', // Type de publication à récupérer
        'posts_per_page' => -1, // Nombre de publications à récupérer (-1 signifie toutes les publications)
        'meta_key'  => '_main_char_field', // Clé des métadonnées à utiliser pour le tri
        'orderby'   => 'meta_value_num', // Tri par la valeur numérique des métadonnées
    );

    // Création de la nouvelle requête WP_Query
    $characters_query = new WP_Query($args);
    ?>
        
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php
                // Boucle sur les publications retournées par la requête
                while ( $characters_query->have_posts() ) {
                    $characters_query->the_post(); // Configuration de la publication globale

                    // Début du slide
                    echo '<div class="swiper-slide">';

                    // Début de la figure
                    echo '<figure>';

                    // Affichage de l'image à la une de la publication
                    echo get_the_post_thumbnail( get_the_ID(), 'full' );

                    // Début de la légende
                    echo '<figcaption>';

                    // Affichage du titre de la publication
                    the_title();

                    // Fin de la légende
                    echo'</figcaption>';

                    // Fin de la figure
                    echo '</figure>';

                    // Fin du slide
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</article>
