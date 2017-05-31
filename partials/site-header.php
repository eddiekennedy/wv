<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wv' ); ?></a>

<header class="site-header" role="banner">

  <?php if ( is_front_page() && is_home() ) : ?>
    <h1 class="site-header__title">
      <a class="site-header__title-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </h1>
  <?php else : ?>
    <p class="site-header__title">
      <a class="site-header__title-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </p>
  <?php endif; ?>

  <nav id="site-navigation" class="site-navigation" role="navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
      <?php esc_html_e( 'Primary Menu', 'wv' ); ?>
    </button>
    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
  </nav>

</header>