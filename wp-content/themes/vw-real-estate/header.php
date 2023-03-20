<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Real Estate
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
  wp_body_open();
} else {
  do_action( 'wp_body_open' );
} ?>

<header role="banner">
  <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'vw-real-estate' ); ?></a>
  <div id="header">
    <div class="header-menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="logo">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                  <?php if( get_theme_mod('vw_construction_estate_logo_title_hide_show',true) != ''){ ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php } ?>
                  <?php else : ?>
                    <?php if( get_theme_mod('vw_construction_estate_logo_title_hide_show',true) != ''){ ?>
                      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php }?>
                  <?php endif; ?>
                <?php endif; ?>
                <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                ?>
                <?php if( get_theme_mod('vw_construction_estate_tagline_hide_show',true) != ''){ ?>
                  <p class="site-description">
                    <?php echo esc_html( $description ); ?>
                  </p>
                <?php }?>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <?php if( get_theme_mod( 'vw_construction_estate_call1','' ) != '') { ?>
              <p class="call-no"><a href="tel:<?php echo esc_url( get_theme_mod('vw_construction_estate_call1','') ); ?>"><?php echo esc_html(get_theme_mod('vw_construction_estate_call1',''));?></a></p>
            <?php }?>
          </div>
          <div class="col-lg-3 col-md-3">
            <?php if( get_theme_mod( 'vw_construction_estate_mail','' ) != '') { ?>
              <div class="row">
                <div class="col-lg-2 col-md-3">
                  <i class="<?php echo esc_attr(get_theme_mod('vw_construction_estate_email_icon','far fa-envelope')); ?>"></i>
                </div>
                <div class="col-lg-10 col-md-9">
                  <p class="same-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_mail','') ); ?></p>
                  <p class="diff-lay"><a href="mailto:<?php echo esc_html(get_theme_mod('vw_construction_estate_mail1',''));?>"><?php echo esc_html(get_theme_mod('vw_construction_estate_mail1',''));?></a></p>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="col-lg-3 col-md-3">
            <?php if( get_theme_mod( 'vw_construction_estate_location','' ) != '') { ?>
              <div class="row">
                <div class="col-lg-2 col-md-3">
                  <i class="<?php echo esc_attr(get_theme_mod('vw_construction_estate_location_icon','fas fa-map-marker-alt')); ?>"></i>
                </div>
                <div class="col-lg-10 col-md-9">
                  <p class="same-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_location','') ); ?></p>
                  <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_location1','') ); ?></p>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="menu-bar">
          <div class="row">
            <div class="<?php if( get_theme_mod( 'vw_construction_estate_search_hide_show',true) != '') { ?>col-lg-9 col-md-6 col-2"<?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
              <?php if(has_nav_menu('primary')){ ?>
                <div class="toggle-nav mobile-menu">
                  <button onclick="vw_construction_estate_menu_open_nav()" class="responsivetoggle"><i class="<?php echo esc_attr(get_theme_mod('vw_construction_estate_res_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-real-estate'); ?></span></button>
                </div>
              <?php } ?>
              <div id="mySidenav" class="nav sidenav">
                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-real-estate' ); ?>">
                  <?php 
                    if(has_nav_menu('primary')){
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) ); 
                    }
                  ?>
                  <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vw_construction_estate_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_construction_estate_res_close_menu_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-real-estate'); ?></span></a>
                </nav>
              </div>
            </div>
            <?php if(get_theme_mod('vw_construction_estate_search_hide_show',true)==1){ ?>
              <div class="col-lg-3 col-md-6 col-10">
                <div class="search-box">
                  <?php get_search_form(); ?>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<?php if(get_theme_mod('vw_construction_estate_loader_enable',true)==1){ ?>
  <div id="preloader">
    <div id="status">
      <?php $vw_construction_estate_theme_lay = get_theme_mod( 'vw_construction_estate_loader_icon','Two Way');
        if($vw_construction_estate_theme_lay == 'Two Way'){ ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/two-way.gif" alt="" role="img"/>
      <?php }else if($vw_construction_estate_theme_lay == 'Dots'){ ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/dots.gif" alt="" role="img"/>
      <?php }else if($vw_construction_estate_theme_lay == 'Rotate'){ ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rotate.gif" alt="" role="img"/>
      <?php } ?>
    </div>
  </div>
<?php } ?>
