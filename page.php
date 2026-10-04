<?php get_header(); ?>
<?php
$ufpb_page_classes = array(
    'corpo',
    'width-wrapper',
    'large-spacer',
);

if ( ufpb_oiticica_has_docentes_shortcode() ) {
    $ufpb_page_classes[] = 'ufpb-shortcode-docentes-page';
}

if ( ufpb_oiticica_has_responsive_shortcode() ) {
    $ufpb_page_classes[] = 'ufpb-shortcode-page';
}
?>
<div class="<?php echo esc_attr( implode( ' ', $ufpb_page_classes ) ); ?>" id="conteudo_pagina">
    <div class="corpo-grid">
        <div class="sidebar"> 
            <ul class="side-menu">
                <?php 
                    wp_nav_menu(   
                        array ( 
                            'theme_location' => 'main-menu',
                            'items_wrap' => '%3$s',
                            'container' => false,
                        ) 
                    ); 
                ?>
            </ul>             
            <?php          
                //não sei pq estava false
                if (true && has_children() OR $post->post_parent > 0) { ?>                

                    <div class="side-menu-categorias">
                        
                            <h2 class="menu-lateral-h2" href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>">
                                <?php
                                echo get_the_title(get_top_ancestor_id());
                                ?>
                            </h2>    
                        
                        <ul class="menu-lateral">
                            <?php 
                            $args = array(
                                'child_of' => get_top_ancestor_id(),
                                'title_li' => '',
                            )                    
                            ?>

                            <?php wp_list_pages($args); ?>
                        </ul>
                        
                    </div>
            <?php } ?>                
                    <?php 
                        //summon_side_menu();                        
                    ?>             
                            
        </div>
        <?php
        while ( have_posts() ) :
        the_post(); ?>
        <div class="content-grid">             
            <h1><?php the_title(); ?></h1>           

            <div class="the-content-container">
                <?php the_content(); ?>

                <p class="data-atualizado">Última atualização: <?php echo get_the_modified_time( 'l, j \d\e F \d\e Y' ); ?></p>
            </div>

            
            
                                
        <?php endwhile; ?>           

                       
        </div>
    </div> 
    </div>
</div>

<?php get_footer(); ?>