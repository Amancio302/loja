
<div id="homebody">
    <div class="row-fluid">
    </div>
    <?php echo form_open(base_url('frete/novoItem'),array('id'=>'form_categoria'));?>
        <div class="row-fluid" id="novo_frete">
            <br>
            <div class="col-md-12">
                <?php echo

                form_input(array('id'=>'min','name'=>'txt_min')).
                form_label("Peso Minimo", 'txt_label', array('id'=>'txt_label')).br().

                form_input(array('id'=>'max','name'=>'txt_max')).
                form_label("Peso Maximo", 'txt_label', array('id'=>'txt_label')).br().

                form_input(array('id'=>'preco','name'=>'txt_preco')).
                form_label("Preço", 'txt_label', array('id'=>'txt_label')).br().

                form_input(array('id'=>'adicional','name'=>'txt_adicional')).
                form_label("Adicional por Kg", 'txt_label', array('id'=>'txt_label')).br().

                form_input(array('id'=>'uf','name'=>'txt_uf')).
                form_label("UF", 'txt_label', array('id'=>'txt_label')).br();
                ?>
            </div>
        </div>
        <br>
        <?php echo form_submit("bntCategoria","Incluir Novo Frete");?>
    </form>
</div>

<!-- Não funcionou no .css-->
