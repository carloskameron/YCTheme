<?php
/*
Template Name: Plantilla Wedding
*/
?>

<!--Llamamos la función Header -->
<?php get_header(); ?>

<!--Vista Laptop, Tablets -->
<div class="container" style="margin-top: 5vh;">
	<div class="row">
		
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs">
				</br>
				</br>
				</br>
				</br>
				</br>
				</br>
				</br>
				</br>
				</br>
				</br>

				</br>
				<h7 style="font-style: italic"> Jaime Sabines </h7>
			</div>
			
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			
					<div class="hidden-lg hidden-md hidden-sm" style="margin-top:30px;">
						</br>
				
						

			    	</div>
		
					
				<h1 class="letraEuropaLight text-uppercase">
					    <?php 
						echo get_the_title();
        			    ?>
        			    </br>
        			    <h6 class="letraEuropaLight"> &#8212; &nbsp; BODAS </h6>
        			    
        	    <p class="text-justify letraCrhonicleDisplay " style="">
					 </br>
					 </br>
					 </br>
					Te quiero como para invitarte a pisar hojas secas una de estas tardes. Te quiero como para salir a caminar, hablar del amor, mientras pateamos piedritas. Te quiero como para volvernos chinos de risa, ebrios de nada y pasear sin prisa las calles. Te quiero como para ir contigo a los lugares que más frecuento, y contarte que es ahí donde me siento a pensar en ti. Te quiero como para escuchar tu risa toda la noche. Te quiero como para no dejarte ir jamás. Te quiero como se quiere a ciertos amores, a la antigua, con el alma y sin mirar atrás.
			    </p>
			</div>
		</div>
	
	
	</div>
      <div class="row">
     
<?php 
//Capturando los primeros 50 post
$posts = get_posts( array( 'posts_per_page' => 50, 'category_name' => 'Amor Eterno', ) );

//Comienzo el Foreach por cada post
foreach ( $posts as $_post ) {
	echo '<div style="margin-top: 50px;" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">';
  		  if ( has_post_thumbnail( $_post->ID ) ) {
  		      $thumbnail_id = get_post_thumbnail_id($_post->ID);
 		      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id,'full', true);
		        
		     echo '<a href="' . get_permalink( $_post->ID ) . '" title="' . esc_attr( $_post->post_title ) . '">';
		      
	       		 echo '<img style="margin-bottom: 20px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 img-responsive" src="'. $thumbnail_url[0] . '"/>' ;    
		         echo '<p class=" h3 text-center center-text block-center center-block" style="margin-top: 20px;">';
	       		 echo esc_attr( $_post->post_title );
	       		 echo '</br>';
	       		 echo '<p class="h6 LetraApercuLight text-center">';
	       	         echo get_secondary_title($_post->ID );
	       	         echo '</p>';
	       	         echo '<p class="h6 LetraApercuLight text-center">';
                         require('conexion.php');
	                 $query="SELECT post_date FROM wpgu_posts WHERE ID = $_post->ID " ;
	                 $resultado=$mysqli->query($query);
                         while($row=$resultado->fetch_assoc()){
	       	        
}
	       	       echo '</p>';
	         echo '</a>'; 
    }
    echo '</div>';
}

?>

 </div>
</div>

<div style="margin-top:10px;">
	</br>
	</br>
	</br>
</div>


<!--Llamamos la función Footer -->
<?php get_footer(); ?>