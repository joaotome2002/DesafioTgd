<?php

#Personaliza a tela de login
function PersonalizandoLogin() { ?>
    <style type="text/css">
        body.login {background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);}
        body.login div#login .massage {margin-bottom: 0;}
        body.login div#login h1 {background: #fff; padding: 10px; border-radius: 10px 10px 0 0;}
        body.login div#login form#loginform {margin-top: 0; border-radius: 0 0 10px 10px;}
        body.login div#login p#nav {display:none;}
        body.login div#login p#backtoblog {display:none;}

        #login h1 a, .login h1 a {background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);height:65px;width:320px;background-size: 320px 65px;background-repeat: no-repeat;}
    </style>
 
<?php }
add_action( 'login_enqueue_scripts', 'PersonalizandoLogin' );


#Ocultar a barra de ferramentas
function OcultarBarra() {
return false;
}
add_filter("show_admin_bar","OcultarBarra");


#Adicionando suporte de logomarca ao tema
add_theme_support( 'custom-logo', array(
    'height'      => 200,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

#Adicionar background ao site
add_theme_support('custom-background');


#Linkar o CSS
wp_enqueue_style('style', get_stylesheet_uri() );

