<?php
$estiloPagina = 'home.css';

require_once('header.php')
?>
<body>
<section>
    <div class="post-background">
        <?php
        // O loop começa aqui
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                // Conteúdo de cada postagem vai aqui
                ?>
                <div class="post">
                <div class='post-head'>
                    <div class='post-head-title'>
                        <?php the_title(); ?>
                    </div>

                    <div class='post-head-button-group'>
                    <img src="<?=get_template_directory_uri()?>/public/images/minimize.svg" alt="" height="20px" width="20px">
                    <img src="<?=get_template_directory_uri()?>/public/images/maximize.svg" alt="" height="20px" width="20px">
                    <img src="<?=get_template_directory_uri()?>/public/images/close.svg" alt="" height="20px" width="20px">
                    </div>
                </div>
                    <div class="post-body">
                        <h1><?php the_title(); ?></h1>
                        <img class='image-post' src="<?=get_template_directory_uri()?>/public/images/teste-fofinho.jpg" alt="" height="400px">
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <div class="post-flags">
                            <small><a href="">#windows</a></small>
                            <small><a href="">#doom</a></small>
                            <small><a href="">#weed</a></small>
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
<img class='' src="<?=get_template_directory_uri()?>/public/images/lucy.png" alt="" height="150px" width="300px">

</div>
</body>
<?php
require_once('footer.php')

?>



