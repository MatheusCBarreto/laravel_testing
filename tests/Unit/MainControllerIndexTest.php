<?php

// indicar que querendo usar uma instância do MainController
use App\Http\Controllers\MainController;

//vamos indicar que queremos efetuar um teste ao método index do MainController
test('Estou a testar o MainController|index', function () {

    // vamos criar uma instância do MainController
    $mainController = new MainController();

    // vamos chamar o método index
    $result = $mainController->index();

    // vamos verificar se o resultado é uma string
    expect($result)->toBeString();

    // vamos verificar se o resultado é igual à "Olá, mundo"
    expect($result)->toEqual('Olá, mundo');
});
