<div id="homebody">
    <div class="alinhado-centro borda-base espaco-vertical">
        <h3>Seja bem-vindo à área administrativa.</h3>
        <p>Aqui você poderá Incluir, Alterar ou Excluir registros nas tabelas de categorias, produtos ou frete.</p>

    </div>
    <div class="row-fluid">
            <div class="col-md-12">
                <div class="col-md-4">
            <?php echo anchor(base_url("cadastro/categorias") ,"Cadastro de categorias", array("class"=>"btn btn-mediun btn-primary")); ?>
                </div>
            <div class="col-md-4">
            <?php echo anchor(base_url("produtos/listarProdutos/0") ,"Cadastro de produtos", array("class"=>"btn btn-mediun btn-primary")); ?>
            </div>
            <div class="col-md-4">
            <?php echo anchor(base_url("frete/listarFretes") ,"Tabela de fretes", array("class"=>"btn btn-mediun btn-primary")); ?>
            </div>
    </div>
</div>
