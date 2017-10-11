
<div id="homebody">
    <div class="row-fluid">
    </div>
    <?php echo form_open(base_url('frete/novoItem'),array('id'=>'form_categoria'));?>
        <div class="row-fluid" id="novo_frete">
            <br>
            <div class="col-md-12">
                <?php echo
                
                form_hidden('txt_id', $frete[0]->id);

                form_input(array('id'=>'min','name'=>'txt_min', 'value'=>$frete[0]->peso_de)).
                form_label("Peso Minimo", 'txt_label', array('id'=>'txt_label')).br().

                form_input(array('id'=>'max','name'=>'txt_max', 'value'=>$frete[0]->peso_ate)).
                form_label("Peso Maximo", 'txt_label', array('id'=>'txt_label')).br().

                form_input(array('id'=>'preco','name'=>'txt_preco', 'value'=>$frete[0]->preco)).
                form_label("Preço", 'txt_label', array('id'=>'txt_label')).br().

                form_input(array('id'=>'adicional','name'=>'txt_adicional', 'value'=>$frete[0]->adicional_kg)).
                form_label("Adicional por Kg", 'txt_label', array('id'=>'txt_label')).br().

                form_input(array('id'=>'uf','name'=>'txt_uf', 'value'=>$frete[0]->uf)).
                form_label("UF", 'txt_label', array('id'=>'txt_label')).br();
                ?>
            </div>
        </div>
        <br>
        <?php echo form_submit("bntCategoria","Incluir Novo Frete");?>
    </form>
</div>

<!-- Não funcionou no .css-->
