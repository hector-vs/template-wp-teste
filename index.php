<?php get_header() ?>
    <header>
        <h1>TEMA EDUCAÇÃO</h1>
    </header>
    <main>
        <h4>Postagens</h4>
        <div class="posts">
            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        echo '<div class=post><div class=img></div><div class=content><h3>';
                        the_title();
                        echo '</h3><p>';
                        the_content();
                        echo '</p></div></div>';
                    }
                }
            ?>
    </main>
    <footer>
        <p class="pfooter">Tema Wordpress desenvolvido por Hector Saldivar e Giovanna Nunes.</p>
    </footer>
<?php get_footer() ?>