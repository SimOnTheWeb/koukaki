<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video class="banner__video" autoplay loop muted>
                <source src="<?php echo get_theme_file_uri() .'/assets/video/video.mp4'; ?>"
                    type="video/mp4">
            </video>
            <img class="banner__logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> "
                alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story">
            <h2>
                <span class="title__animation">L'</span>
                <span class="title__animation">histoire</span>
            </h2>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <!-- Ajout du swiper de la section characters -->
            <?php get_template_part('template-parts/characters') ;?>

            <article id="place" class="story__place">
                <div>
                    <h3>
                        <span class="title__animation">Le</span>
                        <span class="title__animation">lieu</span>
                    </h3>

                        <!-- Ajout des nuages avec mouvement de parallax dans la section Lieu -->
                        <div class="parallax-container">
                            <img class="big__cloud" src="<?php echo get_stylesheet_directory_uri().'/assets/images/big_cloud.png'; ?>" alt="gros nuage qui se déplace"/>
                            <img class="small__cloud" src="<?php echo get_stylesheet_directory_uri().'/assets/images/little_cloud.png'; ?>" alt="petit nuage qui se déplace"/>
                        </div>
                        

                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>
        <section id="studio" class="studio section animation">
            <h2>
                <span class="title__animation">Studio</span>
                <span class="title__animation">Koukaki</span>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

        <!-- Ajout de la section nomination au festival de Cannes -->
        <?php get_template_part( 'template-parts/nomination' ); ?>

    </main><!-- #main -->

<?php
get_footer();
