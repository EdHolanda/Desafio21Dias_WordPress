<?php
  /**
   * Tema construído no Desafio 21 Dias
   *
   * @link https://www.torneseumprogramador.com.br
   *
   * @package WordPress
   * @subpackage Desafio21Dias
   * @since Desafio 21 Dias 1.0
   */
  get_header();
  ?>
    <?php
      $args = array(
        'posts_per_page'=> 30,
        'post_type'=> 'post'
      );
      $the_query_post = new WP_Query($args);
      if($the_query_post->have_posts()){  ?>
        
        <div style="padding:50px">
          <table class="table" style="margin-top: 100px">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Imagem</th>
                <th scope="col">Titulo</th>
                <th scope="col">Conteúdo</th>
              </tr>
            </thead>
            <tbody>
      <?php      
            while ($the_query_post->have_posts()) {
              $the_query_post->the_post();
      ?>
            <tr>
              <th scope="row"><?php the_id(); ?></th>
              <td><?php the_post_thumbnail('thumbnail', array('style' => 'width: 100%; height: auto')); ?></td>
              <td><?php the_title(); ?></td>
              <td><?php the_content(); ?></td>
            </tr>
      <?php           
        //$i++;
          }// end while
      ?>
            </tbody>
          </table>
        </div>
    <?php
      }//
      else{ ?>
        <div class="text-center mt-4 alert alert-danger" role="alert">
            <p >Nenhum post encontrado!</p>
        </div>
        <?php           
      }//end if
    ?>
    </div>
  </div>
  </section>
<?php
get_footer();
?>