<?php 

/**
* Template Name: Custom Home  
* @package WordPress
* @subpackage FoxtonBlog
* @since FoxtonBlog 1.0
*/

?>
<?php  get_header() ?>

    <!-- Sessão do Conteúdo-->
    <?php 
    $feature = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 1, 
            'post_status' => 'publish'
        )
     );
    
    if( $feature->have_posts() ) :
        while ( $feature->have_posts() ) : $feature->the_post();
        $url_feature = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'destaque' );
        $category = get_the_category(get_the_ID());
        ?>
       
        <header class="masthead text-white text-center" style="background:url('<?php  echo $url_feature[0]; ?>')no-repeat center center;background-size:cover;">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 mb-3 mx-auto text-left"><span class="categoria"><?php echo $category[0]->cat_name; ?></span></div>
                    <div class="col-xl-12 mx-auto">
                        <h1 class="mb-5"><?php the_excerpt(); ?> <br><br></h1>
                    </div>
                </div>
            </div>
        </header> 
        <?php 

        endwhile;
        /* Restore original Post Data */
        wp_reset_postdata();
    else :
        // no posts found
    endif;

    ?>

    <section class="showcase">
    <div class="container-fluid p-0">
    
    <?php 
        $secondFeature = new WP_Query( 'showposts=1&offset=1' );
        if( $secondFeature->have_posts() ) :
            while ( $secondFeature->have_posts() ) : $secondFeature->the_post();
            $url_feature = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'segundoDestaque' );
            $category = get_the_category(get_the_ID());

            ?>

            <div class="row no-gutters">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image:url('<?php  echo $url_feature[0]; ?>');"><span></span></div>
                    <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                        <div class="text-left mb-4"><span class="categoria"><?php echo $category[0]->cat_name; ?></span></div>
                        <h6 class="mt-4"><?php the_title() ?> </h6>
                        <p class="lead mb-0 mt-5 segundo-destaque"><?php the_excerpt(); ?></p>
                        <div class="text-left mb-4 mt-4"><span><a class="ver-mais" href="<?php the_permalink() ?>" > VER MAIS </a></span></div>
                    </div>
            </div>
        <?php  endwhile;
            /* Restore original Post Data */
                wp_reset_postdata();
            else :
                // no posts found
        endif;

        $thirdFeature = new WP_Query( 'showposts=1&offset=2' );
            
        if( $thirdFeature->have_posts() ) :
            while ( $thirdFeature->have_posts() ) : $thirdFeature->the_post();
                $url_feature = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'segundoDestaque' );
                $category = get_the_category(get_the_ID());
        ?>
                <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image:url('<?php echo $url_feature[0]; ?>');"><span></span></div>
                    <div class="col-lg-6 my-auto order-lg-1 showcase-text">
                        <div class="text-left mb-4 mt-5"><span class="categoria"><?php echo $category[0]->cat_name; ?></span></div>
                        <h6 class="mt-4"><?php the_title() ?></h6>
                        <p class="lead mb-0 mt-5 segundo-destaque"><?php the_excerpt(); ?> </p>
                        <div class="text-left mb-4 mt-4"><span><a class="ver-mais" href="<?php the_permalink() ?>" > VER MAIS </a></span></div>
                    </div>
                </div>
        <?php 
            endwhile;
                /* Restore original Post Data */
                wp_reset_postdata();
            else :
                // no posts found
            endif;
        ?>

    </div>
    </section>

    <section class="mais-noticias text-center bg-light">
        <div class="container-fluid p-5">
            <div class="mt-5 mb-2 text-left"><h4>Veja Tambem</h4></div>

            <?php 
                $morePosts = new WP_Query( 'showposts=8&offset=3' );

                if( $morePosts->have_posts() ) :
                $i=0; 
                    while ( $morePosts->have_posts() ) : $morePosts->the_post();
                    $url_feature = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'verMais' );
                    $category = get_the_category(get_the_ID());
                    
                    include(locate_template('template-part/vermais.php'));

                    $i++;
                endwhile;
                    /* Restore original Post Data */
                    wp_reset_postdata();
                else :
                    // no posts found
                endif;

            ?>
            
        </div>
        <div class="text-center mb-4 mt-4"><span><a class="ver-mais" href="#" > TODOS </a></span></div>
    </section>

<?php get_footer(); ?>