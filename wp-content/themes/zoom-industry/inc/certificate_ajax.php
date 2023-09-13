<?php

function consultaCertificado(){

    $serial = $_POST['serial'];
    $serialArray = explode(';', $serial);

    $args = array(
        'post_type' => 'certificados',
        'posts_per_page' => -1,
        'meta_key'		=> 'serial',
	    'meta_value'	=> $serialArray
      );

    $the_query = new WP_Query( $args );

    if($the_query->have_posts() && !empty($serial)){

        while($the_query->have_posts()):
            $the_query->the_post();

            $certificados[] = array(
                'serial' => get_field('serial'),
                'nome' => get_field('nome'),
                'modelo' => get_field('modelo'),
                'instalacao' => get_field('instalacao'),
                'garantia' => get_field('garantia'),
                'certified' => get_field('certified'),
                'status' => get_field('status'),
                'descricao' => get_field('descricao')
            );

        endwhile;

        $result = [
            'cert' => $certificados
        ];

        return wp_send_json_success($result);

    } else {
        $result = [
            'response' => 'Nenhum certificado encontrado.'
        ];

        return wp_send_json_error($result);
    }

exit;
}


add_action('wp_ajax_consultaCertificado', 'consultaCertificado');
add_action('wp_ajax_nopriv_consultaCertificado', 'consultaCertificado');


function admin_form_import_csv() {
  
        ?>
        <h4>Importar Certificados</h4>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="anexo" id="anexo" required>
            <input type="submit" name="import_cert" class="button button-primary" value="<?php _e('Importar Certificados'); ?>" />
        </form>
        
        <?php
}
 
add_action( 'views_edit-certificados', 'admin_form_import_csv');

function func_import_cert() {
    if(isset($_POST['import_cert'])) {
        $tmpName = $_FILES['anexo']['tmp_name'];
        if(!empty($tmpName)) {
            $certificados = array_map('str_getcsv', file($tmpName));
            if(is_array($certificados)){
                unset($certificados[0]);
                foreach($certificados as $cert){

                    $certArray = explode(';', $cert[0]);

                    $args = array(
                        'post_type' => 'certificados',
                        'posts_per_page' => -1,
                        'meta_query' => array(
                            'relation' => 'AND',
                            array(
                                'key'     => 'serial',
                                'value'   => $certArray[0],
                                'compare' => '=',
                            ),
                            array(
                                'key'     => 'certified',
                                'value'   => $certArray[5],
                                'compare' => '=',
                            )
                        ),
                    );
                    $hasCertifiedAndSerial = new WP_Query( $args );

                    

                    // VALIDAÇÃO DO UPLOAD CERTIFICADO
                    if($hasCertifiedAndSerial->have_posts()){

                        $post = $hasCertifiedAndSerial->post;

                        update_post_meta(
                            $post->ID,
                            'serial',
                            $certArray[0]
                        );
                        update_post_meta(
                            $post->ID,
                            'nome',
                            $certArray[1]
                        );
                        update_post_meta(
                            $post->ID,
                            'modelo',
                            $certArray[2]
                        );
                        update_post_meta(
                            $post->ID,
                            'instalacao',
                            $certArray[3]
                        );
                        update_post_meta(
                            $post->ID,
                            'garantia',
                            $certArray[4]
                        );
                        update_post_meta(
                            $post->ID,
                            'certified',
                            $certArray[5]
                        );
                        update_post_meta(
                            $post->ID,
                            'status',
                            $certArray[6]
                        );
                        update_post_meta(
                            $post->ID,
                            'descricao',
                            $certArray[7]
                        );

                    //VALIDAÇÃO DO CADASTRO MANUAL DO CERTIFICADO
                    } else {

                        $postarr     = [
                            'post_title'   => $certArray[0],
                            'post_status'  => 'publish',
                            'post_type'    => 'certificados'
                        ];
                        $new_post_ID = wp_insert_post($postarr, true);


                        update_post_meta(
                            $new_post_ID,
                            'serial',
                            $certArray[0]
                        );
                        update_post_meta(
                            $new_post_ID,
                            'nome',
                            $certArray[1]
                        );
                        update_post_meta(
                            $new_post_ID,
                            'modelo',
                            $certArray[2]
                        );
                        update_post_meta(
                            $new_post_ID,
                            'instalacao',
                            $certArray[3]
                        );
                        update_post_meta(
                            $new_post_ID,
                            'garantia',
                            $certArray[4]
                        );
                        update_post_meta(
                            $new_post_ID,
                            'certified',
                            $certArray[5]
                        );
                        update_post_meta(
                            $new_post_ID,
                            'status',
                            $certArray[6]
                        );
                        update_post_meta(
                            $new_post_ID,
                            'descricao',
                            $certArray[7]
                        );
                    }
                }
            }
        }
    }
}
 
add_action( 'admin_init', 'func_import_cert' );