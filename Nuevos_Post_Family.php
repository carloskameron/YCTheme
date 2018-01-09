<?php
/*
Template Name: Plantilla Family
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
				<h7 style="font-style: italic"> George Moore </h7>
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
        			    <h6 class="letraEuropaLight"> &#8212; &nbsp; FAMILIA </h6>
        			    
        	    <p class="text-justify letraCrhonicleDisplay " style="">
					 </br>
					 </br>
					 </br>
					"A man travels the world over un search of what hi needs, and resturns home to find it". 
			    </p>
			</div>
		</div>
	
	
	</div>
      <div class="row">
     
<?php 
//Capturando los primeros 50 post
$posts = get_posts( array( 'posts_per_page' => 50, 'category_name' => 'Family', ) );

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