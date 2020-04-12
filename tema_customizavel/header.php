<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php
    if(is_home() || is_front_page() ) {
        bloginfo('name'); 
    }elseif(is_sigle() ) {

    }elseif(is_page() ){

    }
    
    ?>
    </title>
    <meta name="Description" content="<?php bloginfo ("description") ?>">
    <meta name= "keywords" content="tgd studio, TGD, empresa júnior, empresa de jogos, empresas juniors UFC">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="TopFaixa"></div>

    <div class="Logomarca">
        <?php the_custom_logo(); ?>
    </div>