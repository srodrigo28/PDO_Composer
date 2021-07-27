<?php
    require_once '../../classes/autoload.php';

    $modalidade = "Jiu-Jitsu";
    $mensalidade = '120.00';

    $newMod = new Modalidades();

    $newMod->dadosDoFormulario($modalidade, $mensalidade);
    $newMod->create();
