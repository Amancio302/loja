<div id="homebody">
    <?php echo form_open(base_url('produtos/novoItem'),array('id'=>'form_produtos'));?>
        <div class="row-fluid" id="nova_categoria">
            <br>
            <div class="col-md-2" id="txt_label">
                <?php echo form_label("Código", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Titulo", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Preço", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Largura da Caixa(mm)", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Altura da caixa(mm)", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Comprimento da caixa(mm)", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Peso da caixa(g)", 'txt_label', array('id'=>'txt_label'));
                           ?>
            </div>
            <div class="col-md-2">
                <?php echo
                form_input(array('id'=>'txt_input','name'=>'txt_codigo')).br().
                form_input(array('id'=>'txt_input','name'=>'txt_titulo')).br().
                form_input(array('id'=>'txt_input','name'=>'txt_preco')).br().
                form_input(array('id'=>'txt_input','name'=>'txt_largura')).br().
                form_input(array('id'=>'txt_input','name'=>'txt_altura')).br().
                form_input(array('id'=>'txt_input','name'=>'txt_comprimento')).br().
                form_input(array('id'=>'txt_input','name'=>'txt_peso'));?>
            </div>
            <div class="col-md-1">
                <?php echo
                    form_label("Descrição", 'txt_label', array('id'=>'txt_label')).br();
                ?>
            </div>
            <div class="col-md-5">
                <?php echo
                    form_textarea(array('id'=>'txt_descricao','name'=>'txt_descricao'));
                ?>
            </div>
            <div class="col-md-2">
                <?php
                    echo form_label("Categoria", 'txt_label', array('id'=>'txt_label')).br();
                    foreach($categorias as $categoria){
                        echo form_checkbox("categoria[]", $categoria->id, false).
                        form_label($categoria->titulo, 'txt_label', array('id'=>'txt_label')).br();
                    }
                ?>
            </div>
        </div>
        <br>
        <div id="btnProduto">
            <?php echo form_submit("bntProduto","Incluir Novo Produto");?>
        </div>
    </form>
</div>


<style>
#novo_produto{
    background-color: #dddddd;
}

#txt_label{
    text-align: right;
    font-size: 12px;
    padding-bottom: 6px;
}

#txt_input{
    width:100%;
    font-size:12px;
    padding-bottom: 2px;
}
</style>

<!-- Não funcionou no .css-->
