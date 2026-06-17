<?php

describe('Testes com datasets', function () {

    // coleção de dados
    $clients = [
        ['Matheus', 27],
        ['Carlos', 23],
        ['Ana', 21]
    ];

    // testes
    it('verifies if all clients have a name', function ($name, $age) {
        expect($name)->toBeString();
    })->with($clients);

    it('verifies if all clients have are adults', function ($name, $age) {
        expect($age)->toBeGreaterThanOrEqual(18);
    })->with($clients);
});
