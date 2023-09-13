<?php
/**
 * Template name: Encontre um parceiro
 */

$getPais = $_GET['pais'];
$getEstado = $_GET['estado'];
$getTipo = $_GET['tipo'];
$getOrder = $_GET['order'];

if(isset($getPais)):
    $metaQuery[] = [
        'key'	 	=> 'pais',
        'value'	  	=> array($getPais),
        'compare' 	=> 'IN',
    ];
endif;
if(isset($getEstado)):
    $metaQuery[] = [
        'key'	 	=> 'estado',
        'value'	  	=> array($getEstado),
        'compare' 	=> 'IN',
    ];
endif;
if(isset($getTipo)):
    $metaQuery[] = [
        'key'	 	=> 'tipo',
        'value'	  	=> array($getTipo),
        'compare' 	=> 'IN',
    ];
endif;

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                        if($metaQuery){
                            $query_args = array(
                                'post_type'              => 'parceiros',
                                'posts_per_page'         => '12',
                                'post_status'            => 'publish',
                                'meta_query'             =>array(
                                    'relation'		=> 'AND',
                                    $metaQuery
                                ),
                                'paged'                  => $paged,

                            );
                        } else {
                            $query_args = array(
                                'post_type'              => 'parceiros',
                                'posts_per_page'         => '12',
                                'post_status'            => 'publish',
                                'paged'                  => $paged,

                            );
                        }

if(isset($getOrder)):
    $query_args = array_merge($query_args, [
        'meta_key' => $getOrder,
        'orderby' => 'meta_value',
        'order' => 'ASC',
    ]);
endif;

$the_query = new WP_Query( $query_args );

$total = $the_query->found_posts;

get_header();

?>
<main id="content" class="main-content internal find-partner" role="main">

    <section class="partner-top">
        <?php $image = get_field('imagem_topo');

        if( !empty( $image ) ): ?>

            <img class="bg" width="50px" height="50px" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="wrap">
                        <div class="left">
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>
                        <div class="right">

                        </div>
                   </div>
               </div>
           </div>
       </div>
    </section>

    <section class="partner-filter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
                     <?php the_field( 'texto_filter'); ?>
                    </div>

                    <?php get_template_part('template-parts/filter-partners'); ?>

                </div>
            </div>
        </div>
    </section>

    <section class="partner-result">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="head">
                        <p><?php echo $total; ?> resultados</p>
                        <div class="selector">
                            <div class="form-group">
                                <select class="form-control" id="inputOrder">
                                    <option value="">Ordenar por</option>
                                    <option value="pais" <?php echo isset($getOrder) && $getOrder == 'pais' ? 'selected' : ''; ?>>País</option>
                                    <option value="estado" <?php echo isset($getOrder) && $getOrder == 'estado' ? 'selected' : ''; ?>>Estado</option>
                                    <option value="categoria" <?php echo isset($getOrder) && $getOrder == 'categoria' ? 'selected' : ''; ?>>Categoria</option>
                                    <option value="tipo" <?php echo isset($getOrder) && $getOrder == 'tipo' ? 'selected' : ''; ?>>Tipo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <?php  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php $categories = get_the_terms( get_the_ID(), 'parceiro_cat' );  ?>
                        <div class="block" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
                            <div class="inner">
                                <div class="name">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                    <figure>
                                        <?php the_post_thumbnail(); ?>
                                    </figure>
                                    <?php endif; ?>
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <?php if ( ! empty( $categories ) ): ?>
                                <div class="cat <?php if ( ! empty( $categories ) ) {echo esc_html( $categories[0]->name ) ;} ?>">
                                    <p>
                                        <span class="icon"><i></i></span>
                                        <span class="text"><?php if ( ! empty( $categories ) ) {echo esc_html( $categories[0]->name ) ;} ?></span>
                                    </p>
                                </div>
                                <?php endif; ?>
                                <div class="info">
                                    <address>
                                        <?php if( get_field('endereco') ): ?>
                                            <div class="address">
                                                <div class="wrap-address">
                                                    <?php the_field( 'endereco'); ?>
                                                </div>

                                            </div>
                                        <?php endif; ?>
                                        <div class="links">
                                            <?php if( get_field('e-mail') ): ?>
                                                <a href="mailto:<?php the_field( 'e-mail'); ?>" target="_blank" rel="noopener noreferrer" class="mail">
                                                    <?php include get_template_directory().'/dist/images/icons/icon-mail2.svg'; ?>
                                                </a>
                                            <?php endif; ?>
                                            <?php if( get_field('site') ): ?>
                                                <a href="<?php the_field( 'site'); ?>" target="_blank" rel="noopener noreferrer" class="site">
                                                    <?php include get_template_directory().'/dist/images/icons/icon-link.svg'; ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>

                                    </address>
                                    <div class="detail">
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver Detalhes</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php endwhile; ?> <?php wp_reset_query(); ?>
                        <?php else: ?>
                            <div class="text-center">
                                <p>Nenhum parceiro encontrado.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="pagination-partner" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0" data-aos-duration="800">
                        <?php
                            global $the_query;

                            $big = 999999999; // need an unlikely integer
                            echo '<div class="navigation">';
                                echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'prev_text' => __('Anterior'),
                                'next_text' => __('Próxima'),
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $the_query->max_num_pages
                                ) );
                            echo '</div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-cta">
        <?php $image = get_field('imagem_cta');

        if( !empty( $image ) ): ?>

            <img class="bg" width="50px" height="50px" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wrap-text" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
                        <?php the_field( 'texto_cta'); ?>
                        <?php
                            $link = get_field('botao_cta');

                            if( !empty( $link ) ):
                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>


                                <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr( $link_target ); ?>" title="<?php echo esc_html( $link['title'] ); ?>" class="btn btn-primary"><?php echo esc_html( $link['title'] ); ?></a>

                            <?php endif;
                        ?>
                    </div>


                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>
