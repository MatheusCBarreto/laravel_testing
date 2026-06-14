<?php

test('O meu segundo teste', function () {

    $name = "Matheus";
    expect($name)->toBeString();
});

// php artisan test --suitetest=Unit --filter=MeuSegundoTest
// php artisan test --suitetest=Feature --filter=MeuPrimeiroTest
// php artisan test
