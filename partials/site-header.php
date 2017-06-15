<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wv' ); ?></a>

<header class="site-header" role="banner">

  <?php if ( is_front_page() && is_home() ) : ?>
    <h1 class="site-header__title">
      △
      <a class="site-header__title-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      △
    </h1>
  <?php else : ?>
    <p class="site-header__title">
      △
      <a class="site-header__title-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      △
    </p>
  <?php endif; ?>

  <?php
    wp_nav_menu(
      array (
        'menu' => 'site-nav',
        'container' => 'nav',
        'container_class' => 'site-nav',
        'menu_class' => 'site-nav__list',
        'menu_id' => FALSE,
        'depth' => 1,
        'walker' => new Site_Nav_Walker
      )
    );
  ?>
</header>