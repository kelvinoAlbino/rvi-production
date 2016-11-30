<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<?php elegant_description(); ?>
<?php elegant_keywords(); ?>
<?php elegant_canonical(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<script type="text/javascript">
    document.documentElement.className = 'js';
</script>
<?php wp_head(); ?>
<!--[if lt IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img#logo, .slider_image img, .banner, .banner .readmore, .wrap .image img, .thumb div .image img, div.avatar span.overlay');</script>
<![endif]-->
<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86530761-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php body_class(); ?>>
<div class="top-header">
  <div class="container YBA_header_content">
    <strong>Tel:</strong> +27 (0) 11 608 4640    |    <strong>Email:</strong> <a href="mailto:info@rvi-group.com?subject=RVI - Website Query">info@rvi-group.com</a>
    <a href="https://www.facebook.com/Robertson-Ventilation-Industries-Pty-Ltd-165156040221928/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="https://twitter.com/robventind" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="https://www.linkedin.com/company/10848016?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10848016%2Cidx%3A1-1-1%2CtarId%3A1474366415942%2Ctas%3ARVI%20-%20Robertson%20" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
  </div>
</div>
<div class="nav-header">
<div class="nav-container">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php $logo = (get_option('simplepress_logo') <> '') ? get_option('simplepress_logo') : get_template_directory_uri().'/images/logo.png'; ?>
    <?php $smLogo = get_template_directory_uri().'/images/rvi_servlogonew.jpg'?>
    <img src="<?php echo esc_attr($smLogo) ?>" id="logo-divisions" class="slideDown"/></a>

    <div id="navwrap">
        </span>
        <?php $menuClass = 'nav superfish';
        $primaryNav = '';
        if (function_exists('wp_nav_menu')) {
            $primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );
        };
        if ($primaryNav == '') { ?>
            <ul class="<?php echo esc_attr( $menuClass ); ?>">
                <?php if (get_option('simplepress_home_link') == 'on') { ?>
                    <li <?php if (is_home()) echo('class="current_page_item"') ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','SimplePress') ?></a></li>
                <?php }; ?>

                <?php show_page_menu($menuClass,false,false); ?>
                <?php show_categories_menu($menuClass,false); ?>
            </ul> <!-- end ul.nav -->
        <?php }
        else echo($primaryNav); ?>

        <?php do_action('et_header_menu'); ?>

        <?php global $default_colorscheme, $shortname; $colorSchemePath = '';
        $colorScheme = get_option($shortname . '_color_scheme');
        if ($colorScheme <> $default_colorscheme) $colorSchemePath = strtolower($colorScheme) . '/'; ?>
        <br class="clear" />
        </span>
    </div><!-- #navwrap -->
</div>    
</div>
<div class="wrapper">
