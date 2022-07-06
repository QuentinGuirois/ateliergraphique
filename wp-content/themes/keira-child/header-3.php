<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
		<?php wp_head(); ?>
	</head>
    <body <?php body_class(); ?>>
        
        <?php wp_body_open(); ?>

        <section class="site-content">

        <?php 
			    if(get_theme_mod( 'wp_cursor_show_hide') === 'show' ) { ?>
                
					<!-- start cursor -->

                    <div class="cursor"></div>

                   <!-- End  Cursor -->

				<?php } else { ?>
				<?php } ?>

            <!-- start section navbar -->

            <div class="navbar-wrapper none-sq-price">
                <div class="navfixed">
                    <div class="container">
                        <div class="fullcontainer">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mylogo">
                                        <a class="logo logo-light" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                            <?php
                                            if (has_custom_logo()) {
                                                echo '<img src="' . wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0] . '" alt="' .  get_bloginfo('name') . '">';
                                            } else {
                                                echo get_bloginfo('name');
                                            }
                                            ?>            
                                        </a>
                                        <a class="logo logo-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                            <?php
                                            if (has_custom_logo()) {
                                                echo '<img src="' . get_theme_mod('wp_second_logo_img') . '" alt="' .  get_bloginfo('name') . '">';
                                            } else {
                                                echo get_bloginfo('name');
                                            }
                                            ?>            
                                        </a>
                                    </div>
                                    <div class="iconfix">
                                        <a href="#" class="cd-nav-trigger" onclick="return false;">Menu<span class="cd-icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainmenunav">
                    <div class="cd-primary-nav">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <nav class="navbar navbar-expand-lg">
                                        <div class="navbar-collapse">
                                           <?php keira_menu(); ?>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-md-6">
                                    <div class="navinfo">
                                        <div class="navfixinfo">
                                            <div class="row">
                                            <div class="col-md-12">
                                                    <div class="testtest">
                                                        <div class="contact-block">
                                                            <h4 class="maintitle"><?php echo get_theme_mod( 'wp_menu_info_email_text', 'EMAIL' ); ?></h4>
                                                            <span class="email"><?php echo get_theme_mod( 'wp_menu_info_email', 'Support@example.com' ); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="testtest">
                                                        <div class="contact-block">
                                                            <h4 class="maintitle"><?php echo get_theme_mod( 'wp_menu_info_tel_text', 'CALL US' ); ?></h4>
                                                            <span class="tel"><?php echo get_theme_mod( 'wp_menu_info_tel', '700 001 70 16' ); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="testtest">
                                                        <div class="contact-block">
                                                            <h4 class="maintitle"><?php echo get_theme_mod( 'wp_menu_info_address_text', 'ADDRESS' ); ?></h4>
                                                            <span class="address"><?php echo get_theme_mod( 'wp_menu_info_address', '405, Royal Square, Nr.' ); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End section navbar -->
            
            <?php
                if(get_theme_mod( 'wp_preloader_show_hide') === 'show' ) { ?>
            
                    <!-- start section overlay site web -->

                    <div class="overlay-1">
                        <p class="screen"><?php echo get_bloginfo('name') ?></p>
                        <div class="intro">
                            <img class=src="img/Portrait2.svg" alt="logo">
                        <button class="myBtn" onclick="fadeOut()"><?php echo get_theme_mod( 'wp_preloader_button_text' , get_bloginfo('name') ); ?></button>
                        </div>
                    </div>
                    <div class="overlay-2">
                    </div>

                    <!-- End section overlay site web -->

                <?php } else { ?>

                <?php } ?>

            <?php
                if(get_theme_mod( 'wp_follow_show_hide') === 'show' ) { ?>

                    <!-- start section header follow -->

                    <div class="header-follow">
                        <ul>
                            <li>
                                <a class="facebook" href="<?php echo get_theme_mod( 'wp_follow_icon1_link' , '#' ); ?>"><i class="fa <?php echo get_theme_mod( 'wp_follow_icon1_text' , 'fa-facebook' ); ?>"></i></a>
                            </li>
                            <li>
                                <a class="linkedin" href="<?php echo get_theme_mod( 'wp_follow_icon2_link' , '#' ); ?>"><i class="fa <?php echo get_theme_mod( 'wp_follow_icon2_text' , 'fa-linkedin' ); ?>"></i></a>
                            </li>
                            <li>
                                <a class="instagram" href="<?php echo get_theme_mod( 'wp_follow_icon3_link' , '#' ); ?>"><i class="fa <?php echo get_theme_mod( 'wp_follow_icon3_text' , 'fa-instagram' ); ?>"></i></a>
                            </li>
                        </ul>
                        <p><?php echo get_theme_mod( 'wp_follow_text' , 'Follow Me' ); ?></p>
                    </div>

                    <!-- End section header follow -->

                <?php } else { ?>
                    
                <?php } ?>
