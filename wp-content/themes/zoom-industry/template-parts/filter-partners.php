<?php

$getPais = $_GET['pais'];
$getEstado = $_GET['estado'];
$getTipo = $_GET['tipo'];

//Filtro de parceiros
$args = array(
    'post_type'              => 'parceiros',
    'posts_per_page'         => -1,
    'post_status'            => 'publish'

);
$parceiros = new WP_Query( $args );

if ( $parceiros->have_posts() ) :

    $dados = array();
    $select = array();

    while ( $parceiros->have_posts() ) : $parceiros->the_post();

        $pais = get_field('pais');
        $estado = get_field('estado');
        $tipo = get_field('tipo');

        if(!empty($pais)){
            $dados[$pais]['estado'][] = $estado;
            $dados[$estado]['tipo'][] = $tipo;
            $dados[$pais]['estado'] = array_unique($dados[$pais]['estado']);
            $dados[$estado]['tipo'] = array_unique($dados[$estado]['tipo']);

            $select['pais'][] = $pais;
            $select['tipo'][] = $tipo;
        }

    endwhile; wp_reset_postdata();

    if(!empty($select)){
        $paises = array_unique($select['pais']);
        $tipos = array_unique($select['tipo']);
    }

    if(!empty($dados)){

    $js_array = json_encode($dados);
    echo "<script type='text/javascript'>var dados = JSON.parse('".$js_array."');</script>";
        function filter_scripts(){
    ?>
    <script type='text/javascript'>

        function insertParam(key, value) {
            key = encodeURIComponent(key);
            value = encodeURIComponent(value);

            // kvp looks like ['key1=value1', 'key2=value2', ...]
            var kvp = document.location.search.substr(1).split('&');
            let i=0;

            for(; i<kvp.length; i++){
                if (kvp[i].startsWith(key + '=')) {
                    let pair = kvp[i].split('=');
                    pair[1] = value;
                    kvp[i] = pair.join('=');
                    break;
                }
            }

            if(i >= kvp.length){
                kvp[kvp.length] = [key,value].join('=');
            }

            // can return this or...
            let params = kvp.join('&');

            // reload page with new params
            document.location.search = params;
        }

        var estadoActive = '<?php echo isset($_GET['estado']) ? $_GET['estado'] : ''; ?>';
        var tipoActive = '<?php echo isset($_GET['tipo']) ? $_GET['tipo'] : ''; ?>';
        
        jQuery('#inputCountry').on('change', function(){
            var pais = jQuery(this).val()
            var resultado = dados[pais];
            var selectEstado = jQuery('#inputState');
            selectEstado.find('option').remove().end().append('<option value="">Estado</option>').val('');
                jQuery.map(resultado['estado'], function( val, i ){
                    selectEstado.append(jQuery('<option>', { 
                        value: val,
                        text : val 
                    }));
                });
                if(estadoActive.length){
                    selectEstado.val(estadoActive);        
                }
        });
        jQuery('#inputState').on('change', function(){
            var estado = jQuery(this).val()
            var resultado = dados[estado];
            var selectTipo = jQuery('#inputType');
            selectTipo.find('option').remove().end().append('<option value="">Tipo</option>').val('');
                jQuery.map(resultado['tipo'], function( val, i ){
                    selectTipo.append(jQuery('<option>', { 
                        value: val,
                        text : val 
                    }));
                });
                if(tipoActive.length){
                    selectTipo.val(tipoActive);        
                }
        });
        if(estadoActive.length){
            jQuery('#inputCountry').trigger('change');
        }
        jQuery('#inputOrder').on('change', function(){
            var val = jQuery(this).val();
            insertParam('order', val);
        });
        
    </script>

    <?php 
            }
            add_action( 'wp_footer', 'filter_scripts' );
        }

?>

<div class="filter" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-delay="0">
    <form action="">
        <div class="form-group">
            <select class="form-control" id="inputCountry" name="pais" required>
                <option value="">País</option>
                <?php if(!empty($paises)){
                    foreach($paises as $p){
                        $selected = isset($getPais) && $getPais == $p ? 'selected' : '';
                        echo '<option value="'.$p.'" '.$selected.'>'.$p.'</option>';
                    }
                } ?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="inputState" name="estado" required>
                <option value="">Estado</option>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="inputType" name="tipo" required>
                <option value="">Tipo</option>
                <?php if(!empty($tipos)){
                    foreach($tipos as $t){
                        $selected = isset($getTipo) && $getTipo == $t ? 'selected' : '';
                        echo '<option value="'.$t.'" '.$selected.'>'.$t.'</option>';
                    }
                } ?>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Buscar Parceiro</button>
        </div>
    </form>
</div>

<?php endif; ?>