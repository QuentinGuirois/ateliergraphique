(function($) {

    'use strict';

     // Logo Size

     wp.customize( 'wp_logo_size_number', function( value ) {
        value.bind( function( newval ) {
            $( '.navbar-wrapper .navfixed .container .fullcontainer .row .col-md-12 .mylogo img' ).css("width", newval );
        } );
    } );

    // Preloader

    wp.customize( 'wp_preloader_show_hide', function( value ) {
        value.bind( function( newval ) {
            if (newval === "show") {
                $(".overlay-1").removeClass("hide");
                $(".overlay-2").removeClass("hide");
            } else {
                $(".overlay-1").addClass("hide");
                $(".overlay-2").addClass("hide");
            }
        } );
    } );

    wp.customize( 'wp_preloader_button_text', function( value ) {
        value.bind( function( newval ) {
            $( '.overlay-1 .intro .myBtn' ).html( newval );
        } );
    } );

     // Cursor

     wp.customize( 'wp_cursor_show_hide', function( value ) {
        value.bind( function( newval ) {
            if (newval === "show") {
                $(".cursor").removeClass("hide");
            } else {
                $(".cursor").addClass("hide");
            }
        } );
    } );

    // Follow Me

    wp.customize( 'wp_follow_show_hide', function( value ) {
        value.bind( function( newval ) {
            if (newval === "show") {
                $(".header-follow").removeClass("hide");
            } else {
                $(".header-follow").addClass("hide");
            }
        } );
    } );

    wp.customize( 'wp_follow_text', function( value ) {
        value.bind( function( newval ) {
            $( '.header-follow p' ).html( newval );
        } );
    } );

    wp.customize( 'wp_follow_icon1_text', function( value ) {
        value.bind( function( newval ) {
            $( '.header-follow ul li .facebook .fa' ).attr("class", "fa " + newval);
        } );
    } );

    wp.customize( 'wp_follow_icon1_link', function( value ) {
        value.bind( function( newval ) {
            $( '.header-follow ul li .facebook' ).attr("href", newval);
        } );
    } );

    wp.customize( 'wp_follow_icon2_text', function( value ) {
        value.bind( function( newval ) {
            $( '.header-follow ul li .linkedin .fa' ).attr("class", "fa " + newval);
        } );
    } );

    wp.customize( 'wp_follow_icon2_link', function( value ) {
        value.bind( function( newval ) {
            $( '.header-follow ul li .linkedin' ).attr("href", newval);
        } );
    } );

    wp.customize( 'wp_follow_icon3_text', function( value ) {
        value.bind( function( newval ) {
            $( '.header-follow ul li .instagram .fa' ).attr("class", "fa " + newval);
        } );
    } );

    wp.customize( 'wp_follow_icon3_link', function( value ) {
        value.bind( function( newval ) {
            $( '.header-follow ul li .instagram' ).attr("href", newval);
        } );
    } );

    // Menu Info

    wp.customize( 'wp_menu_info_email_text', function( value ) {
        value.bind( function( newval ) {
            $( '.navinfo .navfixinfo .contact-block .email' ).prev().html( newval );
        } );
    } );
    
    wp.customize( 'wp_menu_info_email', function( value ) {
        value.bind( function( newval ) {
            $( '.navinfo .navfixinfo .contact-block .email' ).html( newval );
        } );
    } );

    wp.customize( 'wp_menu_info_tel_text', function( value ) {
        value.bind( function( newval ) {
            $( '.navinfo .navfixinfo .contact-block .tel' ).prev().html( newval );
        } );
    } );

    wp.customize( 'wp_menu_info_tel', function( value ) {
        value.bind( function( newval ) {
            $( '.navinfo .navfixinfo .contact-block .tel' ).html( newval );
        } );
    } );

    wp.customize( 'wp_menu_info_address_text', function( value ) {
        value.bind( function( newval ) {
            $( '.navinfo .navfixinfo .contact-block .address' ).prev().html( newval );
        } );
    } );

    wp.customize( 'wp_menu_info_address', function( value ) {
        value.bind( function( newval ) {
            $( '.navinfo .navfixinfo .contact-block .address' ).html( newval );
        } );
    } );

    // Footer Copyright

    wp.customize( 'wp_footer_copyright', function( value ) {
        value.bind( function( newval ) {
            $( '#footer .copyright span' ).html( newval );
        } );
    } );
    
})(jQuery);