
<?php

require "../../../bootstrap.php";

if(isEmpty()){
    flash('msns', 'Preencha todos os compos');
    return redirect('?page=contato');
}

$validate = validate([
    'nome' => 's',
    'email' => 'e',
    'subject' => 's',
    'msn' => 's',
]);

dd($validate->nome);