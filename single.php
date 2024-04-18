<?php 
get_header();
 ?>   
    <body>
        <div class="container-single">
            <div id="content" class="site-content">
                <div id="primary" class="content-area">
                        <div class="container">
                                    <?php 
                                        while( have_posts() ) : the_post();
                                        ?>
                                        <div class="page-item">
                                            <div class='bg'>
                                                <header class='win-head'>
                                                    <?php the_title(); ?>
                                                </header>
                                                <article class='article'>
                                                <?php the_content(); ?>
                                                </article>                    

                                        <?php

                                        if( comments_open() || get_comments_number() ){
                                            comments_template();
                                        }
                                        ?>
                                            </div>
                                        <?php
                                        endwhile;   
                                            
                                    ?>            
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </body> 

<?php get_footer(); ?>