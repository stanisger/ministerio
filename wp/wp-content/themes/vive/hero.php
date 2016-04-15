<!--Hero-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <?php if( have_rows('eyecatcher') ): ?>
   <?php while( have_rows('eyecatcher') ): the_row(); 
       // vars producto
      $title = get_sub_field('title');
      $descript = get_sub_field('descript');
      $imagen= get_sub_field('imagen');
      $eyecatcher= get_sub_field('eyecatcher');

      ?>
        <div class="section no-pad-bot" id="index-banner" 
             style="background-image: url(<?php the_field('imagen'); ?>);">
                <div class="container">
                    <h1 class="text_h center header cd-headline letters type">
                        <span><?php echo $title; ?> </span> 
                        <span class="cd-words-wrapper waiting">
                        <?php if( have_rows('word') ): ?>
                        <?php while( have_rows('word') ): the_row(); 
                               // vars producto
                              $word = get_sub_field('word');
                              ?>
                                 <b class="is-visible"><?php echo $word; ?> </b>
                            <?php endwhile; else: ?>
                            <h1>No se encontraron Articulos</h1>
                            <?php endif; ?>
                        </span>
                    </h1>
                    <h2 class="center" ><?php echo $descript; ?></h2>
                    <a href="<?php echo $link; ?>" class="center">Ver más</a>   
                </div>
        </div>
    <?php endwhile; else: ?>
    <h1>No se encontraron Articulos</h1>
    <?php endif; ?>
<?php endwhile; else: ?>
<h1>No se encontraron Articulos</h1>
<?php endif; ?>
                 