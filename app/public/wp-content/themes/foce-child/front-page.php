<?php
get_header();
?>

<main id="primary" class="site-main">

<section class="banner scroll">
    <img class="image logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
    <video id="background-video" class="banner hidden" autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>" alt="vidéo d'animation démonstrative">
        <source type="video/mp4" src="<?php echo get_template_directory_uri() . '/assets/images/video.mp4'; ?>">
    </video>
</section>

<section id="story" class="story scroll">
    <h2 class="animated-title story__title scroll">L'histoire</h2>
    <article class="story__article scroll">
        <p><?php echo get_theme_mod('story'); ?></p>
    </article>
    <?php
    $args = array(
        'post_type' => 'characters',
        'posts_per_page' => -1,
        'meta_key' => '_main_char_field',
        'orderby' => 'meta_value_num',
    );
    $characters_query = new WP_Query($args);
    ?>
    <h3 class="characters-title scroll">Les personnages</h3>
    <article id="characters" class="characters-container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide main-character scroll">
                    <?php
                    $main_character = $characters_query->posts[0];
                    echo '<figure>';
                    echo get_the_post_thumbnail($main_character->ID, 'full');
                    echo '<figcaption>' . $main_character->post_title . '</figcaption>';
                    echo '</figure>';
                    $characters_query->next_post();
                    ?>
                </div>
                <?php
                while ($characters_query->have_posts()) {
                    $characters_query->the_post();
                    echo '<div class="swiper-slide scroll">';
                    echo '<figure>';
                    echo get_the_post_thumbnail(get_the_ID(), 'full');
                    echo '<figcaption>';
                    the_title();
                    echo '</figcaption>';
                    echo '</figure>';
                    echo '</div>'; // End swiper-slide
                }
                ?>
            </div>
            <!-- Pagination (if needed) -->
            <div class="swiper-pagination"></div>
        </div>
    </article>
    <article id="place" class="scroll">
        <div>
            <h3>Le Lieu</h3>
            <p><?php echo get_theme_mod('place'); ?></p>
        </div>
    </article>
</section>

<section id="studio" class="scroll">
    <h2 class="animated-title scroll">Studio Koukaki</h2>
    <div class="scroll">
        <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
        <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
    </div>
</section>

<section id="oscar" class="scroll">
    <h3 class="oscar__title scroll">Fleurs d’oranger & chats errants<span> est nominé aux Oscars Short</span> Film Animated de 2022 !</h3>
    <img class="oscar__logo scroll" src="<?php echo get_template_directory_uri() . '/assets/images/Oscar.png'; ?>">
</section>
</main><!-- #main -->

<?php
get_footer();
?>
