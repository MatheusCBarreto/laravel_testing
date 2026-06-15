<?php

use App\Services\MainOperations;

test('testar se é gerado uma hash com tamanhos esperados de caracteres', function () {

    $hash = MainOperations::generateHash();

    expect(strlen(MainOperations::generateHash()))->toBe(32); // ou expect(strlen($hash))->toEqual(32);
    expect(strlen(MainOperations::generateHash(16)))->toBe(16);
    expect(strlen(MainOperations::generateHash(32)))->toBe(32);
    expect(strlen(MainOperations::generateHash(64)))->toBe(64);

});
