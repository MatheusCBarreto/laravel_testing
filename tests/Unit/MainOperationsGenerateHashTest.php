<?php

use App\Services\MainOperations;

test('testar se é gerado uma hash com 32 caracteres', function () {

    $hash = MainOperations::generateHash();

    expect(strlen($hash))->toBe(32); // ou expect(strlen($hash))->toEqual(32);
});
