<?php

require 'produto.php';

$produto = new produto();

switch ($_GET['operacao']) {
    case 'list':
        
        echo '<h3>Produtos: </h3>';

        foreach($produto->list() as $value){
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }

        break;

    case 'insert':
        
        $status = $produto->insert('Moto MAX');

        if(!$status)
        {
            echo "Não foi possível executar a operação!!!";
            return false;
        }

        echo "Registro inserido com sucesso!!!";

        break;

    case 'update':
        
        $status = $produto->update('Moto MAX 2', 4);
        
        if(!$status)
        {
            echo "Não foi possível executar a operação!!!";
            return false;
        }

        echo "Registro atualizado com sucesso!!!";

        break;

    case 'delete':
        
        $status = $produto->delete(2);

        if(!$status)
        {
            echo "Não foi possível executar a operação!!!";
            return false;
        }

        echo "Registro deletado com sucesso!!!";

        break;
    
}