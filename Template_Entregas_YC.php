<?php
/*
Template Name: Plantilla Entregas YC
*/
?>

<!--Llamamos la función Header -->
<?php get_header(); ?>


    
	<!-- Comenzamos con el  Imágenes -->
	<div style="margin-top: 60px;" class="container animated fadeIn hidden-xs">
 		<div style="row">
 		 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" overflow: hidden;">
  		    <div class="row">
  		    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  					<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="visibility: visible">
       <li data-target="#myCarousel" data-slide-to="0" class="active" style="padding: 0; height: 5px; width: 5px;"></li>
      <li data-target="#myCarousel" data-slide-to="1" style="padding: 0; height: 5px; width: 5px;"></li>
      <li data-target="#myCarousel" data-slide-to="2" style="padding: 0; height: 5px; width: 5px;"></li>
    
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="">

      <div class="item active">
        <img src="http://www.yessicacruz.com/wp-content/uploads/2017/11/Brooklyn-NY-2016-.jpg" alt="Chania" style="width: 100%;">
      </div>

           <div class="item">
        <img src="http://www.yessicacruz.com/wp-content/uploads/2017/11/Canon-del-Sumidero-Chiapas-2016.jpg" alt="Chania" style="width: 100%;">
      </div>

       <div class="item">
        <img src="http://www.yessicacruz.com/wp-content/uploads/2017/11/Flatiron-Building-NY-2016.jpg" alt="Chania" style="width: 100%;">
      </div>

    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background:transparent;">
     <i class="fa fa-angle-left izquierda" aria-hidden="true"></i> 
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background: transparent;">
      <i class="fa fa-angle-right derecha" aria-hidden="true"></i> 
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
  		    		
  		    	</div>
  		    	
  		    </div>
   		 
		

  		   
  		 </div>
        </div>
    </div>
    
    <!-- Comenzamos con el  Imágenes Movil -->
	<div style="width: 100%; margin-top:14vh;" class=" animated fadeIn hidden-lg hidden-md hidden-sm">
 		 
 		  					<div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" style="visibility: visible">
      <li data-target="#myCarousel2" data-slide-to="0" class="active" style="padding: 0; height: 5px; width: 5px;"></li>
      <li data-target="#myCarousel2" data-slide-to="1" style="padding: 0; height: 5px; width: 5px;"></li>
      <li data-target="#myCarousel2" data-slide-to="2" style="padding: 0; height: 5px; width: 5px;"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="">

     
      <div class="item active">
        <img src="http://www.yessicacruz.com/wp-content/uploads/2017/11/Brooklyn-NY-2016-.jpg" alt="Chania" style="width: 100%;">
      </div>

           <div class="item">
        <img src="http://www.yessicacruz.com/wp-content/uploads/2017/11/Canon-del-Sumidero-Chiapas-2016.jpg" alt="Chania" style="width: 100%;">
      </div>

       <div class="item">
        <img src="http://www.yessicacruz.com/wp-content/uploads/2017/11/Flatiron-Building-NY-2016.jpg" alt="Chania" style="width: 100%;">
      </div>

  
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev" style="background:transparent;">
    <i class="fa fa-angle-right izquierda" aria-hidden="true"></i> 
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next" style="background: transparent;">
      <i class="fa fa-angle-left derecha" aria-hidden="true"></i> 
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
  		 </div>





<div class="container" style="margin-top: 40px;">
	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-5">
			
				<div style="width: 100%; color: black; opacity: 0.5;" class="letraEuropaLight" style="text-align: left;">
					<br>
					<br>
					<br>
					<br>
					<H6>YESSICA CRUZ </H6>
				</div>
		 	</div>
			<div class="col-lg-7">
			<h1 class="letraEuropaLight">GALERÍA</h1>
				<h6 class="letraEuropaLight">—   TIENDA</h6>
				<br>
				<p class="justificado_izquierda">
				Es increíble contar historias por medio de fotografías y hacer click por placer, esto me enriquece el alma y me motiva para seguir creando. Pronto podrán ser parte de esta experiencia y llevar con ustedes un pedacito de estos viajes a su hogar, oficina etc.
					
					<br>
					<br>
				</p>
				
				<h6 class="letraEuropaLight" style="opacity: 0.6">—   STAY ALERT</h6>
				<br>
				<p class="justificado_izquierda"  style="opacity: 0.6">
					
					Recibe una notificación cuando la tienda esté disponible y sé de los primeros en adquirir fotografías exclusivas.
					<br>
				
				</p>
				
				<div class="" style="width:100%;">
				
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
	</div> 
</div>


  		    	
  		  


<style>
	
	#fld_7779415Label
	{
		visibility: collapse;
	}
	
	.form-control
	{
		width: 50% !important;
	}
	
  .Espacio_Entre_Rows
  {
    margin-top: 10px;
  }

  .Texto_imagenes_index
  {
   padding-top: 140px;
  }
  
/*  @media (min-width: 280px) {
  .Texto_imagenes_index
  {
   padding-top: 10px;
  }
  }
  */
  .imagenes_index
  {
  background-repeat: no-repeat; 
  background-position: center;   
  background-size:cover;   
  height: 520px; 
  width: 100%;
  }
  
  .Link_Acceso
  {
  font-family: "ChronicleDisplayItalic";
    font-style: italic;
   color: black;
   cursor: pointer;
  }
  
 
    .derecha
	{
		right: 50%;
		margin-right: -10px;
		font-size: 16px;
		position: absolute;
		top: 50%;
		z-index: 5;
		display: inline-block;
		margin-top: -10px;
	}
	
	
    .izquierda
	{
		right: 50%;
		margin-left: -10px;
		font-size: 16px;
		position: absolute;
		top: 50%;
		z-index: 5;
		display: inline-block;
		margin-top: -10px;
	}
	
	
</style>


<!--Scripts que van a llevarme a mis accesos-->
<script>

$(document).ready(function(){
	
	
    	
    	 $( ".Acceder_Amor_Eterno" ).click(function() {
  			var url = "/wedding"
  			window.open(url, '_self');
		 });
		 
		 $( ".Acceder_Sobre_Mi" ).click(function() {
  			var url = "/sobre-mi"
  			window.open(url, '_self');
		 });
		 
		 $( ".Acceder_Galería" ).click(function() {
  			var url = "/galeria"
  			window.open(url, '_self');
		 });
		 
		 $( ".Acceder_Testimonios" ).click(function() {
  			var url = "/Testimonios"
  			window.open(url, '_self');
		 });
		 
		 	$('.carousel').carousel({
      			pause: "false",
				interval: 190 * 10
			});
		 
    });
</script>













<!--Llamamos la función Footer -->
<?php get_footer(); ?>
