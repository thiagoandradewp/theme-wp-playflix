   
<?php get_header(); ?>


<div class="playflix_tarjas">
    <div class="playflix_categorias">
        <?php the_taxonomies(); ?> <br>
        <?php the_category(); ?>
</div>
    <div class="playflix_duracao"><?php the_field('tempo_de_duracao');?></div>
</div>
<h1><?php the_title(); ?></h1>
   <div class="playflix_video_single">
   <?php the_field('embed_de_video'); ?>
   </div>

<p>
    <?php the_field('descricao'); ?>
</p>


<?php get_footer(); ?>