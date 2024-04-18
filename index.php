<?php
$estiloPagina = 'home.css';

require_once('header.php')
?>
<body>
<script src='<?=get_template_directory_uri()?>./js/util/trailEffect.js'></script>

<section>
    <div class="post-background" id="post-background">
        <div class="post-stage">
        <?php
        // O loop começa aqui
        $args = array(
            'post_type' => 'post', // Define o tipo de postagem como 'post'
            'posts_per_page' => -1, // Mostra todas as postagens
        );

        $query = new WP_Query($args);

        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
                // Conteúdo de cada postagem vai aqui
                //logica que vai determinar o espaço de texto.
                $thumbnail_id = get_post_thumbnail_id();
                //tamanho da imagem
                $args = array( 360, 400 );

                $thumbnail_data = wp_get_attachment_image_src($thumbnail_id, $args);
                $content = get_the_content();
                $content_length = strlen($content);
                $postLength = 1700;
                
                if($thumbnail_data){
                    $thumbnail_height = $thumbnail_data[2];
                    if($thumbnail_height > 200 && $thumbnail_height < 300)
                    {
                        $postLength = 400;
    
                    }else if($thumbnail_height > 300){
                        $postLength = 200;
    
                    }
    
                }
              

                ?>
                <div class="post">
                <div class='post-head'>
                <a href="<?php the_permalink(); ?>">

                    <div class='post-head-title'>
                        <?php the_title(); ?>
                    </div>
                </a>

                    <div class='post-head-button-group'>
                    <img src="<?=get_template_directory_uri()?>/public/images/minimize.svg" alt="" height="20px" width="20px">
                    <img src="<?=get_template_directory_uri()?>/public/images/maximize.svg" alt="" height="20px" width="20px">
                    <img src="<?=get_template_directory_uri()?>/public/images/close.svg" alt="" height="20px" width="20px">
                    </div>
                </div>
                    <div class="post-body">
                        <div class="container-post-thumbnail">
                        <?php 
                        the_post_thumbnail($args) ?>
                        </div>
                        <div class="content">
                            <?php 
                                if($content_length > $postLength){
                                    $content_excerpt = substr($content, 0, $postLength);
                                    ?>
                                    <?=$content_excerpt?> <a href='<?php the_permalink() ?>'>Ler Mais</a>
                                    <?php
                                }else{
                                    echo $content;

                                }
                            ?>
                        </div>

                        <div class="post-footer">
                            <div class="comments">            
                                <a href="<?php the_permalink(); ?>">
                                    1 comment
                                </a>
                            </div>
                            <div class="post-flags">
                                <small><a href="">#windows</a></small>
                                <small><a href="">#doom</a></small>
                                <small><a href="">#weed</a></small>
                            </div>
                        </div>
                    </div>
                    </div>

                <?php
            endwhile;
        else :
            // Se não houver postagens
            echo 'Desculpe, nenhum conteúdo encontrado.';
        endif;
        ?>
        </div>
</section>

<div class='anime-fofinho'>
<img class='' src="<?=get_template_directory_uri()?>/public/images/umaru.png" alt="" height="150px" width="300px">

</div>

<div class='mecha-godzilla'>
<img class='' src="<?=get_template_directory_uri()?>/public/images/mecha-godzilla.png" alt="" height="150px" width="300px">

</div>
</body>
<?php
require_once('footer.php')

?>

