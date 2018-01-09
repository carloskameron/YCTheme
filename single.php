<!--Llamamos la función Header -->
<?php get_header(); ?>

<!--Iniciamos el contenedor-->
<div class="container">

	<!--Obteniendo el Título de la publicación
	<h1 class="center-block text-center" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
	</br>
	<small> <?php the_time('F jS, Y') ?> </small>
	</h1>
	</br>
	</br>
	-->
	<!--Row donde va la imagen Thumbnail-->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden">	
			<!--Obteniendo la Imagen Thumbnail-->
			<?php
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
			
			$Direccion_Imagen_Thumb = $thumb_url[0];
			 echo '<img src='.$Direccion_Imagen_Thumb.' style="width: 100%;">';
			?>
		</div>
	</div>
	
	</br>
	</br>

	<!--Row donde va todo el contenido (Imágenes, textos que Yessica escribe-->
	<div class="row">
		<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		 <h1 class="center-text text-center block-center"> <?php echo get_the_title();?></h1> 
		 </br>
		 </br>
		</div>-->
	
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          
        <?php
			if (have_posts()) :
  			 while (have_posts()) :
   	          the_post();
              the_content();
             endwhile;
            endif;
        ?>
          
		</div>
	</div>

</div>



<!--Llamamos la función Footer -->
<?php get_footer(); ?>

