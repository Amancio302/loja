<div id="homebody">
    <div class="row-fluid">
        <br>
        <div class="col-md-6">
            <h5 id='h5'><b>Título</b></h5>
        </div>
        <div class="col-md-6">
            <h5 id='h5'><b>Descrição</b></h5>
        </div>
        <hr>
    </div>
    <?php echo form_open(base_url('cadastro/novoItem'),array('id'=>'form_categoria'));?>
        <div class="row-fluid" id="nova_categoria">
            <br>
            <div class="col-md-6">
                <?php echo form_input(array('id'=>'titulo','name'=>'txt_titulo'));?>
            </div>
            <div class="col-md-6">
                <?php echo form_textarea(array('id'=>'descricao','name'=>'txt_descricao'));?>
            </div>
        </div>
        <br>
        <?php echo form_submit("bntCategoria","Incluir Nova Categoria");?>
    </form>
</div>


<style>
#nova_categoria{
    background-color: #dddddd;
}

#titulo{
    width: 30%;
}

#descricao{
    width: 50%;
}
</style>

<!-- Não funcionou no .css-->
