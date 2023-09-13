<?php
/**
 * Template name: Registro de Oportunidade
 */

get_header();

?>
<main id="content" class="main-content internal reg-oportunity" role="main">

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

    <section class="register-op">
        <form data-toggle="validator" role="form" id="registerOportunity">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper-form">
                            <h2 class="w100">Preencha os dados abaixo:</h2>
                            <div class="form-group w50">
                                <label class="control-label">Informe o Tipo de Oportunidade
                                    <?php if( get_field('dica_tipo_da_oportunidade') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_tipo_da_oportunidade'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <select name="tipo_de_oportunidade" class="form-control custom-select" id="opType">
                                    <option value="Privado">Privado</option>
                                    <option value="Público">Público</option>
                                </select>
                            </div>
                            <h3 class="w100">DADOS DO PARCEIRO ZOOMtecnologia</h3>
                            <div class="form-group w50">
                                <label for="inputRazao" class="control-label">Parceiro (Razão Social)
                                    <?php if( get_field('dica_razao_social_parceiro') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_razao_social_parceiro'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="parceiro_razao_social" class="form-control" id="inputRazao" placeholder="Insira a razão social" required>
                            </div>
                            <div class="form-group w50">
                                <label for="inputCNPJ" class="control-label">CNPJ
                                    <?php if( get_field('dica_cnpj_parceiro') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_cnpj_parceiro'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="cnpj" class="form-control cnpj" id="inputCNPJ" placeholder="Insira o CNPJ" required>
                                <div class="help-block with-errors">Insira um CNPJ válido</div>
                            </div>
                            <div class="form-group w50">
                                <label for="inputNameOp" class="control-label">Nome da Oportunidade
                                    <?php if( get_field('dica_nome_da_oportunidade_parceiro_') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_nome_da_oportunidade_parceiro_'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="nome_da_oportunidade" class="form-control" id="inputNameOp" placeholder="Insira o nome da oportunidade" required>
                            </div>
                            <div class="form-group w25">
                                <label class="control-label">Nível Parceiro
                                    <?php if( get_field('dica_nivel_parceiro_') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_nivel_parceiro_'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <select class="form-control custom-select" name="nivel_parceiro" id="inputLevel">
                                    <option value="0">Selecione o nível do parceiro</option>
                                    <option value="Distribuidor">Distribuidor</option>
                                    <option value="VAR">VAR</option>
                                    <option value="Estratégico">Estratégico</option>
                                </select>
                            </div>
                            <div class="form-group w25 tip-right">
                                <label class="control-label">Categoria Parceiro
                                    <?php if( get_field('dica_categoria_parceiro') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_categoria_parceiro'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <select class="form-control custom-select" name="categoria_parceiro" id="inputCat">
                                    <option value="0">Selecione a categoria do parceiro</option>
                                    <option value="Diamond">Diamond</option>
                                    <option value="Platinum">Platinum</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Registered">Registered</option>
                                </select>
                            </div>
                            <div class="form-group w25">
                                <label for="inputNamePartner" class="control-label">Contato do Parceiro Comercial
                                    <?php if( get_field('dica_nome_do_parceiro_') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_nome_do_parceiro_'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="nome_do_parceiro_comercial" class="form-control" id="inputNamePartner" placeholder="Insira o nome do parceiro comercial" required>
                            </div>

                            <div class="form-group w25">
                                <label for="inputRolePartner" class="control-label">Cargo do Parceiro Comercial
                                    <?php if( get_field('dica_cargo_do_parceiro') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_cargo_do_parceiro'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="cargo_do_parceiro_comercial" class="form-control" id="inputRolePartner" placeholder="Insira o cargo do parceiro comercial" required>
                            </div>

                            <div class="form-group w50 email-verify">
                                <label for="inputMailPartner" class="control-label">E-mail do Parceiro Comercial
                                    <?php if( get_field('dica_e-mail_do_parceiro') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_e-mail_do_parceiro'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="email" name="email_do_parceiro_comercial" class="form-control email-check" id="inputMailPartner" placeholder="Insira o e-mail do parceiro comercial" required>
                            </div>
                            <div class="form-group w50">
                                <label for="inputPhonePartner" class="control-label">Telefone de Contato do Parceiro Comercial
                                    <?php if( get_field('dica_telefone_do_parceiro') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_telefone_do_parceiro'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                
                                <div id="tel_do_parceiro_comercial_parts" class="wrapper numbers_only">
                                    <div class="form-group w20">
                                        <label for="inputDdiComercialPartner" class="control-label"> Insira o DDI </label>
                                        <input type="text" name="ddi_telefone_parceiro_comercial" class="form-control internationalDdiMask col-md-3" id="inputDdiComercialPartner" placeholder="Ex.: 55, 1, etc"  maxlength="3" required>
                                    </div>

                                    <div class="form-group w20">
                                        <label for="inputDddComercialPartner" class="control-label"> Insira o DDD </label>
                                        <input type="text" name="ddd_telefone_parceiro_comercial" class="form-control internationalDddMask col-md-3" id="inputDddComercialPartner" placeholder="Ex.: 41, 11, 148, etc"  maxlength="4" required>
                                    </div>

                                    <div class="form-group w20">
                                        <label for="inputPhoneComercialPartner" class="control-label"> Insira o Telefone </label>
                                        <input type="text" name="telefone_parceiro_comercial" class="form-control internationalPhoneMask col-md-4" id="inputPhoneComercialPartner" placeholder="Ex.: 999999999" maxlength="10" required>
                                    </div>
                                </div>
                            </div>
                            <div class="input-daterange input-group w50" id="datepicker">
                                <div class="form-group w50">
                                    <label for="" class="control-label">Início da abertura da oportunidade
                                        <?php if( get_field('dica_prazo_inicio_parceiro') ): ?>
                                            <div class="icon-tip">
                                                <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                            </div>
                                            <div class="info-tip">
                                                <p><?php the_field('dica_prazo_inicio_parceiro'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </label>
                                    <input type="text" name="prazo_para_fechamento_inicio" class="form-control full-date" id="inputDateBegin" placeholder="00/00/0000" name="start" required>
                                </div>
                                <div class="form-group w50">
                                    <label for="" class="control-label">Prazo máximo para conclusão da oportunidade
                                        <?php if( get_field('dica_prazo_fim_parceiro') ): ?>
                                            <div class="icon-tip">
                                                <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                            </div>
                                            <div class="info-tip">
                                                <p><?php the_field('dica_prazo_fim_parceiro'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </label>
                                    <input type="text" name="prazo_para_fechamento_fim" class="form-control full-date" id="inputDateEnd" placeholder="00/00/0000" name="end" required>
                                </div>
                            </div>

                            <h3 class="w100">DADOS DO CLIENTE DO PARCEIRO</h3>

                            <div class="form-group w50">
                                <label for="inputRazaoClient" class="control-label">Razão Social
                                    <?php if( get_field('dica_razao_social_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_razao_social_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="razao_social" class="form-control" id="inputRazaoClient" placeholder="Insira a razão social" required>
                            </div>
                            <div class="form-group w50">
                                <label for="inputTradeNameClient" class="control-label">Nome Fantasia
                                    <?php if( get_field('dica_nome_fantasia_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_nome_fantasia_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="nome_fantasia" class="form-control" id="inputTradeNameClient" placeholder="Insira o nome fantasia" required>
                            </div>
                            <div class="form-group w50">
                                <label for="inputCNPJClient" class="control-label">CNPJ
                                    <?php if( get_field('dica_cnpj_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_cnpj_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="cnpj_cliente" class="form-control cnpj" id="inputCNPJClient" placeholder="Insira o CNPJ" required>
                                <div class="help-block with-errors">Insira um CNPJ válido</div>
                            </div>
                            <div class="form-group w20">
                                <label for="inputCEPClient" class="control-label">CEP
                                    <?php if( get_field('dica_cep_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_cep_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="cep" class="form-control full-cep cep" id="inputCEPClient" placeholder="Insira o CEP" required>
                            </div>
                            <div class="form-group w30 tip-right">
                                <label for="inputStreetClient" class="control-label">Endereço
                                    <?php if( get_field('dica_endereco_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_endereco_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="endereco" class="form-control" id="inputStreetClient" placeholder="Insira a Rua, Av, etc.." required>
                            </div>
                            <div class="form-group w20">
                                <label for="inputNumberClient" class="control-label">Número
                                    <?php if( get_field('dica_numero_endereco_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_numero_endereco_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="numero" class="form-control" id="inputNumberClient" placeholder="Insira o número" required>
                            </div>
                            <div class="form-group w30">
                                <label for="inputAddressContClient" class="control-label">Complemento
                                    <?php if( get_field('dica_complemento_endereco_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_complemento_endereco_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="complemento" class="form-control" id="inputAddressContClient" placeholder="Casa, Bloco/apto, etc...">
                            </div>
                            <div class="form-group w50 email-verify">
                                <label for="inputMailClient" class="control-label">E-mail Corporativo Geral
                                    <?php if( get_field('dica_e-mail_corporativo_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_e-mail_corporativo_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="email" name="email_corporativo_geral" class="form-control email-check" id="inputMailClient" placeholder="Insira o e-mail corporativo">
                            </div>
                            <div class="form-group w20">
                                <label for="inputEmployeeClient" class="control-label">N° de funcionários
                                    <?php if( get_field('dica_numero_de_funcionarios_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_numero_de_funcionarios_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <select name="n_de_funcionarios" id="selectEmployeeClient" class="quantity-select form-control" required>
                                        <option value="1 – 50">1 – 50</option>
                                        <option value="51 – 100">51 – 100</option>
                                        <option value="101 – 250">101 – 250</option>
                                        <option value="251 – 500">251 – 500</option>
                                        <option value="501 – 1000">501 – 1000</option>
                                        <option value="1001 – 3000">1001 – 3000</option>
                                        <option value="Mais de 3000">Mais de 3000</option>
                                    </select>
                            </div>
                            <div class="form-group w30">
                                <label class="control-label">Segmento (Ramo de Atividade)
                                    <?php if( get_field('dica_segmento_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_segmento_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <select class="form-control custom-select" name="segmento_ramo_de_atividade" id="inputSegmentClient">
                                    <option value="0">Selecione o segmento</option>
                                    <option value="Agronegócio">Agronegócio</option>
                                    <option value="Automotivo">Automotivo</option>
                                    <option value="Comércio">Comércio</option>
                                    <option value="Consumo">Consumo</option>
                                    <option value="Educação">Educação</option>
                                    <option value="Entretenimento">Entretenimento</option>
                                    <option value="Esportivo">Esportivo</option>
                                    <option value="Financeiro">Financeiro</option>
                                    <option value="Games">Games</option>
                                    <option value="Home Center">Home Center</option>
                                    <option value="Indústria">Indústria</option>
                                    <option value="Metalúrgica">Metalúrgica</option>
                                    <option value="Moda">Moda</option>
                                    <option value="Mídia">Mídia</option>
                                    <option value="Militar">Militar</option>
                                    <option value="Óleo e Gás">Óleo e Gás</option>
                                    <option value="Órgão Público">Órgão Público</option>
                                    <option value="Saúde">Saúde</option>
                                    <option value="Segurança">Segurança</option>
                                    <option value="Tecnologia">Tecnologia</option>
                                    <option value="Telecom">Telecom</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>
                            <div class="form-group w50">
                                <label for="inputNameClient" class="control-label">Nome Completo do Contato
                                    <?php if( get_field('dica_nome_do_contato_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_nome_do_contato_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="nome_completo_do_contato" class="form-control" id="inputNameClient" placeholder="Insira o nome do contato" required>
                            </div>
                            <div class="form-group w50">
                                <label for="inputPhoneClient" class="control-label">Tel. do Contato
                                    <?php if( get_field('dica_tel_do_contato_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_tel_do_contato_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                
                                <div id="tel_do_contato_parts" class="wrapper numbers_only">
                                    <div class="form-group w20">
                                        <label for="inputDdiContact" class="control-label"> Insira o DDI </label>
                                        <input type="text" name="ddi_telefone_do_contato" class="form-control internationalDdiMask col-md-3" id="inputDdiContact" placeholder="Ex.: 55, 1, etc" maxlength="3" required>
                                    </div>

                                    <div class="form-group w20">
                                        <label for="inputDddContact" class="control-label"> Insira o DDD </label>
                                        <input type="text" name="ddd_telefone_do_contato" class="form-control internationalDddMask col-md-3" id="inputDddContact" placeholder="Ex.: 41, 11, 148, etc" maxlength="4" required>
                                    </div>

                                    <div class="form-group w20">
                                        <label for="inputPhoneContact" class="control-label"> Insira o Telefone </label>
                                        <input type="text" name="telefone_do_contato" class="form-control internationalPhoneMask col-md-4" id="inputPhoneContact" placeholder="Ex.: 999999999" maxlength="10" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group w20">
                                <label for="inputCompPositionClient" class="control-label">Cargo do Contato
                                    <?php if( get_field('dica_cargo_do_contato_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_cargo_do_contato_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="text" name="cargo_do_contato" class="form-control" id="inputCompPositionClient" placeholder="Insira o cargo do contato" required>
                            </div>
                            <div class="form-group w30 email-verify">
                                <label for="inputContactMailClient" class="control-label">E-mail do Contato
                                    <?php if( get_field('dica_e-mail_do_contato_cliente') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_e-mail_do_contato_cliente'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <input type="email" name="email_do_contato" class="form-control email-check" id="inputContactMailClient" placeholder="Insira o e-mail do contato" required>
                            </div>

                            <h3 class="w100">PARCEIRO - INFORMAÇÕES</h3>

                            <div class="form-group w100">
                                <label for="inputOportunityDetail" class="control-label">Detalhes da Oportunidade
                                    <?php if( get_field('dica_detalhe_da_oportunidade') ): ?>
                                        <div class="icon-tip">
                                            <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                        </div>
                                        <div class="info-tip">
                                            <p><?php the_field('dica_detalhe_da_oportunidade'); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </label>
                                <textarea name="detalhes_da_oportunidade" class="form-control" id="inputOportunityDetail" placeholder="Insira as informações da proposta" rows="15" maxlength="5000" required></textarea>
                                <span id="count_char" style="font-size: 12px;">0/5000</span>
                            </div>

                            <h3 class="w100">ADICIONAR PRODUTOS</h3>

                            <div id="formProd" class="prod-item w100">
                                <div class="form-group w50">
                                    <label class="control-label">Categoria
                                        <?php if( get_field('dica_categoria_produto') ): ?>
                                            <div class="icon-tip">
                                                <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                            </div>
                                            <div class="info-tip">
                                                <p><?php the_field('dica_categoria_produto'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </label>
                                    <select class="form-control custom-select" id="inputCatProd">
                                        <option value="0">Selecione o categoria</option>
                                        <?php
                                            //LIST ALL PRODUCTS CATEGORIES
                                            $args = array(
                                                'taxonomy' => 'produto_cat',
                                                'orderby' => 'name',
                                                'order'   => 'ASC'
                                            );

                                            $cats = get_categories($args);

                                            foreach($cats as $cat) {
                                        ?>
                                            <option value="<?php echo $cat->term_id ; ?>"><?php echo $cat->name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group w50">
                                    <label for="inputModelProd" class="control-label">Modelo
                                        <?php if( get_field('dica_modelo_produto') ): ?>
                                            <div class="icon-tip">
                                                <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                            </div>
                                            <div class="info-tip">
                                                <p><?php the_field('dica_modelo_produto'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </label>
                                    <input type="text" class="form-control" id="inputModelProd">
                                </div>
                                <div class="wrapper">
                                    <div class="form-group w20">
                                        <label for="inputQtyProd" class="control-label">Quantidade
                                            <?php if( get_field('dica_quantidade_produto') ): ?>
                                                <div class="icon-tip">
                                                    <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                                </div>
                                                <div class="info-tip">
                                                    <p><?php the_field('dica_quantidade_produto'); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </label>
                                        <div class="quantity-input">
                                            <button class="quantity-input__button--minus" type="button"><?php include get_template_directory().'/dist/images/icons/chevron-left.svg'; ?></button>
                                            <input class="quantity-input__input form-control" type="number" min="1" max="999" step="1" value="1" id="inputQtyProd">
                                            <button class="quantity-input__button--plus" type="button"><?php include get_template_directory().'/dist/images/icons/chevron-right.svg'; ?></button>
                                        </div>
                                    </div>
                                    <div class="form-group w20">
                                        <label class="control-label">Moeda
                                            <?php if( get_field('dica_moeda') ): ?>
                                                <div class="icon-tip">
                                                    <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                                </div>
                                                <div class="info-tip">
                                                    <p><?php the_field('dica_moeda'); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </label>
                                        <select class="form-control custom-select" id="inputCurrencyProd">
                                            <option value="Real">Real</option>
                                            <option value="Dolar">Dolar</option>
                                            <option value="Euro">Euro</option>
                                        </select>
                                    </div>
                                    <div class="form-group w20">
                                        <label for="inputPriceProd" class="control-label">Preço Sugerido Unitário
                                            <?php if( get_field('dica_preco_sugerido') ): ?>
                                                <div class="icon-tip">
                                                    <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                                </div>
                                                <div class="info-tip">
                                                    <p><?php the_field('dica_preco_sugerido'); ?></p>
                                                </div>
                                            <?php endif; ?>
                                        </label>
                                        <input type="text" class="form-control full-money money" id="inputPriceProd" placeholder="Insira o preço sugerido">
                                    </div>
                                </div>

                                <div class="form-group w50">
                                    <label class="control-label">Aplicável em qual País?
                                        <?php if( get_field('dica_aplicavel_em_qual_pais') ): ?>
                                            <div class="icon-tip">
                                                <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                            </div>
                                            <div class="info-tip">
                                                <p><?php the_field('dica_aplicavel_em_qual_pais'); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </label>
                                    <select class="form-control custom-select" id="inputCountryProd">
                                        <option value="Brasil">Brasil</option>
                                        <option value="Estados Unidos">Estados Unidos</option>
                                        <option value="Inglaterra">Inglaterra</option>
                                    </select>
                                </div>
                            </div>

                            <button type="button" class="btn add-prod w100">Adicionar Produto</button>

                            <!-- DIV NEW COLUMNS -->
                            <div id="newRow" class="prod-item w100 mt">
                            <h3 class="w100">PRODUTOS DA OPORTUNIDADE</h3>

                            </div>

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
                                    <p>Total estimado da oportunidade
                                        <?php if( get_field('dica_total_estimado') ): ?>
                                            <i class="icon-tip">
                                                <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                            </i>
                                            <i class="info-tip">
                                                <span><?php the_field('dica_total_estimado'); ?></span>
                                            </i>
                                        <?php endif; ?>
                                    </p>
                                    <h4><small id="currencyType">R$</small><span id="totalValue"></span></h4>
                                </li>
                                <li class="percent">
                                    <p>Inisira a Porcentagem Estimada de Comissionamento para Negociação
                                        <?php if( get_field('dica_porcentagem_estimada') ): ?>
                                            <i class="icon-tip">
                                                <?php include get_template_directory().'/dist/images/icons/icon-tip.svg'; ?>
                                            </i>
                                            <i class="info-tip">
                                                <span><?php the_field('dica_porcentagem_estimada'); ?></span>
                                            </i>
                                        <?php endif; ?>
                                    </p>
                                    
                                    <div class="col-md-2">
                                        <input type="text" class="form-control full-money money" name="porcentagem_comissionamento" id="inputPriceProd" placeholder="Porcentagem" required> 
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Inputs Hidden Group -->
                <input type="hidden" name="total_estimado_da_oportunidade" id="totalValueInput">
                <input type="hidden" name="porcentagem_estimada_de_comissionamento" id="percentValueInput" value="<?php the_field('porcentagem_estimada_de_comissionamento'); ?>">
                <input type="hidden" name="email_de_recebimento" id="emailValueInput" value="<?php the_field('email_de_recebimento'); ?>">
                <input type="hidden" name="status" id="statusValueInput" value="Pendente">
            </div>
            <div class="form-group wrap-submit">
                <button type="submit" class="btn btn-primary">ENVIAR</button>
                <div class="loading-gif">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/dist/images/icons/icon-loader.gif'); ?>" alt="">
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
        <h5 class="modal-title" id="modalSubmittedLabel">Agradecemos o envio da Oportunidade. A área de Canais fará a análise e retornará em breve.</h5>
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
