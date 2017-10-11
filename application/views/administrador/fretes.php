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
                                    <th id="codigos">Peso mínimo</th>
                                    <th id="titulos">Peso máximo</th>
                                    <th id="descricoes">Preço</th>
                                    <th id="precos">Adicional</th>
                                    <th id="precos">UF</th>
                                    <th id="operacao">Operações</th>
                                </tr>';
                    foreach($frete as $data){
                        echo '<tr>
                                <td>'.$data->peso_de.'</td>
                                <td>'.$data->peso_ate.'</td>
                                <td id="tam">'.$data->preco.'</td>
                                <td>'.$data->adicional_kg.'</td>
                                <td>'.$data->uf.'</td><td>'.
                                anchor(base_url("frete/editar/".$data->id), 'Editar', array('class'=>'btn btn-warning btn-sm', 'id'=>'botao')). ' ' . anchor(base_url("frete/excluir/".$data->id), 'Excluir', array('class'=>'btn btn-danger btn-sm', 'id'=>'botao')).
                             '</td></tr>';
                    }
                    echo '</table>';
                    echo anchor(base_url("frete/novo_frete"), 'Novo Item', array('class'=>'btn btn-primary', 'id'=>'novo_item'));
                ?>
            </div>
        </div>
    </div>
</div>
