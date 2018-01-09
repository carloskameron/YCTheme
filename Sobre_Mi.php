<?php
/*
Template Name: Plantilla Sobre Mí
*/
?>


<!--Llamamos la función Header -->
<?php get_header(); ?>
 
 
 <div style="margin-top: 40px;">
 	&nbsp;
 </div>
 
 
<div style="margin-top: 10px;">
	
</div>
   <!-- Sobre Mi -->
   <!--Contenedor-->
   <div class="container animated FadeIn Espacio_Entre_Rows">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">    
           
           
            <!--Derecha-->
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" style="margin-top: -24px;">
          
            <h1 class="letraEuropaLight"> SOBRE MI </h1>
             <h6 class="letraEuropaLight"> &#8212; &nbsp; YESSICA CRUZ </h6>
            <p class=" text-justify Espacio_Entre_Titulo_y_parrafo"> 
		   Soy una fotógrafa apasionada con mi trabajo, me encanta documentar la vida de las personas a través de mi cámara, conocer nuevas culturas, nuevas historias y aprender de ellas. Disfruto de pequeñas cosas como tomar una taza de café todas las mañanas, la naturaleza, los días lluviosos, expresarme por medio de la pintura y la música.


			</p>
			
			<p class=" text-justify Espacio_Entre_Titulo_y_parrafo"> 
		Una de las mejores decisiones que he tomado fue vivir en Madrid; dejar todo y solo irme con mis ganas de aprender. Viajar y trascender por medio de mi pasión me hizo conocer y ver el mundo desde otra perspectiva, tanto profesional como personal, regresé a México con todas las ganas de plasmar lo aprendido en cada historia.
		    
            </p>
            
            	<p class=" text-justify Espacio_Entre_Titulo_y_parrafo"> 
		  

Para mí la fotografía es una forma de revivir el pasado, una forma de volver a sentir, de expresar y contar historias; creo en la luz como el elemento principal para poder dar vida a las texturas, los colores y las emociones.
            </p>
            
            </div>
            
              <!--Espacio Muerto-->
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
             &nbsp;
            </div>
            
              <!--Izquierda-->
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
             <img class="Acceder_Sobre_Mi" style="width: 100%; cursor:pointer;" src="http://www.yessicacruz.com/wp-content/uploads/2017/09/sobremi.jpg">
            </div>
           
         
            
           
         </div>
      </div>
   </div>


  <!-- NewsLetter -->
   <!--Contenedor-->
   <div class="container animated FadeIn Espacio_Entre_Rows">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">    
            <!--Izquierda-->
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 hidden-xs">
             <h1 class="letraEuropaLight"> NEWSLETTER </h1>
			 </br>
			 <p class="LetraApercuLight"> 
			 Te Invito a que compartamos historias, consejos y recomendaciones.
			 </p>
			 </br>
			 <input type="text" name="FirstName" value="Nombre"             style="width: 100%;  padding: 3px;"><br>
        </br>
        <input type="text" name="FirstName" value="Correo Electrónico" style="width: 100%; padding: 3px;"><br>
            </div>
            
             <!--Espacio Muerto-->
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
             &nbsp;
            </div>
            
             <!--Derecho Noticias-->
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
               <div style="width: 100%; background-color: #E9E9E9; padding-top: 100px; padding-bottom: 100px; ">
               	      

<?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>
	<?php 
		while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			
			<h3 class="text-center center-text block-center center-block"> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h3> 
			 <h5 class="text-center center-text block-center center-block LetraApercuLight"> <?php the_date(); ?> <h5>
	<?php 
		endwhile;
	wp_reset_postdata();
?>
               </div>
            </div>
         </div>
      </div>
   </div>

</br>

<!--Llamamos la función Footer -->
<?php get_footer(); ?>