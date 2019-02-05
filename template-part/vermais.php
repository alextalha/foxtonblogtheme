<?php

echo ($i == 0 || $i == 4 )?  "<div class='row'>" : "" ;
?>
<div class="col-lg-3 col-xl-3 offset-xl-0">
    <div class="mx-auto mais-noticias-item mb-5 mb-lg-0"><img class="img-fluid mb-3" src="<?php echo $url_feature[0]; ?>">
        <div class="mb-4 mt-2 text-left"><span class="tags"><?php the_tags('#') ?></span></div>
            <h5 class="text-left"><?php the_title() ?></h5>
            <p class="font-weight-light text-left mb-5"><?php echo custom_excerpt(get_the_excerpt()); ?></p>
    </div>
</div>

<?php 
echo ( $i == 3 || $i == 8  )?  "</div>" : "" ;
