<?php
/**
 * Template name: Registro de Oportunidade
 */

get_header();

$dados_do_parceiro_zoomtecnologia = get_field('dados_do_parceiro_zoomtecnologia');
$dados_do_cliente_do_parceiro = get_field('dados_do_cliente_do_parceiro');
$parceiro_informacoes = get_field('parceiro_informacoes');
$produtos = get_field('produtos');
?>
<main id="content" class="main-content internal reg-oportunity" role="main">

    <section class="partner-top">
        <?php $image = get_field('imagem_topo', 1990);

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

                            <span><b>Status: <?php the_field('status'); ?></b></span>
                        </div>

                        <div class="right">
                        </div>
                   </div>
               </div>
           </div>
       </div>
    </section>

    <section class="register-op">
        <form data-toggle="validator" role="form" id="registerOportunity">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper-form">
                            <div class="form-group w50">
                                <label class="control-label">Tipo de Oportunidade</label>
                                <input type="text" class="form-control" value="<?php the_field('tipo_de_oportunidade'); ?>" readonly>
                            </div>

                            <!-- Comentado pois a mesma informação foi inserida na header, ao lado do número de registro -->
                            <!-- <div class="form-group w50">
                                <label class="control-label">Status</label>
                                <input type="text" class="form-control" value="<?php the_field('status'); ?>" readonly>
                            </div> -->

                            <h3 class="w100">DADOS DO PARCEIRO ZOOMtecnologia</h3>
                            <div class="form-group w50">
                                <label for="inputRazao" class="control-label">Parceiro (Razão Social)</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_parceiro_zoomtecnologia['parceiro_razao_social']; ?>" readonly>
                            </div>
                            <div class="form-group w50">
                                <label for="inputCNPJ" class="control-label">CNPJ</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_parceiro_zoomtecnologia['cnpj']; ?>" readonly>
                            </div>
                            <div class="form-group w50">
                                <label for="inputNameOp" class="control-label">Nome da Oportunidade</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_parceiro_zoomtecnologia['nome_da_oportunidade']; ?>" readonly>
                            </div>
                            <div class="form-group w25">
                                <label class="control-label">Nível Parceiro</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_parceiro_zoomtecnologia['nivel_parceiro']; ?>" readonly>
                            </div>
                            <div class="form-group w25 tip-right">
                                <label class="control-label">Categoria Parceiro</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_parceiro_zoomtecnologia['categoria_parceiro']; ?>" readonly>
                            </div>
                            <div class="form-group w50">
                                <label for="inputNamePartner" class="control-label">Nome do Parceiro Comercial</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_parceiro_zoomtecnologia['nome_do_parceiro_comercial']; ?>" readonly>
                            </div>
                            <div class="form-group w50">
                                <label for="inputMailPartner" class="control-label">E-mail do Parceiro Comercial</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_parceiro_zoomtecnologia['email_do_parceiro_comercial']; ?>" readonly>
                            </div>
                            <div class="form-group w50">
                                <label for="inputPhonePartner" class="control-label">Telefone Parceiro Comercial</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_parceiro_zoomtecnologia['telefone_parceiro_comercial']; ?>" readonly>
                            </div>
                            <div class="form-group w25">
                                <label for="" class="control-label">Prazo para fechamento Início</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_parceiro_zoomtecnologia['prazo_para_fechamento_inicio']; ?>" readonly>
                            </div>
                            <div class="form-group w25 tip-right">
                                <label for="" class="control-label">Prazo para fechamento Fim</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_parceiro_zoomtecnologia['prazo_para_fechamento_fim']; ?>" readonly>
                            </div>

                            <h3 class="w100">DADOS DO CLIENTE DO PARCEIRO</h3>

                            <div class="form-group w50">
                                <label for="inputRazaoClient" class="control-label">Razão Social</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['razao_social']; ?>" readonly>
                            </div>
                            <div class="form-group w50">
                                <label for="inputTradeNameClient" class="control-label">Nome Fantasia</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['nome_fantasia']; ?>" readonly>
                            </div>
                            <div class="form-group w50">
                                <label for="inputCNPJClient" class="control-label">CNPJ</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['cnpj_cliente']; ?>" readonly>
                            </div>
                            <div class="form-group w20">
                                <label for="inputCEPClient" class="control-label">CEP</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['cep']; ?>" readonly>
                            </div>
                            <div class="form-group w30 tip-right">
                                <label for="inputStreetClient" class="control-label">Endereço</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['endereco']; ?>" readonly>
                            </div>
                            <div class="form-group w20">
                                <label for="inputNumberClient" class="control-label">Número</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['numero']; ?>" readonly>
                            </div>
                            <div class="form-group w30">
                                <label for="inputAddressContClient" class="control-label">Complemento</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['complemento']; ?>" readonly>
                            </div>
                            <div class="form-group w50">
                                <label for="inputMailClient" class="control-label">E-mail Corporativo Geral</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['email_corporativo_geral']; ?>" readonly>
                            </div>
                            <div class="form-group w20">
                                <label for="inputEmployeeClient" class="control-label">N° de funcionários</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['n_de_funcionarios']; ?>" readonly>
                            </div>
                            <div class="form-group w30">
                                <label class="control-label">Segmento (Ramo de Atividade)</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['segmento_ramo_de_atividade']; ?>" readonly>
                            </div>
                            <div class="form-group w50">
                                <label for="inputNameClient" class="control-label">Nome Completo do Contato</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['nome_completo_do_contato']; ?>" readonly>
                            </div>
                            <div class="form-group w20">
                                <label for="inputPhoneClient" class="control-label">Tel. do Contato</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['tel_do_contato']; ?>" readonly>
                            </div>
                            <div class="form-group w30">
                                <label for="inputCompPositionClient" class="control-label">Cargo do Contato</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['cargo_do_contato']; ?>" readonly>
                            </div>
                            <div class="form-group w50">
                                <label for="inputContactMailClient" class="control-label">E-mail do Contato</label>
                                <input type="text" class="form-control" value="<?php echo $dados_do_cliente_do_parceiro['email_do_contato']; ?>" readonly>
                            </div>

                            <h3 class="w100">PARCEIRO - INFORMAÇÕES</h3>

                            <div class="form-group w100">
                                <label for="inputOportunityDetail" class="control-label">Detalhes da Oportunidade</label>
                                <input type="text" class="form-control" value="<?php echo $parceiro_informacoes['detalhes_da_oportunidade']; ?>" readonly>
                            </div>

                            <h3 class="w100" style="margin-bottom: 0px;">PRODUTOS DO ORÇAMENTO</h3>

                            <?php 
                                foreach ($produtos as $key => $value) {
                                $formatter = new NumberFormatter('pt_BR',  NumberFormatter::CURRENCY);

                                if($value['moeda'] == 'Real'):
                                    $money = 'R$';
                                elseif($value['moeda'] == 'Euro'):
                                    $money = '€';
                                else:
                                    $money = '$';
                                endif;
                            ?>
                                <div class="prod-item w100" style="border-bottom: 1px solid #ccc; padding-top: 30px;">
                                    <div class="form-group w50">
                                        <label for="inputModelProd" class="control-label">Modelo</label>
                                        <input type="text" class="form-control" value="<?php echo $value['modelo']; ?>" readonly>
                                    </div>
                                    <div class="wrapper">
                                        <div class="form-group w20">
                                            <label for="inputQtyProd" class="control-label">Quantidade</label>
                                            <input type="text" class="form-control" value="<?php echo $value['quantidade']; ?>" readonly>
                                        </div>
                                        <div class="form-group w20">
                                            <label class="control-label">Moeda</label>
                                            <input type="text" class="form-control" value="<?php echo $value['moeda']; ?>" readonly>
                                        </div>
                                        <div class="form-group w20">
                                            <label for="inputPriceProd" class="control-label">Preço Sugerido</label>
                                            <input type="text" class="form-control" value="<?php echo $money . $value['preco_sugerido']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group w50">
                                        <label class="control-label">Aplicável em qual País?</label>
                                        <input type="text" class="form-control" value="<?php echo $value['aplicavel_em_qual_pais']; ?>" readonly>
                                    </div>
                                </div>
                            <?php } ?>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-total total w100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul>
                                <li class="total">
                                    <p>Total estimado da oportunidade</p>
                                    <h4>
                                        <?php
                                            $number = get_field('total_estimado_da_oportunidade');
                                            echo $money . $number;
                                        ?>
                                    </h4>
                                </li>
                                <li class="percent">
                                    <p>Porcentagem Estimada de Comissionamento para Negociação</p>
                                    <h4><?php the_field('porcentagem_estimada_de_comissionamento'); ?>%</h4>
                                </li>
                                <li style="flex-direction: column; align-items: baseline;">
                                    <p class="pb-3">MEMO</p>
                                    <small><?php the_field('memo'); ?></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

</main>

<!-- Modal -->
<div class="modal fade" id="modalSubmitted" tabindex="-1" aria-labelledby="modalSubmittedLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="icon-check">
            <div class="icon">
                <?php include get_template_directory().'/dist/images/icons/icon-check.svg'; ?>
            </div>

        </div>
      <div class="modal-header">
        <h5 class="modal-title" id="modalSubmittedLabel">Registro de Oportunidade enviado com sucesso</h5>
      </div>
      <div class="modal-body">
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut elit euismod, dictum dolor et, molestie </p> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
