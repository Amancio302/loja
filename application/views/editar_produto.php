<div id="homebody">
    <?php echo form_open(base_url('produtos/editarItem'),array('id'=>'form_produtos'));?>
        <div class="row-fluid" id="nova_categoria">
            <br>
            <div class="col-md-2" id="txt_label">
                <?php echo form_label("Código", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Titulo", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Preço", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Largura da Caixa(mm)", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Altura da caixa(mm)", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Comprimento da caixa(mm)", 'txt_label', array('id'=>'txt_label')).br().
                           form_label("Peso da caixa(g)", 'txt_label', array('id'=>'txt_label')).
                           form_label("Ativo/Inativo(1/0)", 'txt_label', array('id'=>'txt_label'));
                           ?>
            </div>
            <div class="col-md-2">
                <?php echo
                form_hidden('txt_id', $produto[0]->id).
                form_input(array('id'=>'txt_input','name'=>'txt_codigo', 'type'=>'number', 'value'=>$produto[0]->codigo)).br().
                form_input(array('id'=>'txt_input','name'=>'txt_titulo', 'value'=>$produto[0]->titulo)).br().
                form_input(array('id'=>'txt_input','name'=>'txt_preco', 'type'=>'number', 'step'=>'any', 'value'=>$produto[0]->preco)).br().
                form_input(array('id'=>'txt_input','name'=>'txt_largura', 'type'=>'number', 'value'=>$produto[0]->largura_caixa_mm)).br().
                form_input(array('id'=>'txt_input','name'=>'txt_altura', 'type'=>'number', 'value'=>$produto[0]->altura_caixa_mm)).br().
                form_input(array('id'=>'txt_input','name'=>'txt_comprimento', 'type'=>'number', 'value'=>$produto[0]->comprimento_caixa_mm)).br().
                form_input(array('id'=>'txt_input','name'=>'txt_peso', 'type'=>'number', 'value'=>$produto[0]->peso_gramas)).
                form_input(array('id'=>'txt_input','name'=>'txt_ativo', 'type'=>'number', 'min'=>'0', 'max'=>'1', 'value'=>$produto[0]->ativo));
                ?>
            </div>
            <div class="col-md-1">
                <?php echo
                    form_label("Descrição", 'txt_label', array('id'=>'txt_label')).br();
                ?>
            </div>
            <div class="col-md-5">
                <?php echo
                    form_textarea(array('id'=>'txt_descricao','name'=>'txt_descricao', 'value'=>$produto[0]->descricao));
                ?>
            </div>
            <div class="col-md-2">
                <?php
                    $controle = false;
                    echo form_label("Categoria", 'txt_label', array('id'=>'txt_label')).br();
                    foreach($categorias as $categoria){
                        foreach($cat as $cate){
                            if($categoria->id == $cate->categoria){
                                $controle = true;
                            }
                        }
                        echo form_checkbox("categoria[]", $categoria->id, $controle).
                                 form_label($categoria->titulo, 'txt_label', array('id'=>'txt_label')).br();
                        $controle = false;
                    }
                ?>
            </div>
        </div>
        <br>
        <div id="btnProduto">
            <?php echo form_submit("bntProduto","Salvar");?>
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
}

#txt_input{
    width:100%;
    font-size:12px;
}

#btnProduto{
    float: right;
    margin-bottom: 10px;
}
</style>

<!-- Não funcionou no .css-->
