<?php


class OpportunityRecordController
{
    public function create(WP_REST_Request $request)
    {
        try {
            $params = $_POST;

            $telefone_contato_full = "+" . $params['ddi_telefone_do_contato'] . " " . $params['ddd_telefone_do_contato'] . " " . $params['telefone_do_contato'];

            date_default_timezone_set('America/Sao_Paulo');
            $title = 'RO#'.date('YmdHis');

            $post = array(
                'post_title' => $title,
                'post_type' => 'registros',
                'post_status' => 'publish'
            );
            
            $post_id = wp_insert_post($post);

            // Tipo de Oportunidade
            update_field('field_62b2f691f07ad', $params['tipo_de_oportunidade'], $post_id);

            //DADOS DO PARCEIRO ZOOMtecnologia
            $dados_do_parceiro = array(
                'field_62b2f6ef14936' => $params['parceiro_razao_social'],
                'field_62b2f70a14937' => $params['cnpj'],
                'field_62b2f71614938' => $params['nome_da_oportunidade'],
                'field_62b2f71a14939' => $params['nivel_parceiro'],
                'field_62b2f7411493a' => $params['categoria_parceiro'],
                'field_62b2f7661493b' => $params['nome_do_parceiro_comercial'],
                'field_632a0792088bc' => $params['cargo_do_parceiro_comercial'],
                'field_62b2f7701493c' => $params['email_do_parceiro_comercial'],
                'field_62fe8082dc9f6' => $params['ddi_telefone_parceiro_comercial'],
                'field_62fe805bdc9f5' => $params['ddd_telefone_parceiro_comercial'],
                'field_62b2f77d1493d' => $params['telefone_parceiro_comercial'],
                'field_62b2f78d1493e' => $params['prazo_para_fechamento_inicio'],
                'field_62b2f7941493f' => $params['prazo_para_fechamento_fim'],
            );
            update_field('field_62b2f6bdf07ae', $dados_do_parceiro, $post_id);

            //DADOS DO CLIENTE DO PARCEIRO
            $dados_do_cliente_do_parceiro = array(
                'field_62b2f8277bec3' => $params['razao_social'],
                'field_62b2f8317bec4' => $params['nome_fantasia'],
                'field_62b2f8407bec5' => $params['cnpj_cliente'],
                'field_62b2f8597bec6' => $params['endereco'],
                'field_62b2f86c7bec7' => $params['cep'],
                'field_62b2f8817bec9' => $params['numero'],
                'field_62b2f8867beca' => $params['complemento'],
                'field_62b2f8907becb' => $params['email_corporativo_geral'],
                'field_62b2f8a17becc' => $params['n_de_funcionarios'], // aqui
                'field_62b2f8c07becd' => $params['segmento_ramo_de_atividade'],
                'field_62b2f9117bece' => $params['nome_completo_do_contato'],
                'field_62fe82f27570e' => $params['ddi_telefone_do_contato'],
                'field_62fe82f07570d' => $params['ddd_telefone_do_contato'],
                'field_62b2f92a7becf' => $params['telefone_do_contato'],
                'field_62b2f93d7bed0' => $params['cargo_do_contato'],
                'field_62b2f9487bed1' => $params['email_do_contato'],
            );
            update_field('field_62b2f79f14940', $dados_do_cliente_do_parceiro, $post_id);

            //PARCEIRO - INFORMAÇÕES
            $parceiro_informacoes = array(
                'field_62b2f95f7bed3' => $params['detalhes_da_oportunidade']
            );
            update_field('field_62b2f9527bed2', $parceiro_informacoes, $post_id);

            //PRODUTOS
            $repeater_key = 'field_62b2f96c7bed4';
            $products = $params['produtos'];

            foreach ($products as $product) {
                $values[] = array(
                    'field_62b2fab9a4096' => $product['modelo'],
                    'field_62b2fad0a4097' => $product['quantidade'],
                    'field_62b2faf9a4098' => $product['moeda'],
                    'field_62b2fb0ea4099' => $product['preco_sugerido'],
                    'field_62b2fb23a409a' => $product['aplicavel_em_qual_pais'],
                );

                update_field($repeater_key, $values, $post_id);
            }

            //CAMPOS FINAIS
            update_field('field_62b2fb48a409b', $params['total_estimado_da_oportunidade'], $post_id);
            update_field('field_62b2fb64a409c', $params['porcentagem_comissionamento'], $post_id);
            update_field('field_62b3491f96848', $params['status'], $post_id);
            
            //ENVIO INTERNO
            $to = $params['email_de_recebimento'];
            $subject = 'Novo Registro de Oportunidade - Nº' .$title;
            $body = '';
            $body .= 'Olá,<br>';
            $body .= 'O usuário '.$params['nome_do_parceiro_comercial'].', '.$params['cargo_do_parceiro_comercial'].', da empresa '.$params['parceiro_razao_social'].' cadastrou um novo registro de oportunidade.<br><br>';
            $body .= '<strong>Detalhes da oportunidade:</strong><br><br>';
            $body .= 'ZOOMindustry<br>';
            $body .= '<strong>Nome do Contato:</strong> '.$params['nome_completo_do_contato'].'<br>';
            $body .= '<strong>Telefone do Contato:</strong> '.$telefone_contato_full.'<br>';
            $body .= '<strong>E-mail Corporativo Geral:</strong> '.$params['email_corporativo_geral'].'<br>';
            $body .= '<strong>Razão Social:</strong> '.$params['razao_social'].'<br>';
            $body .= '<strong>Total Estimado da Oportunidade:</strong> '.$params['total_estimado_da_oportunidade'].'<br>';
            $body .= '<strong>Porcentagem Estimada de Comissionamento:</strong> '.$params['porcentagem_comissionamento'].'%<br><br>';
            $body .= 'Vá até o painel administrativo para revisar e atualizar o status da oportunidade.';

            $headers = array('Content-Type: text/html; charset=UTF-8');
            
            wp_mail( $to, $subject, $body, $headers );

            //ENVIO EXTERNO
            $to = $params['email_do_parceiro_comercial'];
            $subject = 'Novo Registro de Oportunidade - Nº' .$title;
            $body = '';
            $body .= 'Olá '.$params['nome_do_parceiro_comercial'].'<br>';
            $body .= 'O seu pedido de registro de RO Nº <a href="'. get_site_url() .'/registros/'. $title .'/" target="_blank">'.$title.'</a> foi recebido com sucesso pela ZOOMindustry.<br><br>';
            $body .= '<a href="'. get_site_url() .'/registros/'. $title .'/" target="_blank">'. get_site_url() .'/registros/'. $title .'</a><br><br>';
            $body .= 'Dúvidas procure seu executivo de contas.<br>';

            $headers = array('Content-Type: text/html; charset=UTF-8');
            
            wp_mail( $to, $subject, $body, $headers );

            return $post_id;

        } catch (Exception $ex) {
            return    wp_send_json([
                'success' => false,
                'message' => $ex->getMessage(),
            ], $ex->getCode() ?? 400);
        }
    }
}
