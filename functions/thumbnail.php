<?php

function thumbnail()
{
    //imagem para o destaque
    add_image_size( 'destaque', 1316, 597, true );
    add_image_size('segundoDestaque', 792,651,true );
    add_image_size('verMais', 425,425,true );

}

add_theme_support( 'post-thumbnails' );

add_action( 'after_setup_theme', 'thumbnail', 0 );



