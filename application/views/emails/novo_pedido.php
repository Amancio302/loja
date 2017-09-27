<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Lojão do Terceirão</title>
    </head>
    <body>
        <?php
            echo heading("Lojão do Terceirão", 2) .
            heading($pedido['numero'], 3) .
            heading("Dados do Cliente", 4) .
            "Nome: " . $comprador['nome'] . br() .
            "CPF: " . $comprador['documento'] . br() .
            "Endereço: " . $comprador['endereco'] . br() .
            "Número: " . $comprador['numero'] . br() .
            "Cep: " . $comprador['cep'] . br() .
            "Bairro: " . $comprador['bairro'] . br() .
            "Cidade: " . $comprador['cidade'] . br() .
            "Estado: " . $comprador['estado'] . br() .
            heading("Dados do pagamento", 4) .
            "ID: " . $transacao->transacao->id . br() .
            "Status: " . $transacao->transacao->status . br() .
            "Total: R$" . $transacao->transacao->total . br() .
            "<p> Obrigado por comprar conosco. Este email foi encaminhado automaticamente pelo nosso sistema em " . date("d/m/Y H:i:s") . "</p>";
        ?>
    </body>
</html>
