<div id="homebody">
    <div class="alinhado-centro borda-base espaco-vertical">
        <h3>Produtos</h3>
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="col-md-12">
                <?php
                    echo'  <table>
                                <tr>
                                    <th id="codigos">Código</th>
                                    <th id="titulos">Titulo</th>
                                    <th id="descricoes">Descrição</th>
                                    <th id="precos">Preço</th>
                                    <th id="operacao">Operações</th>
                                </tr>';
                    foreach($produtos as $data){
                        echo '<tr>
                                <td>'.$data->codigo.'</td>
                                <td>'.$data->titulo.'</td>
                                <td id="descricoes">'.$data->descricao.'</td>
                                <td>'.$data->preco.'</td><td>'.
                                anchor(base_url("produtos/editar/".$data->id), 'Editar', array('class'=>'btn btn-warning btn-sm', 'id'=>'botao')). ' ' . anchor(base_url("produtos/excluir/".$data->id), 'Excluir', array('class'=>'btn btn-danger btn-sm', 'id'=>'botao')).
                             '</td></tr>';
                    }
                    echo '</table>';
                    echo anchor(base_url("produtos/novo_produto"), 'Novo Item', array('class'=>'btn btn-primary', 'id'=>'novo_item'));

                    if($msg == 1)
                        echo '<script type="text/javascript">alert("A operação foi bem-sucedida");</script>';
                    else if($msg == 2)
                        echo '<script type="text/javascript">alert("A operação falhou");</script>';
                ?>
            </div>
        </div>
    </div>
</div>
