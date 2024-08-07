<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site-main">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

    <header id="header" class="header">
    <div class="header__content">
        <h1 class="header__title">Fleurs d’oranger & chats errants</h1>
        
        <button class="header__burger" aria-label="Menu Burger">

        <span class="burger__line"></span>
        <span class="burger__line"></span>
        <span class="burger__line"></span>
        
        </button>
    </div>
    
    <nav class="header__nav">
       
        <ul class="nav__list">
            <li><img src="<?php echo get_stylesheet_directory_uri() . '/sass/assets/images/mini_logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants" class="nav__logo"/></li>
            <li><a href="#story">Histoire</a></li>
            <li><a href="#characters">Personnages</a></li>
            <li><a href="#place">Lieu</a></li>
            <li><a href="#studio">Studio Koukaki</a></li>
            <li><img class="nav__logo" src="<?php echo get_stylesheet_directory_uri() . '/sass/assets/images/studio_koukaki.png'; ?>"</li>
        </ul>
    </nav>
</header>

</div><!-- #page -->
</body>
</html>
