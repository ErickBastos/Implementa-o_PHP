<?php

namespace App;

use App\Personagem;

class Arqueiro implements Personagem{

    public function Atacar($nome_Habilidade, $custo_Habilidade){

        $classe = 'Arqueiro';

        echo "
        \n --------------------------------------
        \n Classe: $classe
        \n Nome da Habilidade: $nome_Habilidade.
        \n Custo da Habilidade: $custo_Habilidade.
        \n --------------------------------------
        ";

    }
    
}

?>