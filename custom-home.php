<?php 

/**
* Template Name: Custom Home  
* @package WordPress
* @subpackage FoxtonBlog
* @since FoxtonBlog 1.0
*/

?>
<?php  get_header() ?>


 <!-- Header - Notícia Destaque -->
 <header class="py-5 bg-image-full" style=" height:870px;background-image: url('https://unsplash.it/1900/1080?image=1076');">
	  <div class="container">
        <div class="mensagem-display">
          <div class="d-flex flex-row">
            <div class="p-2 destaque-categoria">Fábrica</div>
          </div>	 
            <p class='destaque-texto'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
        </div>]
    </div>
    </header>

    <!-- Sessão do Conteúdo-->

      <div class="container-fluid p-md-0">
		    <div class="row no-gutters">
          <div class="mix col-lg-6 col-md-6">
            One of three columns
          </div>
          
				  <div class="mix col-lg-6 col-md-6">
				    <img class='destaque-2-imagem ' src="https://picsum.photos/945/637?image=1075" />
          </div>
        </div>

        <div class="row no-gutters">
          <div class="mix col-lg-6 col-md-6">
            <img class='destaque-2-imagem ' src="https://picsum.photos/945/637?image=1075" />
          </div>
        
				  <div class="mix col-lg-6 col-md-6">
            One of three columns
				  </div>
		    </div>
		</div>

    <div class="container-fluid">

      <div class="row"><p class="veja-tambem"> Veja Também</p> </div>

      <div class='row no-gutters'>
       
          <div class="col-md-3">
            <div class="veja-tambem-imagem text-center align-middle">
              <img class="img-fluid" src="https://picsum.photos/300/300?image=1061" />
            </div>

          </div>

          <div class="col-md-3">
            <div class="veja-tambem-imagem text-center">
                <img class="img-fluid" src="https://picsum.photos/300/300?image=1062" />
            </div>
          </div>


          <div class="col-md-3">
            <div class="veja-tambem-imagem text-center">
              <img class="img-fluid" src="https://picsum.photos/300/300?image=1063" />
            </div>
          </div>

          <div class="col-md-3">
            <div class="veja-tambem-imagem text-center">
              <img class="img-fluid" src="https://picsum.photos/300/300?image=1064" />
            </div>
          </div>

        </div>
    </div>
     

        <h1>Section Heading</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      </div>


    <!-- Image Section - set the background image for the header in the line below -->
    <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
      <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
      <div style="height: 200px;"></div>
    </section>

    <!-- Content section -->
    <section class="py-5">
      <div class="container">
        <h1>Section Heading</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      </div>
    </section>

<?php get_footer(); ?>

