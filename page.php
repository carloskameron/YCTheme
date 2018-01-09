

<?php get_header(); ?>



<div id="content" class="container" style="padding-top: 50px;">

 <?php if (have_posts()) : while (have_posts()) : the_post();?>
 <div  class="post">
   <h1 class="center-block center-text text-center Texto_Titulo" style=" margin-top: -20px; padding-bottom: 20px;" id="post-<?php the_ID(); ?>"><?php echo get_the_title();?></h1> 
  </br>
  <div class="entrytext">
   <?php the_content('<p class="serif">Leer el resto de esta página &raquo;</p>'); ?>
  </div>
 </div>
 <?php endwhile; endif; ?>
 
</div>



<style>
.Formularios_Yessica
{
margin-top: 6px;
 width: 100%;
}
</style>





<?php get_footer(); ?>