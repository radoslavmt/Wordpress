<?php

// this comment is registering the template with wp
// so wordpress is aware that this exist
/*
Template Name: Special Layout
*/

get_header();

    if(have_posts()) :
        while(have_posts()) : the_post();
?>
    <article class="post page">
        <h2><?php the_title(); ?></h2>
        
        <!-- info-box -->
        <div class="info-box">
            <h4>Disclaimer Title</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore repudiandae laboriosam autem eum libero sed distinctio! Harum tenetur commodi pariatur.</p>
        </div><!-- /info-box -->

        <?php the_content(); ?>
    </article>
<?php
    endwhile;

    else :
        echo '<p>No content found</p>';

    endif;

    get_footer();
?>