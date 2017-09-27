<div id="homebody">
    <div class="alinhado-centro borda-base espaco-vertical">
        <h3>Categorias</h3>
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="col-md-12">
                <?php
                    echo'  <table>
                                <tr>
                                    <th id="titulo">Titulo</th>
                                    <th id="descricao">Descrição</th>
                                    <th id="operacoes">Operações</th>
                                </tr>';
                    foreach($categorias as $data){
                        echo '<tr>
                                <td>'.$data->titulo.'</td>
                                <td>'.$data->descricao.'</td><td>'.
                                anchor(base_url("categorias/editar/".$data->id), 'Editar', array('class'=>'btn btn-warning btn-sm', 'id'=>'botao')). ' ' . anchor(base_url("categorias/excluir/".$data->id), 'Excluir', array('class'=>'btn btn-danger btn-sm', 'id'=>'botao')).
                             '</td></tr>';
                    }
                    echo '</table>';
                    echo anchor(base_url("categorias/novo_item"), 'Novo Item', array('class'=>'btn btn-primary', 'id'=>'novo_item'));
                ?>
            </div>
        </div>
    </div>
</div>
